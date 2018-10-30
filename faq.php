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
      <h1 style="color:#000;">Soalan lazim</h1>
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
   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Soalan 1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Soalan 2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Soalan 3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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