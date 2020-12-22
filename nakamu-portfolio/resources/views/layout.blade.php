<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>なかむらポートフォリオ</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/na.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
    @include('partials.header')
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center" style="padding-top: 250px;">
            <div class="container d-flex align-items-center flex-column" style="padding-top: 80px;">
                <h1 class="masthead-heading text-uppercase mb-0">
                <span class="bounce">HELLO, WORLD.</span></h1>


                <!-- Icon Divider-->
                <div class="divider-custom divider-light" style="padding-bottom: 100px; padding-top: 20px;">
                    <a href="#"><span></span></a>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">飲食店の店長を経験し、<br>ITエンジニアになりました。</p>
                <p class="masthead-subheading font-weight-light mb-0">人に喜んでいただけるような<br>WEBシステムを作っていきます。</p>
            </div>
            <!-- @include('partials.header') -->
        </header>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-comment-dots"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">
                        <h2>仕事について</h2>
                        <p>初めまして。ナカムラです。</p>
                        <p>大学卒業後、飲食店に勤務。</p>
                        <p>売上管理、人員管理、原価管理、クレーム対応など店舗管理に必要な全てを経験。</p>
                        <p>その後、29歳でIT企業に就職。</p>
                        <p>キッティング、テスターを経験してから31歳でプログラマーへ。</p>
                        <p>現在はWEBエンジニアとして従事。</p>
                        <p>WordPressを使用したHPの作成も可能です。</p>
                        <p>少し遅めのエンジニアデビューですが、日々精進してまいります。</p>
                    </div>
                    <div class="col-lg-4 mr-auto"><p class="lead">
                        <h2>プライベート</h2>
                        <p>趣味は釣りと映画、WordPress</p>
                        <div class="divider-custom-icon"><i class="fas fa-fish"></i>　釣り　
                        <i class="fas fa-fish"></i></div>
                        <p>ハゼがメイン。</p>
                        <br>
                        <div class="divider-custom-icon"><i class="fas fa-film"></i>　映画　
                        <i class="fas fa-film"></i></div>
                        <p>映画はMARVELが好きです。特にスパイダーマンシリーズが好きでフィギュアも集めています。</p>
                        <br>
                        <div class="divider-custom-icon"><i class="fab fa-wordpress"></i>　WordPress　
                        <i class="fab fa-wordpress"></i></div>
                        <p>SEOを意識したライティングも可能です。今後はオリジナルテーマを作成したいです。</p>
                        <p></p>
                        <p></p>
                    </p>
                    </div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                </div>
            </div>
        </section>
        <!-- Service Section-->
        <section class="page-section service" id="service">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <!-- <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">service</h2> -->
                <h2 class="page-section-heading text-center text-uppercase text-white">service</h2>

                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-database"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Laravel-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <h3 style="color: white;">Laravel</h3>
                            <div class="icon">
                                <img class="img-fluid" src="assets/img/portfolio/laravel.png" alt="Laravel" />
                            </div>
                            <div class="iconbox-sentence-block">
                                <div class="iconbox-sentence">Laravelを用いたWEBサイトの構築が可能です。
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <h3>Ruby on Rails</h3>
                            <div class="icon">
                                <img class="img-fluid" src="assets/img/portfolio/ruby.png" alt="Ruby on Rails" />
                            </div>
                            <div class="iconbox-sentence-block">
                                <div class="iconbox-sentence">Ruby on Railsを用いたWEBサイトの構築が可能です。
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Ruby on Rails-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <h3>WordPress</h3>
                            <div class="icon">
                                <img class="img-fluid" src="assets/img/portfolio/wordpress.png" alt="WordPressh" />
                            </div>
                            <div class="iconbox-sentence-block">
                                <div class="iconbox-sentence">WordPressを用いたWEBサイトの構築が可能です。
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Writing-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <h3>Writing</h3>
                            <div class="icon">
                                <img class="img-fluid" src="assets/img/portfolio/writing.png" alt="WordPressh" />
                            </div>
                            <div class="iconbox-sentence-block">
                                <div class="iconbox-sentence">SEO対策を用いた記事の記述が可能です。
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-database"></i></div>
                    <div class="divider-custom-line"></div>
                </div>


                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                <div class="iconbox-sentence-block">
                                <div class="iconbox-sentence" style="padding-bottom: 20px;">作成次第、載せていきます。
                                </div>
                            </div></div>

                <!-- Portfolio Grid Items-->


                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <a href="https://www.google.com">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>

                            </a>
                            <img class="img-fluid" src="assets/img/portfolio/todo.png" alt="" />
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-envelope"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <!-- <div>
                    <p>１～３日以内に返信いたします。</p>
                    <p>内容によってはお返事を差し上げられない場合もございます。</p>
                    <p>あらかじめご了承ください。</p>
                </div> -->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div>
                    <p>１～３日以内に返信いたします。<br>
                    内容によってはお返事を差し上げられない場合もございます。<br>
                    あらかじめご了承ください。</p>
                </div>
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                </label>
                            </div>
                            <div class="control-group">
                                <label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                </label>
                            </div>
                            <div class="control-group">
                                <label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                </label>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>



<!--
                        <div class="col-lg-4 ml-auto">
                            <p>１～３日以内に返信いたします。</p>
                            <p>内容によってはお返事を差し上げられない場合もございます。</p>
                            <p>あらかじめご了承ください。</p>
                    </div> -->
                </div>
            </div>
        </section>


















        <!-- Footer-->
        <footer class="footer text-center" style="padding: 10px;">
            @include('partials.footer')
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>©︎<?php echo date("Y"); ?> Nakamura ALL rights reserved.</small></div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
