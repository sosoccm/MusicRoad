<?php  
    $subName = $_GET['sub'];
    $title;
    $subvalue;
    if (empty($subName)) {
        $subName = "home";
    }


switch ($subName) {
        case "home":
            $title = "홈";
            $subvalue = 0;
            break;
        case "artist":
            $title = "아티스트";
            $subvalue = 1;
            break;
        case "cal":
            $title = "일정";
            $subvalue = 2;
            break;
        case "map":
            $title = "지도";
            $subvalue = 3;
            break;
        case "option":
            $title = "설정";
            $subvalue = 4;
            break;
        
    }
?>
        
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>MusicRoad</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/jquery.mobile-1.4.5.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" type="text/css" rel="stylesheet" />
        <script src="scripts/jquery-1.12.1.js" type="text/javascript"></script>
        <script src="scripts/jquery.mobile-1.4.5.js" type="text/javascript"></script>
        <script>
            $("div[data-role=page]").css("padding-bottom: 56px;");
        </script>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header"> 
                <a href="#" onclick="location.reload(true);" data-icon="refresh" class="ui-btn-right">&nbsp;</a>
                <h1><?php echo $title ?></h1> 
            </div> 
        <div class="wrap-contents">
            <?php
                if ($subName == "home") {
                    include 'pages/home.html';
                } else
                if ($subName == "artist") {
                    include 'pages/artist.html';
                } else
                if ($subName == "cal") {
                    include 'pages/calendar.html';
                } else
                if ($subName == "map") {
                    include 'pages/map.html';
                } else
                if ($subName == "option") {
                    include 'pages/option.html';
                }
            ?>
        </div>
        <div class="wrap-footer"  data-role="footer">
            <div data-role="navbar">
                <ul>
                    <li><a href="?sub=home" data-icon="grid" <?php if ($subvalue == 0) echo 'class="ui-btn-active"'; ?>>홈</a></li>
                    <li><a href="?sub=artist" data-icon="star" <?php if ($subvalue == 1) echo 'class="ui-btn-active"'; ?>>아티스트</a></li>
                    <li><a href="?sub=cal" data-icon="calendar" <?php if ($subvalue == 2) echo 'class="ui-btn-active"'; ?>>일정</a></li>
                    <li><a href="?sub=map" data-icon="location" <?php if ($subvalue == 3) echo 'class="ui-btn-active"'; ?>>지도</a></li>
                    <li><a href="?sub=option" data-icon="gear" <?php if ($subvalue == 4) echo 'class="ui-btn-active"'; ?>>기타</a></li>
                </ul>
            </div><!-- /navbar -->
        </div><!-- /footer -->
        </div>
    </body>
</html>
