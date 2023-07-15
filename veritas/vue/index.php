<!DOCTYPE html>
<html lang="fr">
<?php
require('../control/header.php');


?>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="active" href="index.php">Acceuil</a>
        <a href="about.html">Appopos</a>
        <a href="searvices.html">Services</a>
        <a href="testimonial.html">Testimonial</a>
        <a href="works.html">tache</a>
        <a href="contact.html">Contact</a>
        <a href="en_cours.php">En cours</a>
        <a href="solde.php">solde</a>
        <a href="trad.php">trader</a>
        <a href="transac.php">transactions</a>
        <a href="connexion.php"><i class="fa fa-user" aria-hidden="true"></i></a>
    </div>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.php">VeRITaS</a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <ul class="social_icon text_align_right d_none">
                            <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            <li class="d_none"><a href="connexion.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a> </li>
                            <li>
                                <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start slider section -->
    <div id="top_section" class=" banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="images/top_img.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Progress<br> Your Bitcoin Money Success</h1>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                                    </p>
                                                    <a class="read_more" href="Javascript:void(0)">Read More </a><a class="read_more" href="Javascript:void(0)">Get A Quote </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="images/top_img.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Progress <br> Your Bitcoin Money Success</h1>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                                    </p>
                                                    <a class="read_more" href="Javascript:void(0)">Read More </a><a class="read_more" href="Javascript:void(0)">Get A Quote </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="images/top_img.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Progress <br> Your Bitcoin Money Success</h1>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                                    </p>
                                                    <a class="read_more" href="Javascript:void(0)">Read More </a><a class="read_more" href="Javascript:void(0)">Get A Quote </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
    <!-- wallet -->
    <div class="wallet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="images/wa1.svg" alt="#"/></i>
                        <h3>ONLINE WALLET</h3>
                        <p>It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="images/wa2.svg" alt="#"/></i>
                        <h3>SEND COINS</h3>
                        <p>It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="images/wa3.svg" alt="#"/></i>
                        <h3>MOBILE APP </h3>
                        <p>It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="images/wa4.svg" alt="#"/></i>
                        <h3>COIN MINING</h3>
                        <p>It is a long established fact that a reader will be distracted by </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wallet -->
    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_border">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="titlepage text_align_left">
                                    <h2>About Us</h2>
                                </div>
                                <div class="about_text">
                                    <p>It is a long established fact that a reader will be distracted bIt is a long established fact that a reader will be distracted by y It is a long established fact that a reader will be distracted by It is a long established fact that a reader will be distracted by </p>
                                    <a class="read_more" href="about.html">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img class="img_responsive" src="images/about2.png" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- graf -->
    <div class="graf">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs md-tabs graf_tab" id="myTabMD" role="tablist">
                        <li>
                            <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#tab1" role="tab" aria-controls="home-md" aria-selected="true">Bitcoin(BTC)</a>
                        </li>
                        <li>
                            <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile-md" aria-selected="false">Bitcoin Cash(BCH)</a>
                        </li>
                        <li>
                            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Lite(LTC)</a>
                        </li>
                        <li>
                            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab4" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Ethereum(ETH)</a>
                        </li>
                        <li>
                            <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab5" role="tab" aria-controls="contact-md" aria-selected="false">Bitcoin Ripple(XRP)</a>
                        </li>
                    </ul>
                    <div class="tab-content card  graf_content" id="myTabContentMD">
                        <div class="tab-pane fade show active padi" id="tab1" role="tabpanel" aria-labelledby="home-tab-md">
                            <div class="row">
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade padi" id="tab2" role="tabpanel" aria-labelledby="profile-tab-md">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade padi" id="tab3" role="tabpanel" aria-labelledby="contact-tab-md">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade padi" id="tab4" role="tabpanel" aria-labelledby="contact-tab-md">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade padi" id="tab5" role="tabpanel" aria-labelledby="contact-tab-md">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4><span>USD</span> 123456.09 <br> Last Price </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Daily Change </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour Low </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> 24 Hour High </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>USD 123456.09 <br> Today Open </h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="usd text_align_center">
                                        <h4>BTC 09876 <br> 24 hour volume </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="graf_bootom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <figure>
                                                <h3 class="h3tota">Total Growth</h3>
                                                <img class="img_responsive" src="images/graf1.jpg" alt="#" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="growth text_align_center">
                                            <h3>LiveTrades <span style="color: #face34;" class="pa_ri">USD 123456.09</span></h3>
                                            <figure><img class="img_responsive" src="images/graf2.jpg" alt="#" /></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end graf -->
    <!-- testimonial -->
    <div class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="border_testi">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage text_align_center">
                                    <h2>Testimonial</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row d_flex">
                            <div class="col-md-10 offset-md-1">
                                <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#testimo" data-slide-to="0" class="active"></li>
                                        <li data-target="#testimo" data-slide-to="1"></li>
                                        <li data-target="#testimo" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="images/clint.jpg" alt="#"/></i>
                                                                <h3>MorGan Den</h3>
                                                                <span>Bitcoin</span>
                                                                <img src="images/icon.png" alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and webmore-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and webmore-or-less normal distribution of</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="images/clint.jpg" alt="#"/></i>
                                                                <h3>MorGan Den</h3>
                                                                <span>Bitcoin</span>
                                                                <img src="images/icon.png" alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and webmore-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and webmore-or-less normal distribution of</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="testomoniam_text text_align_center">
                                                                <i><img src="images/clint.jpg" alt="#"/></i>
                                                                <h3>MorGan Den</h3>
                                                                <span>Bitcoin</span>
                                                                <img src="images/icon.png" alt="#" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="testomoniam_text text_align_left">
                                                                <p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and webmore-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and webmore-or-less normal distribution of</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonial -->
    <!-- works -->
    <div class="works">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="works_vedio">
                        <figure><img class="img_responsive" src="images/work.png" alt="#"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- works -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Requeste A call Back</h2>
                    </div>
                </div>
                <div class=" col-md-10 offset-md-1">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-6 ">
                                <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Phone number" type="type" name="Phone number">
                            </div>
                            <div class="col-md-6">
                                <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="logo_bottom" href="index.php">VeRItas</a>
                    </div>
                    <div class="col-md-3 col-sm-6" ">
                  <div class="Informa conta ">
                     <h3>Contact Us</h3>
                     <ul>
                        <li> <a href="Javascript:void(0) "> <i class="fa fa-map-marker " aria-hidden="true "></i> Location
                           </a>
                        </li>
                        <li> <a href="Javascript:void(0) "><i class="fa fa-phone " aria-hidden="true "></i> Call +01 1234567890
                           </a>
                        </li>
                        <li> <a href="Javascript:void(0) "> <i class="fa fa-envelope " aria-hidden="true "></i> demo@gmail.com
                           </a>
                        </li>
                     </ul>
                     <ul>
                        <li>Readable content of                              
                        </li>
                        <li>a page when looking                           
                        </li>
                        <li>at its layoutreadable                          
                        </li>
                        <li>content of a page                             
                        </li>
                        <li>when looking at its                         
                        </li>
                        <li>layout                          
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6 "">
                        <div class="Informa helpful">
                            <h3>Useful Link</h3>
                            <ul>
                                <li>Readable content of
                                </li>
                                <li>a page when looking
                                </li>
                                <li>at its layoutreadable
                                </li>
                                <li>content of a page
                                </li>
                                <li>when looking at its
                                </li>
                                <li>layout
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" ">
                  <div class="Informa ">
                     <h3>Offices</h3>
                     <ul>
                        <li>Readable content of                              
                        </li>
                        <li>a page when looking                           
                        </li>
                        <li>at its layoutreadable                          
                        </li>
                        <li>content of a page                             
                        </li>
                        <li>when looking at its                         
                        </li>
                        <li>layout                          
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6 ">
                  <div class="Informa ">
                     <h3>Newsletter</h3>
                     <form class="newslatter_form ">
                        <input class="ente " placeholder="Enter your email " type="text " name="Enter your email ">
                        <button class="subs_btn ">Subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center ">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12 ">
                        <p>© 2020 All Rights Reserved. Design by   <a href="https://html.design/ "> Free Html Template</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js "></script>
      <script src="js/bootstrap.bundle.min.js "></script>
      <script src="js/jquery-3.0.0.min.js "></script>
      <script src="js/custom.js "></script>
   </body>
</html>