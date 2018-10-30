<?php
	require_once "../includes/initiate.php";
	page_permission("add_staff");
	sns_header('New Staff');
?>

<div id="new-staff" class="container page">
<div class="panel panel-default">
<div class="panel-heading theme-staff"><span class="inlineicon edit-mini">Profil baru</span></div>
<div class="panel-body">
<ol class="breadcrumb link-staff">
  <li><a href="../dashboard">Laman utama</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li><a href="../staff/">Staf</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li class="active">Daftar</li>
</ol>
<?php
if(isset($_POST['submit'])){
	
	$title=$_POST['title'];
	$first_name=friendly($_POST['first_name']);
	$last_name=friendly($_POST['last_name']);
	$userid=friendly($_POST['userid']);
	$passkey=friendly($_POST['passkey']);
	$contact=friendly($_POST['contact']);
	$mobile=friendly($_POST['mobile']);
	$skype=friendly($_POST['skype']);
	$address=friendly($_POST['address']);
	$access_level=friendly($_POST['access_level']);
	$status=friendly($_POST['status']);
	$branch=friendly($_POST['branch']);

	$result=register_staff($title,$first_name,$last_name,$userid,$passkey,$contact,$mobile,$skype,$address,$access_level,$branch,$status);
	
	if($result!=""){
	echo"<div class='alert alert-success' role='alert'>Profile successfully created!</div>";
	write_log("$_SESSION[id]","registered new staff member $title $first_name $last_name","staff","50");
	
		if(isset($_FILES["image"]["tmp_name"])&& $_FILES["image"]["tmp_name"]!=""){
			$dest="../media/staff/$result".".png";
			copy($_FILES["image"]["tmp_name"],$dest);
		}

	}else{
	echo"<div class='alert alert-danger' role='alert'>Please fill out all required fields!</div>";	
	echo"<input class='btn btn-default formbutton theme-staff' value='Try Again' onclick='window.history.back()'/>";
	}	

}else{

?>
<form method="post" action=""  enctype="multipart/form-data">
	<div class="form-group"><label>Title:</label><select class="form-control"  name='title'  id='title' size='1' tabindex='1'>
            <option value='Dr.'>Dr.</option>
            <option value='Mr.'>Tuan.</option>
            <option value='Miss.'>Puan.</option>
			<option value='Mrs.'>Cik. </option>
			<option value='Mrs.'>Encik. </option>
            <option value='Nurse.'>Nurse. </option>
    </select></div>
	
	<div class="form-group"><label>First Name:</label><input class="form-control" name="first_name" type="text" /></div>
	<div class="form-group"><label>Last Name:</label><input class="form-control" name="last_name" type="text" /></div>
	<div class="form-group"><label>Staff ID:</label><input class="form-control" name="userid" type="text" /><i>Masukkan no staf seperti yang disediakan UMK. Tidak boleh ditukar</i></div>
	<div class="form-group"><label>Kata laluan:</label><input class="form-control" name="passkey" type="text" /></div>
	<div class="form-group"><label>No Pejabat:</label><input class="form-control" name="contact" type="text" /></div>
	<div class="form-group"><label>No. telefon bimbit:</label><input class="form-control" name="mobile" type="text" ><i></i></div>
	<div class="form-group"><label>Chat:</label><input class="form-control" name="skype" type="text" /></div>
	<div class="form-group"><label>Alamat peribadi:</label><input class="form-control" name="address" type="text"  /><i></i></div>
	<div class="form-group"><label>Tahap akses:</label><select class="form-control" name='access_level'  id='access_level' size='1' tabindex='1'>
            <option value='1'>1 - <?php echo access_level2rank(1);?></option>
            <option value='2'>2 - <?php echo access_level2rank(2);?></option>
            <option value='3'>3 - <?php echo access_level2rank(3);?></option>
            <option value='4'>4 - <?php echo access_level2rank(4);?></option>
            <option value='5'>5 - <?php echo access_level2rank(5);?></option>
    </select></div>
	<div class="form-group"><label>Status:</label><select class="form-control" name='status'  id='status' size='1' tabindex='1'>
            <option value='active'>aktif</option>
            <option value='blocked'>blocked</option>

    </select></div>    
	<div class="form-group"><label>Cawangan klinik:</label>
	<select class="form-control" name='branch'  id='branch' size='1' tabindex='1'>
	<?php 
	$sql=mysqli_query($con, "select * from p_branches_dir order by last_update desc limit 2000")or die(mysqli_error());
	while($branches_dir=mysqli_fetch_array($sql)){
	?>
    <option value='<?php echo $branches_dir['id']?>'><?php echo "$global_permission->guardian_short_name"; echo $branches_dir['id']?> - <?php echo $branches_dir['name']?></option>
	<?php }?>
    </select>
    <i>Assign headquarter for the staff responsible to handle global quires</i></div>
    <div class="form-group"><label>Gambar Profil:</label><input class="form-control" name="image" type="file" /></div> 
	<input name="submit" class="btn btn-default formbutton theme-staff" type="submit" value="Register">

</form>
<?php }?>

</div>
</div> <!-- panel panel-default -->
</div> <!-- container -->

<?php sns_footer();?>