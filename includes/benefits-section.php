<!-- Benefits Section -->
<section class="py-14 sm:py-20 bg-black text-white border-b border-zinc-800 relative overflow-hidden">
    
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-zinc-900/30 via-black to-black pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center max-w-5xl mx-auto">
            
            <!-- Left Column: Title + 6 Bullet Points -->
            <div class="lg:col-span-7 space-y-6 text-left">
                
                <h2 class="text-3xl sm:text-5xl font-black font-hindi tracking-tight">
                    <span class="text-[#ff4500]">HorseFire Tablets</span>
                    <span class="text-[#ffcc00]"> से मिलने वाले लाभ ।</span>
                </h2>

                <div class="space-y-3.5 pt-2">
                    <?php 
                    $benefits = [
                        "सबसे पहले यह अंदरूनी रिकवरी को सपोर्ट करता है।",
                        "टेस्टोस्टेरोन बूस्ट करने में सपोर्ट करता है।",
                        "सप्तधातुओं को सही और संतुलित रखने में मदद करता है।",
                        "दैनिक थकान और तनाव मैनेज करने में मदद करता है।",
                        "स्ट्रेंथ, स्टैमिना और पुरुष ऊर्जा को बूस्ट करने में मदद करता है।",
                        "सम्पूर्ण पुरुष स्वास्थ्य को बढ़ावा देने में मदद करता है।"
                    ];
                    foreach ($benefits as $b): ?>
                        <div class="flex items-start space-x-3 text-gray-100 font-hindi text-base sm:text-xl leading-relaxed">
                            <span class="text-white text-xl sm:text-2xl font-bold leading-none mt-0.5">•</span>
                            <span><?php echo $b; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <!-- Right Column: Grayscale Couple Image -->
            <div class="lg:col-span-5 flex justify-center relative">
                <div class="relative overflow-hidden rounded-b-xl max-h-[500px]">
                    <img 
                        src="/home_images/cuple.png" 
                        alt="Horse Fire Benefits Couple" 
                        class="h-[340px] sm:h-[460px] lg:h-[500px] w-auto object-cover object-top grayscale drop-shadow-2xl"
                        onerror="this.src='/home_images/couple.png'"
                    />
                    <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-black via-black/90 to-transparent pointer-events-none"></div>
                </div>
            </div>

        </div>

    </div>
</section>
