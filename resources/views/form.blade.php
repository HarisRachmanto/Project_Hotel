<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <title>Pemesanan Hotel </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">HOTEL HEBAT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kamar">Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/fasilitas">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/form">Pesan</a>
        </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
<div class="res">
  <center>
<form method="post" action="{{ route('form.store') }}">
  @csrf
  <label for="fname"><b>Tanggal Cek In :</b></label>
  <input type="date" required name="tgl_check_in" id="fname">
  <label for="lname"><b>Tanggal Cek Out :</b></label>
  <input type="date" required name="tgl_check_out" id="lname">
  <label for="fname"><b>Jumlah Kamar :</b></label>
  <input type="number" required id="fname" name="jumlah_kamar">  

</center>
</div>
<br>
<div class="container">

<fieldset>

<!-- Form Name -->
<legend><b>Form Pemesanan<b></legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label"><b>Nama Pemesan</b></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="nama_tamu" placeholder="Nama Pemesan" class="form-control"  type="text">
    </div>
  </div>
</div>




<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label"><b>E-Mail</b></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Anda" class="form-control"  type="email">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label"><b>No Handphone</b></label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="no_hp" placeholder="08-......." class="form-control" type="number">
    </div>
  </div>
</div>

  <!-- Text input-->
   
<div class="form-group"> 
  <label class="col-md-4 control-label"><b>Tipe Kamar</b></label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="tipe_kamar" class="form-control selectpicker" >
        @foreach($dataKamar as $row)
										<option value="{{$row->tipe_kamar}}">{{$row->tipe_kamar}}</option>
									@endforeach
    </select>
  </div>
</div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Pesan<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->

    <br><br><br><br><br><br><br>
	<div class="footer-bottom">
		&copy 2022 | design by Haris Rachmanto
	</div>
</footer>
  
</div>
    
</body>
</html>