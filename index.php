<!DOCTYPE html>

<head>
     <meta charset="UTF-8" />
    <title>Trafoindo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
   
    <link rel="stylesheet" href="bootstarp/css/bootstrap.css" />
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/css/login.css" />
	 <link rel="stylesheet" href="bootstrap/css/style.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
    
</head>
   
<body >

<?php
$tahun     = date ('Y');
echo $tahun;
error_reporting(0);
session_start();
include_once("library/koneksi.php");

if(@$_POST["login"]){ 
	$user=$_POST["user"];
	$pass=md5($_POST["pass"]);	
	$level=$_POST["level"];
	
	if($user!="" && $pass!=""){
		include_once("library/koneksi.php");
		$em = mysqli_query($server, "select * from login where password = '$pass' AND username = '$user'");
		$data = mysqli_fetch_assoc($em);
		$tingkat= $data['level'];
	
		
		if( $tingkat=='admin' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=($data["password"]);
			$_SESSION["jabatan"]=($data["jabatan"]);
			$_SESSION["bagian"]=($data["bagian"]);
			$_SESSION["namalengkap"]=$data["nama"];		
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:index_admin.php");
		}
		elseif( $tingkat=='sales' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=$data["password"];
			$_SESSION["jabatan"]=($data["jabatan"]);
			$_SESSION["bagian"]=($data["bagian"]);
			$_SESSION["bagian2"]=($data["bagian2"]);
			$_SESSION["namalengkap"]=$data["nama"];		
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:index_sales.php");
                 
		}
		elseif( $tingkat=='engineer' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=($data["password"]);
			$_SESSION["jabatan"]=($data["jabatan"]);
			$_SESSION["bagian"]=($data["bagian"]);
			$_SESSION["namalengkap"]=$data["nama"];		
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:index_engineer.php");
                 
		}
		elseif( $tingkat=='tender' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=($data["password"]);
			$_SESSION["jabatan"]=($data["jabatan"]);
			$_SESSION["bagian"]=($data["bagian"]);
			$_SESSION["namalengkap"]=$data["nama"];		
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:index_tender.php");
                 
		}
		elseif( $tingkat=='estimator' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=($data["password"]);
			$_SESSION["jabatan"]=($data["jabatan"]);
			$_SESSION["bagian"]=($data["bagian"]);
			$_SESSION["namalengkap"]=$data["nama"];		
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:index_estimator.php");
                 
		}
		elseif( $tingkat=='it' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=($data["password"]);
			$_SESSION["jabatan"]=($data["jabatan"]);
			$_SESSION["bagian"]=($data["bagian"]);
			$_SESSION["namalengkap"]=$data["nama"];		
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:index_home.php");
                 
		}
		elseif( $tingkat=='acc' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=($data["password"]);
			$_SESSION["bagian"]=($data["bagian"]);
			$_SESSION["namalengkap"]=$data["nama"];		
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:index_home.php");
                 
		}
		elseif( $tingkat=='fin' && $data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["user"]=$data["username"];
			$_SESSION["pass"]=($data["password"]);
			$_SESSION["bagian"]=($data["bagian"]);
			$_SESSION["namalengkap"]=$data["nama"];		
			$_SESSION["leveluser"]   = $data["level"];
			header("Location:index_home.php");
		}
		else{
			echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data Tidak Ditemukan!!</b>
                  </div><center>";
		}
	}

}
?>
   <!-- PAGE CONTENT --> 
   <div class="col-md-4 col-md-offset-4 form-login">
   <div class="outter-form-login">
            <img src="logo.jpg" alt="Trafoindo" width="200"
				height="40">
        
            <form action="" class="inner-login" method="post">          
                <div class="form-group">
                    <input type="text" class="form-control" name="user" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-warning" value="LOGIN" name="login" />
                
                <div class="text-center forget">
                   
                </div>
            </form>
        </div>
    </div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
