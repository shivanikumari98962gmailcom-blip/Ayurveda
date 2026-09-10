<!-- Hero Section -->
<section class="relative pt-4 sm:pt-6 pb-0 text-white overflow-hidden border-b border-zinc-800 bg-[#030508]">
    
    <!-- Background Texture -->
    <div class="absolute inset-0 pointer-events-none z-0" style="background: radial-gradient(circle at 50% 35%, rgba(12, 55, 75, 0.45) 0%, rgba(5, 20, 30, 0.25) 50%, #030508 100%), linear-gradient(180deg, #050a0f 0%, #020305 100%);"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-teal-900/10 via-black/40 to-black pointer-events-none z-0"></div>

    <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 relative z-10">
        
        <!-- Top Header Row: CALL US NOW Box Top Right -->
        <div class="flex justify-end mb-4 sm:mb-6">
            <a href="tel:9925015492" class="flex items-center space-x-0 border border-white rounded-lg overflow-hidden bg-black shadow-xl hover:opacity-95 transition-opacity">
                <div class="bg-[#ff0000] text-white font-black text-xs sm:text-sm px-3.5 sm:px-4 py-2 uppercase font-sans tracking-wider flex items-center space-x-1.5">
                    <i data-lucide="phone-call" class="w-4 h-4"></i>
                    <span>CALL US NOW</span>
                </div>
                <div class="bg-black text-[#ffcc00] font-black text-base sm:text-2xl px-3.5 sm:px-4 py-1.5 font-mono tracking-wider">
                    9925015492
                </div>
            </a>
        </div>

        <!-- Main Title Block -->
        <div class="text-left mb-4 sm:mb-6">
            <h1 class="text-4xl sm:text-7xl lg:text-8xl font-black tracking-tight leading-none uppercase font-sans drop-shadow-md">
                <span class="text-[#ff0000]">HORSEFIRE</span>
                <span class="text-[#ffcc00]">TABLET</span>
            </h1>

            <div class="inline-block mt-2 border-t border-b border-[#ffcc00] py-1 max-w-full">
                <p class="text-[#ffcc00] font-bold italic text-sm sm:text-xl lg:text-2xl font-sans tracking-wide">
                    Multi-Herb Supplement For Male Wellness
                </p>
            </div>
        </div>

        <!-- 3 Column Wide Hero Composition -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start relative">
            
            <!-- Left Column: 4 Points + Product Bottle & Banner Image -->
            <div class="lg:col-span-5 space-y-5 z-10 pb-4">
                
                <!-- 4 Green Checkmark Points -->
                <div class="space-y-3">
                    <?php 
                    $points = [
                        "टेस्टोस्टेरोन बढ़ाने में सपोर्ट करे",
                        "थकान कम करने में उपयोगी",
                        "शक्ति और स्टैमिना में सपोर्ट",
                        "पुरुष ऊर्जा बढ़ाने में मदद करे"
                    ];
                    foreach ($points as $point): ?>
                        <div class="flex items-center space-x-3 text-left">
                            <div class="w-6 h-6 rounded-full bg-[#00bd59] flex items-center justify-center flex-shrink-0 shadow-md">
                                <i data-lucide="check" class="w-4 h-4 text-white"></i>
                            </div>
                            <span class="text-sm sm:text-lg lg:text-xl font-extrabold text-white font-hindi">
                                <?php echo $point; ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Product Bottle Image -->
                <div onclick="scrollToForm()" class="pt-2 flex justify-start cursor-pointer hover:opacity-95 transition-opacity">
                    <img 
                        src="/home_images/hero-bottle-banner.png" 
                        alt="Horse Fire Bottle Testosterone Support Save 10%" 
                        className="w-full max-w-[520px] h-auto object-contain drop-shadow-[0_15px_30px_rgba(0,0,0,0.9)]"
                        onerror="this.src='/home_images/bottlesave.webp'"
                    />
                </div>

            </div>

            <!-- Center Column: Large Couple Image -->
            <div class="lg:col-span-3 flex justify-center relative z-0 mt-4 lg:-mt-48">
                <div class="relative">
                    <img 
                        src="/home_images/cuple.png" 
                        alt="Horse Fire Couple" 
                        class="h-[360px] sm:h-[540px] lg:h-[640px] xl:h-[700px] w-auto object-contain drop-shadow-2xl scale-105 sm:scale-110"
                        onerror="this.src='/home_images/couple.png'"
                    />
                    <div class="absolute inset-x-0 bottom-0 h-24 sm:h-28 bg-gradient-to-t from-[#030508] via-[#030508]/80 to-transparent pointer-events-none"></div>
                </div>
            </div>

            <!-- Right Column: Order Form Card + Trust Seals -->
            <div class="lg:col-span-4 space-y-4 z-10 pb-4 mt-6 lg:-mt-44">
                
                <!-- 3 Large Gold Seals -->
                <div class="flex items-center justify-center space-x-3 sm:space-x-4 pb-2">
                    <div class="w-14 h-14 sm:w-20 sm:h-20 rounded-full border-2 border-[#ffcc00] bg-black p-1 sm:p-1.5 flex flex-col items-center justify-center text-[7px] sm:text-[8px] font-bold text-[#ffcc00] uppercase leading-none shadow-[0_0_15px_rgba(255,204,0,0.5)] text-center">
                        <span class="text-[6px] sm:text-[7px] text-gray-200">100%</span>
                        <span class="text-[#ffcc00] font-black text-[8px] sm:text-[10px] my-0.5">SATISFACTION</span>
                        <span class="text-[6px] sm:text-[7px] text-gray-200">GUARANTEED</span>
                    </div>
                    <div class="w-14 h-14 sm:w-20 sm:h-20 rounded-full border-2 border-[#ffcc00] bg-black p-1 sm:p-1.5 flex flex-col items-center justify-center text-[7px] sm:text-[8px] font-bold text-[#ffcc00] uppercase leading-none shadow-[0_0_15px_rgba(255,204,0,0.5)] text-center">
                        <span class="text-[6px] sm:text-[7px] text-gray-200">The</span>
                        <span class="text-[#ffcc00] font-black text-[9px] sm:text-[11px] my-0.5">BEST</span>
                        <span class="text-[6px] sm:text-[7px] text-gray-200">Choice</span>
                    </div>
                    <div class="w-14 h-14 sm:w-20 sm:h-20 rounded-full border-2 border-[#ffcc00] bg-black p-1 sm:p-1.5 flex flex-col items-center justify-center text-[7px] sm:text-[8px] font-bold text-[#ffcc00] uppercase leading-none shadow-[0_0_15px_rgba(255,204,0,0.5)] text-center">
                        <span class="text-[6px] sm:text-[7px] text-gray-200">QUALITY</span>
                        <span class="text-[#ffcc00] font-black text-[9px] sm:text-[11px] my-0.5">TOP</span>
                        <span class="text-[6px] sm:text-[7px] text-gray-200">GUARANTEED</span>
                    </div>
                </div>

                <!-- PHP Order Form Card Component -->
                <?php include 'order-form.php'; ?>

            </div>

        </div>

    </div>

    <!-- Bottom Slanted Security Bar -->
    <div class="mt-6 border-t border-zinc-800 bg-[#020305] pt-4 pb-4">
        <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 grid grid-cols-2 md:grid-cols-4 gap-3 text-center">
            <div class="relative border-t-2 border-r-2 border-[#ffcc00] bg-zinc-950 p-2.5 sm:p-3 transform -skew-x-12 text-center shadow-lg">
                <span class="text-[10px] sm:text-base font-black text-[#ffcc00] uppercase tracking-wider block font-sans">100% SATISFACTION</span>
                <span class="text-[8px] sm:text-xs text-white font-sans block mt-0.5">YOU'RE GOING TO LOVE THIS</span>
            </div>
            <div class="relative border-t-2 border-r-2 border-[#ffcc00] bg-zinc-950 p-2.5 sm:p-3 transform -skew-x-12 text-center shadow-lg">
                <span class="text-[10px] sm:text-base font-black text-[#ffcc00] uppercase tracking-wider block font-sans">CONVENIENT TABLET</span>
                <span class="text-[8px] sm:text-xs text-[#ffcc00] font-sans block mt-0.5">SIMPLE DIRECTION TO FOLLOW</span>
            </div>
            <div class="relative border-t-2 border-r-2 border-[#ffcc00] bg-zinc-950 p-2.5 sm:p-3 transform -skew-x-12 text-center shadow-lg">
                <span class="text-[10px] sm:text-base font-black text-[#ffcc00] uppercase tracking-wider block font-sans">PURE AYURVEDUC</span>
                <span class="text-[8px] sm:text-xs text-[#ffcc00] font-sans block mt-0.5">MADE WITH NATURAL HERBS</span>
            </div>
            <div class="bg-[#ffcc00] p-2.5 sm:p-3 rounded-xl flex items-center justify-center space-x-2 shadow-[0_0_20px_rgba(255,204,0,0.6)] border-2 border-yellow-300">
                <img src="/home_images/secure1.png" alt="McAfee SECURE & RapidSSL" class="h-7 sm:h-10 w-auto object-contain" />
            </div>
        </div>
    </div>

</section>
