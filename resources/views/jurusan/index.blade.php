@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>LIST DATA GURU</h2>
        <a href="/jurusan/create" class="button-primary">ADD DATA</a>
        <table cellpadding="10">
            <tr>
                <th>NO</th>
                <TH>JURURSAN NAME</TH>
                <th>ACT</th>
            </tr>
            @foreach ($jurusan as $j )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $j->nama_jurusan }}</td>
                    <td>
                        <a href="/jurusan/edit/{{ $j->id }}" class="button-warning">EDIT</a>
                        <a href="/jurusan/destroy/{{ $j->id }}" class="button-danger" onclick="return confirm('really to delete?')">DELETE</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </b>
</center>

@endsection