@include('layouts.header')
@include('layouts.menu')
    <div class="content-inner chart-cont">

        <!--***** CONTENT *****-->   
        <div class="col-md-12" style="margin: 5% 0"> 
                <h3 style="font-weight: 700;color: #2196f3; text-align: center">Informasi Keanggotaan Apindo Jakarta Timur 2019</h3>
            <table class="table table-hover">
                <thead>
                <tr class="text-white" style="background-color: #38607F">
                    <th>NO</th>
                    <th>Nama PT</th>
                    <th>Contact Person</th>
                    <th>Alamat</th>
                </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($informasi_anggota as $ia)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $ia->nama_pt }}</td>
                            <td>{{ $ia->contact_person }}</td>
                            <td>{{ $ia->alamat }}</td>
                        </tr>
                    @endforeach
            </tbody>
            </table>
            {{ $informasi_anggota->links() }}
        </div>
    </div>
@include('layouts.footer')
