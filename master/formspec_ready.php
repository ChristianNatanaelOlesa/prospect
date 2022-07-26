


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
						<li><span><a href="<?php $_SERVER[SCRIPT_NAME];?>?page=revisi"><i class="fa fa-user"></span></i>    Revisi Prospecct</a></li>
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
		<h4>Selamat datang <?php echo $_SESSION["namalengkap"] ?> <small></small></h4>
	
	
          <h1>
             FORM SPEC ANDA READY   
			 </br>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index_sales.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Prospect</a></li>
            <li class="active">List Prospect</li>            
          </ol>
        </section>
        <section class="content">            
           	       
         
          <div class="box">
            <div class="box-header with-border">
			<div class="box-tools pull-right"> </div>
            </div>			
			
			<div class="table-responsive" >
            <table width="100%"  id="example1" class="table table-striped dataTable no-footer"> 
                    <thead>
                      <tr> 
                       	<th ><strong>No Spec</strong></th>
						<th >Tgl Prospect</th>		
						<th >Tgl Spec</th>	
						<th>Project</th>											
						<th ><strong>Sales</strong></th>
						<th ><strong>Created</strong></th>
						<th ><strong>Update</strong></th>
						<th ><strong>Aging</strong></th>									
						<th><center>Preview</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
					$jabat=$_SESSION['jabatan'];					
						switch ($jabat) {
								case ($jabat=='Manager'):
									$sql="SELECT  * FROM formspec where grupsales = '{$_SESSION['bagian']}'AND (status=4 )";
									break;	
								case ($jabat=='Direktur'):
									$sql="SELECT  * FROM formspec where grupsales = '{$_SESSION['bagian']}'AND (status=4 )";
									break;	
								case ($jabat=='Staff'):
									$sql="SELECT  * FROM formspec where sales = '{$_SESSION['namalengkap']}'AND (status=4 )";
									break;
								case ($jabat=='Dirut'):
									$sql="SELECT  * FROM formspec where grupsales = '{$_SESSION['bagian']}'AND status=4 ";
									break;	
							}
						
                        $no=1;
                        if (!$result=  mysqli_query($config, $sql)){
                        die('Error:'.mysqli_error($config));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($rew=  mysqli_fetch_assoc($result)){						
						
						$tanggal=$rew['tgl_formspec'];
						$tglbaru = date('d-m-Y', strtotime($tanggal ));										
						$tanggalx= $rew['tgl_propost'];
						$tglbarux = date('d-m-Y', strtotime($tanggalx ));										
						$hari=date('d-m-Y');
						$awal     = new DateTime($tglbarux);
						$sekarang = new DateTime($hari); 
						$interval = $sekarang->diff($awal)->format("%a");
						$nopracost=$rew['noformspec'];
						$noprospect=$rew['noprospect'];
						$botol=$rew['tipeprospect'];
							switch ($botol) {
										case ($botol =='OIL'):
											$link="../spec/pages/Tabel/print_Form_Hermetically_Sealed.php";
											break;	
										case ($botol=='DRY'):
											$link="../spec/pages/Tabel/print_Form_spec_dry.php";
											break;										
														}
						
						
						
						$queryc = mysqli_query($config, "select * from upload_file where nopracost = '$nopracost' order by id_file asc");
						$xaDb = mysqli_fetch_assoc($queryc);
						$dodol=$xaDb["nama_file"];			
			
                    ?>
                    
                        <tr>
									<td><?php echo $rew['noformspec'];?></td>
									<td><?php echo $tglbaru; ?></td>
									<td><?php echo $tglbarux; ?></td>
									<td><?php echo $rew['project'];?></td>									
									<td><?php echo $rew['sales'];?></td>
									<td><?php echo $rew['created'];?></td>
									<td><?php echo $rew['update_oleh'];?></td>
									<td><font color='red'><?php echo $interval;?></color></td>	
                            <td>
						
							
                            <a href="<?php echo $link; ?>?noprospect=<?php echo $noprospect;?>&nopracost=<?php echo $nopracost; ?>" class="btn btn-xs btn-primary tipsy-kiri-atas" target="_BLANK"> Form Spec </a>	
							<a href="../spec/temp/<?php echo $dodol;?>"  class="btn btn-xs btn-danger tipsy-kiri-atas"  target="_BLANK"> Drawing </a>	
						
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
