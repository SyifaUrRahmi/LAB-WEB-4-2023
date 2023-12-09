<x-Layout>
    <x-card class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                User Dashboard
            </h2>

            @if(session('message'))
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @endif
        </header>

        <form method="POST" action="/usersedit">
            @csrf
            <div class="mb-6">
                <label
                    for="nama"
                    class="inline-block text-lg mb-2"
                    >Nama</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="nama"
                    value="{{ $user->name }}"
                />
            </div>

            <div class="mb-6">
                <label
                    for="email"
                    class="inline-block text-lg mb-2"
                    >Email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{ $user->email }}"
                />
            </div>

            <div class="mb-6">
                <label
                    for="email"
                    class="inline-block text-lg mb-2"
                    >Ganti password</label
                >
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    placeholder="Masukkan sandi baru"
                />
            </div>

            <div class="mb-6">
                <label for="skills" class="inline-block text-lg mb-2">
                    Skills (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="skills"
                    placeholder="Example: Laravel, Backend, Postgres, etc"
                    value="{{ $user->skills }}"
                />
            </div>

            <div class="mb-6">
                <label
                    for="studi"
                    class="inline-block text-lg mb-2"
                >
                    Riwayat Studi
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="studi"
                    rows="10"
                >{{ $user->studi }}</textarea>
            </div>

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 bg-blue-500 hover:bg-black"
                >
                    Edit profile
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card >

</x-Layout>
