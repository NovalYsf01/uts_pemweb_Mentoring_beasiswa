@extends('main')
@section('section')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>Detail Penerima Beasiswa</h3>
                        <hr/>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">NAMA</label>
                            <p>{{ $penerima->nama }}</p>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">NIM</label>
                            <p>{{ $penerima->nim }}</p>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">NOMER TELPON</label>
                            <p>{{ $penerima->nomer_telpon }}</p>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">JENIS BEASISWA</label>
                            <p>{{ App\Models\Penerima::JENIS_BEASISWA[$penerima->jenis_beasiswa] ?? 'Tidak Diketahui' }}</p>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">MENTOR</label>
                            <p>{{ ucfirst($penerima->mentor) }}</p>
                        </div>

                        <a href="{{ route('beasiswas.index') }}" class="btn btn-md btn-secondary mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
