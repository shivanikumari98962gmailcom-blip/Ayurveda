<!-- Reviews Horizontal Scroller Section -->
<section class="py-14 sm:py-20 bg-black text-white border-b border-zinc-800 relative overflow-hidden">
    
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-amber-950/10 via-black to-black pointer-events-none"></div>

    <div class="max-w-[1500px] mx-auto px-2 sm:px-4 relative z-10 text-center">
        
        <h2 class="text-4xl sm:text-6xl font-black text-[#ffcc00] tracking-widest uppercase font-sans mb-10 drop-shadow">
            Reviews
        </h2>

        <div class="relative max-w-6xl mx-auto">
            
            <!-- Left Arrow Button -->
            <button
                onclick="scrollReviewsLeft()"
                class="absolute left-1 sm:left-4 top-1/2 -translate-y-1/2 z-30 w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-zinc-800/90 text-white hover:bg-[#ffcc00] hover:text-black flex items-center justify-center shadow-xl transition-all cursor-pointer border border-zinc-600"
                aria-label="Scroll Left"
            >
                <i data-lucide="chevron-left" class="w-5 h-5"></i>
            </button>

            <!-- Continuous Horizontal Scroll Track -->
            <div 
                id="reviews-track"
                class="flex flex-nowrap overflow-x-auto scrollbar-none scroll-smooth space-x-4 sm:space-x-6 py-4 px-8 snap-x snap-mandatory"
            >
                <?php 
                $reviews = [
                    [
                        "avatar" => "/home_images/11.jpg",
                        "name" => "Anil Kush",
                        "text" => "Abhi tak mai kai product use kar chuka hu...ye sabse abaa hai. mere vichar se khaskar mere liye ye ayurved ka best formulation hai. Iska kuchh hi din use krne ke bad meri stamina aur timing increase ho gyi. Horse Fire Tablet ne meri marital life ko khushahal bna diya."
                    ],
                    [
                        "avatar" => "/home_images/22.jpg",
                        "name" => "Hemraj Prasad",
                        "text" => "सच में ये एक बढ़िया सप्लीमेंट हे पुरुषों के लिए! जब से इसे ले रहा हूँ काफी एक्टिव और एनर्जेटिक महसूस होता है। गेम भी सुधर गया हे अब बिना थके ज्यादा देर तक खेल पाता हूँ।"
                    ],
                    [
                        "avatar" => "/home_images/33.jpg",
                        "name" => "Prakash Yadav",
                        "text" => "Pure, classic, and extraordinary supplement for male wellness, this really works... you should buy without any doubt."
                    ],
                    [
                        "avatar" => "/home_images/44.jpg",
                        "name" => "Rakesh Sharma",
                        "text" => "सुरक्षित डिलीवरी और बेहतरीन परिणाम! हॉर्स फायर टैबलेट्स ने मेरी शक्ति और स्टैमिना में गजब का सुधार किया है। 100% संतुष्ट हूँ।"
                    ],
                    [
                        "avatar" => "/home_images/55.jpg",
                        "name" => "Vikram Singh",
                        "text" => "100% Ayurvedic and zero side effects. Natural herbs ka result bahut achha hai. Timing aur energy dono me bohot improvement mila hai."
                    ],
                    [
                        "avatar" => "/home_images/66.jpg",
                        "name" => "Deepak Verma",
                        "text" => "Puri tarah se satisfied hu. Confidential packaging me deliver hua. Overall male health and stamina ke liye best product hai."
                    ]
                ];
                foreach ($reviews as $rev): ?>
                    <div class="flex-none w-[270px] sm:w-[310px] lg:w-[330px] border border-[#ffcc00] rounded-xl bg-black p-5 sm:p-6 text-center shadow-2xl flex flex-col items-center justify-start space-y-3 min-h-[340px] snap-center">
                        <div class="w-20 h-20 rounded-full border border-[#ffcc00] overflow-hidden bg-zinc-900 shadow-md flex-shrink-0">
                            <img 
                                src="<?php echo $rev['avatar']; ?>" 
                                alt="<?php echo $rev['name']; ?>" 
                                class="w-full h-full object-cover"
                                onerror="this.src='/home_images/77.jpg'"
                            />
                        </div>
                        <h3 class="text-[#ffcc00] text-lg sm:text-xl font-extrabold font-sans mt-1">
                            <?php echo $rev['name']; ?>
                        </h3>
                        <p class="text-gray-200 text-xs sm:text-sm font-hindi leading-relaxed text-center font-normal">
                            <?php echo $rev['text']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Right Arrow Button -->
            <button
                onclick="scrollReviewsRight()"
                class="absolute right-1 sm:right-4 top-1/2 -translate-y-1/2 z-30 w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-zinc-800/90 text-white hover:bg-[#ffcc00] hover:text-black flex items-center justify-center shadow-xl transition-all cursor-pointer border border-zinc-600"
                aria-label="Scroll Right"
            >
                <i data-lucide="chevron-right" class="w-5 h-5"></i>
            </button>

        </div>

    </div>
</section>

<script>
function scrollReviewsLeft() {
    document.getElementById('reviews-track').scrollBy({ left: -320, behavior: 'smooth' });
}
function scrollReviewsRight() {
    document.getElementById('reviews-track').scrollBy({ left: 320, behavior: 'smooth' });
}
</script>
