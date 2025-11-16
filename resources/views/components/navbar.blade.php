<div class="block w-full max-w-full rounded-none py-2 px-4 text-white backdrop-blur-2xl text-lg backdrop-saturate-200 lg:px-8 lg:py-4">
    <div class="flex items-center justify-between text-blue-gray-900 mx-auto max-w-screen-xl">
        
        <a href="{{ route('portfolio.home') }}" class="mr-4 cursor-pointer py-1.5 font-sans font-bold leading-relaxed tracking-normal text-white">
         My Portfolio
        </a>

        <div class="hidden lg:block">
            <ul class="my-2 flex flex-col gap-2 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                <li class="p-1 font-medium text-white">
                    <a href="{{ route('portfolio.about') }}" class="flex items-center transition-colors {{ request()->routeIs('portfolio.about') ? 'text-blue-500' : 'text-white' }}">
                        About
                    </a>
                </li>
                <li class="p-1 font-medium text-white">
                    <a href="{{ route('portfolio.skills') }}" class="flex items-center transition-colors {{ request()->routeIs('portfolio.skills') ? 'text-blue-500' : 'text-white' }}">
                      Skills
                    </a>
                </li>
                <li class="p-1 font-medium text-white">
                    <a href="{{ route('portfolio.projects') }}" class="flex items-center transition-colors {{ request()->routeIs('portfolio.projects') ? 'text-blue-500' : 'text-white' }}">
                      Portfolio
                    </a>
                </li>
                <li class="p-1 font-medium text-white">
                    <a href="{{ route('portfolio.contact') }}" class="flex items-center transition-colors {{ request()->routeIs('portfolio.contact') ? 'text-blue-500' : 'text-white' }}">
                      Contact
                    </a>
                </li>
            </ul>
        </div>

        <button
            id="hamburger-button"
            class="ml-auto h-6 w-6 text-inherit lg:hidden text-white"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={2} stroke="currentColor" class="h-6 w-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    
    <div id="mobile-menu" class="lg:hidden hidden"> 
        <ul class="my-2 flex flex-col gap-2">
            <li class="p-1 font-medium text-white">
                <a href="{{ route('portfolio.about') }}" class="flex items-center transition-colors {{ request()->routeIs('portfolio.about') ? 'text-blue-500' : 'text-white' }}">
                    About
                </a>
            </li>
            <li class="p-1 font-medium text-white">
                <a href="{{ route('portfolio.skills') }}" class="flex items-center transition-colors {{ request()->routeIs('portfolio.skills') ? 'text-blue-500' : 'text-white' }}">
                  Skills
                </a>
            </li>
            <li class="p-1 font-medium text-white">
                <a href="{{ route('portfolio.projects') }}" class="flex items-center transition-colors {{ request()->routeIs('portfolio.projects') ? 'text-blue-500' : 'text-white' }}">
                  Portfolio
                </a>
            </li>
            <li class="p-1 font-medium text-white">
                <a href="{{ route('portfolio.contact') }}" class="flex items-center transition-colors {{ request()->routeIs('portfolio.contact') ? 'text-blue-500' : 'text-white' }}">
                  Contact
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hamburgerButton = document.getElementById('hamburger-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (hamburgerButton && mobileMenu) {
            hamburgerButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>