<?php
session_start();

?>
<html>
  <head> 
    <title>Alumni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>css/Style.css" rel="stylesheet">
	
  </head>
  <body>
	<div class ="container">
			<div id="header" class="row">
				<div class="hero-unit">
					<h1></h1>
				</div>
			</div>
			<div id="navigation" class="row">
				<div class="navbar">
					<div class="navbar-inner">				
						<ul class="nav pull-right">
						   <li ><a href="#">Home</a></li>
						   <li><a href="http://localhost/alumni/index.php/Halaman1/register">Register</a></li>
						   <li><a href="http://localhost/alumni/index.php/Halaman1/form_alumni">Tracer Studi</a></li>
							<li><a href="#">Kontak</a></li>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div  id="leftside" class="span3">
					<div class="span3">
						<div class="well sidebar-nav">
						<?php include "login.php";?>
						</div><!--/.well -->
					</div>
				</div>
				<div id="content" class="span9">
					  <?php if(isset($konten)) $this->load->view($konten);?>
					<?php if(isset($konten_alumni)) $this->load->view($konten_alumni);?>					  
				</div>
					<div id="footer" class="row">
				<div class="span12">
                	<address>
						<strong>Kontak</strong><br>
							Jl. Raya Tidar 100 Malang<br>
							Malang<br>
						<abbr title="Phone">Telp:</abbr> (0343) 456-7890
						</address>
						<address>
			  			<strong>Full Name</strong><br>
			  			<a href="mailto:#">syarif@stiki.ac.id</a>
					</address>
                </div>
			</div>
			</div>
		
	</div>
	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>