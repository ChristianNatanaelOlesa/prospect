<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <link rel="canonical" href="https://demo-basic.adminkit.io/" />

  <title>Trafoindo Prima Perkasa | Prospect</title>

  <link href="assets/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index_sales.php">
          <span class="align-middle">DASHBOARD</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">
            Prospect Status
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index_sales.php?page=prospect_open">
              <i class="align-middle" data-feather="folder-plus"></i> <span class="align-middle">OPEN</span>
            </a>
          </li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="index_sales.php?page=prospect_wait_klari">
              <i class="align-middle" data-feather="loader"></i> <span class="align-middle">WAIT KLARIFIKASI</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index_sales.php?page=prospect_sudah_klari">
              <i class="align-middle" data-feather="loader"></i> <span class="align-middle">SUDAH KLARIFIKASI</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index_sales.php?page=prospect_proses_drawing">
              <i class="align-middle" data-feather="image"></i> <span class="align-middle">PROSES DRAWING</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index_sales.php?page=prospect_ready">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">READY</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index_sales.php?page=prospect_reject_customer">
              <i class="align-middle" data-feather="x-circle"></i> <span class="align-middle">REJECT CUSTOMER</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index_sales.php?page=prospect_disapprove_customer">
              <i class="align-middle" data-feather="alert-triangle"></i> <span class="align-middle">DISAPPROVE CUSTOMER</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="index_sales.php?page=prospect_tunggu_pracost">
              <i class="align-middle" data-feather="clock"></i> <span class="align-middle">MENUNGGU PRACOST</span>
            </a>
          </li>

        </ul>


      </div>
    </nav>

    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">

            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="user"></i> &nbsp;<span class="text-dark"><?php echo $_SESSION["namalengkap"] ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="index_sales.php"><i class="align-middle me-1" data-feather="pie-chart"></i> Back To Prospect & Pracost</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <main class="content">
        <div class="container-fluid p-0">

          <h1 class="h3 mb-3"><strong>Analytics Dashboard PROSPECT WAIT KLARIFIKASI</strong></h1>

          <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
              <div class="w-100">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col mt-0">
                            <h5 class="card-title">Today</h5>
                          </div>

                          <div class="col-auto">
                            <div class="stat text-primary">
                              <i class="align-middle" data-feather="users"></i>
                            </div>
                          </div>
                        </div>

                        <?php
                          include "koneksi.php";
                          $session_nama = $_SESSION['namalengkap'];
                          $totalOpen=mysqli_query($config,"select count(*) as TotalOpen FROM h_rpospect where sales = '$session_nama' and status = 1 and tgl_prospect = NOW()");
                          $data_today=mysqli_fetch_assoc($totalOpen); 
                          
                          if ($data_today['TotalOpen'] > 0) {
                            echo '<h1 class="mt-1 mb-3">'.$data_today['TotalOpen'].'</h1>';
                          }else {
                            echo '<h1 class="mt-1 mb-3">0</h1>';
                          }

                        ?>
                        
                        <div class="mb-0">
                          <?php
                          include "koneksi.php";
                          $session_nama = $_SESSION['namalengkap'];
                          $yesterday=mysqli_query($config,"select count(*) as TotalYesterday FROM h_rpospect where sales = '$session_nama' and status = 1 and tgl_prospect = NOW() - 1");
                          $data_yesterday=mysqli_fetch_assoc($yesterday); 

                          $selisih1 = $data_today['TotalOpen'] - $data_yesterday['TotalYesterday'];
                          
                          if ($selisih1 > 0) {
                            echo '<span class="text-success"><i class="mdi mdi-arrow-bottom-right"></i>'.$selisih1.'</span>';
                          }else {
                            echo '<span class="text-danger"><i class="mdi mdi-arrow-bottom-right"></i> '.$selisih1.'</span>';
                          }

                        ?>
                          
                          <span class="text-muted">Since yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col mt-0">
                            <h5 class="card-title">This Week</h5>
                          </div>

                          <div class="col-auto">
                            <div class="stat text-primary">
                              <i class="align-middle" data-feather="users"></i>
                            </div>
                          </div>
                        </div>
                         <?php
                          include "koneksi.php";
                          $session_nama = $_SESSION['namalengkap'];
                          $totalWeek=mysqli_query($config,"select count(*) as TotalOpenWeek FROM h_rpospect where sales = '$session_nama' and status = 1 and tgl_prospect between now() and now() - 7");
                          $data_minggu=mysqli_fetch_assoc($totalWeek); 
                          
                          if ($data_minggu['TotalOpenWeek'] > 0) {
                            echo '<h1 class="mt-1 mb-3">'.$data_minggu['TotalOpenWeek'].'</h1>';
                          }else {
                            echo '<h1 class="mt-1 mb-3">0</h1>';
                          }

                        ?>
                        
                        <div class="mb-0">
                          <?php
                          include "koneksi.php";
                          $session_nama = $_SESSION['namalengkap'];
                          $weeks=mysqli_query($config,"select count(*) as TotalWeeks FROM h_rpospect where sales = '$session_nama' and status = 1 and tgl_prospect = NOW() - 7");
                          $data_weeks=mysqli_fetch_assoc($weeks); 

                          $selisih2 = $data_minggu['TotalOpenWeek'] - $data_weeks['TotalWeeks'];
                          
                          if ($dselisih2 > 0) {
                            echo '<span class="text-success"><i class="mdi mdi-arrow-bottom-right"></i>'.$selisih2.'</span>';
                          }else {
                            echo '<span class="text-danger"><i class="mdi mdi-arrow-bottom-right"></i> '.$selisih2.'</span>';
                          }

                        ?>
                          <span class="text-muted">Since last week</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col mt-0">
                            <h5 class="card-title">This Month</h5>
                          </div>

                          <div class="col-auto">
                            <div class="stat text-primary">
                              <i class="align-middle" data-feather="users"></i>
                            </div>
                          </div>
                        </div>
                        <?php
                          include "koneksi.php";
                          $session_nama = $_SESSION['namalengkap'];
                          $totalMonth=mysqli_query($config,"select count(*) as TotalOpenMonth FROM h_rpospect where sales = '$session_nama' and status = 1 and MONTH(tgl_prospect) = MONTH(CURRENT_DATE)");
                          $data_month=mysqli_fetch_assoc($totalMonth); 
                          
                          if ($data_month['TotalOpenMonth'] > 0) {
                            echo '<h1 class="mt-1 mb-3">'.$data_month['TotalOpenMonth'].'</h1>';
                          }else {
                            echo '<h1 class="mt-1 mb-3">0</h1>';
                          }

                        ?>
                        
                        <div class="mb-0">
                          <?php
                          include "koneksi.php";
                          $session_nama = $_SESSION['namalengkap'];
                          $weeks=mysqli_query($config,"select count(*) as TotalWeeks FROM h_rpospect where sales = '$session_nama' and status = 1 and MONTH(tgl_prospect) = MONTH(CURRENT_DATE) - 1");
                          $data_bulan=mysqli_fetch_assoc($weeks); 

                          $selisih3 = $data_month['TotalOpenWeek'] - $data_bulan['TotalWeeks'];
                          
                          if ($selisih3 > 0) {
                            echo '<span class="text-success"><i class="mdi mdi-arrow-bottom-right"></i>'.$selisih3.'</span>';
                          }else {
                            echo '<span class="text-danger"><i class="mdi mdi-arrow-bottom-right"></i> '.$selisih3.'</span>';
                          }

                        ?>
                          <span class="text-muted">Since last month</span>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col mt-0">
                            <h5 class="card-title">This Year</h5>
                          </div>

                          <div class="col-auto">
                            <div class="stat text-primary">
                              <i class="align-middle" data-feather="users"></i>
                            </div>
                          </div>
                        </div>
                        <?php
                          include "koneksi.php";
                          $session_nama = $_SESSION['namalengkap'];
                          $totalYear=mysqli_query($config,"select count(*) as TotalOpenYear FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(tgl_prospect) = YEAR(CURRENT_DATE)");
                          $data_years=mysqli_fetch_assoc($totalYear); 
                          
                          if ($data_years['TotalOpenYear'] > 0) {
                            echo '<h1 class="mt-1 mb-3">'.$data_years['TotalOpenYear'].'</h1>';
                          }else {
                            echo '<h1 class="mt-1 mb-3">0</h1>';
                          }

                        ?>
                        
                        <div class="mb-0">
                          <?php
                          include "koneksi.php";
                          $session_nama = $_SESSION['namalengkap'];
                          $year=mysqli_query($config,"select count(*) as Totalyear FROM h_rpospect where sales = '$session_nama' and status = 1 and tahun = '2021' ");
                          $data_year=mysqli_fetch_assoc($year); 

                          $selisih4 = $data_years['TotalOpenYear'] - $data_year['Totalyear'];
                          
                          if ($selisih4 > 0) {
                            echo '<span class="text-success"><i class="mdi mdi-arrow-bottom-right"></i>'.$selisih4.'</span>';
                          }else {
                            echo '<span class="text-danger"><i class="mdi mdi-arrow-bottom-right"></i> '.$selisih4.'</span>';
                          }

                        ?>
                          <span class="text-muted">Since last year</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-xxl-7">
              <div class="card flex-fill w-100">
                <div class="card-header">

                  <h5 class="card-title mb-0">Recent Movement 2022</h5>
                </div>
                <div class="card-body py-3">
                  <div class="chart chart-sm">
                    <canvas id="chartjs-dashboard-line"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-6 col-xxl-12 d-flex order-2 order-xxl-3">
              <div class="card flex-fill w-100">
                <div class="card-header">

                  <h5 class="card-title mb-0">Segment</h5>
                </div>
                <div class="card-body d-flex w-100">
                  <div class="align-self-center chart chart-lg">
                    <canvas id="chartjs-dashboard-bar"></canvas>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-12 col-lg-8 col-xxl-12 d-flex">
              <div class="card flex-fill">
                <div class="card-header">

                  <h5 class="card-title mb-0">LIST PROSPECT WAIT KLARIFIKASI</h5>
                </div>
                <table class="table table-hover my-0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>No Prospect</th>
                      <th>Tanggal</th>
                      <th>Customer</th>
                      <th>Project</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
          $jabat=$_SESSION['jabatan'];          
            switch ($jabat) {
                case ($jabat=='Manager'):
                  $sql="SELECT  * FROM h_rpospect where grupsales = '{$_SESSION['bagian']}'AND (status=1)  order by noprospect desc";
                  break;  
                case ($jabat=='Direktur'):
                  $sql="SELECT  * FROM h_rpospect where grupsales = '{$_SESSION['bagian']}'AND (status=1)  order by noprospect desc";
                  break;  
                case ($jabat=='Manager+'):
                  $sql="SELECT  * FROM h_rpospect where (grupsales = '{$_SESSION['bagian']}'or grupsales = '{$_SESSION['bagian2']}')AND (status=1) order by noprospect desc";
                  break;
                case ($jabat=='Staff'):
                  $sql="SELECT  * FROM h_rpospect where sales = '{$_SESSION['namalengkap']}'AND (status=1) order by noprospect desc";
                  break;
                case ($jabat=='Dirut'):
                  $sql="SELECT  * FROM h_rpospect where  status=1";
                  break;  
              }

                     $result =  mysqli_query($config, $sql);

                    if(mysqli_num_rows($result) == 0){
                      echo '<tr><td colspan="6">Tidak Ada Data.</td></tr>';
                    }else{
                      $no = 1;
                      while($rew = mysqli_fetch_assoc($result)){

                      $tanggal=$rew['tgl_prospect'];
                      $tglbaru = date('d-m-Y', strtotime($tanggal ));
                    ?>

                    <tr>
                        <td><?php echo $no ;?></td>
                        <td><?php echo $rew['noprospect'];?></td>
                        <td><?php echo $tglbaru;?></td>
                        <td><?php echo $rew['customer'];?></td>
                        <td><?php echo $rew['project'];?></td>
                        <td>
                          <?php if ($rew['status'] == 1) {
                            echo '<span class="badge bg-orange">WAIT KLARIFIKASI</span>';
                          } ?>
                        </td>
                    </tr>
                    <?php    
                        $no++;
                      }
                    }?>

                     
                  </tbody>
                  
                </table>
              </div>
            </div>

          </div>

        </div>
      </main>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <strong>Copyright &copy; 2021 <a href="http://trafoindonesia.com">Trafoindo Prima Perkasa</a>.</strong> All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="assets/js/app.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
      var gradient = ctx.createLinearGradient(0, 0, 0, 225);
      gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
      gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
      // Line chart
      new Chart(document.getElementById("chartjs-dashboard-line"), {
        type: "line",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Prospect",
            fill: true,
            backgroundColor: gradient,
            borderColor: window.theme.primary,
            data: [
              <?php 
                $prospect1 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 1");
                echo mysqli_num_rows($prospect1);
              ?>,
              <?php 
                $prospect2 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 2");
                echo mysqli_num_rows($prospect2);
              ?>,
              <?php 
                $prospect3 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 3");
                echo mysqli_num_rows($prospect3);
              ?>,
              <?php 
                $prospect4 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 4");
                echo mysqli_num_rows($prospect4);
              ?>,
              <?php 
                $prospect5 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 5");
                echo mysqli_num_rows($prospect5);
              ?>,
              <?php 
                $prospect6 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 6");
                echo mysqli_num_rows($prospect6);
              ?>,
              <?php 
                $prospect7 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 7");
                echo mysqli_num_rows($prospect7);
              ?>,
              <?php 
                $prospect8 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 8");
                echo mysqli_num_rows($prospect8);
              ?>,
              <?php 
                $prospect9 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 9");
                echo mysqli_num_rows($prospect9);
              ?>,
              <?php 
                $prospect10 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 10");
                echo mysqli_num_rows($prospect10);
              ?>,
              <?php 
                $prospect11 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 11");
                echo mysqli_num_rows($prospect11);
              ?>,
              <?php 
                $prospect12 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and MONTH(tgl_prospect) = 12");
                echo mysqli_num_rows($prospect12);
              ?>
            ]
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            intersect: false
          },
          hover: {
            intersect: true
          },
          plugins: {
            filler: {
              propagate: false
            }
          },
          scales: {
            xAxes: [{
              reverse: true,
              gridLines: {
                color: "rgba(0,0,0,0.0)"
              }
            }],
            yAxes: [{
              ticks: {
                stepSize: 1000
              },
              display: true,
              borderDash: [3, 3],
              gridLines: {
                color: "rgba(0,0,0,0.0)"
              }
            }]
          }
        }
      });
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Bar chart
      new Chart(document.getElementById("chartjs-dashboard-bar"), {
        type: "bar",
        data: {
          labels: ["Energy", "Oil Gas Mining", "Infrastructure", "Industry", "Building", "Export", "Other"],
          datasets: [{
            label: "This Segment",
            backgroundColor: window.theme.primary,
            borderColor: window.theme.primary,
            hoverBackgroundColor: window.theme.primary,
            hoverBorderColor: window.theme.primary,
            data: [
            <?php 
                $segment1 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and segment = 'Energy'");
                echo mysqli_num_rows($segment1);
              ?>,
              <?php 
                $segment2 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and segment = 'Oil Gas Mining'");
                echo mysqli_num_rows($segment2);
              ?>,
              <?php 
                $segment3 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and segment = 'Infrastructure'");
                echo mysqli_num_rows($segment3);
              ?>,
              <?php 
                $segment4 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and segment = 'Industry'");
                echo mysqli_num_rows($segment4);
              ?>,
              <?php 
                $segment5 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and segment = 'Buiding'");
                echo mysqli_num_rows($segment5);
              ?>,
              <?php 
                $segment6 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and segment = 'Export'");
                echo mysqli_num_rows($segment6);
              ?>,
              <?php 
                $segment7 = mysqli_query($config,"select * FROM h_rpospect where sales = '$session_nama' and status = 1 and YEAR(NOW()) and segment = 'Other '");
                echo mysqli_num_rows($segment7);
              ?>,
            ],
            barPercentage: .75,
            categoryPercentage: .5
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              gridLines: {
                display: false
              },
              stacked: false,
              ticks: {
                stepSize: 20
              }
            }],
            xAxes: [{
              stacked: false,
              gridLines: {
                color: "transparent"
              }
            }]
          }
        }
      });
    });
  </script>

</body>

</html>