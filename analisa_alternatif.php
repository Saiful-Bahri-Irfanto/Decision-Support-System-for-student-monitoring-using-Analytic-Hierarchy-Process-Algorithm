<?php
session_start();
if (empty($_SESSION['username']) AND
empty($_SESSION['password'])){
// Apabila belum login maka akan diarahkan ke form login
 header('location:index.php');
}
else{
if ( $_SESSION['level']=='admin' ){
// Jika sudah login dan levelnya adalah admin maka akanditampilkan halaman web
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SISTEM PENDUKUNG KEPUTUSAN</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
<header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div  data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Analityc Hirarchy Process</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
			
            <div class="top-menu">
			
            	<ul class="nav pull-right top-menu">
				
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
			<div class="top-menu">
			
            	<ul class="nav pull-right top-menu">
				<li><a href="index.html" class="logo"> <b>SMA MUhammadiyah Singaparna</b> </a></li>
                   
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  
              	  	
                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>M E N U</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Input Data</span>
                      </a>
                      <ul class="sub">
                         <li><a  href="input_data_kriteria.php">Data Kriteria</a></li>
                          
						  <li class="sub-menu">
							<a href="javascript:;" >
                          
							<span>Data Subkriteria</span>
							</a>
							<ul class="sub">
								<li><a  href="input_data_subkriteria_ab.php">Data Subkriteria AB</a></li>
								<li><a  href="input_data_subkriteria_sk.php">Data Subkriteria SK</a></li>
								<li><a  href="input_data_subkriteria_pl.php">Data Subkriteria PL</a></li>
								<li><a  href="input_data_subkriteria_ptt.php">Data Subkriteria PTT</a></li>
								<li><a  href="input_data_subkriteria_na.php">Data Subkriteria NA</a></li>
							</ul>
						</li>
                          <li><a  href="input_data_alternatif.php">Data Alternatif</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Analisa Data</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tampil_data_kriteria.php">Analisa Kriteria</a></li>
                          
						  <li class="sub-menu">
							<a href="javascript:;" >
                          
							<span>Analisa Subkriteria</span>
							</a>
							<ul class="sub">
								<li><a  href="tampil_data_subkriteria_ab.php">Analisa Subkriteria AB</a></li>
								<li><a  href="tampil_data_subkriteria_sk.php">Analisa Subkriteria SK</a></li>
								<li><a  href="tampil_data_subkriteria_pl.php">Analisa Subkriteria PL</a></li>
								<li><a  href="tampil_data_subkriteria_ptt.php">Analisa Subkriteria PT</a></li>
								<li><a  href="tampil_data_subkriteria_na.php">Analisa Subkriteria NA</a></li>
							</ul>
						</li>
                          <li><a  href="tampil_data_alternatif.php">Analisa Alternatif</a></li>
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Laporan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="tampil_hasil_analisa_alternatif.php">Hasil Siswa Bermasalah</a></li>
                          <li><a  href="laporan.php">Cetak Siswa Bermasalah</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> ANALISA ALTERNATIF </h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <?php
						include "koneksi.php";
						$sql="select * from t_alternatif2 where
						nis='$_GET[nis]'";
						$tampil=mysql_query($sql);
						$data=mysql_fetch_array($tampil);
					  ?>
                      <form class="form-horizontal style-form" method="POST" action="hitung_analisa_alternatif.php">
                          <div class="form-group">
                              <div class="col-sm-10">
								<table class="table table-bordered table-striped table-condensed">
                              <thead>
							  <tr>
								<th> Nama </th>
								<th> Absensi </th>
								<th> Sikap </th>
								<th> Perilaku </th>
								<th> Pelanggaran Tata Tertib </th>
								<th> Nilai Akademik </th>
							  </td>
                              <tr>
                                  <td class="numeric"> <input type="text" name="nama" value="<?php echo "$data[nama]"; ?>" > </td>
								  <input type="hidden" name="nis2" value="<?php echo "$data[nis]"; ?>">
								  
								  <td class="numeric">
								  <select name="ab" class="form-control">
								  <?php
									include "koneksi.php";
									$sql="select * from t_b_ab";
									$tampil=mysql_query($sql);
									$data=mysql_fetch_array($tampil);
									?>
										<option value="<?php echo "$data[b_ab1]"; ?>" > 0 - 3 </option>
										 <option value="<?php echo "$data[b_ab2]"; ?>" > 4 - 6 </option>
										 <option value="<?php echo "$data[b_ab3]"; ?>" > 7 - 9 </option>
										 <option value="<?php echo "$data[b_ab4]"; ?>" > > 10 </option>
								  </td>
								  
								  <td class="numeric">
								  <select name="sk" class="form-control">
								  <?php
									include "koneksi.php";
									$sql="select * from t_b_sk";
									$tampil=mysql_query($sql);
									$data=mysql_fetch_array($tampil);
									?>
										<option value="<?php echo "$data[b_sk1]"; ?>" > Baik </option>
										 <option value="<?php echo "$data[b_sk2]"; ?>" > Cukup </option>
										 <option value="<?php echo "$data[b_sk3]"; ?>" > Buruk </option>
								  </td>
								  
								  <td class="numeric">
								  <select name="pl" class="form-control">
								    <?php
									include "koneksi.php";
									$sql="select * from t_b_pl";
									$tampil=mysql_query($sql);
									$data=mysql_fetch_array($tampil);
									?>
										<option value="<?php echo "$data[b_pl1]"; ?>" > Rajin </option>
										 <option value="<?php echo "$data[b_pl2]"; ?>" > Sedang </option>
										 <option value="<?php echo "$data[b_pl3]"; ?>" > Malas </option>
								  </td>
								  
								  <td class="numeric">
								  <select name="ptt" class="form-control">
								  <?php
									include "koneksi.php";
									$sql="select * from t_b_ptt";
									$tampil=mysql_query($sql);
									$data=mysql_fetch_array($tampil);
									?>
										<option value="<?php echo "$data[b_p1]"; ?>" > Tidak Pernah </option>
										 <option value="<?php echo "$data[b_p2]"; ?>" > Kadang </option>
										 <option value="<?php echo "$data[b_p3]"; ?>" > Sering </option>
								  </td>
								  
								  <td class="numeric">
								  <select name="na" class="form-control">
								  <?php
									include "koneksi.php";
									$sql="select * from t_b_na";
									$tampil=mysql_query($sql);
									$data=mysql_fetch_array($tampil);
									?>
										<option value="<?php echo "$data[bn1]"; ?>" > 81 - 100 </option>
										 <option value="<?php echo "$data[bn2]"; ?>" > 61 - 80 </option>
										 <option value="<?php echo "$data[bn3]"; ?>" > 41 - 60 </option>
										 <option value="<?php echo "$data[bn4]"; ?>" > 0- 40 </option>
								  </td>
								  
								  <td class="numeric">
								    <?php
									include "koneksi.php";
									$sql="select * from t_b_kriteria";
									$tampil=mysql_query($sql);
									$data=mysql_fetch_array($tampil);
									?>
									<input type="hidden" name="b_ab" value="<?php echo "$data[b_ab]"; ?>">
									<input type="hidden" name="b_sk" value="<?php echo "$data[b_sk]"; ?>">
									<input type="hidden" name="b_pl" value="<?php echo "$data[b_pl]"; ?>">
									<input type="hidden" name="b_ptt" value="<?php echo "$data[b_ptt]"; ?>">
									<input type="hidden" name="b_na" value="<?php echo "$data[b_na]"; ?>">
								  </td>
								  <input type="hidden" name="hasil" >
								  
                              </tr>
                             
                              <tr>
                                  <td class="numeric"><input type="submit" name="hitung" value="Hitung"></td>
                                  
                              </tr>
                              </tbody>
                          </table>
								</form>
                              </div>
                          </div>
                          
          	
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Sistem Pendukung Keputusan Monitoring Siswa Bermasalah
              <a href="form_component.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php }else { echo "Anda bukan Administraor"; }
}
?>