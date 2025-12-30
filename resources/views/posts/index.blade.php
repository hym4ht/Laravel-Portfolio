<x-layout.app>
    {{-- Background --}}
    <div id="liquid-ether-background" class="fixed top-0 left-0 w-full h-full z-0 pointer-events-none"></div>

    <div class="relative z-10 container mx-auto px-4 py-20">
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white drop-shadow-lg">
                Posts
            </h1>
            <a href="{{ route('posts.create') }}" class="px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white font-bold rounded-full hover:shadow-lg hover:scale-105 transition-all duration-300">
                Create New Post
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-500/20 border border-green-500/50 text-green-100 px-4 py-3 rounded-lg mb-8 backdrop-blur-sm">
                {{ session('success') }}
            </div>
        @endif

        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <article class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl overflow-hidden hover:transform hover:scale-105 transition-all duration-300 shadow-xl group">
                        <div class="h-48 overflow-hidden bg-gradient-to-br from-purple-600 to-blue-500 relative">
                            @if($post->image_file_id)
                                <img src="https://drive.google.com/uc?export=view&id={{ $post->image_file_id }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
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
                                {{ Str::limit($post->content, 100) }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="text-center text-white py-20">
                <h3 class="text-3xl font-bold mb-4">No posts found</h3>
                <p class="text-gray-300">Start creating content by clicking the button above!</p>
            </div>
        @endif
    </div>
</x-layout.app>
