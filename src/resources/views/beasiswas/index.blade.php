@extends('main')
@section('section')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">{{ trans('panel.site_title') }}</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('beasiswas.create') }}" class="btn btn-md btn-custom btn-success mb-3">ADD PRODUCT</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NAMA</th>
                                <th scope="col">NIM</th>
                                <th scope="col">NOMER TELPON</th>
                                <th scope="col">JENIS BEASISWA</th>
                                <th scope="col">MENTOR</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($penerima as $p)
                                <tr>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->nim }}</td>
                                    <td>{{ $p->nomer_telpon }}</td>
                                    <td>{{ App\Models\Penerima::JENIS_BEASISWA[$p->jenis_beasiswa] ?? '' }}</td>
                                    <td>{{ $p->mentor }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('beasiswas.destroy', $p->id) }}" method="POST">
                                            <a href="{{ route('beasiswas.show', $p->id) }}" class="btn btn-sm btn-custom btn-dark">SHOW</a>
                                            <a href="{{ route('beasiswas.edit', $p->id) }}" class="btn btn-sm btn-custom btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-custom btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <div class="alert alert-danger">
                                            Data Products belum Tersedia.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $penerima->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
    <script>
        // message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
@endsection
