@include('layouts.header')
@include('layouts.menu')
    <div class="content-inner chart-cont">

        <!--***** CONTENT *****-->   
        <div class="col-md-12" style="margin: 5% 0"> 
                <h3 style="font-weight: 700;color: #2196f3; text-align: center">Pelatihan / Seminar</h3>
            <table class="table table-hover">
                <thead>
                <tr class="text-white" style="background-color: #38607F">
                    <th style="width: 50px">NO</th>
                    <th style="width: 350px">Topik Pelatihan/Workshop</th>
                    <th style="width: 250px">Waktu</th>
                    <th style="width: 100px">Peserta</th>
                    <th>Informasi</th>
                </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach($pelatihan_seminar as $ps)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $ps->topik }}</td>
                            <td>{{ $ps->waktu }}</td>
                            <td>{{ $ps->peserta }}</td>
                            <td>
                                <p>Registrasi : {{ $ps->registrasi }} </p>
                                <p>Tempat     : {{ $ps->tempat }}</p>
                                <p>Narasumber : {{ $ps->narasumber }}</p>
                                <p>Investasi  : {{ $ps->investasi }} </p>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
            </table>
            {{ $pelatihan_seminar->links() }}
        </div>
    </div>
@include('layouts.footer')
