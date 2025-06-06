<x-layout>
    <x-slot name="main_title">
        Halaman Prodi
    </x-slot>
    <x-slot name="header_name">
        Halaman Prodi
    </x-slot>
    <x-slot name="subheader_name">
    </x-slot>
    <x-slot name="subsubheader_name">
    </x-slot>
    <x-slot name="title">
    </x-slot>
    <x-slot name="main_content">
        <form class="forms-sample" action="{{ url('dashboard/prodi/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label mb-3">Kode</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode"
                        placeholder="Masukkan Kode">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                    placeholder="Masukkan Nama Prodi">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8 mt-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
        </x-slot>
    <x-slot name="footer">
    </x-slot>
</x-layout>