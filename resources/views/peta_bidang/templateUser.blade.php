<head>
    <script src="https://kit.fontawesome.com/5fbcc24921.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300;1,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300;1,700&display=swap');  
    body {
      font-family: 'Poppins', sans-serif;
      position: relative;
      overflow-x: hidden;
      background-color: #ffffff;
      font-weight: 300;
      text-align: center;
      /* align-items: center; */
      /* align-content: center; */
  }
  body,
  html { height: 100%;}
  h1{
    font-weight: 700 !important;
  }
  .inputNomorBidang::-webkit-input-placeholder {
  font-family: 'Poppins';
}

.inputNomorBidang:-ms-input-placeholder {
  font-family: 'Poppins';
}

.inputNomorBidang:-moz-placeholder {
  font-family: 'Poppins';
}

.inputNomorBidang::-moz-placeholder {
  font-family: 'Poppins';
}
input, input:focus, input:hover, input:active {
    outline: none;
    box-shadow:none;
}
.hasilPencarian {
  border: 1px solid #c5ced6;width: 100%;border-radius: 10;height: 2em;
}
ul {
    list-style-type: none;
}
 </style>
  
  </head>
  <body>
    <div style="top: 12em;position: relative;">
    <h1>Aplikasi Peta Bidang</h1>
    <div class="row" style="margin-left: auto;margin-right: auto;position: relative;top: 2em;">
        <div class="col-lg-1"></div>
        <div class="col-lg-8">
            <div style="border: 2px solid #c5ced6;width: 100%;border-radius: 10;height: 2em;">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input style="border: none;width: 95%;" onkeyup="search(this.value)" id="input" class="inputNomorBidang"placeholder="Masukan Nomor Peta Bidang"/>
            </div>
            <div class="mt-0" >
              <ul id="results">
              </ul>
            </div>
          </div>
          <div class="col-lg-2" style="margin-bottom: 2em;">
            <button class="btn" id="cari" style="background-color: #2c88d9; color: white; margin-top: -0.2em; width: 100% !important;">Cari</button>
          </div>
    </div>
    </div>
  </body>
<script type="text/javascript">$(document).on("click", "#cari", function () {
  nomor = document.getElementById("input").value ;
  var url = '{{ route("showToGuest") }}';
  url = url+"?nomor="+nomor;
  window.location.href = url;

});
</script>
<script>
  function resetResults(){
    $('#results').html("")
  }
  function renderResults(results){
    $('#results').html(results)
  }
  function search(keyword){
    resetResults()
    $.ajax({
                url: 'cari?keyword='+keyword,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                  // console.log(data);
                  console.log('cari?keyword='+keyword)
                  var isi = "";
                  data.forEach(element => {
                    // console.log(element.nomor)
                    isi += `<li class= "hasilPencarian" onclick="clicked(this.innerHTML)"">${element.nomor}</li>`;
                  });
                  renderResults(isi)
                }
            });
  };
  function clicked(inner){
    console.log(inner);
    document.getElementById('input').value = inner
    resetResults()
  }
</script>
<script>
$( document ).ready(function() {
    resetResults();
});
</script>
