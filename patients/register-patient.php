<?php
	require_once "../includes/initiate.php";
	page_permission("register_patient");
	sns_header('New Patient');
?>

<div id="new patient" class="container page col-md-offset-4">
<div class="panel panel-default">
<div class="panel-heading theme-patients"><span class="inlineicon edit-mini">Pesakit Baru</span></div>
<div class="panel-body">
<ol class="breadcrumb link-patients">
 	<li>
  <a href="../dashboard">Papan pemuka</a>
	</li>
 <i class="material-icons bread-icon">navigate_next</i> 
 <li><a href="../patients/">Pesakit</a></li>
 <i class="material-icons bread-icon">navigate_next</i> 
<li class="active"> Pendaftaran pesakit baru</li>
</ol>
<?php

if(isset($_POST['submit'])){

	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$kadp=$_POST['somenakad-pengenalan'];
	$name=friendly($_POST['name']);
	$notel=friendly($_POST['notel']);
	$email=friendly($_POST['email']);
	$bangsa=friendly($_POST['bangsa']);
	$profession=friendly($_POST['profession']);
	$ref_contact=friendly($_POST['refcontact']);
	$nostafpel=friendly($_POST['nostafpel']);

	$result=register_patient($gender,$age,$kadp,$name,$notel,$email,$bangsa,$profession,$ref_contact,$nostafpel);

	if($result==false){
	echo"<div class='alert alert-danger' role='alert'>Please fill out all required fields!</div>";	

	}else{

	write_log("$_SESSION[id]","registered patient $name at $global_permission->guardian_short_name $_SESSION[branch]","patient","20");

	print "<script>";
		print " self.location='register-report.php?id=$result&success';"; 
	print "</script>";
	
	}

}
?>
<div class="row" id="contentmain align-items-center ">
	<div class="col-lg-12">
<form method="post" action="" enctype="multipart/form-data">



	<div class="form-row">

		<div class="form-group col-md-8 ">
			<label>Nama penuh:</label>
				<input class="form-control" name="name" type="text"  placeholder="Seperti: Siti Nurhaliza binti Ahmad Taruddin" />
		
		
		</div>
		
		<div class="form-group col-md-4">
			<label>No. Kad pengenalan (MyKad):</label>
				<input name="somenakad-pengenalan" id="kadpengenalan" class="form-control"
    			oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
   				 type = "number" maxlength = "12" />
			</div>
	
	</div>

<div class="form-row">

		
		

		<div class="form-group col-md-2">
			<label>No. Telefon:</label>
				<input autocomplete="no" class="form-control" name="notel" type="number" />
		</div>
	
		<div class="form-group col-md-3">
			<label>Email:</label>
				<input class="form-control" name="email" type="email" />
		</div>
		
			<div class="form-group col-md-3">
		<label>Kategori Pesakit:</label>
			<select name='profession' class="form-control"  id='gender'  >
				<option value='Pelajar'>Pelajar</option>
				<option value='Staff'>Staff</option>
				<option value='Tanggungan Staff'>Tanggungan Staff</option>
			</select>
	</div>

	<div class="form-group col-md-4">
			<label>No. Staff/Pelajar UMK:</label>
				<input class="form-control" name="nostafpel" type="text" />
		</div>



</div>

<div class="form-row">
<!-- Jantina Pesakit /select -->


	<div class="form-group col-md-3">
		<label>Jantina:</label>
			<select name='gender' class="form-control"  id='gender'  >
				<option value='Lelaki'>Lelaki</option>
				<option value='Perempuan'>Perempuan</option>
			</select>
	</div>

<!-- end jantina -->

	<div class="form-group col-md-3">
		<label>Umur:</label>
		
			     <input  class="form-control" autocomplete="off" name='age' id='age'  type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
   				 type = "number" maxlength = "2">
      
    </div>
		


 <div class="form-group col-md-2">
		<label>Bangsa:</label>
			<select  class="form-control"  name='bangsa' class="inputOne"  id='serial' >
				<option value="cina">Cina</option>
				<option value="india">India</option>
				<option value="Melayu">Melayu</option>
				<option value="orang asli">Orang asli</option>
				<option value="siam">Siam</option>
				<option value="sabah">Suku kaum Sabah</option>
				<option value="sarawak">Suku kaum Sarawak</option>
				<option value="Lain-lain">Lain-lain</option>
			</select>
			</div>

<div class="form-group col-md-3">
		<label>No. Tel untuk dihubungi:</label>
		
			     <input  class="form-control" autocomplete="off" name='refcontact' id='age'  type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
   				 type = "number" maxlength = "20">
					  <small id="emailHelp" class="form-text text-muted">*Jika berlaku kecemasan</small>
      
    </div>
	

</div>


	</div>
	<input name="submit" class="btn btn-default formbutton theme-patients" name="submit" class="formbutton patient" type="submit" value="Register">
</form> 
</div>
</div>

</div>
</div> <!-- panel panel-default -->
</div> <!-- container -->

<?php sns_footer();?>