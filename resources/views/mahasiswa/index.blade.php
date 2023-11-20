@extends('layout.template')
@section('konten')
            <!-- START DATA -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{url('mahasiswa/create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th class="col-lg-1">No</th>
                            <th class="col-lg-1">NPM</th>
                            <th class="col-lg-1">Nama</th>
                            <th class="col-lg-1">No WA</th>
                            <th class="col-lg-2">Fakultas</th>
                            <th class="col-lg-1">Jurusan</th>
                            <th class="col-lg-1">Tingkat</th>
                            <th class="col-lg-1">Tanggal</th>
                            <th class="col-lg-2">Jam</th>
                            <th class="col-lg-1">Aksi</th>
                        </tr>
                        
                        
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->npm}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->no_wa}}</td>
                            <td>{{$item->fakultas}}</td>
                            <td>{{$item->jurusan}}</td>
                            <td>{{$item->tingkat}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->mulai}} - {{$item->akhir}}</td>
                           
                            
                            <td>
                                <a href='{{url('mahasiswa/'.$item->nim.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr> 
                        <?php $i++ ?>
                        @endforeach
                        
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
@endsection
        

