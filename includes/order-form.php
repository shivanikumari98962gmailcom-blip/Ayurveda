<!-- PHP Order Form Card Component -->
<div id="order-form" class="w-full max-w-[440px] mx-auto">
    <div class="bg-black p-5 sm:p-6 rounded-2xl border-2 border-[#ffcc00] shadow-2xl relative text-left">
        
        <!-- Order Form State Container -->
        <div id="form-content">
            <form id="ayushveda-order-form" onsubmit="handleFormSubmit(event)" class="space-y-4">
                
                <!-- Field 1: Full Name Input -->
                <div>
                    <label class="block text-sm sm:text-base font-bold text-white mb-1 font-sans">
                        पूरा नाम :
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="form-name"
                        required
                        placeholder=""
                        class="w-full bg-[#18191c] border border-gray-400 rounded-lg p-3 text-white font-sans text-sm sm:text-base focus:outline-none focus:border-[#ffcc00]"
                    />
                    <p id="name-error" class="hidden text-red-400 text-xs mt-1 font-hindi flex items-center space-x-1">
                        <i data-lucide="alert-circle" class="w-3.5 h-3.5"></i>
                        <span>कृपया पूरा नाम दर्ज करें</span>
                    </p>
                </div>

                <!-- Field 2: Phone Number Input (Strict 10 Digits) -->
                <div>
                    <label class="block text-sm sm:text-base font-bold text-white mb-1 font-sans">
                        फ़ोन नंबर:
                    </label>
                    <input
                        type="tel"
                        name="phone"
                        id="form-phone"
                        maxlength="10"
                        required
                        placeholder=""
                        oninput="this.value = this.value.replace(/\D/g, '')"
                        class="w-full bg-[#18191c] border border-gray-400 rounded-lg p-3 text-white font-sans text-sm sm:text-base focus:outline-none focus:border-[#ffcc00]"
                    />
                    <p id="phone-error" class="hidden text-red-400 text-xs mt-1 font-hindi flex items-center space-x-1">
                        <i data-lucide="alert-circle" class="w-3.5 h-3.5"></i>
                        <span>कृपया 10-अंकों का सही मोबाइल नंबर दर्ज करें</span>
                    </p>
                </div>

                <!-- Field 3: Full Address Input -->
                <div>
                    <label class="block text-sm sm:text-base font-bold text-white mb-1 font-sans">
                        पूरा पता :
                    </label>
                    <input
                        type="text"
                        name="address"
                        id="form-address"
                        required
                        placeholder=""
                        class="w-full bg-[#18191c] border border-gray-400 rounded-lg p-3 text-white font-sans text-sm sm:text-base focus:outline-none focus:border-[#ffcc00]"
                    />
                    <p id="address-error" class="hidden text-red-400 text-xs mt-1 font-hindi flex items-center space-x-1">
                        <i data-lucide="alert-circle" class="w-3.5 h-3.5"></i>
                        <span>कृपया पूरा पता दर्ज करें</span>
                    </p>
                </div>

                <!-- Hidden Product Field -->
                <input type="hidden" name="product" value="Horse Fire Tablets - ₹1199 (60 Tablets)">

                <!-- Submit Button: Bright Red "ऑर्डर करे" -->
                <div class="pt-2">
                    <button
                        type="submit"
                        id="submit-btn"
                        class="w-full bg-[#ff3333] hover:bg-[#ff1a1a] border border-[#ffcc00] text-white font-black text-xl sm:text-2xl py-3.5 px-6 rounded-xl shadow-lg transition-all duration-200 transform hover:scale-[1.01] active:scale-[0.99] flex items-center justify-center space-x-2 font-hindi cursor-pointer"
                    >
                        <span>ऑर्डर करे</span>
                    </button>
                </div>

                <!-- Factory Direct Note Subtext -->
                <p class="text-gray-400 text-[11px] sm:text-xs text-center font-hindi pt-1 leading-tight">
                    * आपका डेटा सीधे कारखाने में भेजा जाता है। उसके अलावा किसी के पास पहुंच नहीं है वे।
                </p>

                <!-- Badges Section below subtext -->
                <div class="pt-2 space-y-3">
                    <div class="flex items-center justify-center space-x-3">
                        <div class="w-12 h-12 rounded-full border border-amber-500 bg-zinc-950 p-1 flex flex-col items-center justify-center text-[6px] font-bold text-amber-300 uppercase leading-none text-center shadow">
                            <span class="text-[5px] text-amber-200">100%</span>
                            <span class="text-[#ffcc00] font-black text-[7px] my-0.5">MONEY BACK</span>
                            <span class="text-[5px]">GUARANTEE</span>
                        </div>
                        <div class="w-12 h-12 rounded-full border border-amber-500 bg-zinc-950 p-1 flex flex-col items-center justify-center text-[6px] font-bold text-amber-300 uppercase leading-none text-center shadow">
                            <span class="text-[5px] text-amber-200">FREE</span>
                            <span class="text-[#ffcc00] font-black text-[7px] my-0.5">SHIPPING</span>
                        </div>
                        <div class="w-12 h-12 rounded-full border border-amber-500 bg-zinc-950 p-1 flex flex-col items-center justify-center text-[6px] font-bold text-amber-300 uppercase leading-none text-center shadow">
                            <span class="text-[5px] text-amber-200">100%</span>
                            <span class="text-[#ffcc00] font-black text-[7px] my-0.5">HIGH QUALITY</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center justify-center gap-1.5 pt-1 opacity-90">
                        <span class="bg-zinc-900 border border-zinc-700 text-white font-extrabold text-[10px] px-2 py-1 rounded">VISA</span>
                        <span class="bg-zinc-900 border border-zinc-700 text-white font-extrabold text-[10px] px-2 py-1 rounded">MasterCard</span>
                        <span class="bg-zinc-900 border border-zinc-700 text-cyan-400 font-extrabold text-[10px] px-2 py-1 rounded">Paytm</span>
                        <span class="bg-zinc-900 border border-zinc-700 text-purple-400 font-extrabold text-[10px] px-2 py-1 rounded">PhonePe</span>
                        <span class="bg-zinc-900 border border-zinc-700 text-blue-400 font-extrabold text-[10px] px-2 py-1 rounded">PayPal</span>
                    </div>

                    <div class="flex items-center justify-center space-x-1.5 text-emerald-400 text-xs font-bold font-sans">
                        <i data-lucide="shield-check" class="w-4 h-4 text-emerald-400"></i>
                        <span>Your payment is secure</span>
                    </div>
                </div>

            </form>
        </div>

        <!-- Order Confirmation Success Page View -->
        <div id="order-success" class="hidden bg-zinc-950 border border-emerald-500 p-6 rounded-xl text-center space-y-4">
            <i data-lucide="check-circle-2" class="w-14 h-14 text-emerald-400 mx-auto"></i>
            <h4 class="text-2xl font-black text-emerald-400 font-hindi">
                🎉 ऑर्डर सफलता के साथ दर्ज हुआ!
            </h4>
            
            <div id="placed-order-details" class="bg-black border border-zinc-800 p-3 rounded-lg text-left text-xs font-sans space-y-1.5 text-gray-300">
            </div>

            <p class="text-xs text-gray-300 font-hindi">
                आपकी 100% गोपनीय डिलीवरी 2-4 कार्य दिवसों में पहुंचा दी जाएगी। हमारी टीम आपसे पुष्टि हेतु संपर्क करेगी।
            </p>
            
            <button
                onclick="resetForm()"
                class="w-full py-3 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-xl text-sm uppercase tracking-wider font-sans shadow-lg cursor-pointer"
            >
                एक और ऑर्डर करें
            </button>
        </div>

    </div>
</div>
