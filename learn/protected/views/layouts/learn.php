<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="en-US">



<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Simplilearn</title>
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
    <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
    <!--<link rel="stylesheet" type="text/css" media="all" href="css/styles2.css">-->
    <!--<link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">-->

    <!--
    <link rel="stylesheet" type="text/css" src="http://jqwidgets.com/public/jqwidgets/styles/jqx.base.css">
    </script>
    <link rel="stylesheet" type="text/css" src="http://jqwidgets.com/public/jqwidgets/styles/jqx.energyblue.css">
    </script>

    <script type="text/javascript" src="js/switchery.min.js"></script>

    <script type="text/javascript" src="http://jqwidgets.com/public/jqwidgets/jqx-all.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>js/dropdown.js"></script>
-->

    <style>
        * {
            margin: 0;
			padding: 0;
        }
        header {
            background-image: url("<?php echo Yii::app()->request->baseUrl; ?>/images/header_small.png");
            background-size: 1366px 50px;
            height: 50px;
            position: relative;
        }
        
		.container {
		position: relative;
		width:80%;
		height:800px;
		background-color: #e8edf0;
		
		}
		
		.top-container {
		position: absolute;
		width:100%;
		height:130px;
		background-color: #41b8d8;
		color: #feffff;
		
		}
		
		.top-container-text {
		text-align: left;
		padding:20px;
		font-size:150%;
		margin-left:25px;
		}
		
		.top-container-text-more {
		font-size:150%;
		text-align: center;
		
		}
		
		.center-container {
		position: absolute;
		width:100%;
		height:500px;
		top:200px;
				
		}
		
				
        .wrapper {
            width: 980px;
            margin: 0 auto;
        }
        
        footer {
			margin-left:-20%;
            background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/footer.jpg);
			background-size: 980px 377px;
            height: 377px;
			
        }
		
		
		
		.actionbuy {
            width: 400px;
            line-height: 84px;
            background-color: #25c253;
            text-align: right;
            clear: both;
            font-family: "Arial", "Times New Roman", Georgia, Serif;
            font-size: 40px;
            color: white;
            cursor: pointer;
            margin-left: 650px;
        }
		
		.lower-container {
		position: absolute;
		top:520px;
		width:100%;
		height:80px;
		
		background-color: #c4cdca;
		color: #6b6f6e;
		
		}
		
		 label
        {
            position: relative;
            top: 15px;
			padding: 15px;
			margin: 15px;
			
        }
		
    </style>
</head>

<body>
    <header>
    
        

    </header>
	
	 <div class="wrapper">

    <div class="container">    
	
	<?php echo $content; ?>

	 </div>
    <footer>
        <div></div>
           
    </footer>
    </div> 
    
</body>

</html>