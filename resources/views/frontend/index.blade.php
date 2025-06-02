<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المعهد التقاني للحاسوب</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        /* Base Styles */
        body {
            font-family: 'Tajawal', sans-serif;
            scroll-behavior: smooth;
            background-color: #f8fafc;
            color: #1e293b;
        }

        /* Header Styles */
        header {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        header.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        /* Hero Section */
        .hero-overlay {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.9) 0%, rgba(29, 78, 216, 0.9) 100%);
        }

        .hero-content {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Floating Animation */
        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* Cards */
        .course-card,
        .specialization-card,
        .testimonial-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            backface-visibility: hidden;
            will-change: transform;
        }

        .course-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .specialization-card:hover {
            transform: scale(1.03) translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* Stats Items */
        .stats-item {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border-radius: 12px;
            padding: 1.5rem;
        }

        .stats-item:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.2);
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            box-shadow: 0 4px 6px rgba(37, 99, 235, 0.3);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(37, 99, 235, 0.3);
        }

        .btn-outline-white {
            transition: all 0.3s ease;
        }

        .btn-outline-white:hover {
            background: white;
            color: #1d4ed8;
            transform: translateY(-2px);
        }

        /* Section Headings */
        .section-heading {
            position: relative;
            display: inline-block;
        }

        .section-heading::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #2563eb 0%, #1d4ed8 100%);
            border-radius: 3px;
        }

        /* Features */
        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        /* Contact Form */
        .contact-input {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .contact-input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }

        /* Back to Top Button */
        #back-to-top {
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        #back-to-top:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }

        .footer-link {
            position: relative;
        }

        .footer-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            right: 0;
            width: 0;
            height: 1px;
            background: #2563eb;
            transition: width 0.3s ease;
        }

        .footer-link:hover::after {
            width: 100%;
            left: 0;
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Pulse Animation */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #2563eb;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #1d4ed8;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-content {
                text-align: center;
            }

            .stats-item {
                padding: 1rem;
            }
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="fixed w-full z-50 bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <img src="{{ asset('assets/img/icon52-ar.ico') }}" alt="المعهد التقاني للحاسوب"
                            class="rounded-full border-2 border-blue-500 w-12 h-12">
                        <span class="mr-3 text-xl font-bold text-blue-600">المعهد التقاني للحاسوب</span>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-6 space-x-reverse">
                    <a href="#home" class="text-blue-600 font-medium hover:text-blue-800">الرئيسية</a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600">من نحن</a>
                    <a href="#specializations" class="text-gray-700 hover:text-blue-600">اختصاصاتنا</a>
                    <a href="#courses" class="text-gray-700 hover:text-blue-600">الدورات</a>
                    <a href="#testimonials" class="text-gray-700 hover:text-blue-600">آراء الطلاب</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600">اتصل بنا</a>
                    <a href="#"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">التسجيل</a>
                </nav>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <a href="#home" class="block py-2 text-blue-600 font-medium">الرئيسية</a>
                <a href="#about" class="block py-2 text-gray-700 hover:text-blue-600">من نحن</a>
                <a href="#specializations" class="block py-2 text-gray-700 hover:text-blue-600">اختصاصاتنا</a>
                <a href="#courses" class="block py-2 text-gray-700 hover:text-blue-600">الدورات</a>
                <a href="#testimonials" class="block py-2 text-gray-700 hover:text-blue-600">آراء الطلاب</a>
                <a href="#contact" class="block py-2 text-gray-700 hover:text-blue-600">اتصل بنا</a>
                <a href="#"
                    class="block mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg text-center hover:bg-blue-700 transition duration-300">التسجيل</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 md:pt-32 md:pb-24 bg-gray-900 relative">
        <div class="hero-overlay absolute inset-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-3xl md:text-5xl font-bold text-white mb-4">مرحبًا بكم في المعهد التقاني للحاسوب</h1>
                    <p class="text-lg md:text-xl text-gray-300 mb-8 leading-relaxed">
                        نفتح لكم أبواب العلم والإبداع، حيث نقدم لكم أفضل البرامج التدريبية والتقنية لتطوير مهاراتكم في
                        عالم الحاسوب والتكنولوجيا. انطلقوا معنا نحو مستقبل مشرق ومليء بالإنجازات!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg text-center font-medium transition duration-300">
                            ابدأ التعلم الآن
                        </a>
                        <a href="#courses"
                            class="bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white px-6 py-3 rounded-lg text-center font-medium transition duration-300">
                            تصفح الدورات
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('assets/img/home-background1.jpg') }}" alt="التعلم الإلكتروني"
                        class="rounded-lg shadow-xl floating w-full max-w-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="stats-item p-4">
                    <div class="text-3xl md:text-5xl font-bold mb-2">+5000</div>
                    <div class="text-sm md:text-base">طالب مسجل</div>
                </div>
                <div class="stats-item p-4">
                    <div class="text-3xl md:text-5xl font-bold mb-2">+120</div>
                    <div class="text-sm md:text-base">دورة تدريبية</div>
                </div>
                <div class="stats-item p-4">
                    <div class="text-3xl md:text-5xl font-bold mb-2">+50</div>
                    <div class="text-sm md:text-base">مدرب محترف</div>
                </div>
                <div class="stats-item p-4">
                    <div class="text-3xl md:text-5xl font-bold mb-2">+95%</div>
                    <div class="text-sm md:text-base">رضا الطلاب</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">من نحن</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <img src="https://via.placeholder.com/600x400" alt="عن المعهد" class="rounded-lg shadow-lg w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">المعهد التقاني للحاسوب</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        نحن مؤسسة تعليمية رائدة في مجال الحاسوب وتكنولوجيا المعلومات، نقدم برامج تدريبية متخصصة تلبي
                        احتياجات سوق العمل. نؤمن بأن التعليم هو أساس التقدم والتطور في عصرنا الحالي.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-laptop-code text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">تعليم عملي</h4>
                                <p class="text-gray-600">نركز على الجانب العملي والتطبيقي في جميع دوراتنا التدريبية.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-chalkboard-teacher text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">مدربون خبراء</h4>
                                <p class="text-gray-600">فريقنا من المدربين المحترفين ذوي الخبرة الواسعة في مجالاتهم.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-certificate text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">شهادات معتمدة</h4>
                                <p class="text-gray-600">شهادات معتمدة محليًا ودوليًا مع نهاية كل دورة تدريبية.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specializations Section -->
    <section id="specializations" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">اختصاصاتنا</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">نقدم لكم أفضل البرامج التدريبية في مجالات الحاسوب
                    والتكنولوجيا.</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="specialization-card bg-white p-6 rounded-lg shadow-md text-center transition duration-300">
                    <div class="bg-blue-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-code text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">تطوير البرمجيات</h3>
                    <p class="text-gray-600">تعلم تطوير البرمجيات وتصميم التطبيقات باستخدام أحدث التقنيات.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium">استكشف الدورات
                        <i class="fas fa-arrow-left mr-1"></i></a>
                </div>

                <div class="specialization-card bg-white p-6 rounded-lg shadow-md text-center transition duration-300">
                    <div class="bg-blue-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-network-wired text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">أمن الشبكات</h3>
                    <p class="text-gray-600">اكتسب مهارات إدارة الشبكات وتأمينها باستخدام أفضل الأدوات.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium">استكشف الدورات
                        <i class="fas fa-arrow-left mr-1"></i></a>
                </div>

                <div class="specialization-card bg-white p-6 rounded-lg shadow-md text-center transition duration-300">
                    <div class="bg-blue-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-cloud text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">الحوسبة السحابية</h3>
                    <p class="text-gray-600">تعرف على أساسيات الحوسبة السحابية وتحليل البيانات.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium">استكشف الدورات
                        <i class="fas fa-arrow-left mr-1"></i></a>
                </div>

                <div class="specialization-card bg-white p-6 rounded-lg shadow-md text-center transition duration-300">
                    <div class="bg-blue-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-microchip text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">هندسة الحواسيب</h3>
                    <p class="text-gray-600">تعلم صيانة الحواسيب وتجميعها وتطوير مهاراتك في مجال الهاردوير.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800 font-medium">استكشف الدورات
                        <i class="fas fa-arrow-left mr-1"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">لماذا تختارنا؟</h2>
                <div class="w-20 h-1 bg-white mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white bg-opacity-10 p-8 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">تعليم عالي الجودة</h3>
                    <p>نقدم محتوى تعليميًا عالي الجودة مصممًا من قبل خبراء في المجال.</p>
                </div>

                <div class="bg-white bg-opacity-10 p-8 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">دعم فني متكامل</h3>
                    <p>فريق دعم فني متاح على مدار الساعة لمساعدتك في أي استفسار.</p>
                </div>

                <div class="bg-white bg-opacity-10 p-8 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="text-4xl mb-4">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">فرص عمل</h3>
                    <p>شراكات مع شركات رائدة لتوفير فرص عمل لخريجينا.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">استكشف دوراتنا</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">اختر من بين مجموعة واسعة من الدورات التدريبية في مختلف
                    المجالات التقنية.</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Course 1 -->
                <div class="course-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x400" alt="دورة تطوير الويب"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 left-2 bg-blue-600 text-white text-xs px-2 py-1 rounded">جديد</div>
                        <div class="absolute top-2 right-2 bg-yellow-500 text-white text-xs px-2 py-1 rounded">الأكثر
                            طلبًا</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-blue-600 font-medium">تطوير الويب</span>
                            <span class="text-gray-500 text-sm"><i class="far fa-clock mr-1"></i> 30 ساعة</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">دورة تطوير الويب الكاملة</h3>
                        <p class="text-gray-600 mb-4">تعلم تطوير مواقع الويب من الصفر إلى الاحتراف باستخدام أحدث
                            التقنيات.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-500 line-through mr-2">$150</span>
                                <span class="text-blue-600 font-bold">$99</span>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">المزيد <i
                                    class="fas fa-arrow-left mr-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="course-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x400" alt="دورة الذكاء الاصطناعي"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 left-2 bg-green-600 text-white text-xs px-2 py-1 rounded">مجاني</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-blue-600 font-medium">الذكاء الاصطناعي</span>
                            <span class="text-gray-500 text-sm"><i class="far fa-clock mr-1"></i> 20 ساعة</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">مقدمة في الذكاء الاصطناعي</h3>
                        <p class="text-gray-600 mb-4">تعرف على أساسيات الذكاء الاصطناعي وتعلم الآلة وتطبيقاتها العملية.
                        </p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-blue-600 font-bold">مجاني</span>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">المزيد <i
                                    class="fas fa-arrow-left mr-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="course-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://via.placeholder.com/600x400" alt="دورة أمن المعلومات"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-blue-600 font-medium">أمن المعلومات</span>
                            <span class="text-gray-500 text-sm"><i class="far fa-clock mr-1"></i> 40 ساعة</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">أمن المعلومات والاختراق الأخلاقي</h3>
                        <p class="text-gray-600 mb-4">تعلم أساسيات أمن المعلومات وكيفية حماية الأنظمة من الاختراقات.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-blue-600 font-bold">$120</span>
                            </div>
                            <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">المزيد <i
                                    class="fas fa-arrow-left mr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                    عرض جميع الدورات <i class="fas fa-arrow-left mr-1"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Learning Paths Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">مسارات التعلم</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">اختر مسارك التعليمي المناسب وابدأ رحلتك نحو الاحتراف.</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Path 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-code text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">مسار مطور الويب الكامل</h3>
                    </div>
                    <p class="text-gray-600 mb-6">ابدأ رحلتك كمطور ويب محترف من خلال تعلم جميع التقنيات اللازمة لبناء
                        مواقع وتطبيقات ويب متكاملة.</p>
                    <div class="mb-6">
                        <h4 class="font-bold text-gray-800 mb-3">الدورات المتضمنة:</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>HTML & CSS الأساسية</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>JavaScript المتقدمة</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>أطر عمل الويب (React, Vue)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>تطوير الواجهات الخلفية (Node.js)</span>
                            </li>
                        </ul>
                    </div>
                    <a href="#"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition duration-300">
                        ابدأ المسار <i class="fas fa-arrow-left mr-1"></i>
                    </a>
                </div>

                <!-- Path 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">مسار أمن المعلومات</h3>
                    </div>
                    <p class="text-gray-600 mb-6">تخصص في مجال أمن المعلومات وتعلم كيفية حماية الأنظمة والشبكات من
                        التهديدات الأمنية المختلفة.</p>
                    <div class="mb-6">
                        <h4 class="font-bold text-gray-800 mb-3">الدورات المتضمنة:</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>أساسيات أمن المعلومات</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>أمن الشبكات</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>الاختراق الأخلاقي</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span>تحليل البرمجيات الخبيثة</span>
                            </li>
                        </ul>
                    </div>
                    <a href="#"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition duration-300">
                        ابدأ المسار <i class="fas fa-arrow-left mr-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">آراء طلابنا</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">ما يقوله طلابنا عن تجربتهم مع المعهد التقاني للحاسوب.</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-gray-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/80" alt="أحمد محمد" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">أحمد محمد</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "لقد غيرت دورات المعهد مساري المهني بالكامل. بعد إكمال مسار تطوير الويب، حصلت على وظيفة أحلامي
                        كمطور ويب في شركة رائدة."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-gray-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/80" alt="سارة عبدالله"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">سارة عبدالله</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "المحتوى المقدم في دورات أمن المعلومات كان ممتازًا وعمليًا للغاية. المدربون كانوا على دراية
                        كبيرة بالموضوع وقادرين على شرح المفاهيم المعقدة ببساطة."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-gray-50 p-8 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/80" alt="خالد حسن" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">خالد حسن</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "أحببت المرونة في التعلم عبر الإنترنت مع الحفاظ على جودة التعليم العالية. الدعم الفني كان سريعًا
                        وفعالًا في حل أي مشكلة تواجهني."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">هل أنت مستعد لبدء رحلتك التعليمية؟</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">انضم إلى آلاف الطلاب الذين غيروا مسارهم المهني من خلال دوراتنا
                التدريبية.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#"
                    class="bg-white hover:bg-gray-100 text-blue-600 px-8 py-3 rounded-lg font-bold transition duration-300">
                    سجل الآن <i class="fas fa-arrow-left mr-1"></i>
                </a>
                <a href="#"
                    class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 text-white px-8 py-3 rounded-lg font-bold transition duration-300">
                    تواصل معنا <i class="fas fa-arrow-left mr-1"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">مدونتنا</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">أحدث المقالات والنصائح في مجال التكنولوجيا والتعليم.</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://via.placeholder.com/600x400" alt="مقال عن الذكاء الاصطناعي"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar mr-1"></i> 15 يونيو 2023</span>
                            <span class="mx-2">•</span>
                            <span><i class="far fa-comment mr-1"></i> 12 تعليق</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">أحدث تطورات الذكاء الاصطناعي في 2023</h3>
                        <p class="text-gray-600 mb-4">تعرف على أحدث التطورات في مجال الذكاء الاصطناعي وتعلم الآلة وكيفية
                            الاستفادة منها في عملك.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">قراءة المزيد <i
                                class="fas fa-arrow-left mr-1"></i></a>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://via.placeholder.com/600x400" alt="مقال عن أمن المعلومات"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar mr-1"></i> 5 يونيو 2023</span>
                            <span class="mx-2">•</span>
                            <span><i class="far fa-comment mr-1"></i> 8 تعليقات</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">أهم النصائح لحماية بياناتك الشخصية</h3>
                        <p class="text-gray-600 mb-4">تعلم كيفية حماية بياناتك الشخصية ومعلوماتك الحساسة من الاختراق
                            والاستغلال.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">قراءة المزيد <i
                                class="fas fa-arrow-left mr-1"></i></a>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://via.placeholder.com/600x400" alt="مقال عن تطوير الويب"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <span><i class="far fa-calendar mr-1"></i> 25 مايو 2023</span>
                            <span class="mx-2">•</span>
                            <span><i class="far fa-comment mr-1"></i> 15 تعليق</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">أفضل أطر عمل لتطوير الويب في 2023</h3>
                        <p class="text-gray-600 mb-4">دليلك الشامل لاختيار إطار العمل المناسب لمشاريعك القادمة في تطوير
                            الويب.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">قراءة المزيد <i
                                class="fas fa-arrow-left mr-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                    عرض جميع المقالات <i class="fas fa-arrow-left mr-1"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-xl font-bold text-gray-800 mb-4">شركاؤنا</h3>
                <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
                <div class="flex justify-center">
                    <img src="https://via.placeholder.com/150x80" alt="شريك 1"
                        class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://via.placeholder.com/150x80" alt="شريك 2"
                        class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://via.placeholder.com/150x80" alt="شريك 3"
                        class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://via.placeholder.com/150x80" alt="شريك 4"
                        class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://via.placeholder.com/150x80" alt="شريك 5"
                        class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
                <div class="flex justify-center">
                    <img src="https://via.placeholder.com/150x80" alt="شريك 6"
                        class="h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">اتصل بنا</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">لديك أي استفسارات أو أسئلة؟ لا تتردد في التواصل معنا.</p>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>

            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/2">
                    <form class="bg-white p-8 rounded-lg shadow-md">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">الاسم الكامل</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">البريد الإلكتروني</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">الموضوع</label>
                            <input type="text" id="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">الرسالة</label>
                            <textarea id="message" rows="5"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-medium transition duration-300">
                            إرسال الرسالة <i class="fas fa-paper-plane mr-1"></i>
                        </button>
                    </form>
                </div>

                <div class="lg:w-1/2">
                    <div class="bg-white p-8 rounded-lg shadow-md h-full">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">معلومات التواصل</h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">العنوان</h4>
                                    <p class="text-gray-600">شارع الجامعة، بناية رقم 15، دمشق، سوريا</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-phone-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">الهاتف</h4>
                                    <p class="text-gray-600">+963 11 1234567</p>
                                    <p class="text-gray-600">+963 11 7654321</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">البريد الإلكتروني</h4>
                                    <p class="text-gray-600">info@tech-institute.edu</p>
                                    <p class="text-gray-600">support@tech-institute.edu</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-clock text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">ساعات العمل</h4>
                                    <p class="text-gray-600">من الأحد إلى الخميس: 8:00 صباحًا - 5:00 مساءً</p>
                                    <p class="text-gray-600">الجمعة والسبت: عطلة</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h4 class="font-bold text-gray-800 mb-4">تابعنا على وسائل التواصل الاجتماعي</h4>
                            <div class="flex space-x-4 space-x-reverse">
                                <a href="#"
                                    class="bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700 transition duration-300">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#"
                                    class="bg-blue-400 text-white p-3 rounded-full hover:bg-blue-500 transition duration-300">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#"
                                    class="bg-red-600 text-white p-3 rounded-full hover:bg-red-700 transition duration-300">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#"
                                    class="bg-purple-600 text-white p-3 rounded-full hover:bg-purple-700 transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#"
                                    class="bg-blue-700 text-white p-3 rounded-full hover:bg-blue-800 transition duration-300">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div class="h-96 bg-gray-200">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.987715668118!2d36.30646431520291!3d33.51058098074299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDMwJzM4LjEiTiAzNsKwMTgnMzAuOSJF!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Newsletter Section -->
    <section class="py-12 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">اشترك في نشرتنا البريدية</h2>
            <p class="mb-8 max-w-2xl mx-auto">احصل على آخر الأخبار والتحديثات حول دوراتنا التدريبية والعروض الخاصة
                مباشرة إلى بريدك الإلكتروني.</p>

            <form class="max-w-md mx-auto flex flex-col sm:flex-row gap-2">
                <input type="email" placeholder="بريدك الإلكتروني"
                    class="flex-grow px-4 py-3 rounded-lg focus:outline-none text-gray-800">
                <button type="submit"
                    class="bg-blue-800 hover:bg-blue-900 px-6 py-3 rounded-lg font-medium transition duration-300">
                    اشترك الآن <i class="fas fa-arrow-left mr-1"></i>
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">المعهد التقاني للحاسوب</h3>
                    <p class="text-gray-400 mb-4">نقدم لكم أفضل البرامج التدريبية والتقنية لتطوير مهاراتكم في عالم
                        الحاسوب والتكنولوجيا.</p>
                    <div class="flex space-x-4 space-x-reverse">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">روابط سريعة</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">الرئيسية</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">من نحن</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">الدورات</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">المدونة</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">اتصل بنا</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">الدورات</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">تطوير
                                البرمجيات</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">أمن المعلومات</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">الحوسبة
                                السحابية</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">هندسة
                                الحواسيب</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">الذكاء
                                الاصطناعي</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">اتصل بنا</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                            <span>شارع الجامعة، بناية رقم 15، دمشق، سوريا</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-2"></i>
                            <span>+963 11 1234567</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-2"></i>
                            <span>info@tech-institute.edu</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-6 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; 2023 المعهد التقاني للحاسوب. جميع الحقوق محفوظة.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-6 right-6 bg-blue-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    if (!document.getElementById('mobile-menu').classList.contains('hidden')) {
                        document.getElementById('mobile-menu').classList.add('hidden');
                    }
                }
            });
        });
    </script>
</body>

</html>