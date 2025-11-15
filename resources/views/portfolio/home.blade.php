<x-layout.app>
<style>
    /* --- CSS Khusus Animasi & Perhitungan Posisi Orbit (TIDAK BISA MURNI TAILWIND) --- */

    html,
    body {
        overflow-x: hidden;
    }

    /* --- Animasi Muncul (Fade In/Slide Up) --- */
    .fade-in-up {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s ease-out 0.5s forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* --- Animasi Idle: Zoom In/Out --- */
    @keyframes zoomIdle {
        0% { transform: scale(1); } /* Ukuran normal */
        50% { transform: scale(1.05); } /* Sedikit membesar */
        100% { transform: scale(1); } /* Kembali normal */
    }

    /* --- Orbit Container Default Size (max-width: 768px/md) --- */
    .orbit-container {
        width: 384px;
        height: 384px;
        position: relative;
    }

    /* Override ukuran ikon di mobile/tablet */
    .orbit-image {
        height: 60px;
        width: 60px;
        position: relative; 
        position: absolute; 
        overflow: visible !important; 
        z-index: 20; 

        /* Tambahkan animasi idle di sini */
        animation: zoomIdle 4s ease-in-out infinite; /* 4s durasi, mulus, berulang tanpa henti */
    }
    
    /* Ikon di dalam orbit-image (Sudah dibesarkan ke 120px) */
    .orbit-image img {
        width: 120px; 
        height: 120px; 
        object-fit: contain; 
    }

    /* -------------------------------------------------------------------------------- */
    /* --- KODE SPEECH BUBBLE --- */
    /* -------------------------------------------------------------------------------- */

    /* Pseudo-element ::after untuk menciptakan Bubble */
    .orbit-image::after {
        content: attr(data-bubble); 
        position: absolute;
        top: -20px; 
        left: 50%;
        transform: translateX(-50%); /* Menjaga bubble tetap di tengah saat zoomIdle */
        
        /* Styling Bubble */
        background: #ffffff;
        color: #333333;
        border-radius: 16px;
        padding: 5px 12px;
        white-space: nowrap;
        font-size: 14px;
        font-weight: 600;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        
        /* Initial state: Hidden */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s, top 0.3s; 
        z-index: 50; 
    }
    
    /* Pseudo-element ::before untuk menciptakan ARROW / EKOR bubble */
    .orbit-image::before {
        content: "";
        position: absolute;
        top: -5px; 
        left: 50%;
        transform: translateX(-50%) rotate(45deg); /* Menjaga arrow tetap di tengah saat zoomIdle */
        width: 8px;
        height: 8px;
        background: #ffffff;
        z-index: 50; 
        
        /* Initial state: Hidden */
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s;
    }

    /* State HOVER: Tampilkan Bubble dan Arrow */
    .orbit-image:hover::after {
        opacity: 1;
        visibility: visible;
        top: -30px; 
    }
    
    /* Atur posisi arrow saat hover */
    .orbit-image:hover::before {
         opacity: 1;
         visibility: visible;
         top: -7px; 
    }

    /* -------------------------------------------------------------------------------- */
    /* --- Pengaturan Desktop (lg) --- */
    @media (min-width: 1024px) {
        .orbit-container.lg-large {
            width: 512px;
            height: 512px;
        }

        .lg-large .orbit-image {
            height: 128px;
            width: 128px;
        }

        .lg-large .image-1 { top: -64px; left: 192px; }
        .lg-large .image-2 { top: 64px; left: 448px; }
        .lg-large .image-3 { top: 320px; left: 448px; }
        .lg-large .image-5 { top: 320px; left: -64px; }
        .lg-large .image-6 { top: 64px; left: -64px; }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        if (prefersDark) {
            document.documentElement.classList.add('dark');
        }
    });
</script>

<div class="container mx-auto px-8 py-20">
    <div class="flex flex-col lg:flex-row items-center p-8 md:p-12 rounded-xl transition-colors duration-500 max-w-7xl mx-auto gap-x-40 ">
        <div class="lg:w-3/5 flex justify-center relative lg:mr-auto">

            <div class="orbit-container lg-large">

                <img class="w-72 h-72 md:w-96 md:h-96 lg:w-[512px] lg:h-[512px] object-cover rounded-full mx-auto relative z-10" src="{{ asset('images/avatar.webp') }}" alt="Avatar">

                <div class="absolute inset-0 z-0 orbit-animation">

                    <div class="orbit-image image-1 reverse-orbit absolute overflow-hidden flex items-center justify-center transition-transform duration-300 hover:scale-125 hover:rotate-12" data-bubble="A foodie at heart!">
                        <img src="{{ asset('images/dimsum.webp') }}" alt="Gambar 1 (Atas)" class="object-cover p-0">
                        </div>

                    <div class="orbit-image image-2 reverse-orbit absolute overflow-hidden flex items-center justify-center transition-transform duration-300 hover:scale-125 hover:rotate-12" data-bubble="Leveling up my game!">
                        <img src="{{ asset('images/ps.webp') }}" alt="Gambar 2 (Kanan Atas)" class="object-cover p-0">
                        </div>

                    <div class="orbit-image image-3 reverse-orbit absolute overflow-hidden flex items-center justify-center transition-transform duration-300 hover:scale-125 hover:rotate-12" data-bubble="Code & Innovation">
                        <img src="{{ asset('images/laptop.webp') }}" alt="Gambar 3 (Kanan Bawah)" class="object-cover p-0">
                        </div>

                    <div class="orbit-image image-5 reverse-orbit absolute overflow-hidden flex items-center justify-center transition-transform duration-300 hover:scale-125 hover:rotate-12" data-bubble="Deep Sea Explorer">
                        <img src="{{ asset('images/softwaredev.png') }}" alt="Gambar 5 (Kiri Bawah)" class="object-cover p-0">
                        </div>

                    <div class="orbit-image image-6 reverse-orbit absolute overflow-hidden flex items-center justify-center transition-transform duration-300 hover:scale-125 hover:rotate-12" data-bubble="Marine Life Fan">
                        <img src="{{ asset('images/webdev.png') }}" alt="Gambar 6 (Kiri Atas)" class="object-cover p-0">
                        </div>

                </div>
            </div>


        </div>

        <div class="lg:w-3/5 mt-8 lg:mt-0 text-center lg:text-left">
            
            <div class="group inline-block"> <h1 class="font-alphazet
                 text-7xl md:text-8xl font-extrabold text-white mb-4 lg:ml-0 fade-in-up
                           group-hover:scale-95 transition-transform duration-300 ease-in-out" style="animation-delay: 0s;">
                    My Portfolio
                </h1>
            </div>
            
            <p class="mt-4 text-2xl text-gray-600 dark:text-gray-400 fade-in-up" style="animation-delay: 1.5s;">
                A passionate web developer with expertise in creating modern and responsive web applications. I love to learn new technologies and build amazing things.
            </p>

            <div class="mt-12 fade-in-up" style=" animation-delay: 2s;">
                <a href="#contact" class="animate-bounce inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-4 px-10 rounded-full shadow-lg transition duration-300">
                    Contact Me
                </a>
            </div>
        </div>

    </div>
</div>

</x-layout.app>
