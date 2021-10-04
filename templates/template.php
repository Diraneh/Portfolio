<?php session_start(); ?>
<!DOCTYPE html>
<!--
Template Name: Elmi Diraneh
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Elmi Diraneh</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="public/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1 class="logoname"><a href="index.html">Elmi Diraneh</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
     
      <ul class="clear">
        
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a href="#">Level 2</a></li>
           
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>
          </ul>
        </li>
       
       
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>

  
    <!-- ##### Header Area End ##### -->
    <!----------------------------- CONTENU ----------------------------------->

    <?= $content ?>
     <!----------------------------- footer----------------------------------->
    <div class="bgded overlay row4" style="background-image:url('public/images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h1 class="logoname"><a href="index.html">Elmi<span>a</span>Diraneh</a></h1>
      <p>Scelerisque facilisis sapien turpis facilisis libero eu viverra purus dui ac leo sed vitae diam morbi sed nibh in eget dolor phasellus rhoncus odio morbi elit nunc id elit donec elementum [<a href="#">&hellip;</a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Volutpat metus nullam</h6>
      <ul class="nospace linklist">
        <li><a href="#">Sagittis leo morbi quis</a></li>
        <li><a href="#">Nulla vehicula felis laoreet</a></li>
        <li><a href="#">Pulvinar proin et eros ac</a></li>
        <li><a href="#">Mi vulputate accumsan fusce</a></li>
        <li><a href="#">At massa in sed tortor sit amet</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Tincidunt ullamcorper</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Fusce vel lectus nunc</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Lacinia donec tortor lectus varius vel egestas a dictum in odio mauris metus.</a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Turpis iaculis ac hendrerit vel pretium non magna sed non metus ut at nisi morbi.</a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="public/layout/scripts/jquery.min.js"></script>
<script src="public/layout/scripts/jquery.backtotop.js"></script>
<script src="public/layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="public/layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->
</body>
</html>