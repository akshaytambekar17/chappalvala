<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

     Heelloo User..

      Welcome <?php echo $this->session->userdata('name'); ?> 


 <div class="pull-right">
        <a href="<?= base_url()?>logout" class="btn btn-default btn-flat">Sign out</a>
  </div>
</body>	
</html>
<?php


?>