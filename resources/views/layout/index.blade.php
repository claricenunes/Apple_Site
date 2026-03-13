<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('js/home.js') }}"> -->
    <script src="js/script.js"></script>
</head>

<body>

    {{-- header --}}
    @include('partials.header')

    {{-- conteúdo da página --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.footer')

<script>
document.addEventListener("DOMContentLoaded", function () {

    const footer = document.querySelector(".apple-footer");

    const bgColor = window.getComputedStyle(document.body).backgroundColor;

    if (bgColor === "rgb(0, 0, 0)") {
        footer.style.background = "#000";
        footer.style.color = "#fff";
    } else {
        footer.style.background = "#f5f5f7";
        footer.style.color = "#000";
    }

});
</script>

</body>
</html>