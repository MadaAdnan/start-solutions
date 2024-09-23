<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@section('title') Start-Solutions @show</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Arabic:100,200,300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Contact-Details-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/logo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/parallax.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Social-Menu-Sticky.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Whatsapp-flotating-button.css')}}">
</head>

<body dir="rtl" data-bs-spy="scroll"
      style="--bs-primary: #64bebe;--bs-primary-rgb: 100,190,190;--bs-secondary: #28aa82;--bs-secondary-rgb: 40,170,130;--bs-success: #eb7828;--bs-success-rgb: 235,120,40;--bs-warning: #e1aa23;--bs-warning-rgb: 225,170,35;--bs-info: #464646;--bs-info-rgb: 70,70,70;--bs-dark: #464646;--bs-dark-rgb: 70,70,70;">

@section('navbar')
    <nav class="navbar navbar-expand-md sticky-top bg-body navbar-light">
        <div class="container-fluid"><a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{asset('assets/img/New%20Folder/st-logo.svg')}}" width="70"></a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-1"><a class="nav-link" href="{{route('home.index')}}">الرئيسية</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                                                     data-bs-toggle="dropdown" href="#">خدماتنا&nbsp;</a>
                        <div class="dropdown-menu text-end">
                            <a class="dropdown-item" href="{{route('erp.index')}}">ستارت سليوشن ERP</a>
                            <a class="dropdown-item" href="{{route('web.index')}}">تصميم و تطوير المواقع</a>
                            <a class="dropdown-item" href="{{route('mobile.index')}}">تصميم و تطوير تطبيقات الموبايل</a>
                            <a class="dropdown-item" href="{{route('rf-id.index')}}">حلول RFID</a>
                            <a class="dropdown-item" href="{{route('hardware.index')}}">حلول و صيانة الهاردوير</a>
                            <a class="dropdown-item" href="{{route('real-estate.index')}}">إدارة العقارات والأملاك</a>
                            <a class="dropdown-item" href="{{route('project-management.index')}}">نظام إدارة المشاريع للشركات</a>
                            <a class="dropdown-item" href="{{route('factor.index')}}">نظام إدارة التصنيع للمؤسسات والمصانع</a>
                            <a class="dropdown-item" href="{{route('human-resource.index')}}">برنامج إدارة الموارد البشرية</a>
                            <a class="dropdown-item" href="{{route('education-management.index')}}">برنامج إدارة المؤسسات التعليمية</a>
                            <a class="dropdown-item" href="{{route('cloud-service.index')}}">خدمات تخزين سحابية</a>

                        </div>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#logos">عملائنا</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">فريقنا</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#why-start">من نحن؟</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false"
                                                     data-bs-toggle="dropdown" href="#"><img class="mx-2"
                                                                                             src="{{asset('assets/img/New%20Folder/languages.svg')}}"
                                                                                             width="35"></a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">العربية</a><a class="dropdown-item"
                                                                                                   href="#">الإنجليزية</a>
                        </div>
                    </li>
                    <li class="nav-item px-2"><a class="nav-link" href="{{route('contact-us.index')}}">
                            <span class="btn btn-contact px-4" type="button">إتصل بنا!</span>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>
@show


@yield('content')

@section('footer')
    <section id="footer">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-3">
                <div class="col-12 col-lg-4 align-self-center">
                    <div class="text-center"><img class="img-fluid" src="assets/img/New%20Folder/Start%20Logo%20-white.svg" width="300"></div>
                </div>
                <div class="col-12 col-lg-8 align-self-center">
                    <div class="text-center text-lg-end py-4">
                        <h2 class="text-light py-3">شركة ستارت سوليوشن للحلول التقنية و تكنولوجيا المعلومات.</h2>
                        <p class="text-info py-3"><strong>شركة ستارت سوليوشن تُعتبر الشريك التكنولوجي الرائد والموثوق لتسهيل الأعمال التجارية في الكويت ومصر وباقي منطقة الشرق الأوسط. بخبرة تزيد عن 10 أعوام في تقديم الحلول التقنية للشركات الكبيرة والمتوسطة والصغيرة .</strong><br><strong>نسعى لتمكين الشركات من خلال حلول تكنولوجيا المعلومات المتقدمة والمبتكرة.كمزود رائد وشريك ذهبي لحلول أودو ERP، نفتخر بخدمة العملاء في&nbsp;المملكة العربية السعودية و&nbsp;الكويت و مصر.</strong></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-8 align-self-center">
                    <div>
                        <ul class="list-unstyled text-end">
                            <li class="fs-6 mb-2"><i class="fa fa-map-marker mx-2 fa-lg"></i>المقر الرئيسي في المملكة العربية السعودية - الرياض&nbsp;</li>
                            <li class="fs-6 mb-2"><i class="fa fa-phone mx-2 fa-lg"></i>+966115079031&nbsp; -&nbsp;&nbsp;+966 59 048 1426</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4 align-self-center">
                    <div class="div-list-icon">
                        <ul class="list-unstyled">
                            <li class="fs-6 p-1 mb-2"><i class="fa fa-envelope-o mx-2"></i><span style="color: var(--bs-body-color);">Info@onesolutionc.co</span></li>
                            <li class="fs-5 p-1 mb-2">
                                <a class="mx-1" target="_blank" href="https://t.me/+966510029141"><img width="30" src="assets/img/New%20Folder/telegram.png"></a>
                                <a class="mx-1" target="_blank" href="https://www.tiktok.com/@start.solutions?_t=8n8zZVRo99l&_r=1"><img width="30" src="assets/img/New%20Folder/tiktok.png"></a>
{{--                                <a class="mx-1" href="#"><img src="assets/img/New%20Folder/linkedin.png" width="30"></a>--}}
                                <a class="mx-1" target="_blank" href="https://x.com/startsolutionc?s=21"><img width="30" src="assets/img/New%20Folder/twitter.png"></a>
                                <a class="mx-1" target="_blank" href="https://www.snapchat.com/add/startsolutionc?share_id=QWvgC6EsQ3erWgmqTBd7oQ&locale=en_SA@calendar=gregorian"><img width="30" src="assets/img/New%20Folder/snapchat.png"></a>
                                <a class="mx-1" target="_blank" href="https://www.instagram.com/bdylhlwl?igsh=MXRyMnI3cnhvOXZ6bg%3D%3D&utm_source=qr"><img width="30" src="assets/img/New%20Folder/insta.png"></a>
                                <a class="mx-1" target="_blank" href="https://www.facebook.com/profile.php?id=61560865593567"><img width="30" src="assets/img/New%20Folder/facebook.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@show

@section('social')

    <div id="fixed-social">
        <div><a class="fixed-facebook" href="https://www.facebook.com/profile.php?id=61560865593567" target="_blank"><i class="fa fa-facebook"></i><span>&nbsp;Facebook</span></a></div>
        <div><a class="fixed-instagram" href="https://www.instagram.com/bdylhlwl?igsh=MXRyMnI3cnhvOXZ6bg%3D%3D&utm_source=qr" target="_blank"><i class="fa fa-instagram"></i><span>&nbsp;Instagram</span></a></div>
        <div><a class="fixed-twitter" href="https://x.com/startsolutionc?s=21" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter-x">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
                </svg><span>&nbsp;Twitter</span></a></div>
       {{-- <div><a class="fixed-linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i><span>&nbsp;Linkedin</span></a></div>--}}
        <div><a class="fixed-snap" href="https://www.snapchat.com/add/startsolutionc?share_id=QWvgC6EsQ3erWgmqTBd7oQ&locale=en_SA@calendar=gregorian" target="_blank"><i class="fa fa-snapchat-ghost"></i><span>Snapchat</span></a></div>
        <div><a class="fixed-telegram" href="https://t.me/+966510029141" target="_blank"><i class="fa fa-telegram"></i><span>Telegram</span></a></div>
        <div>
            <a class="fixed-youtube" href="https://www.tiktok.com/@start.solutions?_t=8n8zZVRo99l&_r=1" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-tiktok">
                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"></path>
                </svg><span>Tiktok</span></a>
        </div>
    </div><a href="https://wa.me/+966590481426" class="btn-wsp" target="_blank"><i class="fa fa-whatsapp icono"></i></a>
@show
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/aos.min.js')}}"></script>
<script src="{{asset('assets/js/bs-init.js')}}"></script>
<script src="{{asset('assets/js/-Animated-numbers-section-BS4--Animated-numbers-section.js')}}"></script>
</body>

</html>
