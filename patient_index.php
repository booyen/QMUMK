<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="theme/css/patientui.css">
  <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
   
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 iklan-pesakit" >
         <!-- <h1>Iklan</h1>
         <p>366px x 100vh</p> -->
         <!-- image size w 366 x h 717 -->

         <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <!-- slide pertama -->
    <div class="carousel-item active">
      <img class="d-block w-100 fill" src="media/images_slide/slide1.jpg" alt="First slide">
    </div>
    <!-- slide kedua// copy sehingga /&* untuk buat slider baru-->
    <div class="carousel-item">
      <img class="d-block w-100 fill" src="media/images_slide/slide2.jpg" alt="Second slide">
    </div> 
    <!-- /&* -->
   
  </div>
</div>
        </div>
      

        <div class="col-md-9 bahagian-utama container-fluid " >
        
        <div class="row-fluid section-atas">

            <div class="date ">
                <!-- Selamat datang atau apa yang sama waktu dengannya -->
          <p><small><i class="material-icons">calendar_today</i> <span id="datetime"></span></small></p>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = 
(("0"+dt.getDate()).slice(-2)) +"/"+ 
(("0"+(dt.getMonth()+1)).slice(-2)) +"/"+
 (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) 
 +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>
            </div>
         <!-- end timendate -->
                  
        </div>
       
        <div class="row-fluid pengumuman">
            <div class="col-md-12 ">

  </div>
  
  <div class="col-md-12  header-menu ">
      <h1 style="color:#fff;"> SELAMAT DATANG</h1>
      <p class="Display-4">Sila pilih aktiviti yang anda inginkan dengan menggunakan tetikus</p>
  </div>
 
<div class="row main-btn">
 

 <!-- Button section -->


  <div class="col-sm-6">
      <div class="card pesakit1">
        <div class="row ">
            <div class="col-auto icon-pesakit" >
                <img  src="theme/icons/iconjumdoc.png" class="img-fluid icon-menu" alt="">
            </div>
            <div class="col">
                <div class="card-block px-2 card-text-main">
                    <h4 class="card-title"><a href="pendaftaran_baru.php">Pendaftaran baru</a></h4>
                    <p class="card-text">Bagi pesakit kali pertama</p>
                   
                </div>
                
            </div>
            
        </div>
       
    </div>
  </div>
  <div class="col-sm-6">
     <div class="card pesakit1">
        <div class="row ">
            <div class="col-auto icon-pesakit" >
                <img  src="theme/icons/iconjumdoc.png" class="img-fluid icon-menu" alt="">
            </div>
            <div class="col">
                <div class="card-block px-2 card-text-main">
                    <h4 class="card-title"><a href="returning_patient.php">Sudah Daftar</a></h4>
                    <p class="card-text">Jika sudah mendaftar</p>
                   
                </div>
                
            </div>
            
        </div>
       
    </div>
  </div>

<div class="col-sm-6">
     <div class="card pesakit1">
        <div class="row ">
            <div class="col-auto icon-pesakit" >
                <img  src="theme/icons/information.png" class="img-fluid icon-menu" alt="">
            </div>
            <div class="col">
                <div class="card-block px-2 card-text-main">
                    <h4 class="card-title"><a href="faq.php">Soalan lazim</a></h4>
                    <p class="card-text">Fahami bagaimana qmedic berfungsi</p>
                   
                </div>
                
            </div>
            
        </div>
       
    </div>
  </div>
  <div class="col-sm-6">
   
     <div class=" hoverable card pesakit1">
        <div class="row ">
            <div class="col-auto icon-pesakit" >
                <img  src="theme/icons/newspaper.png" class="img-fluid icon-menu" alt="">
            </div>
            <div class="col">
                <div class="card-block px-2 card-text-main">
                    <h4 class="card-title"><a href="contact.php"> Aduan atau cadangan</a></h4>
                    <p class="card-text">Berikan maklum balas anda</p>
                   
                </div>
                
            </div>
            
        </div>
       
</div>
  </div>


  </div>
  
          
 </div>
             
 </div>
     
 </div>

</div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>