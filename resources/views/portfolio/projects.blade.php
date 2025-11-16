<x-layout.app>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        /* CSS untuk teks Gallery yang sangat besar */
        .big-gallery-text {
            
            
            font-size: 10vw; /* Ukuran yang responsif dan sangat besar */
            font-weight: 900;
            color: #e5e7eb; /* Warna abu-abu terang */
            opacity: 0.7;
            
        }
    </style>

    <main class="flex min-h-screen p-8 gap-8">
    <div class="flex-shrink-0 w-1/3 pr-4">
    <h1 class="big-gallery-text text-left">Gallery</h1>
   <div id="new-container" class="mt-10 p-4 shadow-xl rounded-xl dark:bg-gray-800                    │ 
│    dark:border-gray-700">
        <div id="projects-slider-root"></div>
    </div>
</div>
        
        <div class="flex-grow w-2/3">
            <h1 class="text-3xl font-semibold text-center mx-auto">Our Latest Creations</h1>
            <p class="text-sm text-slate-500 text-center mt-2 max-w-lg mx-auto">A visual collection of our most recent works - each piece crafted with intention, emotion, and style.</p>
            
         
            <div id="kumpulan gambar" class="flex items-center gap-2 h-[400px] w-full max-w-4xl mt-10 mx-auto">
                <div class="relative group flex-grow transition-all w-56 rounded-lg overflow-hidden h-[400px] duration-500 hover:w-full">
                    <img class="h-full w-full object-cover object-center"
                        src="{{ asset('images/projects/poster1.jpg') }}"
                        alt="image">
                </div>
                <div class="relative group flex-grow transition-all w-56 rounded-lg overflow-hidden h-[400px] duration-500 hover:w-full">
                    <img class="h-full w-full object-cover object-center"
                        src="{{ asset('images/projects/poster2.jpg') }}"
                        alt="image">
                </div>
                <div class="relative group flex-grow transition-all w-56 rounded-lg overflow-hidden h-[400px] duration-500 hover:w-full">
                    <img class="h-full w-full object-cover object-center"
                        src="{{ asset('images/projects/poster3.jpg') }}"
                        alt="image">
                </div>
                <div class="relative group flex-grow transition-all w-56 rounded-lg overflow-hidden h-[400px] duration-500 hover:w-full">
                    <img class="h-full w-full object-cover object-center"
                        src="{{ asset('images/projects/poster4.jpeg') }}"
                        alt="image">
                </div>
                <div class="relative group flex-grow transition-all w-56 rounded-lg overflow-hidden h-[400px] duration-500 hover:w-full">
                    <img class="h-full w-full object-cover object-center"
                        src="{{ asset('images/projects/poster5.jpeg') }}"
                        alt="image">
                </div>
                <div class="relative group flex-grow transition-all w-56 rounded-lg overflow-hidden h-[400px] duration-500 hover:w-full">
                    <img class="h-full w-full object-cover object-center"
                        src="{{ asset('images/projects/poster6.jpg') }}"
                        alt="image">
                </div>
            </div>
            <div class="mt-12 text-center">
            <h1 class="big-gallery-text text-center text-[10vw] opacity-100">Projects</h1>
        </div>
        </div>
    </main>

    <div id="bentogrid" class="py-56 relative z-0">
    <div class="mx-auto px-6 max-w-6xl text-gray-500">
        <div class="relative">
            <div class="relative z-10 grid gap-3 grid-cols-6">
                
                {{-- Gambar 1: Kustomisasi (Tanpa BG Putih, Tanpa Padding) --}}
                <div class="col-span-full lg:col-span-2 overflow-hidden relative rounded-xl 
                            transition duration-300 ease-in-out hover:scale-[1.02] hover:shadow-2xl group h-64">
                    <div class="h-full w-full relative"> 
                        <img class="h-full w-full object-cover rounded-xl" src="{{ asset('images/projects/dash2.png') }}" alt="Visual Kustomisasi">
                    </div>
                </div>

                {{-- Gambar 2: Keamanan (Tanpa BG Putih, Tanpa Padding) --}}
                <div class="col-span-full sm:col-span-3 lg:col-span-2 overflow-hidden relative rounded-xl 
                            transition duration-300 ease-in-out hover:scale-[1.02] hover:shadow-2xl group h-64">
                    <div class="h-full w-full relative"> 
                        <img class="h-full w-full object-cover rounded-xl" src="{{ asset('images/projects/dash3.jpg') }}" alt="Visual Keamanan">
                    </div>
                </div>

                {{-- Gambar 3: Kecepatan (Tanpa BG Putih, Tanpa Padding) --}}
                <div class="col-span-full sm:col-span-3 lg:col-span-2 overflow-hidden relative rounded-xl 
                            transition duration-300 ease-in-out hover:scale-[1.02] hover:shadow-2xl group h-64">
                    <div class="h-full w-full relative"> 
                        <img class="h-full w-full object-cover rounded-xl" src="{{ asset('images/projects/dash4.jpg') }}" alt="Visual Kecepatan">
                    </div>
                </div>

                {{-- Gambar 4: Grafik Analitik (Tanpa BG Putih, Tanpa Padding) --}}
                <div class="col-span-full lg:col-span-3 overflow-hidden relative rounded-xl 
                            transition duration-300 ease-in-out hover:scale-[1.02] hover:shadow-2xl group h-96"> 
                    <div class="h-full w-full relative"> 
                        <img class="h-75% w-full object-cover rounded-xl" src="{{ asset('images/projects/dash4.webp') }}" alt="Visual Grafik Analitik">
                    </div>
                </div>

                {{-- Gambar 5: Gambar Besar (Tanpa BG Putih, Tanpa Padding) --}}
                <div class="col-span-full lg:col-span-3 overflow-hidden relative rounded-xl 
                            transition duration-300 ease-in-out hover:scale-[1.02] hover:shadow-2xl group h-96"> 
                    <div class="h-full w-full relative"> 
                        <img class="h- w-full object-cover rounded-xl"  src="{{ asset('images/projects/dash5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
</x-layout.app>