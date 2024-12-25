<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Andon</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <script src="<?=base_url()?>assets/js/jquery-3.7.1.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/bootstrap.min.css">
    <script src="<?=base_url()?>assets/bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class="and-container">
		<?php $this->load->view("template/navbar");?>

        <!-- hidden variable -->
         <input type="hidden" value="<?=$plan;?>" id="plan">
         <input type="hidden" value="<?=$area;?>" id="area">
         <input type="hidden" value="<?=$line;?>" id="line">

		<div class="and-main" id="content">
        
        </div>
		<?php $this->load->view("template/footer");?>
	</div>
	
    <script>
        var baseUrl = "<?= base_url(); ?>";
    </script>
    <script src="<?=base_url()?>javascript/countDown.js"></script>
    <script src="<?=base_url()?>javascript/main.js"></script>
</body>
</html>