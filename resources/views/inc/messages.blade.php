@if (session('success'))
    <div class="text-green-900 bg-green-300 py-1 px-3 mb-4">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="text-red-900 bg-red-300 py-1 px-3 mb-4">
        {{ session('error') }}
    </div>
@endif