@extends('main.Layout')
@section('content')
    <center>
        <b>
            <h2>ADD DATA GURU</h2>
                <form method="post" action="/guru/store">
                    @csrf
                    <table width="50%">
                        <tr>
                        <td class="bar">NIP</td>
                        <td class="bar">
                            <input type="text" name="nip" placeholder="nip kamu apah">
                        </td>
                        </tr>
                        <tr>
                        <td class="bar">NAMA GURU</td>
                        <td class="bar">
                            <input type="text" name="nama_guru" placeholder="nama kamu siapah">
                        </td>
                        </tr>
                        <tr>
                        <td class="bar">JENIS KELAMIN</td>
                        <td class="bar">
                            <input type="radio" name="jk" value="L">LAKI - LAKI
                            <input type="radio" name="jk" value="P">PEREMPUAN
                        </td>
                        </tr>
                        <tr>
                            <td class="bar">ALAMAT</td>
                            <td class="bar">
                                <textarea name="alamat" cols="30" rows="10" placeholder="alamat rumah kamu dmna"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="bar">PASSWORD</td>
                            <td class="bar">
                                <input type="password" name="password" placeholder="password kamu apah">
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