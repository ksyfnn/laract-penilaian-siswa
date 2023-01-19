@extends('main.Layout')
@section('content')
<center>
    <b>
        <h2>CREATE DATA NILAI</h2>
        <form action="/nilai/store" method="post">
        @csrf
        <table width='50%'>
            <tr>
                <td class="bar">GURU MAPEL</td>
                <td class="bar">
                    <select name="mengajar_id">
                        <option></option>   
                        @foreach ($mengajar as $m )
                            <option value="{{ $m->id }}">{{ $m->guru->nama_guru }} mengajar {{ $m->mapel->nama_mapel }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="bar">NAMA SISWA</td>
                <td class="bar">
                    <select name="siswa_id">
                        <option></option>
                        @foreach ($siswa as $s )
                            <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="bar">UH</td>
                <td class="bar">
                    <input type="number" name="uh">
                </td>
            </tr>
            <tr>
                <td class="bar">UTS</td>
                <td class="bar">
                    <input type="number" name="uts">
                </td>
            </tr>
            <tr>
                <td class="bar">UAS</td>
                <td class="bar">
                    <input type="number" name="uas">
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <center><button class="button-primary">SAVE</button></center>
                </td>
            </tr>
        </table>
        </form>
    </b>
</center>
@endsection