@extends('main.layout')
@section('content')
    <center>
        <h2>EDIT DATA MENGAJAR</h2>
        <form action="/mengajar/update/{{$mengajar->id}}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td class="25%">NAMA GURU</td>
                    <td class="25%">
                        <select name="guru_id">
                            <option>Pilih Guru</option>
                            @foreach ($guru as $g)
                              @if ($mengajar->guru_id == $g->id) 
                                <option value="{{$g->id}}" selected>{{$g->nama_guru }}</option>
                              @else
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                              @endif
                                @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                  <td class="25%">NAMA MAPEL</td>
                  <td class="25%">
                      <select name="mapel_id">
                          <option>Pilih Mapel</option>
                          @foreach ($mapel as $m)
                            @if ($mengajar->mapel_id == $m->id) 
                              <option value="{{$m->id}}" selected>{{$m->nama_mapel }}</option>
                            @else
                              <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                            @endif
                              @endforeach
                      </select>
                  </td>
              </tr>
              <tr>
                <td class="25%">KELAS</td>
                <td class="25%">
                    <select name="kelas_id">
                        <option>Pilih Kelas</option>
                        @foreach ($kelas as $k)
                          @if ($mengajar->kelas_id == $k->id) 
                            <option value="{{$k->id}}" selected>{{$k->nama_kelas}}</option>
                          @else
                            <option value="{{ $k->id }}">{{$k->nama_kelas}} </option>
                          @endif
                            @endforeach
                    </select>
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