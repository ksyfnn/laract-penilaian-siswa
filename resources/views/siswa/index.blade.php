@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>ADD LIST SISWA</h2>
        <a href="/siswa/create" class="button-primary">ADD DATA</a>
        <table cellpadding="10" style="text-align: center;">
            <tr style="background-color:rgba(24, 58, 252, 0.904)" class="judul">
                <th>NO</th>
                <th>NIS</th>
                <th>NAMA SISWA</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>KELAS</th>
                <th>PASSWORD</th>
                <th>ACTION</th>
            </tr>
            @foreach ($siswa as $s )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->nis }}</td>
                    <td>{{ $s->nama_siswa }}</td>
                    <td>{{ $s->jk == 'L' ? 'laki-laki' : 'perempuan'}}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->kelas->nama_kelas}}</td>
                    <td>{{ $s->password }}</td>
                    <td>
                        <a href="/siswa/edit/{{ $s->id }}" class="button-warning">EDIT</a>
                        <a href="/siswa/destroy/{{ $s->id }}" class="button-danger" onclick="return confirm('realy to delete??')">DELETE</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>
@endsection