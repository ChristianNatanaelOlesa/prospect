<?php include 'theme/header.php'; ?>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Other Link References -->
  <script src="assets/link/kit.fontawesome.js"></script>
  <script src="assets/link/ajax.googleapis.js"></script>
  <script src="assets/link/bootstrap3-typeahead-4.0.2.min.js"></script>
  <script src="assets/link/bootstrap.min-3.3.5.js"></script>

<aside class="main-sidebar">
  <section class="sidebar">

    <ul class="sidebar-menu">
            <li class="header"><font color="RED"><font size= "4px">TRAFINDO</font></font></li>
            <li class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=dashboard">
                 <i class="fa fa-home"></i> <span>Dashboard</span>  
              </a>
            </li> 
            <li class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=prospect">
                <i class="fa fa-user"></i> <span>Prospect </span></a> 					
						<ul>	
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=prospect"><i class="fa fa-user"></span></i>    Prospect Baru</a></li>	
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=revisi"><i class="fa fa-user"></span></i>    Revisi Prospect</a></li>
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=klarifikasi"><i class="fa fa-user"></span></i>    Permintaan Klarifikasi</a></li>	
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=progress"><i class="fa fa-user"></span></i>    Prospect to Form Spec</a></li>
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=prospect_pracost"><i class="fa fa-user"></span></i>    Prospect to Pracost</a></li>
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=prospect_harga"><i class="fa fa-user"></span></i>    Prospect to Harga Jual</a></li>
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=prospect_quote"><i class="fa fa-user"></span></i>    Prospect to Quotation</a></li>
						
						
						</ul>			
			 </li>
			 </br>
			<li class="active" >
            <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=formspec_ready">
                <i class="fa fa-user"></i> <span>Form Spec & Drawing</span> 					
						<ul>
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=formspec_ready"><i class="fa fa-user"></span></i>   Form Spec tersedia</a></i> 						
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=formspec_disetujui"><i class="fa fa-user"></span></i>   Form Spec disetujui</a></i>	
						</ul>					
			  </a>
		    </li>
        
			<li class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=prospect">
               <i class="fa fa-user"></i> <span>Pracost</span>  
              </a>
            </li> 
			<li class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=prospect">
                <i class="fa fa-user"></i> <span>Quotation</span>  
					<ul>
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=quotation_draft"><i class="fa fa-user"></span></i>   Quotation Draft</a></i>	
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=quotation_tunggu"><i class="fa fa-user"></span></i>   Quotation Tunggu Approve</a></i> 	
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=quotation_siap"><i class="fa fa-user"></span></i>   Quotation Siap</a></i> 	
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=quotation_aktif"><i class="fa fa-user"></span></i>   Quotation Aktif</a></i>
						</ul>						
              </a>
            </li>            
           
           </ul>
  </section>
</aside>

<div class="content-wrapper">
  <section class="content-header">
		<h4>Selamat datang <?php echo $_SESSION["namalengkap"] ?></h4>
    <h1>DASHBOARD</h1>
		 
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <?php
                include "konekso.php";
                $session_nama = $_SESSION['namalengkap'];
                $total_status0=mysqli_query($config,"select count(noprospect) as total_status0 from h_rpospect where status = 0 and sales='$session_nama' ");
                $data_status0=mysqli_fetch_assoc($total_status0); 
                
                if ($data_status0['total_status0'] > 0) {
                  echo '<h3>'.$data_status0['total_status0'].'</h3>';
                }else {
                  echo '<h3>0</h3>';
                }

              ?>
              <p>Prospect OPEN</p>
            </div>
            <div class="icon">
              <i class="fa fa-folder-open" aria-hidden="true"></i>
            </div>
          </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <?php
                include "konekso.php";
                $session_nama = $_SESSION['namalengkap'];
                $total_status1=mysqli_query($config,"select count(noprospect) as total_status1 from h_rpospect where status = 1 and sales='$session_nama' ");
                $data_status1=mysqli_fetch_assoc($total_status1); 
                
                if ($data_status1['total_status1'] > 0) {
                  echo '<h3>'.$data_status1['total_status1'].'</h3>';
                }else {
                  echo '<h3>0</h3>';
                }

              ?>
              <p>Prospect Wait Klarifikasi</p>
            </div>
            <div class="icon">
              <i class="fa fa-hourglass-start" aria-hidden="true"></i>
            </div>
          </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-light-blue">
            <div class="inner">
              <?php
                include "konekso.php";
                $session_nama = $_SESSION['namalengkap'];
                $total_status2=mysqli_query($config,"select count(noprospect) as total_status2 from h_rpospect where status = 2 and sales='$session_nama' ");
                $data_status2=mysqli_fetch_assoc($total_status2); 
                
                if ($data_status2['total_status2'] > 0) {
                  echo '<h3>'.$data_status2['total_status2'].'</h3>';
                }else {
                  echo '<h3>0</h3>';
                }

              ?>
              <p>Prospect Sudah Klarifikasi</p>
            </div>
            <div class="icon">
              <i class="fa fa-hourglass-end" aria-hidden="true"></i>
            </div>
          </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <?php
                include "konekso.php";
                $session_nama = $_SESSION['namalengkap'];
                $total_status3=mysqli_query($config,"select count(noprospect) as total_status3 from h_rpospect where status = 3 and sales='$session_nama' ");
                $data_status3=mysqli_fetch_assoc($total_status3); 
                
                if ($data_status3['total_status3'] > 0) {
                  echo '<h3>'.$data_status3['total_status3'].'</h3>';
                }else {
                  echo '<h3>0</h3>';
                }

              ?>
              <p>Prospect Proses Drawing</p>
            </div>
            <div class="icon">
              <i class="fa fa-paint-brush" aria-hidden="true"></i>
            </div>
          </div>
        </div><!-- ./col -->
      </div>

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php
                include "konekso.php";
                $session_nama = $_SESSION['namalengkap'];
                $total_status4=mysqli_query($config,"select count(noprospect) as total_status4 from h_rpospect where status = 4 and sales='$session_nama' ");
                $data_status4=mysqli_fetch_assoc($total_status4); 
                
                if ($data_status4['total_status4'] > 0) {
                  echo '<h3>'.$data_status4['total_status4'].'</h3>';
                }else {
                  echo '<h3>0</h3>';
                }

              ?>
              <p>Prospect READY</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-square-o" aria-hidden="true"></i>
            </div>
          </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                include "konekso.php";
                $session_nama = $_SESSION['namalengkap'];
                $total_status5=mysqli_query($config,"select count(noprospect) as total_status5 from h_rpospect where status = 5 and sales='$session_nama' ");
                $data_status5=mysqli_fetch_assoc($total_status5); 
                
                if ($data_status5['total_status5'] > 0) {
                  echo '<h3>'.$data_status5['total_status5'].'</h3>';
                }else {
                  echo '<h3>0</h3>';
                }

              ?>
              <p>Spec tdk diapprove calon Customer</p>
            </div>
            <div class="icon">
              <i class="fa fa-times-circle-o" aria-hidden="true"></i>
            </div>
          </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                include "konekso.php";
                $session_nama = $_SESSION['namalengkap'];
                $total_status6=mysqli_query($config,"select count(noprospect) as total_status6 from h_rpospect where status = 6 and sales='$session_nama' ");
                $data_status6=mysqli_fetch_assoc($total_status6); 
                
                if ($data_status6['total_status6'] > 0) {
                  echo '<h3>'.$data_status6['total_status6'].'</h3>';
                }else {
                  echo '<h3>0</h3>';
                }

              ?>
              <p>Spec  diapprove calon Customer</p>
            </div>
            <div class="icon">
              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            </div>
          </div>
        </div><!-- ./col -->
      </div>

      <div class="box">
        <div class="row">
          <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <center><h3 class="card-title">Donut Chart</h3></center>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <!-- PIE CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <center><h3 class="card-title">Pie Chart</h3></center>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
          </div>

        </div><!-- /.row -->

      <div class="row">
        
        <div class="col-md-6">
          <!-- BAR CHART -->
          <div class="card card-success">
            <div class="card-header">
              <center><h3 class="card-title">Bar Chart</h3></center>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>

        <div class="col-md-6">
          <div class="card card-success">
            <div class="card-header">
              <center><h3 class="card-title">Stacked Bar Chart</h3></center>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.row -->
    </div>
      
</div>    
<!-- /.container-fluid -->
  </section>

</div>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>

<script>
  $(function () {

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label               : 'Tahun 2022',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
          <?php 
            $query_january = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as january from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 1");
            $data_january  = mysqli_fetch_array($query_january);
            echo $data_january['january'];
          ?>,

          <?php 
            $query_february = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as february from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 2");
            $data_february  = mysqli_fetch_array($query_february);
            echo $data_february['february'];
          ?>,

          <?php 
            $query_march = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as march from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 3");
            $data_march  = mysqli_fetch_array($query_march);
            echo $data_march['march'];
          ?>,

          <?php 
            $query_april = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as april from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 4");
            $data_april  = mysqli_fetch_array($query_april);
            echo $data_april['april'];
          ?>,

          <?php 
            $query_may = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as may from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 5");
            $data_may  = mysqli_fetch_array($query_may);
            echo $data_may['may'];
          ?>,

          <?php 
            $query_june = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as june from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 6");
            $data_june  = mysqli_fetch_array($query_june);
            echo $data_june['june'];
          ?>,

          <?php 
            $query_july = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as july from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 7");
            $data_july  = mysqli_fetch_array($query_july);
            echo $data_july['july'];
          ?>,

          <?php 
            $query_august = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as august from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 8");
            $data_august  = mysqli_fetch_array($query_august);
            echo $data_august['august'];
          ?>,

          <?php 
            $query_september = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as september from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 9");
            $data_september  = mysqli_fetch_array($query_september);
            echo $data_september['september'];
          ?>,

          <?php 
            $query_october = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as october from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 10");
            $data_october  = mysqli_fetch_array($query_october);
            echo $data_october['october'];
          ?>,

          <?php 
            $query_november = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as november from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 11");
            $data_november  = mysqli_fetch_array($query_november);
            echo $data_november['november'];
          ?>,

          <?php 
            $query_december = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as december from h_rpospect where tahun = 2022 and MONTH(tgl_prospect) = 12");
            $data_december  = mysqli_fetch_array($query_december);
            echo $data_december['december'];
          ?>
          ]
        },
        {
          label               : 'Tahun 2021',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [
          <?php 
            $query01_january = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as january from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 1");
            $data01_january  = mysqli_fetch_array($query01_january);
            echo $data01_january['january'];
          ?>,

          <?php 
            $query01_february = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as february from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 2");
            $data01_february  = mysqli_fetch_array($query01_february);
            echo $data01_february['february'];
          ?>,

          <?php 
            $query01_march = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as march from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 3");
            $data01_march  = mysqli_fetch_array($query01_march);
            echo $data01_march['march'];
          ?>,

          <?php 
            $query01_april = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as april from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 4");
            $data01_april  = mysqli_fetch_array($query01_april);
            echo $data01_april['april'];
          ?>,

          <?php 
            $query01_may = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as may from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 5");
            $data01_may  = mysqli_fetch_array($query01_may);
            echo $data01_may['may'];
          ?>,

          <?php 
            $query01_june = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as june from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 6");
            $data01_june  = mysqli_fetch_array($query01_june);
            echo $data01_june['june'];
          ?>,

          <?php 
            $query01_july = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as july from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 7");
            $data01_july  = mysqli_fetch_array($query01_july);
            echo $data01_july['july'];
          ?>,

          <?php 
            $query01_august = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as august from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 8");
            $data01_august  = mysqli_fetch_array($query01_august);
            echo $data01_august['august'];
          ?>,

          <?php 
            $query01_september = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as september from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 9");
            $data01_september  = mysqli_fetch_array($query01_september);
            echo $data01_september['september'];
          ?>,

          <?php 
            $query01_october = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as october from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 10");
            $data01_october  = mysqli_fetch_array($query01_october);
            echo $data01_october['october'];
          ?>,

          <?php 
            $query01_november = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as november from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 11");
            $data01_november  = mysqli_fetch_array($query01_november);
            echo $data01_november['november'];
          ?>,

          <?php 
            $query01_december = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as december from h_rpospect where tahun = 2021 and MONTH(tgl_prospect) = 12");
            $data01_december  = mysqli_fetch_array($query01_december);
            echo $data01_december['december'];
          ?>
          ]
        },
      ]
    }

    var donutData        = {
      labels: [
          'Prospect Open',
          'Prospect Wait Klarifikasi',
          'Prospect Sudah Klarifikasi',
          'Prospect Proses Drawing',
          'Prospect Ready',
          'Spec Tidak Di Approve Customer',
          'Spec Di Approve calon Customer'
      ],
      datasets: [
        {
          data: [
          <?php 
            $session_nama = $_SESSION['namalengkap'];
            $total_status0=mysqli_query($config,"SELECT count(noprospect) as total_status0 from h_rpospect where status = 0 and sales='$session_nama' ");
            $data_status0=mysqli_fetch_assoc($total_status0);
            echo $data_status0['total_status0'];
          ?>,

          <?php 
            $session_nama = $_SESSION['namalengkap'];
            $total_status1=mysqli_query($config,"SELECT count(noprospect) as total_status1 from h_rpospect where status = 1 and sales='$session_nama' ");
            $data_status1=mysqli_fetch_assoc($total_status1); 
            echo $data_status1['total_status1 '];
          ?>,

          <?php 
            $session_nama = $_SESSION['namalengkap'];
            $total_status2=mysqli_query($config,"SELECT count(noprospect) as total_status2 from h_rpospect where status = 2 and sales='$session_nama' ");
            $data_status2=mysqli_fetch_assoc($total_status2); 
            echo $data_status2['total_status2'];
          ?>,

          <?php 
            $session_nama = $_SESSION['namalengkap'];
            $total_status3=mysqli_query($config,"SELECT count(noprospect) as total_status3 from h_rpospect where status = 3 and sales='$session_nama' ");
            $data_status3=mysqli_fetch_assoc($total_status3);
            echo $data_status3['total_status3'];
          ?>,

          <?php 
            $session_nama = $_SESSION['namalengkap'];
            $total_status4=mysqli_query($config,"SELECT count(noprospect) as total_status4 from h_rpospect where status = 4 and sales='$session_nama' ");
            $data_status4=mysqli_fetch_assoc($total_status4);
            echo $data_status4['total_status4'];
          ?>,
       <?php 
            $session_nama = $_SESSION['namalengkap'];
            $total_status5=mysqli_query($config,"SELECT count(noprospect) as total_status5 from h_rpospect where status = 5 and sales='$session_nama' ");
            $data_status5=mysqli_fetch_assoc($total_status5);
            echo $data_status5['total_status5'];
          ?>,
        <?php 
            $session_nama = $_SESSION['namalengkap'];
            $total_status6=mysqli_query($config,"SELECT count(noprospect) as total_status6 from h_rpospect where status = 6 and sales='$session_nama' ");
            $data_status6=mysqli_fetch_assoc($total_status6); 
            echo $data_status6['total_status6'];
          ?>
          ],
          backgroundColor : ['#6c757d', '#ff851b', '#17a2b8', '#6610f2', '#28a745','#dc3545','#ffc107'],
        }
      ]
    }

    var pieData        = {
      labels: [
          'Tahun 2021',
          'Tahun 2022',
      ],
      datasets: [
        {
          data: [
          <?php 
            $query_2021 = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as data2021 from h_rpospect where tahun = '2021' ");
            $data_2021  = mysqli_fetch_array($query_2021);
            echo $data_2021['data2021'];
          ?>,

          <?php 
            $query_2022 = mysqli_query($GLOBALS["___mysqli_ston"], "select distinct count(noprospect) as data2022 from h_rpospect where tahun = '2022' ");
            $data_2022  = mysqli_fetch_array($query_2022);
            echo $data_2022['data2022'];
          ?>
          ],
          backgroundColor : ['#f56954', '#00a65a'],
        }
      ]
    }
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

     //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })

  })
</script>

     
<?php include 'theme/footer.php'; ?>