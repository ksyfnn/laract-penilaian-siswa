@extends('main.Layout');
@section('content')
<center>
    <b>
        <h2>LIST DATA KELAS</h2>
        <a href="/kelas/create" class="button-primary">ADD DATA</a>
        <table cellpadding="10" style="text-align: center;">
            <tr style="background-color:rgba(24, 58, 252, 0.904);" class="judul">
                <th>NO</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>ACTION</th>
            </tr>
            @foreach ($kelas as $k )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $k->nama_kelas }}</td>
                    <td>{{ $k->jurusan->nama_jurusan }}</td>
                    <td>
                        <a href="/kelas/edit/{{ $k->id }}" class="button-warning">EDIT</a>
                        <a href="/kelas/destroy/{{ $k->id }}" class="button-danger" onclick="return confirm('realy to delete?')">DELETE</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>


@endsection