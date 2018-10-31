 <?php
    require_once "../includes/initiate.php";
    page_permission("my_porfile");
    sns_header('My Profile');
?>

<div id="branch-profile" class="container page">
<div class="panel panel-default">
  <div class="panel-heading theme-staff"><span class="inlineicon my-profile-mini">Profil saya</span></div>
<div class="panel-body">
<ol class="breadcrumb link-staff">
  <li><a href="../dashboard">Laman utama</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li><a href="../staff/">Staf</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li class="active">Profil saya</li>
</ol>

<div class="row">
<div class="col-md-2">
<div class="profile_page_pic text-center"><?php echo staff_img("$_SESSION[id]","128px");?></div>
</div>

<div class="col-md-10">
<table class="table table-striped link-staff"><tbody>
    <tr><td>Nama Penuh:</td><td><a class="staff"><?php echo staff_info("full_name",$_SESSION['id']);?></a></td></tr>
    <tr><td>Gelaran:</td><td><?php echo staff_info("title",$_SESSION['id']);?></td></tr>
    <tr><td>Nama pertama:</td><td><?php echo staff_info("first_name",$_SESSION['id']);?></td></tr>
    <tr><td>nama terakhir:</td><td><?php echo staff_info("last_name",$_SESSION['id']);?></td></tr>
    <tr><td>ID pendaftaran:</td><td><?php echo staff_info("id",$_SESSION['id']);?></td></tr>
    <tr><td>Tahap akses:</td><td><?php echo staff_info("access_level",$_SESSION['id']);?></td></tr>
    <tr><td>Pangkat:</td><td><?php echo access_level2rank(staff_info("access_level",$_SESSION['id']));?></td></tr>
    <tr><td>ID Cawangan:</td><td><?php echo "$global_permission->guardian_short_name"; echo staff_info("branch",$_SESSION['id']);?></td></tr>
    <tr><td>Cawangan yang ditugaskan:</td><td><?php echo branch_name(staff_info("branch",$_SESSION['id']));?></td></tr>
    <tr><td>ID pengguna:</td><td><?php echo staff_info("userid",$_SESSION['id']);?></td></tr>
    <tr><td>Password:</td><td>*******</td></tr>
    <tr><td>No. untuk dihubungi:</td><td><?php echo staff_info("contact",$_SESSION['id']);?></td></tr>
    <tr><td>No. Tel bimbit:</td><td><?php echo staff_info("mobile",$_SESSION['id']);?></td></tr>
    <tr><td>Skype:</td><td><?php echo staff_info("skype",$_SESSION['id']);?></td></tr>
    <tr><td>Alamat peribadi:</td><td><?php echo staff_info("address",$_SESSION['id']);?></td></tr>
    <tr><td>Aktiviti terakhir:</td><td><?php echo last_update(1,"staff_info");?></td></tr>
    <tr><td>Log:</td><td><?php echo no_of_actions($_SESSION['id']);?> aktiviti setakat ini.</td></tr>
</tbody></table>
</div>
</div>

    <a class="btn btn-default formbutton theme-staff" href="edit-my-profile<?php echo "$extension";?>">Sunting profil</a>

    <div class="panel panel-default push_low">
    <div class="panel-heading themde-staff">Aktiviti terbaru</div>
    <div class="panel-body panel-log">
    <?php 
    $sql=mysqli_query($con, "select * from p_logs where user='$_SESSION[id]' order by id desc limit 5")or die(mysqli_error());
    while($display_log=mysqli_fetch_array($sql)){
    ?>
    <li><?php echo $display_log['action']?> di <?php echo display_time("$display_log[at]");?></li>
    <?php }?>
    </div>
    </div>

</div>
</div> <!-- panel panel-default -->
</div> <!-- container -->

<?php sns_footer();?>