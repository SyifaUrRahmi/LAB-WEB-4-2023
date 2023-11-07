@extends('layout.template')

@section('content')
    <h2 class="font-bold text-4xl text-center mb-6">Buat Blog Baru</h2>
    <form class="px-20" method="POST" action="{{ url('blogs') }}">
        @csrf

        <div class="mb-6">
            <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="author" name="author"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@email.com" required>
        </div>

        <div class="mb-6 flex items-center justify-between gap-5">
            <div class="w-11/12">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                    Blog</label>
                <input type="title" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tutorial Tidur..." required>
            </div>

            <div>
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                    Kategori</label>
                <select id="category" name="category"
                    class="bg-blue-600 text-white border border-gray-300 font-medium text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($categories as $item)
                        <option value="{{ $item->category }}">{{ $item->category }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Konten Blog</label>
        <textarea id="body" rows="6" name="body"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-6"
            placeholder="Pada zaman dahulu..." required style="resize: none"></textarea>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buat</button>
    </form>
@endsection
