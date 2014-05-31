<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in index.php?></title>
	
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="description" content="Web Portal System for WATZ Smartwach Project" />
	<link rel="author" href="http://www.thsinventeam.com" />

	<!-- Core CSS - Include with every page -->
    <link href="<?php echo url::get_template_path();?>css/bootstrap.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Mint Admin CSS - Include with every page -->
    <link href="<?php echo url::get_template_path();?>css/mint-admin.css" rel="stylesheet" />


	<!-- Core Scripts - Include with every page -->
    <script src="<?php echo url::get_template_path();?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo url::get_template_path();?>js/bootstrap.min.js"></script>
    <script src="<?php echo url::get_template_path();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Mint Admin Scripts - Include with every page -->
    <script src="<?php echo url::get_template_path();?>js/mint-admin.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<div class="container">