<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="<?php echo base_url();?>jquery/themes/base/jquery-ui.css" />
  <script src="<?php echo base_url();?>jquery/jquery-1.9.1.js"></script>
  <script src="<?php echo base_url();?>jquery/ui/jquery-ui.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>demos/style.css" />
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">1</a></li>
    <li><a href="#tabs-2">2</a></li>
    <li><a href="#tabs-3">3</a></li>
    <li><a href="#tabs-4">4</a></li>
  </ul>
  <div id="tabs-1">
   <td><?php include "1.php" ;?></td> </div>
  <div id="tabs-2">
			 <td><?php include "2.php" ;?></td>
    </div>
  <div id="tabs-3">
<td><?php include "3.php" ;?></td>    
	</div>
</div>
 
