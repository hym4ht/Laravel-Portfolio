<x-layout.app>
    {{-- Container untuk background --}}
    <div id="liquid-ether-background" class="fixed top-0 left-0 w-full h-full z-0 pointer-events-none"></div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (prefersDark) {
                document.documentElement.classList.add('dark');
            }

            // Render komponen React setelah DOM siap
            if (typeof window.renderReactComponent === 'function') {
                window.renderReactComponent('LiquidEther', 'liquid-ether-background');
            }
        });
    </script>

    <div class="relative z-10 container mx-auto px-4 py-20">
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-4 drop-shadow-lg">
                Latest Updates
            </h1>
            <p class="text-xl text-gray-200 dark:text-gray-300 max-w-2xl mx-auto">
                Thoughts, tutorials, and insights about web development and technology.
            </p>
        </div>

        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl overflow-hidden hover:transform hover:scale-105 transition-all duration-300 shadow-xl group">
                        {{-- Image Placeholder or Real Image --}}
                        <div class="h-48 overflow-hidden bg-gradient-to-br from-purple-600 to-blue-500 relative">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4 bg-black/50 backdrop-blur-sm text-white text-xs px-3 py-1 rounded-full">
                                {{ $post->created_at->format('M d, Y') }}
                            </div>
                        </div>

                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-white mb-3 text-shadow group-hover:text-purple-300 transition-colors">
                                {{ $post->title }}
                            </h2>
                            <p class="text-gray-200 mb-4 line-clamp-3">
                                {{ $post->excerpt }}
                            </p>
                            <a href="#" class="inline-flex items-center text-white hover:text-purple-300 font-semibold transition-colors">
                                Read More
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        @else
            <div class="text-center text-white py-20">
                <h3 class="text-3xl font-bold mb-4">No posts found</h3>
                <p class="text-gray-300">Check back later for new content!</p>
            </div>
        @endif
    </div>
</x-layout.app>
