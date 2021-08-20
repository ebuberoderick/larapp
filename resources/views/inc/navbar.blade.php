<nav class="bg-blue-900 text-gray-50">
    <div class="mx-auto max-w-6xl">
        <a href="/dashboard" class="py-2 px-4 inline-block hover:bg-gray-50 hover:text-blue-900 transition-all duration-400 {{ $active == "dashboard" ? 'bg-gray-50 text-blue-500' : '' }}">Dashbaord</a>
        <a href="{{ route('categories') }}" class="py-2 px-4 inline-block hover:bg-gray-50 hover:text-blue-900 transition-all duration-400 {{ $active == "categories" ? 'bg-gray-50 text-blue-500' : '' }}">Manage Categories</a>
        <a href="{{ route('make_post') }}" class="py-2 px-4 inline-block hover:bg-gray-50 hover:text-blue-900 transition-all duration-400 {{ $active == "make_post" ? 'bg-gray-50 text-blue-500' : '' }}">Make Post</a>
        <a href="#" class="py-2 px-4 inline-block hover:bg-gray-50 hover:text-blue-900 transition-all duration-400">All Post</a>
    </div>
</nav>
