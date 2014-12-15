<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Beranda</title>
        <meta charset="utf-8">
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="stylesheet" href="<?= base_url(); ?>asset/public/css/style.css">
        <link rel="icon" href="<?= base_url(); ?>asset/public/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="<?= base_url(); ?>asset/public/images/favicon.ico" type="image/x-icon" />
        <script src="<?= base_url(); ?>asset/public/js/jquery.js"></script>
        <script src="<?= base_url(); ?>asset/public/js/jquery-migrate-1.1.1.js"></script>
        <script src="<?= base_url(); ?>asset/public/js/bgstretcher.js"></script>
        <script>
                    $(function(){
                    //  Initialize Backgound Stretcher
                    $('body').bgStretcher({
                            images: [
                                '<?= base_url(); ?>asset/public/images/339525_2104109531184_1401927428_o.jpg', 
                                '<?= base_url(); ?>asset/public/images/1277850_10201452995143952_504631660_o.jpg', 
                                '<?= base_url(); ?>asset/public/images/556713_3698966447794_1361563577_n.jpg'],
                            imageWidth: 1600,
                            imageHeight: 964,
                            resizeProportionally:true,
                            slideDirection: 'N',
                            slideShowSpeed: 1000,
                            transitionEffect: 'fade',
                            sequenceMode: 'normal',
                            pagination: '#nav'

                    });
                    });
        </script>

        <!--[if lt IE 8]>
       <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
            <![endif]-->
        <!--[if lt IE 9]>   
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
       <script src="<?= base_url(); ?>asset/public/js/html5shiv.js"></script>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>  
      <![endif]--></head>
    <body>
        <div class="extra-block1"> 
            <!--==============================row-top=================================-->
            <div class="row-top">
                <div class="main">
                    <h1 class="logo"><a href="index.html"><img alt="Eni Gma" src="<?= base_url(); ?>asset/public/images/logo.png"></a></h1>
                    <ul class="list-soc">
                        <li><a href="https://www.facebook.com/"target="_Blank"><img alt="" src="<?= base_url(); ?>asset/public/images/soc-icon1.png"></a></li>
                        <li><a href="#"><img alt="" src="<?= base_url(); ?>asset/public/images/soc-icon2.png"></a></li>
                    </ul>
                </div>
            </div>

            <!--==============================header=================================-->

            <header>
                <div class="row-nav">
                    <div class="main">
                        <nav>
                            <ul class="menu">
                                <li class="current"><a href="index.html">Beranda</a></li>
                                <li><a href="index-1.html">Profil</a></li>
                                <li><a href="index-2.html">Anggota</a></li>
                                <li><a href="index-3.html">Galeri</a></li>
                                <li><a href="index-4.html">Agenda</a></li>
                                <li><a href="index-5.html">Lapak</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                </div>
            </header>
        </div>
        <div class="block">
            <div class="nav-buttons">
                <div id="nav">&nbsp;</div>
            </div>
            <div class="row-1">
                <div class="container_12">
                    <div class="wrapper">
                        <article class="grid_4">
                            <figure class="box-1"><img src="<?= base_url(); ?>asset/public/images/page-t.jpg" alt="" />
                                <figcaption>Trending Topik <a href="more.html"></a></figcaption>
                            </figure>
                        </article>
                        <article class="grid_4">
                            <figure class="box-1"><img src="<?= base_url(); ?>asset/public/images/page-e.jpg" alt="" />
                                <figcaption>Agenda Terdekat <a href="more.html"></a></figcaption>
                            </figure>
                        </article>
                        <article class="grid_4">
                            <figure class="box-1"><img src="<?= base_url(); ?>asset/public/images/page-u.jpg" alt="" />
                                <figcaption>Ulasan Kegiatan <a href="more.html"></a></figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>

            <!--==============================footer================================-->
            <footer>
                <div class="main aligncenter">
                    <div class="privacy">Unair scout &copy; 2015 <span>|</span> <a href="#" rel="nofollow">Privacy Policy</a> <span>|</span><strong>Pramuka Universitas Airlangga Surabaya</strong> </div>
                </div>
            </footer>
        </div>
    </body>
</html>