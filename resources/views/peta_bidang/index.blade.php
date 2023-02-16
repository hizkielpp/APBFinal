@extends('peta_bidang.templateAdmin')
@section('content')
<div class="mb-2">
  <button
    type="button"
    class="btn btn-oke"
    data-toggle="modal"
    data-target="#modalTambah"
    style="width: 100%; margin-left: auto; margin-right: auto"
  >
    Tambah Data Peta Bidang
  </button>
</div>
<!-- Table -->
<table
  id="example"
  class="table table-striped table-bordered"
  style="width: 100%"
>
  <thead>
    <tr>
      <th>No.</th>
      <th>Nomor</th>
      <th>Judul</th>
      <th>Deskripsi</th>
      <th>Peta Bidang</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($petas as $key=>$peta )
    <tr>
      <td>{{ $key+1 }}</td>
      <td>{{ $peta->nomor }}</td>
      <td>{{ $peta->judul }}</td>
      <td>{{ $peta->deskripsi }}</td>
      <td>
        <a
          class="open-modalLihat"
          data-id="{{ $peta->namaGambar }}"
          href="#"
          data-toggle="modal"
          data-target="#modalLihat"
          >Lihat Peta Bidang
        </a>
      </td>
      <td>
        <a href="#">
          <i
            class="fa fa-pencil open-modalEdit"  
            data-url="{{ route('peta.show', $peta->id) }}" 
            data-id="{{ $peta->id }}"
            data-toggle="modal"
            data-target="#modalEdit"
            aria-hidden="true"
          ></i
        ></a>
        <a href="#"
          ><i
            class="fa fa-trash open-modalHapus"
            data-id="{{ $peta->id }}"
            aria-hidden="true"
            data-toggle="modal"
            data-target="#modalKonfirmasiH"
          ></i
        ></a>
      </td>
    </tr>  
    @endforeach
  </tbody>
</table>
  
@endsection
@section('petabidang','active')