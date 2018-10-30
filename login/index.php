<?php 
require_once "../pre-includes/all.php"; 

	$invalid=false; $expired=false; $error=false; $blocked=false; $revoked=false; $password=false; $signout=false;

	soft_singout();

	if(isset($_GET['status'])){
		$show_status=$_GET['status'];
		
		if($show_status=="invalid"){$invalid=true;}
		else if($show_status=="error"){$error=true;}
		else if($show_status=="expired"){$expired=true;}
		else if($show_status=="blocked"){$blocked=true;}
		else if($show_status=="revoked"){$revoked=true;}
		else if($show_status=="password"){$password=true;}
		else if($show_status=="signout"){$signout=true;}
		else{ /* action */ }
		
	}

	include "../theme/htmlhead.php";
	echo "<title>".get_global('portal_name')."</title>";
	include "../theme/header.php";
?>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

	<div class="logo-set">
		
		<h1 class="logo-text text-center">QMEDIC<strong>UMK</strong></h1>
		<h5 class="text-center">Universiti Malaysia Kelantan Kampus Jeli</h5>
	</div>


<?php 
	if($invalid==true){?><div class="alert alert-danger" role="alert">Opps!.Mungkin Username atau password anda salah.Sila cuba lagi!.</div>
<?php 
	}
	if($expired==true){?>
<?php 
	}
	if($error==true){?><div class="alert alert-danger text-center" role="alert">Maaf, kami gagal untuk mengenal pasti siapakah anda. Sila hubungi administrator.</div>
<?php 
	}
	if($blocked==true){?><div class="alert alert-danger text-center" role="alert">Tidak dibenarkan. Sila hubungi administrator.</div>
<?php 
	}
	if($revoked==true){?><div class="alert alert-danger text-center" role="alert">Tidak dibenarkan masuk ke dalam sistem ketika diluar waktu berkerja atau klinik tutup</div>

<?php 
	}
	if($password==true){?><div class="alert alert-success text-center" role="alert">Password telah berjaya dikemaskini, sila log masuk dengan password baru anda.</div>
<?php 
	}
	if($signout==true){ ?><div class="alert alert-success text-center" role="alert">Anda telah log keluar dari sistem. Untuk masuk semula sila log masuk.</div>
<?php }?>

<div class="panel panel-default log-in-panel">
<div class="panel-body ">
<form method="post" action="process.php">
  <div class="form-group" style="padding: 30px;">
		  <div class="form-group">
		    <label for="user_id">Email</label>
		    <input type="email" class="form-control" id="user_id" name="user_id" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		  </div>

		<input id="extra_key"  name="extra_key" type="hidden" value="<?php echo md5(date( 'A  D, M jS, Y' ));?>">
	
		<input name="submit" class="btn btn-default formbutton theme-portal" type="submit" value="Login">

		<h5 class="text-center text-bottomsdf" ><small>Dibangunkan oleh CCI Jeli</small></h5>
	
	</div>
</form>
</div></div></div>
</div>
</div>
<?php include "../theme/footer.php";?>
</body>
</html>