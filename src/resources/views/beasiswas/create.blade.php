@extends('main')
@section('section')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('beasiswas.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NIM</label>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM">
                            
                                <!-- error message untuk nim -->
                                @error('nim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">NOMER TELPON</label>
                                        <input type="number" class="form-control @error('nomer_telpon') is-invalid @enderror" name="nomer_telpon" value="{{ old('nomer_telpon') }}" placeholder="Masukkan nomer telpon">
                                    
                                        <!-- error message untuk nomer_telpon -->
                                        @error('nomer_telpon')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">JENIS BEASISWA</label>
                                        <select class="form-control @error('jenis_beasiswa') is-invalid @enderror" name="jenis_beasiswa">
                                            <option value="">Pilih Jenis Beasiswa</option>
                                            <option value="beasiswa_a" {{ old('jenis_beasiswa') == 'beasiswa_a' ? 'selected' : '' }}>Beasiswa A</option>
                                            <option value="beasiswa_b" {{ old('jenis_beasiswa') == 'beasiswa_b' ? 'selected' : '' }}>Beasiswa B</option>
                                            <option value="beasiswa_c" {{ old('jenis_beasiswa') == 'beasiswa_c' ? 'selected' : '' }}>Beasiswa C</option>
                                        </select>
                                    
                                        <!-- error message untuk jenis_beasiswa -->
                                        @error('jenis_beasiswa')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">MENTOR</label>
                                <select class="form-control @error('mentor') is-invalid @enderror" name="mentor">
                                    <option value="">Pilih Mentor</option>
                                    <option value="fathan" {{ old('mentor') == 'fathan' ? 'selected' : '' }}>Fathan</option>
                                    <option value="rafi" {{ old('mentor') == 'rafi' ? 'selected' : '' }}>Rafi</option>
                                    <option value="noval" {{ old('mentor') == 'noval' ? 'selected' : '' }}>Noval</option>
                                </select>
                            
                                <!-- error message untuk mentor -->
                                @error('mentor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@parent
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
