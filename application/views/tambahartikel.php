<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin We Tour Organizer</title>
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="shortcut icon" href="assets/images/ico/logoWe.jpg"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/logoWe.jpg"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/logoWe.jpg"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/logoWe.jpg"> 
	<link rel="apple-touch-icon-precomposed" href="assets/images/ico/logoWe.jpg">
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo site_url('admin/c_admin/dashboardawl')?>">Dashboard Admin</a>
	    </div>
	    <br>
	    <br>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="<?php echo site_url('admin/c_admin/dashboardawl')?>">Dashboard</a></li>
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Paket<span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('admin/c_admin/tabelpaket')?>">List Paket</a></li>
	          <li><a href="<?php echo site_url('admin/c_admin/tmbhpaket')?>">Tambah Paket</a></li>
	        </ul>
	      </li>
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Artikel<span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('admin/c_admin/tabelartikel')?>">List Artikel</a></li>
	          <li><a href="<?php echo site_url('admin/c_admin/tmbhartikel')?>">Tambah Artikel</a></li>
	        </ul>
	      </li>
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery<span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('admin/c_admin/tabelfoto')?>">List Foto</a></li>
	          <li><a href="<?php echo site_url('admin/c_admin/tmbhfoto')?>">Tambah Foto</a></li>
	        </ul>
	      </li>
	      <li><a href="<?php echo site_url('admin/c_admin/tabelpesan')?>">Pesan</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    	<li class="dropdown"><a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="#"> Admin We Tour<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="<?php echo site_url('admin/login/logout')?>">Logout</a></li>
		        </ul>
	      	</li>
	    </ul>

	  </div>
	</nav>
	  

	<div id="tambahartikel" class="container">
		<!-- <?php 
		echo validation_errors(); 
		?> --> 

	<!-- <?php echo form_open_multipart('admin/c_admin/insertartikel'); ?> -->
		<table>
			<form action="<?php echo site_url('admin/c_admin/insertartikel')?>" method="POST" enctype="multipart/form-data">
			<!-- helper form, referensi :
			// https://www.codeigniter.com/userguide3/helpers/form_helper.html-->
			<h1>Tambah Artikel</h1>
			<br>
			<div class="form-group">
			<input class="form-control" type="text" rows="1" name="judul_artikel" placeholder="Judul Artikel">
			</div>

			<div class="form-group">
			<textarea class="form-control" type="text" rows="2" name="pengantar_artikel" placeholder="Intro Artikel"></textarea>
			</div>

			<div class="form-group">
			<textarea class="form-control" rows="5" name="deskripsi_artikel" placeholder="Deskripsi Artikel"></textarea>
			</div>
			 <tr> 
			  	<td><label for="image">Gambar Artikel  </label></td>
			  	<br>
		    	<td><input type="file" name="image" size="20" /></td> 
		  	</tr> 
			<tr> 
		    <td><input type="hidden" name="is_submit" value="1" /></td>
		    <td colspan="2"><input type="submit" name="submit" value="Tambah"></td> 
		  </tr> 
		</table>
	<!-- <?php echo form_close(); ?><br> -->
		</form>
	</div>
</body>
</html>