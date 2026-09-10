<!-- Discount Popup Modal -->
<div id="discount-popup" class="hidden fixed inset-0 z-50 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-zinc-950 border-2 border-[#ffcc00] p-6 sm:p-8 rounded-2xl max-w-md w-full relative shadow-[0_0_50px_rgba(255,204,0,0.3)] text-center space-y-4">
        
        <button 
            onclick="closeDiscountModal()"
            class="absolute top-3 right-3 text-gray-400 hover:text-white p-1"
        >
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <div class="w-16 h-16 rounded-full bg-[#ffcc00]/10 border border-[#ffcc00]/40 flex items-center justify-center mx-auto text-[#ffcc00]">
            <i data-lucide="gift" class="w-8 h-8"></i>
        </div>

        <span class="bg-[#ff0000] text-white font-black text-xs px-3 py-1 rounded-full uppercase tracking-wider font-sans inline-block">
            LIMITED TIME OFFER
        </span>

        <h3 class="text-2xl sm:text-3xl font-black text-[#ffcc00] font-hindi">
            बधाई हो! आप 10% अतिरिक्त छूट के पात्र हैं!
        </h3>

        <p class="text-sm text-gray-300 font-hindi leading-relaxed">
            अभी ऑनलाइन ऑर्डर फॉर्म भरकर अपना डिस्काउंट क्लेम करें और पाएं 100% गोपनीय फ्री होम डिलीवरी।
        </p>

        <button
            onclick="claimDiscount()"
            class="w-full bg-gradient-to-r from-amber-400 via-yellow-400 to-amber-500 hover:from-yellow-400 hover:to-amber-400 text-black font-black text-lg py-3.5 rounded-xl uppercase tracking-wider shadow-xl font-sans cursor-pointer"
        >
            छूट क्लेम करें & ऑर्डर करें
        </button>

    </div>
</div>

<script>
    setTimeout(function() {
        if (!localStorage.getItem('discount_popup_shown')) {
            document.getElementById('discount-popup').classList.remove('hidden');
        }
    }, 4000);

    function closeDiscountModal() {
        document.getElementById('discount-popup').classList.add('hidden');
        localStorage.setItem('discount_popup_shown', 'true');
    }

    function claimDiscount() {
        closeDiscountModal();
        scrollToForm();
    }
</script>
