<!DOCTYPE html>
	<link rel="stylesheet" href="bootsrap/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
    <link rel="stylesheet" href="bootstrap/css/theme.css" />
    <link rel="stylesheet" href="bootstrap/css/MoneAdmin.css" />
    <link rel="stylesheet" href="bootstrap/css/font-awesome.css" />
	<link rel="stylesheet" href="bootsrtap/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

<?php include 'theme/header.php'; 

?>
   
      <aside class="main-sidebar">        
        <section class="sidebar">
        
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             
			     <li class="active">
                <a href="<?php $_SERVER[SCRIPT_NAME];?>index_admin.php">  
                 <i class="fa fa-home"></i> <span>Dashboard</span>
				 
              </a>
            </li>
          
            <li>
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=prospect">
                <i class="fa fa-user"></i> <span>Prospect</span> 
			  </a>
        
			<li class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=pracost">            
              </a>
            </li> 
			<li class="active" >
              <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=quotation">           
              </a>
            </li> 
            
           
           </ul>
        </section>      
      </aside>
   
      <div class="content-wrapper">  
        <section class="content-header">
		<h4>Selamat datang <?php echo $_SESSION["namalengkap"] ?> <small></small></h4>
          <h1>
             PROSPECT SALES Trafoindo
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="index_admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Prospect</a></li>
            <li class="active">List Prospect</li>
            
          </ol>
        </section>
        <section class="content">
             
            <!--edit-->
            <?php
            
                        $id=$_GET['id'];
                        $sql="SELECT  * FROM h_rpospect where id='$id' ";
                        
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                    ?>
            <div class="box">
            <div class="box-header with-border">
                <Strong> EDIT PROSPECT </strong>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div> 
            </div> 
                <form action="aksi_prospect.php?sender=edit" method="POST">
                  <div class="box-body">
                        <div class="row">
                <div class="col-md-12 form-group">
                    <label>No Prospect</label>                   
                    <input hidden type="text" name="noprospect" autofocus required class="form-control" placeholder=<?php echo $row['noprospect'];?> readonly /> 
                    </div>  
                     <div class="col-md-12 form-group">
                         <label>Project</label>
                         <textarea class="form-control" placeholder="Enter..." name="project" type="text"><?php echo $row['project'];?></textarea>
                    </div>
                 <div class="col-md-12 form-group"> 
                   <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-send"></span> Simpan</button>
				   <button class="btn btn-primary btn-flat pull-right"> <a href="index_sales.php?page=prospect"> <span class="fa fa-send"></span>Batal</a></button>
                </div> 
                  </div></form>
              </div>
                   <?php                
                        }
                    }  else {
                    echo '';    
                    }
                    }?> 
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
            <!--    <h3 class="box-title"> <a href="tambah_prospect.php"  class="btn btn-info"><li class="fa fa-plus"></li> OIL</a></h3>
			<!--	<h3 class="box-title"> <a href="tambah_prospect_dry.php"  class="btn btn-info"><li class="fa fa-plus"></li> DRY</a></h3> -->
			<!--	<h3 class="box-title"> <a href="tambah_prospect.php"  class="btn btn-info"><li class="fa fa-plus"></li> CTVT</a></h3> -->
			<!--	    <h3 class="box-title"> <a href="tambah_prospect.php"  class="btn btn-info"><li class="fa fa-plus"></li> SERVICE</a></h3> -->
            
			<div class="box-tools pull-right">
                 </div>
            </div>
			
			<!-- <table width="100%" border="1"  class="table table-striped table-bordered table-hover">
            <!-- <div class="box-body"> -->
			<div class="table-responsive" >
            <table width="100%"  id="example1" class="table table-striped dataTable no-footer"> 
                    <thead>
                      <tr> 
                        <th>#</th>
                        <th>No Prospect</th>
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
						
                        $sql="SELECT  * FROM h_rpospect ";
					
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
						$tanggal=$row['tgl_prospect'];
						$tglbaru = date('d-m-Y', strtotime($tanggal ));
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $row['noprospect'];?></td>
							<td><?php echo $tglbaru;?></td>
							<td><?php echo $row['customer'];?></td>
							<td><?php echo $row['project'];?></td>	
							<td><?php echo $row['sales'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <td>
							<!--	<a href="aaksi.php?sender=hapus&id=<?php echo $row['id']; ?>" class="btn btn-danger"><li class="fa fa-fencil"></li> Detail</a> 
                            <!--   <a href="<?php $_SERVER[SCRIPT_NAME] ;?>?page=prospect&id=<?php echo $row['id'];?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a>  -->
                            <!--    <a href="aaksi.php?sender=hapus&id=<?php echo $row['id']; ?>" class="btn btn-danger"><li class="fa fa-trash-o"></li> Hapus</a> -->
                            <a href="menu_prospect_admin.php?noprospect=<?php echo $row['noprospect']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Detail'> Detail </a>	
							<!--<a href="?menu=edit_data_memo&aksi=edit&nmr=<?php echo $pasien['nomemo']; ?>" class="btn btn-xs btn-primary tipsy-kiri-atas" title='Edit Data ini'> Preview</a>	
							<!--<a href="hapus_prospect.php?sender=hapus&noprospect=<?php echo $row['noprospect']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Hapus'> Hapus </a>-->	
						
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
      
      
      
      <!-- Bootstrap Modal - To Add New Record -->
<!--
<form action="tambah_prospect.php?sender=prospect" method="POST" >
<div class="modal fade" id="my-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="width:1250px;" >
       
<div class="modal-content">
<div class="modal-header">

<h2 class="modal-title" id="myModalLabel">Tambah New Prospect</h2>
</div>
   
<div class="modal-body center"> 
 <!--Content-->
 <!--
 
    <div class="form-group">
      <label>No Prospect</label>
      <input type="text" name="noprospect" autofocus required class="form-control" placeholder="No Prospect" />					
    </div>
 
    <div class="form-group">
      <label>Tanggal</label>
      <input type="date" name="tanggal" value="<?php echo date();?>" autofocus required class="form-control" />
    </div>
	<div class="form-group">
      <label>Customer</label>      
	  <input type="text" name="customer" autofocus required class="form-control" placeholder="Customer" />
    </div>
	<div class="form-group">
      <label>Proyek</label>      
	  <input type="text" name="proyek" autofocus required class="form-control" placeholder="Proyek" />
    </div>
	<label for="segment">Segment Penjualan:</label> </br>
	<select name="segment" id="segment" autofocus required class="form-control">
		<optgroup label="Swasta">
			<option value="Building">Building</option>
			<option value="Airport">Airport</option>
			<option value="Seaport">Seaport</option>
			<option value="Railways">Railways</option>
			<option value="Minning">Minning</option>
			<option value="Power Plant">Power Plant</option>
			<option value="CTVT">CTVT</option>
		</optgroup>
		<optgroup label="BUMN">
			<option value="BUMN">BUMN</option>			
		</optgroup>
		<optgroup label="PLN">
			<option value="PLN">PLN</option>			
		</optgroup>
	</select>
	<label for="trafo">Katagori Transformer:</label> </br>
	<select name="trafo" id="trafo" autofocus required class="form-control">		
		<option value="Oil">Oil</option>
		<option value="CT">CT</option>
		<option value="DRY">Dry</option>
	</select>
 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> Cancel Prospect </button>
<button type="submit" class="btn btn-info"> Add Transformer </button> 
  
</div>
   
</div>
</div>
</div>
</form>

      <!-- Content Wrapper. Contains page content -->
      
     
<?php include 'theme/footer.php'; ?>
</html>