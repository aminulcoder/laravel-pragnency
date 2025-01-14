<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Multi Award Winning United Kingdom Designer">
    <meta name="author" content="Faruq Hossen">
    <meta name="generator" content="MonodeepSamanta 2.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('MonodeepSamanta.png') }}">

    <title> @yield('title', '')</title>



    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Style Sheets --}}

    <meta name="theme-color" content="#ffffff">


    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="Dashboard | Comment Jet">
    <meta name="twitter:description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta name="twitter:image" content="https://flowbite-admin-dashboard.vercel.app/">

    <!-- Facebook -->

    <meta property="og:url" content="https://flowbite-admin-dashboard.vercel.app/">
    <meta property="og:title" content="Tailwind CSS Admin Dashboard - Flowbite">
    <meta property="og:description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://flowbite-admin-dashboard.vercel.app/images/og-image.png">
    <meta property="og:image:type" content="image/png">
    <meta name="google-site-verification" content="wn1oFpUqzZ6XoS6WgEWRF3U8ZCWRvVXryKbCWix9xD0" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-268HXW509V"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-268HXW509V');
    </script>


    <!-- clarity -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "l8z5lmk9qs");
    </script>




    <style>
        * {
            font-family: "Roboto Flex", Sans-serif
        }

        li::marker {
            color: black !important;
        }
    </style>

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-white dark:bg-gray-900">

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script src="//code.tidio.co/ef702oknsoksvys0gdqiewpvf0pz9olw.js" async></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(function() {
            $(window).scroll(function() {
                var winTop = $(window).scrollTop();
                if (winTop >= 30) {
                    $(".mynavbar").addClass("shadow-md");
                    // console.log('top a gese');
                } else {
                    $(".mynavbar").removeClass("shadow-md");
                    // console.log('niche a gese');
                }
            }); //win func.
        }); //ready func.



        var lastScrollTop = 0;
        var mynavbar = document.querySelector("#mynavbar");
        var mymunebar = document.querySelector("#mymunebar");

        window.addEventListener('scroll', function() {
            var scrollTOp = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTOp > lastScrollTop) {
                mymunebar.classList.remove('sticky','top-[90px]','z-50');
            } else {
                mymunebar.classList.add('sticky','top-[90px]','z-50');
            }
            lastScrollTop = scrollTOp;
        });
    </script>
    @stack('scripts')
</body>

</html>
