<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Sekolah
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white p-4 shadow rounded">

                <form action="{{ route('sekolah.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Yayasan</label>

                        <select name="yayasan_id" class="form-control" required>
                            <option value="">-- Pilih Yayasan --</option>

                            @foreach ($yayasans as $yayasan)
                                <option value="{{ $yayasan->id }}">
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
                            class="form-control"
                            required
                        >
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Jenjang</label>

                        <select name="jenjang" class="form-control" required>
                            <option value="">-- Pilih Jenjang --</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Alamat</label>

                        <textarea
                            name="alamat"
                            class="form-control"
                            rows="3"
                            required
                        ></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">No Telepon</label>

                        <input
                            type="text"
                            name="telepon"
                            class="form-control"
                            placeholder="08xxxxxxxxxx"
                        >
                    </div>


                    <button type="submit" class="btn btn-success">
                        Simpan
                    </button>

                    <a href="{{ route('sekolah.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>