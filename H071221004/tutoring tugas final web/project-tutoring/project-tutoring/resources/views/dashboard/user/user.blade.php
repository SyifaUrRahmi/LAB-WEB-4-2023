@extends('dashboard/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ms-4 ">USER, {{ auth()->user()->nama }}</h1>
        <a href="{{ route('create') }}">
          <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Tambah User</button>
        </a>
    </div>

    @if ($message = Session::get('success'))
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
          <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <div class="ms-3 text-sm font-medium">
            {{ $message }}
          </div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
          </button>
        </div>
    @endif

    <div class="heading-background d-inline-block underline m-3">
      <h1 class="fs-4 fw-medium py-1 px-2">Table Guru</h1>
    </div>
    <div class="table-container ms-2" style="max-height: 300px; overflow-y: auto;">
      <table class="table table-striped">
        <thead style="position: sticky; top: 0; background-color: white;">
          <tr>
            <th scope="col" style="min-width: 80px;">No</th>
            <th scope="col" style="min-width: 300px;">Nama User</th>
            <th scope="col" style="min-width: 300px;">Email</th>
            <th scope="col" style="min-width: 200px;">Tipe Akun</th>
            <th scope="col" style="min-width: 200px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users->where('role', 'Guru') as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
              <a href="{{ route('edit', ['user' => $user->id]) }}" ><button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Edit</button>
              </a>
              <form action="{{ route('destroy', ['user' => $user->id]) }}" method="post" style="display: inline;">
                @csrf
                @method('delete')
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="heading-background d-inline-block underline mt-5 mb-3 ms-3">
      <h1 class="fs-4 fw-medium py-1 px-2">Tabel Siswa</h1>
    </div>
    <div class="table-container mb-5 ms-2" style="max-height: 300px; overflow-y: auto;">
      <table class="table table-striped">
        <thead style="position: sticky; top: 0; background-color: white;">
          <tr>
            <th scope="col" style="min-width: 80px;">No</th>
            <th scope="col" style="min-width: 300px;">Nama User</th>
            <th scope="col" style="min-width: 300px;">Email</th>
            <th scope="col" style="min-width: 200px;">Tipe Akun</th>
            <th scope="col" style="min-width: 200px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users->where('role', 'Siswa') as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role}}</td>
            <td>
              <a href="{{ route('edit', ['user' => $user->id]) }}" ><button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Edit</button>
              </a>
              <form action="{{ route('destroy', ['user' => $user->id]) }}" method="post" style="display: inline;">
                @csrf
                @method('delete')
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection