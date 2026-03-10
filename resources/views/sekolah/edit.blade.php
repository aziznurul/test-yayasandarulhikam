<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Sekolah
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-4 shadow rounded">

                <form action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Yayasan</label>

                        <select name="yayasan_id" class="form-control" required>
                            @foreach ($yayasans as $yayasan)
                                <option 
                                    value="{{ $yayasan->id }}"
                                    {{ $sekolah->yayasan_id == $yayasan->id ? 'selected' : '' }}
                                >
                                    {{ $yayasan->nama_yayasan }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Nama Sekolah</label>

                        <input
                            type="text"
                            name="nama_sekolah"
                            value="{{ $sekolah->nama_sekolah }}"
                            class="form-control"
                            required
                        >
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Jenjang</label>

                        <select name="jenjang" class="form-control" required>
                            <option value="SD" {{ $sekolah->jenjang == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ $sekolah->jenjang == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ $sekolah->jenjang == 'SMA' ? 'selected' : '' }}>SMA</option>
                            <option value="SMK" {{ $sekolah->jenjang == 'SMK' ? 'selected' : '' }}>SMK</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Alamat</label>

                        <textarea
                            name="alamat"
                            class="form-control"
                            rows="3"
                            required
                        >{{ $sekolah->alamat }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Telepon</label>

                        <input
                            type="text"
                            name="telepon"
                            value="{{ old('telepon', $sekolah->telepon) }}"
                            class="form-control"
                        >
                    </div>


                    <button type="submit" class="btn btn-success">
                        Update
                    </button>

                    <a href="{{ route('sekolah.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>