@extends('layout.template')

@section('content')
    <div class="flex justify-center items-center flex-col px-4 pt-2">
        @foreach ($blogDetails as $item)
            <div class="flex justify-between items-center w-full">
                <h1 class="text-lg font-bold">{{ $item->author }}</h1>
                <div
                    class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                    {{ $item->created_at }}
                </div>
            </div>

            <img class="rounded-t-lg h-96"
                src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/10/26/manfaat-kesehatan-secara-langsun-20221026090404.jpg"
                alt="{{ $item->title }}" />
            <h2 class="text-4xl font-bold mt-12 mb-4">{{ $item->title }}</h2>
            <span
                class="bg-blue-100 text-blue-800 text-base font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                {{ $item->category }}
            </span>

            <p class="text-justify text-lg my-12 mx-8">{{ $item->body }}</p>

            <div class="flex justify-end w-full">
                <a href="/blogs/{{ $item->id }}/edit"
                    class="px-6 py-3 text-lg focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg dark:focus:ring-yellow-900">
                    Kelola
                </a>
            </div>
        @endforeach
    </div>
@endsection
