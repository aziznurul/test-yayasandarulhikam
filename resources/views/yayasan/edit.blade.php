<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Yayasan
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-4 shadow rounded">

                <form action="{{ route('yayasan.update', $yayasan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Yayasan</label>
                        <input
                            type="text"
                            name="nama_yayasan"
                            class="form-control"
                            value="{{ old('nama_yayasan', $yayasan->nama_yayasan) }}"
                            required
                        >

                        @error('nama_yayasan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea
                            name="alamat"
                            class="form-control"
                            rows="3"
                            required
                        >{{ old('alamat', $yayasan->alamat) }}</textarea>

                        @error('alamat')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input
                            type="text"
                            name="telepon"
                            class="form-control"
                            value="{{ old('telepon', $yayasan->telepon) }}"
                            required
                        >

                        @error('telepon')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success">
                            Update
                        </button>

                        <a href="{{ route('yayasan.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>