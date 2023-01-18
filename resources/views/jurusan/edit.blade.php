@extends('main.layout')
@section('content')
<center>
    <b>
        <h2>EDIT DATA MAJOR</h2>
        <form method="post" action="/jurusan/update/{{ $jurusan->id }}">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">MAJOR NAME</td>
                <td class="bar">
                    <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
                </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button class="button-warning" type="submit">CHANGE</button>
                        </center>
                    </td>
                </tr>
        </table>
        </form>
    </b>
</center>
@endsection