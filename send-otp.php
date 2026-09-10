<?php
session_start();
header('Content-Type: application/json');

error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawInput = file_get_contents('php://input');
    $input = json_decode($rawInput, true) ?: $_POST;

    $phone = isset($input['phone']) ? preg_replace('/\D/', '', $input['phone']) : '';

    if (strlen($phone) !== 10) {
        echo json_encode([
            'success' => false,
            'message' => 'कृपया 10-अंकों का वैध मोबाइल नंबर दर्ज करें'
        ]);
        exit;
    }

    // Generate 4-digit random OTP
    $otp = (string)rand(1000, 9999);

    // Save OTP details in PHP Session
    $_SESSION['otp_code'] = $otp;
    $_SESSION['otp_phone'] = $phone;
    $_SESSION['otp_expires'] = time() + 300; // 5 minute expiration

    // File backup storage for OTPs in otps.json
    $otpFile = __DIR__ . '/otps.json';
    $otpsData = file_exists($otpFile) ? (json_decode(file_get_contents($otpFile), true) ?: []) : [];
    $otpsData[$phone] = [
        'code' => $otp,
        'expires' => time() + 300
    ];
    file_put_contents($otpFile, json_encode($otpsData, JSON_PRETTY_PRINT));

    /*
    |--------------------------------------------------------------------------
    | SMS GATEWAY INTEGRATION (Fast2SMS / MSG91 / Twilio)
    |--------------------------------------------------------------------------
    | To send REAL SMS to the customer's phone number:
    |
    | 1. Fast2SMS Integration Example:
    |    $apiKey = "YOUR_FAST2SMS_API_KEY";
    |    $smsUrl = "https://www.fast2sms.com/dev/bulkV2?authorization={$apiKey}&route=otp&variables_values={$otp}&numbers={$phone}";
    |    @file_get_contents($smsUrl);
    |
    | 2. MSG91 Integration Example:
    |    $authKey = "YOUR_MSG91_AUTH_KEY";
    |    $templateId = "YOUR_TEMPLATE_ID";
    |    $smsUrl = "https://control.msg91.com/api/v5/otp?template_id={$templateId}&mobile=91{$phone}&otp={$otp}&authkey={$authKey}";
    |    @file_get_contents($smsUrl);
    |--------------------------------------------------------------------------
    */

    // Clean JSON response (no OTP code leaked to frontend)
    echo json_encode([
        'success' => true,
        'message' => 'OTP आपके मोबाइल नंबर पर सफलतापूर्वक भेजा गया'
    ]);
    exit;
}

echo json_encode([
    'success' => false,
    'message' => 'Invalid request method'
]);
