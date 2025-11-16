<x-layout.app>
     <style>
    

        /* CSS untuk teks Gallery yang sangat besar */
        .big-gallery-text {
            
            
            font-size: 6vw; /* Ukuran yang responsif dan sangat besar */
            font-weight: 900;
            color: #e5e7eb; /* Warna abu-abu terang */
            opacity: 0.7;
            
        }
    </style>
    <div class="flex flex-col items-center h-screen pt-20">
        <h1 class="font-alphazet big-gallery-text mb-8 text-white">My Tech Skills</h1>
        <div id="skills-slider-root" class="mb-8"></div>
        <div id="skills-slider-root-2"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = [
                "{{ asset('images/skills/css.png') }}",
                "{{ asset('images/skills/figma.png') }}",
                "{{ asset('images/skills/javascript.png') }}",
                "{{ asset('images/skills/php.png') }}",
                "{{ asset('images/skills/react.png') }}",
                "{{ asset('images/skills/tailwind.png') }}",
                "{{ asset('images/skills/vite.svg') }}",
                "{{ asset('images/skills/vue.png') }}"
            ];
            window.renderReactComponent('SkillsSlider', 'skills-slider-root', { images, direction: 'normal' });
            window.renderReactComponent('SkillsSlider', 'skills-slider-root-2', { images, direction: 'reverse' });
        });
    </script>
</x-layout.app>

