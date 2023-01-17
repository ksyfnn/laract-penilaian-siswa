@extends('main.layout');
@section('content')
<center>
    <b>
        <h2>EDIT DATA MAPEL</h2>
        <form action="/mapel/update/{{ $mapel->id }}" method="POST">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">MAPEL NAME</td>
                <td class="bar">
                    <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button class="button-primary" type="submit">EDIT</button>
                    </center>
                </td>
            </tr>
        </table>
        </form>
    </b>
</center>

@endsection