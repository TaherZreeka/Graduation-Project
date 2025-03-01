<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="المعهد التقاني للحاسوب - دورات تدريبية متخصصة في البرمجة والتكنولوجيا.">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>المعهد التقاني للحاسوب</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    <!-- Header -->
    <header id="header" class="transparent-nav">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="index.html">
                        <img src="{{asset('assets/img/icon52-ar.ico')}}" alt="logo"
                            style="border-radius:50%; width:60px; height: 70px;border:1px solid black ">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle">
                    <span></span>
                </button>
                <!-- /Mobile toggle -->
            </div>

            <!-- Navigation -->
            <nav id="nav" style="height: 50px">
                <ul class="main-menu nav navbar-nav navbar-right">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="#about">من نحن</a></li>
                    <li><a href="#courses">الدورات</a></li>
                    <li><a href="blog.html">المدونة</a></li>
                    <li><a href="contact.html">اتصل بنا</a></li>
                    <li><a href="/" class="btn btn-primary" style="padding: 5px 15px; margin-top: 10px;">التسجيل</a>
                    </li>
                </ul>
            </nav>
            <!-- /Navigation -->

        </div>
    </header>
    <!-- /Header -->

    <!-- Home -->
    <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay"
            style="background-image:url({{asset('assets/img/home-background1.jpg')}})"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text">مرحبًا بكم في المعهد التقاني للحاسوب</h1>
                        <p class="lead white-text">نفتح لكم أبواب العلم والإبداع، حيث نقدم لكم أفضل البرامج التدريبية
                            والتقنية لتطوير مهاراتكم
                            في عالم الحاسوب والتكنولوجيا. انطلقوا معنا نحو مستقبل مشرق ومليء بالإنجازات!</p>
                        <a class="main-button icon-button" href="#">ابدأ الآن!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home -->

    <!-- About -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <div class="section-header">
                        <h2>مرحبًا بكم في موقعنا</h2>
                        <p class="lead">نقدم لكم أفضل الدورات التدريبية في مختلف المجالات.</p>
                    </div>

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-flask"></i>
                        <div class="feature-content">
                            <h4>دورات عبر الإنترنت</h4>
                            <p>تعلم في أي وقت ومن أي مكان مع دوراتنا المتاحة على الإنترنت.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>
                        <div class="feature-content">
                            <h4>مدربون خبراء</h4>
                            <p>تعلم من أفضل المدربين في مجالاتهم.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <h4>مجتمع تفاعلي</h4>
                            <p>انضم إلى مجتمعنا التفاعلي وشارك في النقاشات.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                </div>

                <div class="col-md-6">
                    <div class="about-img">
                        <img src="{{asset('assets/img/about.png')}}" alt="">
                    </div>
                </div>

            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </div>
    <!-- /About -->
    <!-- الاختصاصات -->
    <div id="specializations" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>اختصاصاتنا</h2>
                    <p class="lead">نقدم لكم أفضل البرامج التدريبية في مجالات الحاسوب والتكنولوجيا.</p>
                </div>
            </div>
            <!-- /row -->

            <!-- اختصاصات -->
            <div class="row">

                <!-- اختصاص البرمجيات -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="specialization">
                        <div class="specialization-img">
                            <img src="{{asset('assets/img/software (2).png')}}" alt="البرمجيات" width="150"
                                height="150">
                        </div>
                        <div class="specialization-content">
                            <h4>البرمجيات</h4>
                            <p>تعلم تطوير البرمجيات وتصميم التطبيقات باستخدام أحدث التقنيات.</p>
                        </div>
                    </div>
                </div>
                <!-- /اختصاص البرمجيات -->

                <!-- اختصاص الشبكات -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="specialization">
                        <div class="specialization-img">
                            <img src="{{asset('assets/img/networking.jpg')}}" alt="الشبكات" width="150" height="150">
                        </div>
                        <div class="specialization-content">
                            <h4>الشبكات</h4>
                            <p>اكتسب مهارات إدارة الشبكات وتأمينها باستخدام أفضل الأدوات.</p>
                        </div>
                    </div>
                </div>
                <!-- /اختصاص الشبكات -->

                <!-- اختصاص الحوسبة -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="specialization">
                        <div class="specialization-img">
                            <img src="{{asset('assets/img/computing.jpg')}}" alt="الحوسبة" width="150" height="150">
                        </div>
                        <div class="specialization-content">
                            <h4>الحوسبة</h4>
                            <p>تعرف على أساسيات الحوسبة السحابية وتحليل البيانات.</p>
                        </div>
                    </div>
                </div>
                <!-- /اختصاص الحوسبة -->

                <!-- اختصاص الحواسيب -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="specialization">
                        <div class="specialization-img">
                            <img src="{{asset('assets/img/hardware.jpg')}}" alt="الحواسيب" width="150" height="150">
                        </div>
                        <div class="specialization-content">
                            <h4>الحواسيب</h4>
                            <p>تعلم صيانة الحواسيب وتجميعها وتطوير مهاراتك في مجال الهاردوير.</p>
                        </div>
                    </div>
                </div>
                <!-- /اختصاص الحواسيب -->

            </div>
            <!-- /اختصاصات -->

        </div>
        <!-- /container -->

    </div>
    <!-- /الاختصاصات -->
    <!-- Courses -->
    <div id="courses" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>استكشف الدورات</h2>
                    <p class="lead">اختر من بين مجموعة واسعة من الدورات التدريبية.</p>
                </div>
            </div>
            <!-- /row -->

            <!-- courses -->
            <div id="courses-wrapper">

                <!-- row -->
                <div class="row">

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="{{asset(asset('assets/img/course01.jpg'))}}" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">دورة Excel من المبتدئ إلى المحترف</a>
                            <div class="course-details">
                                <span class="course-category">أعمال</span>
                                <span class="course-price course-free">مجاني</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="{{asset(asset('assets/img/course02.jpg'))}}" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">مقدمة إلى CSS</a>
                            <div class="course-details">
                                <span class="course-category">تصميم الويب</span>
                                <span class="course-price course-premium">مدفوع</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="{{asset(asset('assets/img/course03.jpg'))}}" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">دورة الرسم من المبتدئ إلى المحترف</a>
                            <div class="course-details">
                                <span class="course-category">رسم</span>
                                <span class="course-price course-premium">مدفوع</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="{{asset(asset('assets/img/course04.jpg'))}}" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">دورة تطوير الويب الكاملة</a>
                            <div class="course-details">
                                <span class="course-category">تطوير الويب</span>
                                <span class="course-price course-free">مجاني</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row">

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="{{asset(asset('assets/img/course05.jpg'))}}" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">نصائح وتقنيات PHP</a>
                            <div class="course-details">
                                <span class="course-category">تطوير الويب</span>
                                <span class="course-price course-free">مجاني</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="{{asset(asset('assets/img/course06.jpg'))}}" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">كل ما تحتاج معرفته عن تصميم الويب</a>
                            <div class="course-details">
                                <span class="course-category">تصميم الويب</span>
                                <span class="course-price course-free">مجاني</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="{{asset(asset('assets/img/course07.jpg'))}}" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">كيف تبدأ في التصوير الفوتوغرافي</a>
                            <div class="course-details">
                                <span class="course-category">تصوير</span>
                                <span class="course-price course-free">مجاني</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->


                    <!-- single course -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="{{asset(asset('assets/img/course08.jpg'))}}" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">Typography From A to Z</a>
                            <div class="course-details">
                                <span class="course-category">Typography</span>
                                <span class="course-price course-free">Free</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                </div>
                <!-- /row -->

            </div>
            <!-- /courses -->

            <div class="row">
                <div class="center-btn">
                    <a class="main-button icon-button" href="#">المزيد من الدورات</a>
                </div>
            </div>

        </div>
        <!-- container -->

    </div>
    <!-- /Courses -->

    <!-- Call To Action -->
    <div id="cta" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay"
            style="background-image:url({{asset('assets/img/cta1-background.jpg')}})"></div>
        <!-- /Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <h2 class="white-text">تعلم من أفضل المدربين واحصل على شهادات معتمدة</h2>
                    <p class="lead white-text">انضم إلى مجتمعنا التفاعلي وابدأ رحلة التعلم اليوم.</p>
                    <a class="main-button icon-button" href="#">ابدأ الآن!</a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Call To Action -->

    <!-- Why us -->
    <div id="why-us" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>لماذا نحن؟</h2>
                    <p class="lead">نقدم لكم أفضل الدورات التدريبية في مختلف المجالات.</p>
                </div>

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-flask"></i>
                        <div class="feature-content">
                            <h4>دورات عبر الإنترنت</h4>
                            <p>تعلم في أي وقت ومن أي مكان مع دوراتنا المتاحة على الإنترنت.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>
                        <div class="feature-content">
                            <h4>مدربون خبراء</h4>
                            <p>تعلم من أفضل المدربين في مجالاتهم.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <h4>مجتمع تفاعلي</h4>
                            <p>انضم إلى مجتمعنا التفاعلي وشارك في النقاشات.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

            </div>
            <!-- /row -->

            <hr class="section-hr">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <h3>تعلم من أفضل المدربين واحصل على شهادات معتمدة</h3>
                    <p class="lead">نقدم لكم أفضل الدورات التدريبية في مختلف المجالات.</p>
                    <p>تعلم في أي وقت ومن أي مكان مع دوراتنا المتاحة على الإنترنت. انضم إلى مجتمعنا التفاعلي وابدأ رحلة
                        التعلم اليوم.</p>
                </div>

                <div class="col-md-5 col-md-offset-1">
                    <a class="about-video" href="#">
                        <img src="{{asset('assets/img/about-video.jpg')}}" alt="">
                        <i class="play-icon fa fa-play"></i>
                    </a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Why us -->

    <!-- Contact CTA -->
    <div id="contact-cta" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay"
            style="background-image:url({{asset('assets/img/cta2-background.jpg')}})"></div>
        <!-- Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="white-text">اتصل بنا</h2>
                    <p class="lead white-text">لديك أي استفسارات؟ لا تتردد في التواصل معنا.</p>
                    <a class="main-button icon-button" href="#">اتصل بنا الآن</a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Contact CTA -->

    <!-- Footer -->
    <footer id="footer" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                {{--
                <!-- footer logo -->
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="{{asset('assets/img/icon52-ar.ico')}}" alt="logo"
                                style="border: 1px solid black; border-radius: 50%;" width="75px" height="75px">
                        </a>
                    </div>
                </div>
                <!-- footer logo --> --}}

                <!-- footer nav -->
                <div class="col">
                    <ul class="footer-nav">
                        <li><a href="index.html">الرئيسية</a></li>
                        <li><a href="#">من نحن</a></li>
                        <li><a href="#">الدورات</a></li>
                        <li><a href="blog.html">المدونة</a></li>
                        <li><a href="contact.html">اتصل بنا</a></li>
                    </ul>
                </div>
                <!-- /footer nav -->

            </div>
            <!-- /row -->

            <!-- row -->
            <div id="bottom-footer" class="row">

                <!-- social -->
                <div class="col-md-4 col-md-push-8">
                    <ul class="footer-social">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->

                <!-- copyright -->
                <div class="col-md-8 col-md-pull-4">
                    <div class="footer-copyright">
                        <span>&copy; حقوق النشر 2025. جميع الحقوق محفوظة.</span>
                    </div>
                </div>
                <!-- /copyright -->

            </div>
            <!-- row -->

        </div>
        <!-- /container -->

    </footer>
    <!-- /Footer -->

    <!-- preloader -->
    <div id='preloader'>
        <div class='preloader'></div>
    </div>
    <!-- /preloader -->


    <!-- jQuery Plugins -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>