<?php require_once"includes/header.php"; ?>        


<div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-envelope-o"></i> Contact us</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= DOMAIN_NAME;?>home/index">Home</a></li>
                            <li class="breadcrumb-item active"><a href="<?= DOMAIN_NAME;?>home/Contact">Contact</a></li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Who we are</h4>
                                    <p>Cloapedia is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p>
                                </div>

                                <div class="col-lg-6">
                                    <h4>How we help?</h4>
                                    <p>If you’d like to write for us, <a href="#">advertise with us</a> or just say hello, fill out the form below and we’ll get back to you as soon as possible.</p>
                                </div>

                                <div class="col-lg-12">
                                    <blockquote class="blockquote">Please read <a href="#">Licensing & Terms</a> of Use if you are wondering about the license. </strong></blockquote>
                                </div>
                            </div><!-- end row -->


                            <div class="row">
                                <div class="col-lg-12">

<form class="form-wrapper" id="message-form">
    <h4>Contact form</h4>
    <div id="result"></div><br>

     <label for="">Name:</label>    
    <input type="text" name="name" id="name"  class="form-control" placeholder="Your name">
    <div class="errname" style="color: red;
    margin-top: -20px;"></div><br>

     <label for="">Email:</label>
    <input type="email" name="email" id="email"  class="form-control" placeholder="Email address">
    <div class="erremail" style="color: red;
    margin-top: -20px;"></div><br>

     <label for="">Phone:</label>
    <input type="text" name="phone" id="phone"  class="form-control" placeholder="Phone">
    <div class="errphone" style="color: red;
    margin-top: -20px;"></div><br>
    
     <label for="">Message:</label>
    <textarea id="textarea" name="textarea" class="form-control" placeholder="Your message"></textarea>
    <div class="errmessage" style="color: red;
    margin-top: -20px;"></div><br>

    <input type="submit" class="btn btn-primary " value= "Send" > 
</form>

                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?=DOMAIN_NAME;?>front/upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="<?=DOMAIN_NAME;?>front/upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="<?=DOMAIN_NAME;?>front/upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Advertising</h2>
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="<?=DOMAIN_NAME;?>front/upload/banner_03.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Instagram Feed</h2>
                                <div class="instagram-wrapper clearfix">
                                    <a class="" href="#"><img src="upload/insta_01.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="<?=DOMAIN_NAME;?>front/upload/insta_02.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="<?=DOMAIN_NAME;?>front/upload/insta_03.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="<?=DOMAIN_NAME;?>front/upload/insta_04.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="<?=DOMAIN_NAME;?>front/upload/insta_05.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="<?=DOMAIN_NAME;?>front/upload/insta_06.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="<?=DOMAIN_NAME;?>front/upload/insta_07.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="<?=DOMAIN_NAME;?>front/upload/insta_08.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="<?=DOMAIN_NAME;?>front/upload/insta_09.jpeg" alt="" class="img-fluid"></a>
                                </div><!-- end Instagram wrapper -->
                            </div><!-- end widget -->

                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>


<?php require_once"includes/footer.php"; ?>        