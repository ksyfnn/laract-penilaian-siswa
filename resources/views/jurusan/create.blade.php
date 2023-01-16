@extends('main.Layout')
@section('content')
<center>
    <b>
        <h2>ADD DATA MAJOR</h2>
        <form method="post" action="/jurusan/store">
        @csrf
        <table width="50%">
            <tr>
                <td class="bar">MAJOR NAME</td>
                <td class="bar">
                    <input type="text" name="nama_jurusan">
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