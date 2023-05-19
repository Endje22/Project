<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : OpenSpace 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140131

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="/" accesskey="1" title="">Главная страница</a></li>
				<li><a href="2" accesskey="2" title="">Причины войны</a></li>
				<li><a href="3" accesskey="3" title="">Ход войны</a></li>
				<li><a href="4" accesskey="5" title="">Герои</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="wrapper">
	<?php
    $con = mysqli_connect("localhost", "root", "", "DB");
    mysqli_set_charset($con, "utf8");

    if ($con == false) {
        echo ("Ошибка подключения: " . mysqli_connect_error());
    }
    else {
        $sql = "SELECT id, name, image, description FROM data";
        $result = mysqli_query($con, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            echo (
                    "<div id='staff' class='container'>
                    <div class='title'>
            <h2>{$row['name']}</h2>
            <h3>{$row['description']}</h3>
			<div id='staff' class='container'>
			<div class='boxA'><img src='{$row['image']}' width='500' height='700' alt='' /></div></div>"
            );
        }
    }
?>
</body>
</html>
