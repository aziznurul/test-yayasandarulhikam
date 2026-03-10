<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Yayasan
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-4 shadow rounded">

                <div class="mb-3">
                    <a href="{{ route('yayasan.create') }}" class="btn btn-primary">
                        Tambah Yayasan
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                        <thead class="table-dark">
                            <tr>
                                <th width="50">No</th>
                                <th>Nama Yayasan</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th width="200">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($yayasans as $yayasan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $yayasan->nama_yayasan }}</td>
                                    <td>{{ $yayasan->alamat }}</td>
                                    <td>{{ $yayasan->telepon }}</td>

                                    <td>
                                        <a href="{{ route('yayasan.edit', $yayasan->id) }}" 
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('yayasan.destroy', $yayasan->id) }}" 
                                              method="POST" 
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete(event)">
                                                Hapus
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data yayasan belum tersedia
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>

</x-app-layout>