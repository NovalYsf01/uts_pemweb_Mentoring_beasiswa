@extends('main')
@section('section')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form id="editForm" action="{{ route('beasiswas.update', $penerima->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $penerima->nama) }}" placeholder="Masukkan nama">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NIM</label>
                                <textarea class="form-control @error('nim') is-invalid @enderror" name="nim" rows="5" placeholder="Masukkan nim">{{ old('nim', $penerima->nim) }}</textarea>
                            
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
                                        <label class="font-weight-bold">NOMER_TELPON</label>
                                        <input type="number" class="form-control @error('nomer_telpon') is-invalid @enderror" name="nomer_telpon" value="{{ old('nomer_telpon', $penerima->nomer_telpon) }}" placeholder="Masukkan nomer_telpon">
                                    
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
                                            @foreach(App\Models\Penerima::JENIS_BEASISWA as $key => $value)
                                                <option value="{{ $key }}" {{ old('jenis_beasiswa', $penerima->jenis_beasiswa) == $key ? 'selected' : '' }}>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    
                                        <!-- error message untuk jenis_beasiswa -->
                                        @error('jenis_beasiswa')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">MENTOR</label>
                                    <select class="form-control @error('mentor') is-invalid @enderror" name="mentor">
                                        <option value="fathan" {{ old('mentor', $penerima->mentor) == 'fathan' ? 'selected' : '' }}>Fathan</option>
                                        <option value="rafi" {{ old('mentor', $penerima->mentor) == 'rafi' ? 'selected' : '' }}>Rafi</option>
                                        <option value="noval" {{ old('mentor', $penerima->mentor) == 'noval' ? 'selected' : '' }}>Noval</option>
                                    </select>
                                
                                    <!-- error message untuk mentor -->
                                    @error('mentor')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
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
        
        document.getElementById('editForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var form = this;
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    </script>
@endsection
