<?php include 'theme/header.php'; ?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
 
    <!-- sidebar menu: : style can be found in sidebar.less -->
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
        <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
		<h4>Selamat datang <?php echo $_SESSION["namalengkap"] ?></h4>
    <h1>DASHBOARD</h1>
		 
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
		  
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
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
          <a href="index_sales.php?page=prospect_open" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
          <a href="index_sales.php?page=prospect_wait_klari" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
          <a href="index_sales.php?page=prospect_sudah_klari" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
          <a href="index_sales.php?page=prospect_proses_drawing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->

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
          <a href="index_sales.php?page=prospect_ready" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
          <a href="index_sales.php?page=prospect_reject_customer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
          <a href="index_sales.php?page=prospect_disapprove_customer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->

     <!--<div class="col-lg-3 col-xs-6">
       
        <div class="small-box bg-lime">
          <div class="inner">
            <?php
              include "konekso.php";
              $session_nama = $_SESSION['namalengkap'];
              $total_status7=mysqli_query($config,"select count(noprospect) as total_status7 from h_rpospect where status = 7 and sales='$session_nama' ");
              $data_status7=mysqli_fetch_assoc($total_status7); 
              
              if ($data_status7['total_status7'] > 0) {
                echo '<h3>'.$data_status7['total_status7'].'</h3>';
              }else {
                echo '<h3>0</h3>';
              }

            ?>
            <p>..</p>
          </div>
          <div class="icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </div>
          <a href="index_sales.php?page=prospect_tunggu_pracost" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>-->
     
    </div> 
  </section>
</div>

     
<?php include 'theme/footer.php'; ?>