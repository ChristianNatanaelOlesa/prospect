<!DOCTYPE html>
	<link rel="stylesheet" href="../bootsrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../bootstrap/css/main.css" />
    <link rel="stylesheet" href="../bootstrap/css/theme.css" />
    <link rel="stylesheet" href="../bootstrap/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../ootstrap/css/font-awesome.css" />
	<link rel="stylesheet" href="../bootsrtap/css/datepicker.css" />
	<link rel="stylesheet" type="../text/css" href="dist/sweetalert.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
	<script src="../bootstrap/js/jquery.min.js"></script>


<?php include 'theme/header.php'; ?>     
      <aside class="main-sidebar">  
                <section class="sidebar">        
          <ul class="sidebar-menu">
            <li class="header"><font color="RED"><font size= "4px">TRAFINDO</font></font></li>
            <li class="active" >
              <a href="index_sales.php">
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
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=pprospect_quote"><i class="fa fa-user"></span></i>    Prospect to Quotation</a></li>
						
						
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
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=quoation_siap"><i class="fa fa-user"></span></i>   Quotation Siap</a></i> 	
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=quotation_aktif"><i class="fa fa-user"></span></i>   Quotation Aktif</a></i>
						</ul>						
              </a>
            </li>            
           
           </ul>
        </section>        
      </aside>     
      <div class="content-wrapper">       
        <section class="content-header">
		<h4>Selamat datang <?php echo $_SESSION["namalengkap"].'-'.$_SESSION['jabatan'] ?> <small></small></h4>
          <h1>
           <font color="red"> LIST PROSPECT YG HARUS DI KLARIFIKASI</font>           
          </h1>
          <ol class="breadcrumb">
            <li><a href="index_sales.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>   <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=klarifikasi">Permintaan Klarifikasi</a></li>                 
          </ol>
        </section>
        <section class="content">            
           	        <?php            
                        $id=$_GET['id'];					
						$sql="SELECT  * FROM h_rpospect where id='$id' ";
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>              
                   <?php  					
                        }
                    }  else {
                    echo '';    
                    }
                    }?> 
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            </div>
			
			
			<div class="table-responsive" >
            <table width="100%"  id="example1" class="table table-striped dataTable no-footer"> 
                    <thead>
                      <tr> 
                        <th>#</th>
                        <th>No Prospect</th>
						<th>No Sub Prospect</th>
                        <th>Tanggal</th>
						<th>Customer</th>
						<th>Project</th>
						<th>sales</th>												
						<th><strong>Status</strong></th>
                        <th><center>Aksi</th>						
                         
                      </tr>
                    </thead>
                    <tbody>
                    <?php
					if ($_SESSION['jabatan']=='Manager') {
						$sql="SELECT  * FROM prospect_klari where grupsales = '$_SESSION[bagian]'";
				
					}
          elseif ($_SESSION['jabatan']=="Manager+"){
            $sql="SELECT  * FROM prospect_klari where grupsales = '$_SESSION[bagian]' or grupsales = '$_SESSION[bagian2]'";
          } 
					elseif ($_SESSION['jabatan']=="Direktur"){
						$sql="SELECT  * FROM prospect_klari where grupsales = '$_SESSION[bagian]'";
					}

					
					else {
                        $sql="SELECT  * FROM prospect_klari where sales = '$_SESSION[namalengkap]'";
					}
					
					
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($raw=  mysqli_fetch_assoc($result)){
						$tanggal=$raw['tgl_prospect'];
						$tglbaru = date('d-m-Y', strtotime($tanggal ));
						$botol=$raw['tipeprospect'];	

								switch ($botol) {
								case ($botol=='OIL'):
									$link="master/klarifikasi_detail_oil.php";
									break;	
								case ($botol=='DRY'):
									$link="master/klarifikasi_detail_dry.php";
									break;	
								case ($botol=='CTVT'):
									$link="master/klarifikasi_detail_ctvt.php";
									break;	
							}
								
										
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $raw['noprospect'];?></td>
							<td><?php echo $raw['nopracost'];?></td>
							<td><?php echo $tglbaru;?></td>
							<td><?php echo $raw['customer'];?></td>
							<td><?php echo $raw['project'];?></td>
							<td><?php echo $raw['sales'];?></td>
                            <td><?php echo $raw['status'];?></td>
                            <td>
							
                            <!--<a href="menu_prospect.php?noprospect=<?php echo $row['noprospect']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Detail'> Detail </a>	-->
							 <a href="<?php echo $link; ?>?nopracost=<?php echo $raw['nopracost']; ?>" class="btn btn-xs btn-success tipsy-kiri-atas" title='Detail'> Klarifikasi </a>	
							</td>
                        </tr> 
						
								
                            <?php    
                    $no++;                    
                        }
                    }  else {
                    echo '';    
                    }
                    }?>
                    </tbody>
                  </table>
            </div><!-- /.box-body -->             
          </div><!-- /.box --> 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    
<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_segment.php",
          	cache: false, 
          	success: function(msg){
              $("#segment").html(msg);
            }
        });
 
      	$("#segment").change(function(){
      	var segment = $("#segment").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_sub_segment.php",
              	data: {segment: segment},
              	cache: false,
              	success: function(msg){
                  $("#sub_segment").html(msg);
                }
            });
        });
      });
</script> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>  

<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4"></script>
<script type="text/javascript" src="../bootstrap/js/poper-min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="../bootstrap/js/slim-min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>   
<script src="../bootstrap/js/jquery.min.js"></script>
<script src=".bootstrap/js/savy.min.js"></script>	

<script src="assets/js/jquery.js"></script> 
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>  
	  
	  
<?php include 'theme/footer.php'; ?>
</html>