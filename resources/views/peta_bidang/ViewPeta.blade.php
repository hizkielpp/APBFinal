<head>
  <script
    src="https://kit.fontawesome.com/5fbcc24921.js"
    crossorigin="anonymous"
  ></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300;1,700&display=swap"
    rel="stylesheet"
  />
  <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"
  ></script>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"
  ></script>
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"
  />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300;1,700&display=swap");
    body {
      font-family: "Poppins", sans-serif;
      position: relative;
      overflow-x: hidden;
      background-color: #ffffff;
      font-weight: 300;
      text-align: center;
      /* align-items: center; */
      /* align-content: center; */
    }
    body,
    html {
      height: 100%;
    }
    h1 {
      font-weight: 700 !important;
    }
    .inputNomorBidang::-webkit-input-placeholder {
      font-family: "Poppins";
    }

    .inputNomorBidang:-ms-input-placeholder {
      font-family: "Poppins";
    }

    .inputNomorBidang:-moz-placeholder {
      font-family: "Poppins";
    }

    .inputNomorBidang::-moz-placeholder {
      font-family: "Poppins";
    }
    input,
    input:focus,
    input:hover,
    input:active {
      outline: none;
      box-shadow: none;
    }
  </style>
</head>
<body> 
  <a href="{{ route('showToGuest') }}">
    <i
    class="fa-solid fa-arrow-left fa-2xl"
    style="position: fixed; left: 1em; top: 1em"
  ></i>
  </a>
  @if (isset($petaBidang))
  <div class="row" style="margin-top: 2em !important">
    <div class="col-lg-12">
      <h1>{{ $petaBidang->nomor }}</h1>
      <h1>{{ $petaBidang->judul }}</h1>
      <h5>{{ $petaBidang->deskripsi }}</h5>
    </div>
    <div class="col-lg-12" style="min-height: 40em">
        <iframe class="embed-responsive-item w-50 h-100 mx-auto" src="images/{{ $petaBidang->namaGambar }}"></iframe>
    </div>
  </div>   
  @else
  <div class="col-lg-12">
    <h1 class="mt-5">Maaf peta bidang tidak ditemukan</h1>
  </div>
  @endif
  

  <div style="top: 12em; position: relative"></div>
</body>
