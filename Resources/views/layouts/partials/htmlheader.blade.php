<head>
    {{-- <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Directory Theme by Bootstrapious</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />
    <!-- Favicon-->
    <link rel="shortcut icon" href="undefinedimg/favicon.png" />
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--> --}}
    {!! Theme::metatags() !!}
    @php
        Theme::add('pub_theme::dist/css/app.css', 1);
        Theme::add('theme::css/cookie-consent.css');
    @endphp
    <livewire:styles />
    {!! Theme::showStyles(false) !!}
    @stack('styles')
    @yield('cssAdd')
    {{-- <script src="https://unpkg.com/vue@3"></script> --}}
</head>
