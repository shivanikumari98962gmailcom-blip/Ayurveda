/**
 * ==============================================================================
 * GOOGLE APPS SCRIPT FOR AUTOMATIC GOOGLE SHEETS ORDER SYNC
 * ==============================================================================
 * 
 * STEP-BY-STEP SETUP GUIDE (Takes only 2 minutes):
 * 
 * 1. Open Google Sheets (https://sheets.google.com) and create a new Spreadsheet.
 * 2. Set Row 1 Headers:
 *    Col A: Order ID  | Col B: Date & Time | Col C: Name | Col D: Phone | Col E: Address | Col F: Product
 * 3. In the top menu of Google Sheets, click: Extensions -> Apps Script
 * 4. Delete any code in the editor and paste the Google Apps Script code below:
 */

function doPost(e) {
  try {
    var sheet = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
    var data = JSON.parse(e.postData.contents);
    
    // Append a new row to your Google Sheet
    sheet.appendRow([
      data.orderId || '',
      data.date || new Date().toLocaleString(),
      data.name || '',
      data.phone || '',
      data.address || '',
      data.product || ''
    ]);
    
    return ContentService
      .createTextOutput(JSON.stringify({ "result": "success" }))
      .setMimeType(ContentService.MimeType.JSON);
  } catch (error) {
    return ContentService
      .createTextOutput(JSON.stringify({ "result": "error", "error": error.toString() }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}

/**
 * 5. Click the "Deploy" button at the top right -> Select "New deployment".
 * 6. Under "Select type", click the gear icon ⚙️ -> Select "Web app".
 * 7. Set configuration:
 *    - Description: Ayushveda Order Sync Webhook
 *    - Execute as: Me (your email)
 *    - Who has access: Anyone  <-- (CRITICAL STEP)
 * 8. Click "Deploy" -> Authorize access if prompted.
 * 9. Copy the generated "Web App URL" (e.g. https://script.google.com/macros/s/.../exec).
 * 10. Open order-handler.php on line 111 and paste your Web App URL into:
 *     $googleSheetWebhookUrl = "https://script.google.com/macros/s/.../exec";
 */
