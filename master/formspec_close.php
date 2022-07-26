<!DOCTYPE html>
	<link rel="stylesheet" href="bootsrap/css/bootstrap.css" />
    <link rel="stylesheet" href="bootstrap/css/main.css" />
    <link rel="stylesheet" href="bootstrap/css/theme.css" />
    <link rel="stylesheet" href="bootstrap/css/MoneAdmin.css" />
    <link rel="stylesheet" href="bootstrap/css/font-awesome.css" />
	<link rel="stylesheet" href="bootsrtap/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
	<script src="bootstrap/js/jquery.min.js"></script>


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
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=klarifikasi"><i class="fa fa-user"></span></i>    Permintaan Klarifikasi</a></li>	
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=revisi"><i class="fa fa-user"></span></i>    Revisi Prospect</a></li>
						<li><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=klarifikasi"><i class="fa fa-user"></i><span>    List To Edit</span></a></li>
						</ul>			
			 </li>
			 </br>
			<li class="active" >
          <a href="<?php $_SERVER[SCRIPT_NAME];?>?page=formspec_ready">
                <i class="fa fa-user"></i> <span>Form Spec & Drawing</span> 					
						<ul>
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=formspec_ready"><i class="fa fa-user"></span></i>   Form Spec Ready</a></i> 						
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=klarifikasi"><i class="fa fa-user"></span></i>   Customer Approve</a></i> 						
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=klarifikasi"><i class="fa fa-user"></span></i>   Customer Reject</a></i> 					
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=formspec_close"><i class="fa fa-user"></span></i>   Form Spec Close</a></i> 
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
              </a>
            </li>            
           
           </ul>
        </section>        
      </aside>     
      <div class="content-wrapper">       
        <section class="content-header">
		<h4>Selamat datang <?php echo $_SESSION["namalengkap"] ?> <small></small></h4>
          <h1>
              FORM SPEC YANG SUDAH CLOSE/FINAL
			 </br>
			
          </h1>
          <ol class="breadcrumb">
            <li><a href="index_sales.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Prospect</a></li>
            <li class="active">List Prospect</li>            
          </ol>
        </section>
        <section class="content">            
           	       
          <!-- Default box -->
          <div class="box">           			
			
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
                        <th width="105px"><center>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
					$jabat=$_SESSION['jabatan'];					
						switch ($jabat) {
								case ($jabat=='Manager'):
									$sql="SELECT  * FROM h_rpospect where grupsales = '{$_SESSION['bagian']}'AND (status=0 OR status=2)";
									break;	
								case ($jabat=='Direktur'):
									$sql="SELECT  * FROM h_rpospect where grupsales = '{$_SESSION['bagian']}'AND (status=0 OR status=2)";
									break;	
								case ($jabat=='Staff'):
									$sql="SELECT  * FROM h_rpospect where sales = '{$_SESSION['namalengkap']}'AND (status=0 OR status=2)";
									break;
								case ($jabat=='Dirut'):
									$sql="SELECT  * FROM h_rpospect where grupsales = '{$_SESSION['bagian']}'AND status=0 OR status=2";
									break;	
							}
						
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($rew=  mysqli_fetch_assoc($result)){
						$tanggal=$rew['tgl_prospect'];
						$tglbaru = date('d-m-Y', strtotime($tanggal ));
                    ?>
                    
                        <tr>
                            <td><?php echo $no ;?></td>
                            <td><?php echo $rew['noprospect'];?></td>
							<td><?php echo $tglbaru;?></td>
							<td><?php echo $rew['customer'];?></td>
							<td><?php echo $rew['project'];?></td>
							<td><?php echo $rew['sales'];?></td>
                            <td><?php echo $rew['status'];?></td>
                            <td>
							
                            <a href="menu_prospect.php?noprospect=<?php echo $rew['noprospect']; ?>" class="btn btn-xs btn-primary tipsy-kiri-atas" title='Detail'> Detail </a>	
							<a href="#" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $rew['noprospect']; ?>">Download</a>
							</td>
                        </tr> 
						
								<div class="modal fade" id="myModal<?php echo $rew['noprospect']; ?>" role="dialog">
								<div class="modal-dialog">              
								<!-- Modal content-->
								<div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><font color="red">Edit Header Prospect</font></h4>
								</div>
								<div class="modal-body">
								<form role="form" action="edit_prospect.php" method="get">	
									
									<div class="form-group">
										<label>No Prospect</label>
										<input type="text" name="noprospect" class="form-control" value="<?php echo $row['noprospect']; ?>"readonly>      
									</div>
									
									<div class="form-group">
										<label>Customer</label>
										<input type="text" class="form-control" value="<?php echo $row['customer']; ?>"readonly>  
										<input type="text" name="customer" class="form-control" placeholder="isi nama Customer">  
									</div>
									
									<div class="form-group">
										<label>Project</label>
										<input type="text" class="form-control" value="<?php echo $row['project']; ?>"readonly>  
										<input type="text" name="projectedit" class="form-control" placeholder="isi nama Project">  
									</div>
									
									
									<div class="form-group">
										<label> Segment</label>	</br>
										<input type="text"  class="form-control" value="<?php echo $row['segment']; ?> "readonly>    
										<select name="segment" id = "segment" required class="form-control">
										<option></option>	
										
										</select>								
									</div>
									
									<div class="form-group">
										<label> Sub Segment</label>	</br>
										<input type="text"  class="form-control" value="<?php echo $row['sub_segment']; ?> "readonly>    
										<select name="sub_segment" id = "sub_segment" required class="form-control">
										<option></option>
										</select>
									</div>
									
									<div class="modal-footer">  
									<button type="submit" class="btn btn-success">Update</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</form>
								</div>
								</div>                
								</div>
								</div>
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

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4"></script>
<script type="text/javascript" src="bootstrap/js/poper-min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="bootstrap/js/slim-min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>   
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/savy.min.js"></script>
<?php include 'theme/footer.php'; ?>
</html>