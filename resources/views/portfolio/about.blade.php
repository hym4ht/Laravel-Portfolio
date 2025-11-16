<x-layout.app>
    <style>
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease-out forwards; 
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    
  <div class="max-w-6xl mx-auto p-4 md:p-10 lg:p-12 mt-20">
   
   <div 
     id="lanyard-card-container"
     class="absolute top-0 w-1/2 h-screen z-0 left-0"
   ></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

        <div>
            </div>
        
        <div class="order-2 md:order-2 space-y-6">
            
            <div class="text-white"> 
                <h1 
                    class="text-4xl font-extrabold mb-3 fade-in-up" 
                    style="animation-delay: 0.2s;"
                >
                    I'm a <span class="text-blue-400">Frontend Developer</span> and a **Visual Storyteller** as an <span class="text-blue-400">Illustrator</span>!
                    </h1>
                
                <p 
                    class="text-lg mt-4 text-gray-300 fade-in-up" 
                    style="animation-delay: 0.5s;"
                >
                    I **code the experience** and **draw the narrative**. I bridge the gap between pixel-perfect design and robust, functional code.
                    </p>
            </div>
            
            <div class="pt-4 text-white"> 
                <h3 
                    class="text-2xl font-semibold mb-3 fade-in-up"
                    style="animation-delay: 0.8s;"
                >
                    My passion lies in crafting interfaces that are as beautiful as they are intuitive.
                </h3>
                
                <div 
                    class="text-base space-y-3 text-gray-300 fade-in-up"
                    style="animation-delay: 1.1s;"
                >
                    <span class="block">I transform complex ideas into accessible and engaging user interfaces using modern web technologies.</span>
                    <span class="block">From structuring semantic HTML and dynamic JavaScript to creating vibrant, emotional artwork—I build the world you interact with, one line of code and one brushstroke at a time.</span>
                </div>
            </div>
            
            <div class="pt-4 text-white"> 
                <h3 
                    class="text-2xl font-semibold mb-3 fade-in-up"
                    style="animation-delay: 1.4s;"
                >
                    Solid Foundation in Technology
                </h3>
                
                <div 
                    class="text-base space-y-3 text-gray-300 fade-in-up"
                    style="animation-delay: 1.7s;"
                >
                    <span class="block">Currently, I am pursuing my studies in **D3 Computer Engineering** at **Universitas Harkat Negeri Tegal (UHN Tegal)**.</span>
                    <span class="block">This background provides me with a strong understanding of **computer system logic, networking, and hardware**, ensuring the digital products I create are not just visually stunning but also technically sound and optimized for performance.</span>
                </div>
            </div>
            </div>
        
    </div>
    <div class="pt-12 mt-12 border-t border-gray-700"> 
         <div class="text-white"> 
             <h3 
                 class="text-2xl font-semibold mb-3 fade-in-up"
                 style="animation-delay: 2.0s;"
             >
                 Looking Forward: Merging Art and Tech
             </h3>
             
             <div 
                 class="text-base space-y-3 text-gray-300 fade-in-up"
                 style="animation-delay: 2.3s;"
             >
                 <span class="block">My ultimate goal is to lead projects where the power of modern web development meets compelling visual design.</span>
                 <span class="block">I am constantly exploring new frameworks and design trends to push the boundaries of user interaction and bring truly memorable digital experiences to life.</span>
             </div>
         </div>
    </div>
    </div>
</x-layout.app>