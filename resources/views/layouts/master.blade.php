<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | {{ __('Spey — an international pharmaceutical company') }}</title>

  {{-- ---------Meta tags start--------- --}}
  {{-- Same metas for all routes --}}
  <meta name="keywords" content="Spey, Spey KZ, медицина в Казахстане, Spey Kazakhstan, Health Responsibility, здоровье, фармкомпания, препарат, медицина, лечение" />
  <meta property="og:site_name" content="Spey">
  <meta property="og:type" content="object" />
  <meta name="twitter:card" content="summary_large_image">

  @hasSection('meta-tags')
    @yield('meta-tags')
  @else
    <meta name="description" content="Здоровье - ответственность. Наша миссия - Способствовать улучшению здоровья и благополучия людей.">
    <meta property="og:description" content="Здоровье - ответственность. Наша миссия - Способствовать улучшению здоровья и благополучия людей.">
    <meta property="og:title" content="Spey" />
    <meta property="og:image" content="{{ asset('img/favicons/logo-share.png') }}">
    <meta property="og:image:alt" content="Spey – Лого">
    <meta name="twitter:title" content="Spey">
    <meta name="twitter:image" content="{{ asset('img/favicons/logo-share.png') }}">
  @endif
  {{-- --------- Meta tags end--------- --}}

  {{-- Favicons for all devices --}}
  <link rel="icon" href="{{ asset('img/favicons/cropped-favi-32x32.png') }}" sizes="32x32">
  <link rel="icon" href="{{ asset('img/favicons/cropped-favi-192x192.png') }}" sizes="192x192">
  <link rel="apple-touch-icon-precomposed" href="{{ asset('img/favicons/cropped-favi-180x180.png') }}">
  <meta name="msapplication-TileImage" content="{{ asset('img/favicons/cropped-favi-270x270.png') }}">

  {{-- <meta name="robots" content="none">
        <meta name="googlebot" content="noindex, nofollow">
        <meta name="yandex" content="none"> --}}

  {{-- Owl carousel --}}
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  {{-- App Styles --}}
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')
  <!-- JQuery 3.6  -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  {{-- Owl carousel --}}
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  {{-- App Scripts --}}
  <script src="{{ mix('js/app.js') }}"></script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i]

      function() {
        (m[i].a = m[i].a[]).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(48786833, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/48786833" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123986695-30"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-123986695-30');
  </script>
</body>

</html>
