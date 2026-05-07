<nav class="bg-blue-600 text-white shadow-lg">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <div class="text-xl font-bold">
                <a href="{{ route('landingpage.index') }}" class="hover:text-blue-200">Aplikasi</a>
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('landingpage.index') }}" class="hover:text-blue-200 transition duration-300">Home</a>
                <a href="{{ route('products.index') }}" class="hover:text-blue-200 transition duration-300">Kelola Produk</a>
                <a href="{{ route('categories.index') }}" class="hover:text-blue-200 transition duration-300">Kelola Kategori</a>
            </div>
            <div class="md:hidden">
                <button id="menu-toggle" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-2">
            <a href="{{ route('landingpage.index') }}" class="block hover:text-blue-200 transition duration-300">Home</a>
            <a href="{{ route('products.index') }}" class="block hover:text-blue-200 transition duration-300">Kelola Produk</a>
            <a href="{{ route('categories.index') }}" class="block hover:text-blue-200 transition duration-300">Kelola Kategori</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
