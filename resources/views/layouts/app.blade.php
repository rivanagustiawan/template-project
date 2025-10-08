<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    @include('subs.header-meta')
    @stack('styles')
    <style>
        html {
            scroll-behavior: smooth;
            }

    </style>
</head>

<body class="stretched">
    <div id="wrapper " class="app-layout">
        <div style="flex: 1;">
            @yield('content')
        </div>
    </div>


    @include('subs.footer-script')
    @stack('scripts')
    <script>
    </script>
</body>

</html>
