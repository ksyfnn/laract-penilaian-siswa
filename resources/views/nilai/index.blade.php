@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST DATA GRADE</h2>
        @if (session('success'))
        <p class="text-success">{{ session('success') }}</p>
        @endif
        @if (session('error'))
        <p class="text-danger">{{ session('error') }}</p>
        @endif
        @if (session('user')->role == 'guru')
        <a href="/nilai/create" class="button-primary">ADD DATA</a>
        @endif
        <table cellpadding='10  ' style="text-align: center;">
            <tr style="background-color:rgba(24, 58, 252, 0.904);" class="judul">
                <th>NO</th>
                <th>GURU MAPEL</th>
                <th>NAMA SISWA</th>
                <th>UH</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>NA</th>
                <th>ACTION</th>
            </tr>
            @foreach ($nilai as $n )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->mengajar->guru->nama_guru }} {{ $n->mengajar->mapel->nama_mapel }}</td>
                    <td>{{ $n->siswa->nama_siswa }}</td>
                    <td>{{ $n->uh }}</td>
                    <td>{{ $n->uts }}</td>
                    <td>{{ $n->uas }}</td>
                    <td>{{ $n->na }}</td>
                    @if (session('user')->role == 'guru')                
                    <td>
                        <a href="/nilai/edit/{{ $n->id }}" class="button-warning">EDIT</a>
                        <a href="/nilai/destroy/{{ $n->id }}" class="button-danger" onclick="return confirm('realy to delete?')">DELETE</a>
                    </td>
                    @endif
                </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection