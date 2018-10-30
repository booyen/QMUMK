<?php
    require_once "../includes/initiate.php";
    page_permission("staff_profile");

	if(isset($_GET['id'])){$id=$_GET['id'];
        //action
	}else{
	   $id=$_SESSION['id'];
	}
    $profile=mysqli_fetch_object(mysqli_query($con, "select * from p_staff_dir where id='$id' "));

    sns_header( $profile->full_name );
?>

<?php ?>
<div id="staff-profile" class="container page">
<div class="panel panel-default">
  <div class="panel-heading theme-staff"><span class="inlineicon staff-mini">Profil <?php echo $profile->full_name;?></span></div>
<div class="panel-body">
<ol class="breadcrumb link-staff">
  <li><a href="../dashboard">Laman utama</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li><a href="../staff/">Staf</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li class="active">profil</li>
</ol>

<div class="row">
<div class="col-md-2">
<div class="profile_page_pic text-center"><?php echo staff_img($profile->id,"128px");?></div>
</div>

<div class="col-md-10">
<table class="table table-striped link-staff"><tbody>
    <tr><td>Nama penuh:</td><td><a class="staff"><?php echo $profile->full_name;?></a></td></tr>
    <tr><td>Title:</td><td><?php echo $profile->title;?></td></tr>
    <!-- <tr><td>First Name:</td><td><?php echo $profile->first_name;?></td></tr> -->
    <!-- <tr><td>Last Name:</td><td><?php echo $profile->last_name;?></td></tr> -->
    <tr><td>No pendaftaran QMedic ID:</td><td><?php echo $profile->id;?></td></tr>
    <tr><td>Tahap akses:</td><td><?php echo $profile->access_level;?></td></tr>
    <tr><td>Pangkat:</td><td><?php echo access_level2rank($profile->access_level);?></td></tr>
    <tr><td>ID cawangan:</td><td><?php echo "$global_permission->guardian_short_name"; echo $profile->branch;?></td></tr>
    <tr><td>Cawangan:</td><td><?php echo branch_name($profile->branch);?></td></tr>
    <tr><td>ID Pengguna:</td><td><?php echo $profile->userid;?></td></tr>
    <tr><td>No. tel (Pejabat):</td><td><?php echo $profile->contact;?></td></tr>
    <?php if(display_permission("mobile_number")==true){?><tr><td>No. tel (bimbit):</td><td><?php echo $profile->mobile;?></td></tr><?php }?>
    <!-- <tr><td>Skype:</td><td><?php echo $profile->skype;?></td></tr> -->
    <?php if(display_permission("address")==true){?><tr><td>Alamat peribadi:</td><td><?php echo $profile->address;?></td></tr><?php }?>
    <tr><td>Aktiviti terakhir:</td><td><?php echo display_time($profile->last_update);?></td></tr>
    <tr><td>Log:</td><td><?php echo no_of_actions($profile->id);?> activities so far</td></tr>
    <tr><td>Didaftarkan oleh:</td><td><a class="staff" href="profile<?php echo $extension;?>?id=<?php echo staff_info("registered_by",$profile->id);?>"><?php echo staff_info("full_name",staff_info("registered_by",$profile->id));?></a></td></tr>
</tbody></table>
</div>
</div>
    
	<?php if(display_permission("add_staff")==true){?>
    <a class="btn btn-default formbutton theme-staff" href="edit.php?id=<?php echo "$id";?>">Sunting profil</a>
    <?php }?>

    <div class="panel panel-default push_low">
    <div class="panel-heading themde-staff">Aktiviti terkini</div>
    <div class="panel-body panel-log">
	<?php 
    $log_count = 0;
	$sql=mysqli_query($con, "select * from p_logs where user='$profile->id' order by id desc limit 5")or die(mysqli_error());
	while($display_log=mysqli_fetch_array($sql)){ $log_count++;
	?>
    <li><?php echo $display_log['action']?> at <?php echo display_time("$display_log[at]");?></li>
    <?php }?>
    <?php if($log_count==0){ echo "<p>Tiada aktiviti terkini!</p>"; }?>
    </div>
    </div>
    <?php if($log_count!=0){ ?>
        <a class="btn btn-default formbutton theme-stsaff norm" href="staff-log.php?id=<?php echo "$id";?>">Lihat Log</a>
    <?php } ?>
	
</div>
</div> <!-- panel panel-default -->
</div> <!-- container -->

<?php sns_footer();?>