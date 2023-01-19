@extends('main.Layout')
@section('content')
<center>
    <b>
        <h2>DATA MENGAJAR</h2>
    @if (session('success'))
    <p class="text-success">{{ session('success') }}</p>
    @endif
    @if (session('error'))
    <p class="text-danger">{{ session('error') }}</p>
    @endif
        <a href="/mengajar/create" class="button-primary">ADD DATA</a>
        <table cellpadding="10" style="text-align: center;">
            <tr style="background-color:rgba(24, 58, 252, 0.904)" class="judul">
                <th>NO</th>
                <th>NAMA GURU</th>
                <th>NAMA MAPEL</th>
                <th>NAMA KELAS</th>
                <th>ACTION</th>
            </tr>
            @foreach ($mengajar as $m )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m->guru->nama_guru }}</td>
                    <td>{{ $m->mapel->nama_mapel }}</td>
                    <td>{{ $m->kelas->nama_kelas }}</td>
                    <td>
                        <a href="/mengajar/edit/{{ $m->id }}" class="button-warning">EDIT</a>
                        <a href="/mengajar/destroy/{{ $m->id }}" class="button-danger">DELETE</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection