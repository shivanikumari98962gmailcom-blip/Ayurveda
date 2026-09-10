<!-- Footer Component -->
<footer class="bg-black text-gray-400 py-8 px-4 border-t border-zinc-900 text-center text-xs font-sans">
    <div class="max-w-5xl mx-auto space-y-4">
        
        <div class="flex items-center justify-center space-x-2 text-white font-bold text-sm">
            <span class="text-[#ff0000]">HORSEFIRE</span>
            <span class="text-[#ffcc00]">TABLETS</span>
        </div>

        <p class="font-hindi text-gray-400 max-w-3xl mx-auto leading-relaxed">
            डिस्क्लेमर: यह उत्पाद एक आयुर्वेदिक आहार पूरक है। परिणाम व्यक्ति के शारीरिक स्वास्थ्य और जीवनशैली के आधार पर भिन्न हो सकते हैं। कृपया किसी भी नए सप्लीमेंट का उपयोग करने से पहले योग्य स्वास्थ्य विशेषज्ञ से परामर्श लें।
        </p>

        <div class="pt-2 border-t border-zinc-900 flex flex-col sm:flex-row items-center justify-between text-[11px] text-gray-500 gap-2">
            <span>© <?php echo date('Y'); ?> Ayushveda HorseFire. All Rights Reserved.</span>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-amber-400 transition-colors">Privacy Policy</a>
                <span>•</span>
                <a href="#" class="hover:text-amber-400 transition-colors">Terms of Service</a>
                <span>•</span>
                <a href="#" class="hover:text-amber-400 transition-colors">Contact Us</a>
            </div>
        </div>

    </div>
</footer>

<!-- Global JavaScript for Direct Order Form Submission, Strict 10-Digit Validation, Scroll, and Icons -->
<script>
    // Initialize Lucide Icons
    lucide.createIcons();

    // Scroll to Order Form helper
    function scrollToForm() {
        const el = document.getElementById('order-form');
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'center' });
            const input = document.getElementById('form-name');
            if (input) setTimeout(() => input.focus(), 500);
        }
    }

    // Direct Form Submission Handler (Strict 10-Digit Validation & Direct Confirmation)
    function handleFormSubmit(e) {
        e.preventDefault();
        
        const name = document.getElementById('form-name').value.trim();
        const phone = document.getElementById('form-phone').value.trim();
        const address = document.getElementById('form-address').value.trim();
        const product = document.querySelector('input[name="product"]').value;

        // Reset error messages
        document.getElementById('name-error').classList.add('hidden');
        document.getElementById('phone-error').classList.add('hidden');
        document.getElementById('address-error').classList.add('hidden');

        let isValid = true;

        if (!name) {
            document.getElementById('name-error').classList.remove('hidden');
            isValid = false;
        }

        // Strict 10-Digit Validation Check
        if (!phone || phone.length !== 10) {
            document.getElementById('phone-error').classList.remove('hidden');
            isValid = false;
        }

        if (!address) {
            document.getElementById('address-error').classList.remove('hidden');
            isValid = false;
        }

        if (!isValid) return;

        const submitBtn = document.getElementById('submit-btn');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span>ऑर्डर दर्ज हो रहा है...</span>';

        const payload = { name, phone, address, product };

        // Submit directly to order-handler.php (Real-time Google Sheet & orders.json save)
        fetch('order-handler.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
        })
        .then(res => res.json())
        .then(data => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span>ऑर्डर करे</span>';

            if (data.success) {
                // Hide Form Container & Display Confirmation Success View
                document.getElementById('form-content').classList.add('hidden');
                const successBox = document.getElementById('order-success');
                
                document.getElementById('placed-order-details').innerHTML = `
                    <p class="text-amber-400 font-bold">ऑर्डर ID: ${data.orderId || 'HF-100234'}</p>
                    <p><span class="text-gray-400">नाम:</span> ${name}</p>
                    <p><span class="text-gray-400">उत्पाद:</span> ${product}</p>
                    <p><span class="text-gray-400">फ़ोन:</span> +91 ${phone}</p>
                    <p><span class="text-gray-400">पता:</span> ${address}</p>
                `;
                
                successBox.classList.remove('hidden');
            } else {
                alert(data.message || 'ऑर्डर दर्ज करने में समस्या आई। कृपया मोबाइल नंबर जांचें।');
            }
        })
        .catch(err => {
            console.error(err);
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span>ऑर्डर करे</span>';
            alert('सर्वर से संपर्क करने में समस्या आई।');
        });
    }

    function resetForm() {
        document.getElementById('ayushveda-order-form').reset();
        document.getElementById('order-success').classList.add('hidden');
        document.getElementById('form-content').classList.remove('hidden');
    }
</script>

</body>
</html>
