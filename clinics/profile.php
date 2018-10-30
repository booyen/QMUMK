<?php
    require_once "../includes/initiate.php";
    page_permission("branches_directory");

	if(isset($_GET['id'])){$branch_id=$_GET['id'];}
    sns_header('Clinic Profile');
?>
    <?php $clinic=mysqli_fetch_object(mysqli_query($con, "select * from p_branches_dir where id='$branch_id' "));?>

<div id="branch-profile" class="container page">
<div class="panel panel-default">
  <div class="panel-heading theme-branches"><span class="inlineicon network-mini"> Klinik <?php echo "$clinic->name";?></span></div>
<div class="panel-body">
<ol class="breadcrumb link-branches">
  <li><a href="../dashboard">Laman utama</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li><a href="../clinics/">Klinik</a></li>
   <i class="material-icons bread-icon">navigate_next</i> 
  <li class="active">Profil</li>
</ol>

  
    <table class="table table-striped link-branches"><tbody>
    <tr><td>Dibawah Organisasi:</td><td><?php echo "$global_permission->guardian_name"?></td><td></td></tr>
    <tr><td>ID Klinik:</td><td><?php echo "$global_permission->guardian_short_name"?>-<?php echo "$clinic->id";?></td><td></td></tr>
    <tr><td>Nama Klinik:</td><td><?php echo "$clinic->name";?> (<?php echo "$clinic->type";?>)</td><td></td></tr>
    <tr><td>Alamat:</td><td><?php echo "$clinic->address";?></td><td></td></tr>
    <tr><td>Lokasi:</td><td><?php echo "$clinic->location";?></td><td></td></tr>
    <tr><td>No. Tel:</td><td><?php echo "$clinic->contact";?></td><td></td></tr>
    <tr><td>Kali terakhir dikemaskini:</td><td><?php echo display_time("$clinic->last_update");?></td><td></td></tr>
    </tbody></table>
   
    <?php if(display_permission("add_branch")==true){?>
    <div class="edit-button"><a class="btn btn-default formbutton theme-branches" href="edit.php?id=<?php echo "$clinic->id";?>">Sunting profil</a></div>
    <?php } ?>
    <br><br>
 




    <div class="panel panel-default">
      <div class="panel-heading theme-bransches"><span class="inlineicon netwsork-mini">Graf aliran tunai (jika ada) </span></div>
    <div class="panel-body">


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Token Charges', '<?php echo get_global('currency')." ".charge_mode("a");?>', '<?php echo get_global('currency')." ".charge_mode("b");?>', '<?php echo get_global('currency')." ".charge_mode("c");?>', '<?php echo get_global('currency')." ".charge_mode("d");?>'],
          <?php $get_diff = get_global('recent_hours')/24;  for ($k = 0 ; $k < get_global('recent_hours'); $k++){ $k = $k+$get_diff;?>
          ['-',  <?php echo count_reports_charge_mode("a",$branch_id,$k);?>, <?php echo count_reports_charge_mode("b",$branch_id,$k);?>, <?php echo count_reports_charge_mode("c",$branch_id,$k);?>, <?php echo count_reports_charge_mode("d",$branch_id,$k);?>],
          <?php } ?>

        ]);

        var options = {
            curveType: 'function',
            fontSize: 12,
            fontName: 'Source Sans Pro',
            colors: ['#932bff','#ad5eff', '#c791ff', '#e1c4ff'],
        hAxis: {
            textStyle: {
              fontSize: 13,
              color: 'transparent',
            },
        },
        vAxis: {
            format: '0',
            baselineColor: '#fafafa',
            textStyle: {
              color: 'transparent',
            },
            gridlines: {
                color: 'transparent'
            }
        },
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <div id="curve_chart" style="width: 100%; height: 300px;" class="center-chart"></div>
    <br>


      <div class="row">
        <div class="col-md-6">
        <table class="table table-striped link-branches"><tbody>
            <tr><td>Bil. Pesakit baru:</td><td><?php echo count_today_patients($branch_id,get_global('recent_hours'));?></td><td></td></tr>
            <tr><td>Bil. Laporan baru:</td><td><?php echo count_today_reports($branch_id,get_global('recent_hours'));?></td><td></td></tr>
            <tr><td>Laporan yg belum diuruskan:</td><td><?php echo count_today_preports($branch_id,get_global('recent_hours'));?></td><td></td></tr>
            <tr><td>Cas Ubatan:</td><td><?php echo get_global('currency');?> <?php echo count_today_sales($branch_id,get_global('recent_hours'));?></td><td></td></tr>
        </tbody></table>
        </div>
        <div class="col-md-6">
        <table class="table table-striped link-branches"><tbody>
            <tr><td>Jenis Cas A (<?php echo get_global('currency')." ".charge_mode("a");?>):</td><td><?php echo get_global('currency');?>  <?php echo charge_mode("a")*count_reports_charge_mode("a",$branch_id,get_global('recent_hours'));?></td><td></td></tr>
            <tr><td>Jenis Cas B (<?php echo get_global('currency')." ".charge_mode("b");?>):</td><td><?php echo get_global('currency');?>  <?php echo charge_mode("b")*count_reports_charge_mode("b",$branch_id,get_global('recent_hours'));?></td><td></td></tr>
            <tr><td>Jenis Cas C (<?php echo get_global('currency')." ".charge_mode("c");?>):</td><td><?php echo get_global('currency');?>  <?php echo charge_mode("c")*count_reports_charge_mode("c",$branch_id,get_global('recent_hours'));?></td><td></td></tr>
            <tr><td>Jenis Cas D (<?php echo get_global('currency')." ".charge_mode("d");?>):</td><td><?php echo get_global('currency');?>  <?php echo charge_mode("d")*count_reports_charge_mode("d",$branch_id,get_global('recent_hours'));?></td><td></td></tr>
        </tbody></table>
        </div>
      </div>
        
      <div class="chart-note">*last <?php echo show_recent_hours();?></div>

    </div></div>

</div>
</div> <!-- panel panel-default -->
</div> <!-- container -->

<div id="branch-profile" class="container spage">
<div class="row">
<div class="col-md-12">


</div> <!-- col -->

</div></div>
<?php sns_footer();?>