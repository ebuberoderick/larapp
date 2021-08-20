@extends('layout.app_layout', ['active' => "categories"])

@section('head_extras')
    <title>Manage Category</title>
@endsection

@section('page_content')
    <div class="container max-w-6xl mx-auto px-4 py-5">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            {{-- First Column --}}
            <div class="col-span-2 py-4 bg-blue-300 px-4">
                @include('inc.messages')
                <form action="{{ url('posts/add-category') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="mb-2 text-xl">Category</label>
                        <input type="text" class="block h-8 rounded w-1/2 px-3" name="category" required>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="py-1 px-3 rounded bg-blue-900 text-gray-50">
                            Add Category
                        </button>
                    </div>
                </form>
            </div>

            {{-- Second Column --}}
            <div class="py-4 bg-blue-900 text-white">
                <h2 class="py-2 px-3 font-bold text-2xl">
                    Recently Added Categories
                </h2>

                <ul>
                    @foreach ($category as $cat)
                        <li class="px-3 py-1">{{  $cat->category }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection