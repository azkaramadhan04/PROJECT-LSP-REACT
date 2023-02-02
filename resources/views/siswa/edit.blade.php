@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA SISWA</h2>
        <form action="/siswa/update/{{$siswa->id}}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="bar">NIS</td>
                    <td class="bar">
                        <input type="text" name="nis" value="{{$siswa->nis}}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">NAMA Siswa</td>
                    <td class="bar">
                        <input type="text" name="nama_siswa" value="{{$siswa->nama_siswa}}">
                    </td>
                </tr>
                <tr>
                    <td class="bar">JENIS KELAMIN</td>
                    <td class="bar">
                        <input type="radio" name="jk" value="L" {{$siswa->jk == 'L' ? 'checked' : ''}}>LAKI LAKI
                        <input type="radio" name="jk" value="P" {{$siswa->jk == 'P' ? 'checked' : ''}}>PEREMPUAN
                    </td>
                </tr>
                <tr>
                    <td class="bar">ALAMAT</td>
                    <td class="bar">
                        <textarea name="alamat" cols="30" rows="5">{{$siswa->alamat}}</textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bar">Kelas</td>
                    <td class="bar">
                        <select name="kelas_id">
                          <option>Pilih Kelas</option>
                          @foreach ($kelas as $k)
                            <option value="{{$k->id}}">{{$k->nama_kelas." ".$k->jurusan->nama_jurusan}}</option>
                          @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="bar">PASSWORD</td>
                    <td class="bar">
                        <input type="password" name="password" value="{{$siswa->password}}">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" class="button-primary">UBAH</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
@endsection