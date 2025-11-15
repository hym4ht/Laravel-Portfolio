<x-layout.app>
    <style>
        /*
         * Pastikan kode CSS untuk keyframes 'fadeInUp' tetap ada di sini 
         * atau di file CSS utama Anda.
         */

        /* --- Animasi Muncul (Fade In/Slide Up) --- */
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            /* Pastikan durasi dan ease-out sesuai keinginan */
            animation: fadeInUp 1s ease-out forwards; 
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    
  <div class="max-w-6xl mx-auto p-4 md:p-8 lg:p-12 mt-20">
   
   <div 
     id="lanyard-card-container"
     class="absolute top-0 w-1/2 h-screen z-0 left-0"
   ></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">

        <div>
        </div>
        
        <div class="order-2 md:order-2 space-y-6">
            
            <div class="text-white"> 
                <h1 
                    class="text-4xl font-extrabold mb-3 fade-in-up" 
                    style="animation-delay: 0.2s;"
                >
                    I'm a <span class="text-blue-400">Product designer</span>, an <span class="text-blue-400">Architect</span> and a <span class="text-blue-400">3D motion designer</span>!
                    </h1>
                
                <p 
                    class="text-lg mt-4 text-gray-300 fade-in-up" 
                    style="animation-delay: 0.5s;"
                >
                    With over 4 years of design experience, I bridge **creativity** with **systems thinking** to craft experiences.
                    </p>
            </div>
            
            <div class="pt-4 text-white"> 
                <h3 
                    class="text-2xl font-semibold mb-3 fade-in-up"
                    style="animation-delay: 0.8s;"
                >
                    I got the <span class="italic">"Ar."</span> title in front of my name !!!
                </h3>
                
                <div 
                    class="text-base space-y-3 text-gray-300 fade-in-up"
                    style="animation-delay: 1.1s;"
                >
                    <span class="block">I graduated with a bachelor's in architecture.</span>
                    <span class="block">Drawn to materials, textures, & models, I carry that same curiosity into design today, translating **spatial thinking** into experiences within digital platforms.</span>
                </div>
            </div>

        </div>
        
    </div>
</div>
</x-layout.app>