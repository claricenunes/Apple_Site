<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>

    {{-- header --}}
    
    @include('partials.header')
    

    {{-- page --}}
    <main>
        @yield('content')
        <section class="carousel">
            <div class="list">
                <article class="item">
                    <div class="main-content">
                        <div class="content">
                            <h2>Iphone 17</h2>
                            <p class="price">From $799</p>
                            <p class="description">
                                Experience the future of smartphones.
                            </p>
                            <button class="btn">
                                Learn More
                            </button>
                        </div>
                    </div>

                    <figure class="image">
                        <img src="img/iphone17_purple.png" alt="iPhone 17">
                        <figcaption>Experience the future of smartphones.</figcaption>
                    </figure>
                </article>
            </div>
        </section>
    </main>


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

