<!DOCTYPE html>
<html>
<head>
<?php include ('html-meta.php'); ?>
</head>
<body>
	 <div id="wapper" > 
	 	<div id="header">
         <?php include('module/nav-menu.php'); ?>	
	 		<?php include('module/header.php'); ?>	
	 	</div>
	 	<div id="slider">
         <?php include('module/slider.php'); ?>	
      </div>
      <div id="content">
         <?php include('module/file.php'); ?>	
         <?php include('module/product.php'); ?>
         <?php include('module/dichvu.php'); ?>
         <?php include('module/tintuc.php'); ?>
         <?php include('module/gioithieu.php'); ?>
         <?php include('module/quangcao.php'); ?>
      </div>
      <div id="fooder">
         <?php include('module/footer.php'); ?>
      </div>
      <?php include('module/copyright.php'); ?>
	 </div>
</body>
 </html>
