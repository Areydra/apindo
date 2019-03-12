@include('layouts.admin.header')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')
  <div class="content">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="card-title">Data Artikel</h3>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('artikel_add') }}" class="btn btn-success">Tambah Artikel</a>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Artikel</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $artikel)
                        <tr>
                            <td class="py-1">
                                {{ $no++ }}
                            </td>
                            <td>
                                {{ $artikel->judul }}
                            </td>
                            <td>
                                {!! str_limit($artikel->artikel,100) !!}
                            </td>
                            <td>
                                {{ $artikel->kategori }}
                            </td>
                            <td>
                                <a href="{{ route('artikel_edit', $artikel->id) }}" class="btn btn-info">Edit</a><br><br>
                                <a href="{{ route('delete', ['artikel', $artikel->id]) }}" class="btn btn-danger" style="width: 108px">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $data->links() }}
  </div>


@include('layouts.admin.footer')