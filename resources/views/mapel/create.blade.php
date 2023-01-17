@extends('main.layout');
@section('content')
<center>
    <b>
        <h2>CREATE DATA MAPEL</h2>
        <form action="/mapel/store" method="POST">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">MAPEL NAME</td>
                <td class="bar">
                    <input type="text" name="nama_mapel">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <button class="button-primary" type="submit">SAVE</button>
                    </center>
                </td>
            </tr>
        </table>
        </form>
    </b>
</center>

@endsection