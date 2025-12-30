<x-layout.app>
    <div id="liquid-ether-background" class="fixed top-0 left-0 w-full h-full z-0 pointer-events-none"></div>

    <div class="relative z-10 container mx-auto px-4 py-20 max-w-2xl">
        <h1 class="text-4xl font-extrabold text-white mb-8 drop-shadow-lg text-center">Create Post</h1>

        <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 shadow-2xl">
            @if ($errors->any())
                <div class="bg-red-500/20 border border-red-500/50 text-red-100 px-4 py-3 rounded-lg mb-6">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block text-white font-semibold mb-2">Title</label>
                    <input type="text" name="title" id="title" required
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors">
                </div>

                <div class="mb-6">
                    <label for="content" class="block text-white font-semibold mb-2">Content</label>
                    <textarea name="content" id="content" rows="6" required
                              class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-colors"></textarea>
                </div>

                <div class="mb-8">
                    <label for="image" class="block text-white font-semibold mb-2">Image</label>
                    <input type="file" name="image" id="image" required accept="image/*"
                           class="w-full text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-600 file:text-white hover:file:bg-purple-700 transition-colors">
                    <p class="text-sm text-gray-400 mt-2">Upload an image to be stored in Google Drive.</p>
                </div>

                <button type="submit"
                        class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white font-bold py-3 rounded-lg hover:shadow-lg hover:opacity-90 transition-all duration-300 transform hover:-translate-y-1">
                    Publish Post
                </button>
            </form>
        </div>
    </div>
</x-layout.app>
