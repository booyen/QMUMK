<?php
	require_once "../includes/initiate.php";
	page_permission("introduce_medicine");	
	sns_header('New Medicine');
?>

<div id="new-medicine" class="container page">
<div class="panel panel-default">
<div class="panel-heading theme-medicines"><span class="inlineicon edit-mini">Ubat Baru</span></div>
<div class="panel-body">
<ol class="breadcrumb link-medicines">
  <li><a href="../dashboard">Laman utama</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li><a href="../medicines/">Direktori ubat</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li class="active">Ubat </li>
</ol>

<?php
if(isset($_POST['submit'])){
	
	$category=$_POST['category'];
	$code=friendly(strtoupper($_POST['code']));
	$name=friendly($_POST['name']);
	$price=friendly($_POST['price']);
	$frequency=($_POST['frequency']);
	$condition=($_POST['condition']);
	$usage=($_POST['usage']);
	$price=preg_replace("/[^0-9\s]/", "", $price);
 	$added_by=$_SESSION['id'];

	if(introduce_medicine($category,$code,$name,$price,$frequency,$condition,$usage,$added_by)==true){
	write_log("$_SESSION[id]","introduced new Medicine with the name of $name and code $code","medicine","30");
	echo"<div class='alert alert-success' role='alert'>$name has been successfully registered. (Code: $code)</div>";
	echo"<a class='btn btn-default formbutton theme-medicines' href=../medicines/>Show All</a>";
	}else{
	echo"<div class='alert alert-danger' role='alert'>Please fill out all required fields!</div>";	
	echo"<a class='btn btn-default formbutton theme-medicines' href=../medicines/new.php>try again</a>";
	}
	
}else{

?>
<form method="post" action="" enctype="multipart/form-data">
	<div class="form-group"><label>Kategori ubat:</label><select class="form-control"  name='category'  id='category' >
            <option value='Kumur'>Ubat Kumur</option>
            <option value='Titik'>Ubat Titik/Sapu</option>
			<option value='Sapu'>Ubat Sapu(poison)</option>
			<option value='Tablet'>Tablet</option>
	</select></div>

	<div class="form-group"><label>Kekerapan ubat:</label><select class="form-control"  name='frequency'  id='frequency' >
			<option value='OD'>OD - 1x sehari</option>
			<option value='BD'>BD - 2x Sehari</option>
            <option value='TDS'>TDS - 3x Sehari</option>
			<option value='QID'>QID - 4x Sehari</option>
			
	</select></div>


	<div class="form-group"><label>Pengunaan:</label><select class="form-control"  name='condition'  id='condition' >
			<option value='Selepas makan'>Selepas makan</option>
			<option value='Sebelum makan'>Sebelum makan</option>
            <option value='Bila perlu'>Bila perlu</option>
			<option value='Habiskan'>Habiskan</option>
			
	</select></div>



<div class="form-group"><label>Cara penggunaan:</label><select class="form-control"  name='usage'  id='usage' >
			<option value='Hisap'>Hisap</option>			
			<option value='Kumur'>Kumur</option>
			<option value='kunyah'>Kunyah</option>
			<option value='Sapu'>Sapu</option>
			<option value='Telan'>Telan</option>
			<option value='Titik'>Titik</option>
	</select></div>

	<div class="form-group"><label>Kod Ubat:</label><input class="form-control"  name="code" type="text"/></div>
	<div class="form-group"><label>Nama ubat:</label><input class="form-control"  name="name" type="text" /></div>
	<div class="form-group"><label>Harga:</label><input class="form-control"  name="price" type="text"  /><i>e.g: Harga per tablet/botol</i></div>
	<input name="submit" class="btn btn-default formbutton theme-medicines" type="submit" value="Register">
</form>
<?php }?>

</div>
</div> <!-- panel panel-default -->
</div> <!-- container -->

<?php sns_footer();?>