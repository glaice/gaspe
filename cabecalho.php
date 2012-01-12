<?php 

function cabecalho($titulo){


?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"> 
    <meta name="language" content="pt-br">


    <title> <?=$titulo?> </title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" charset="utf-8">
    <!-- Slides -->
    <link rel="stylesheet" type="text/css" href="/slider/style.css" />
    <script type="text/javascript" src="/jquery-local/js/jquery-1.3.2.min.js" ></script>
    <script type="text/javascript" src="/jquery-local/js/jquery-ui-1.7.3.custom.min.js" ></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>

<script src="/paradaprafotos/galleria.js"></script>
        <style>
            html,body{background:#ffff}
            .content{color:#ccc;font:14px/1.4 arial,sans-serif;width:650px;margin:20px auto}
            h1{line-height:1.1;letter-spacing:-1px;}
            #galleria{height:450px;}

        </style>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21475423-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>

        <div id="area-total" >
            <div id="area-banner"> </div> <!--/ Fechando area-banner /-->

<?php

menu();


?>


            <div id="area-conteudo" >

<? }//fechando function ?>
