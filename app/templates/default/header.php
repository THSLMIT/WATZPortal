<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITETITLE; //SITETITLE defined in index.php?></title>
    
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
	
	<meta name="description" content="" />
	<link rel="author" href="" />

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo url::get_template_path();?>css/bootstrap.css" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?php echo url::get_template_path();?>css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo url::get_template_path();?>css/plugins/timeline/timeline.css" rel="stylesheet" />

    <!-- Mint Admin CSS - Include with every page -->
    <link href="<?php echo url::get_template_path();?>css/mint-admin.css" rel="stylesheet" />


    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo url::get_template_path();?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo url::get_template_path();?>js/bootstrap.min.js"></script>
    <script src="<?php echo url::get_template_path();?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?php echo url::get_template_path();?>js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo url::get_template_path();?>js/plugins/morris/morris.js"></script>

    <!-- Mint Admin Scripts - Include with every page -->
    <script src="<?php echo url::get_template_path();?>js/mint-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="<?php echo url::get_template_path();?>js/demo/dashboard-demo.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<div id="wrapper">