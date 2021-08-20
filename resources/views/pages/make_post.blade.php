@extends('layout.app_layout', ['active' => "make_post"])

@section('head_extras')
    <title>Create New Post</title>
@endsection


@section('page_content')
<div class="container max-w-6xl mx-auto px-4 py-5">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- First Column --}}
        <div class="col-span-2 py-4 bg-blue-300 px-4">
            @include('inc.messages')
            <form action="{{ route('add_post') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="title" class="mb-2 text-xl">Post Title</label>
                    <input type="text" class="block h-8 rounded w-1/2" name="title">
                </div>
                <div class="mb-4">
                    <label for="title" class="mb-2 text-xl">Post Category</label>
                    <select name="category_id" class="block h-8 rounded w-1/2" required>
                        <option value="" class="px-3 py-1" disabled selected>Select Category</option>
                        @foreach ($category as $cat)
                            <option value="{{  $cat->id }}" class="px-3 py-1">{{  $cat->category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="title" class="mb-2 text-xl">Post Title</label>
                    <textarea class="block h-24 rounded w-1/2" name="content"></textarea>
                </div>
                <div class="mb-4">
                    <button type="submit" class="py-1 px-3 rounded bg-blue-900 text-gray-50">
                        Add Post
                    </button>
                </div>
            </form>
        </div>

        {{-- Second Column --}}
        <div class="py-4 bg-blue-900 text-white">
            <h2 class="py-2 px-3 font-bold text-2xl">
                Recently Added Post
            </h2>

            <ul class="divide-y divide-gray-600">
                @foreach ($posts as $post)
                    <li class="px-3 py-1 bg-white bg-opacity-25">
                        <a href="#">
                            <h2 class="font-bold text-xl">
                                {{ $post->title }}
                            </h2>
                            <small>
                                <i> Author: {{ $post->author_id }}</i>
                            </small>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection