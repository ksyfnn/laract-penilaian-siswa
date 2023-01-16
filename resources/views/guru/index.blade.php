@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA GURU</h2>
        </center>
            <a href="/guru/create" class="button-primary" style="margin-left: 22%">ADD DATA</a>
            <center>
            <table cellpadding="10" style="text-align:center;">
                <tr style="background-color:rgba(24, 58, 252, 0.904)" class="judul">
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA GURU</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($guru as $g )
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $g->nip }}</td>
                    <td>{{ $g->nama_guru }}</td>
                    <td>{{ $g->jk =='L' ? 'lali-laki' : 'perempuan' }}</td>
                    <td>{{ $g->alamat }}</td>
                    <td>{{ $g->password }}</td>
                    <td>
                        <a href="/guru/edit/{{ $g->id }}" class="button-warning">EDIT</a>
                        <a href="/guru/destroy/{{ $g->id }}" class="button-danger" onclick="return confirm ('really to delete?')">DELETE</a>
                    </td>    
                    </tr>                    
                @endforeach
            </table>
        </b>
    </center>
@endsection