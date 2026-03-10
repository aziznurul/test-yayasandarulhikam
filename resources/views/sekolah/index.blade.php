<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Sekolah
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-4 shadow rounded">

                <div class="mb-3">
                    <a href="{{ route('sekolah.create') }}" class="btn btn-primary">
                        Tambah Sekolah
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                        <thead class="table-dark">
                            <tr>
                                <th width="50">No</th>
                                <th>Yayasan</th>
                                <th>Nama Sekolah</th>
                                <th>Jenjang</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th width="200">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($sekolahs as $sekolah)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sekolah->yayasan->nama_yayasan }}</td>
                                    <td>{{ $sekolah->nama_sekolah }}</td>
                                    <td>{{ $sekolah->jenjang }}</td>
                                    <td>{{ $sekolah->alamat }}</td>
                                    <td>{{ $sekolah->telepon }}</td>

                                    <td>
                                        <a href="{{ route('sekolah.edit', $sekolah->id) }}" 
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form id="delete-{{ $sekolah->id }}"
                                              action="{{ route('sekolah.destroy', $sekolah->id) }}"
                                              method="POST"
                                              class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="button"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="confirmDelete('delete-{{ $sekolah->id }}')">
                                                Hapus
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        Data sekolah belum tersedia
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