<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../theme/css/bootstrap.min.css">
<link rel="stylesheet" href="../theme/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../theme/css/main.css">
<link rel="stylesheet" href="theme/css/patientui.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../theme/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
<?php
  $rerer = $global_permission->portal_name;
  if( if_logged_in() == true ):
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top nav-style">
   <a class="navbar-brand" href="../dashboard">
        <!-- <div class="img-brand img-responsive"><img alt="Brand" src="#" class="img-responsive img-brand"/> <?php //echo get_global('portal_name');?></div> -->
        <div class="text" style="color:#fff; font-size: 15pt;">QMEDIC<b>UMK</b></div>
        <!-- untuk logo link ---../theme/images/logo1.png -->
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../dashboard">Laman utama <span class="sr-only">(current)</span></a>
      </li>
     

       
      <li class="nav-item dropdown">
       <a href="#" class="nav-link dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo get_global('guardian_short_name'); echo staff_info('branch');?> - <?php echo branch_name(staff_info('branch'));?> <span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php if(display_permission("register_patient")==true){?>
          <a class="dropdown-item" href="../patients/register-patient.php">Daftar Pesakit baru</a>
         <?php }?>
        <?php if(display_permission("consumed_stock_local")==true){?>
          <a class="dropdown-item" href="../medicines/stocks.php">Stock Ubatan</a>
          <?php }?>
          <div class="dropdown-divider"></div>
          <?php if(display_permission("pending_prescriptions")==true){?>
          <a class="dropdown-item" href="../patients/pending-reports.php">Pesakit yg sedang menunggu (<?php echo count_pending();?>)</a>

          <?php }?>
        </div>
      </li>



     
    
    </ul>


    <form class="form-inline my-2 my-lg-0" method="GET" action="../search" >
      <input class="form-control mr-sm-2 search-bar" type="search" name="searchme" placeholder="Cari pesakit @ ubat" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Cari</button>
    </form>

</div>

        <li class="nav-item dropdown navicon" style="list-style:none;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i  style="
          display: inline-flex;
        vertical-align: middle;" class="material-icons">
          supervised_user_circle </i>
          <?php echo staff_info("full_name");?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item"  href="../staff/my-profile.php">Profil Saya</a>
          <a class="dropdown-item"  href="../staff/my-profile.php">Hubungi Developer</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../login/signout.php">Log Keluar</a>
          
        </div>
      </li>



 
</nav>

<?php endif; ?>