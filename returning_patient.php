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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
   
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 iklan-pesakit fixed" >
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
    
  </div>
</div>
        </div>
      

        <div class="col-md-9 bahagian-utama container-fluid scrollit" >
        
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
   
  
  <div class="col-md-12  header-menu  ">
  <div class="row ">
  <div class="col-md-6">
      <h1 style="color:#000;">Sudah daftar</h1>
      <p class="Display-4">Masukkan no kad pengenalan atau no staff/pelajar untuk daftar</p>
 </div>
 <div class="col-md-2">
  <div class="text-right">
               <a  href="patient_index.php"type="" class="btn btn-danger">Kembali ke menu</a>
            </div>
  </div>
 </div>
 </div>
  <div class="col-md-9 ">
     
      <form  autocomplete="off" id="main-part" style="margin-top:80px;">
          
          
  <div class="form-row">
      
    <div class="form-group col-md-6">
        <!-- nama -->
      <label for="inputEmail4">No.Mykad (IC)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan no kad pengenalan anda">
    </div>
   
    <div class="form-group col-md-6">
      <label for="inputPassword4">No. Staff/Pelajar</label>
      <input type="number" class="form-control" id="inputPassword4" placeholder="Masukkan no staff/pelajar anda">
    </div>
  </div>
 
<div class></div>
  <button type="submit" class="btn btn-primary">Daftar</button>

   <button type="reset" class="btn btn-warning">Kosongkan</button>
</form>
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
  
    <script>
    //The page element that will be animated on page load.
    var yourElement = "#main-part";
    //The effect that will be applied to your page element. See https://daneden.github.io/animate.css/ for full list.
    var yourEffect = "slideInUp";
    var effectClass = "animated " + yourEffect;
    $( document ).ready(function() {
    $(yourElement).show().addClass(effectClass).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
    }); 
    /**
        * Do not remove this section; it allows our team to troubleshoot and track feature adoption. 
        * TS:0002-03-028
    */
    </script>
</body>
</html>