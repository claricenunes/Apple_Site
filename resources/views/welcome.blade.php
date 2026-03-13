@extends('layout.index')

@section('title','Home')

@section('content')

@include('partials.header')

<main>
    <section class="carousel next">
        <div class="list">

            <article class="item other_1">
                <div class="main-content" 
                style="background-color: #d0b7df;">
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
                    <img src="img/iphone17/iphone17_purple.png" alt="iPhone 17">
                    <figcaption>Experience the future of smartphones.</figcaption>
                </figure>
            </article>

            <article class="item active">
                <div class="main-content" 
                style="background-color: #d2cfd3;">
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
                    <img src="img/iphone17/iphone17_white.png" alt="iPhone 17">
                    <figcaption>Experience the future of smartphones.</figcaption>
                </figure>
            </article>

            <article class="item other_2">
                <div class="main-content" 
                style="background-color: #9aa986;">
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
                    <img src="img/iphone17/iphone17_green.png" alt="iPhone 17">
                    <figcaption>Experience the future of smartphones.</figcaption>
                </figure>
            </article>

            <article class="item">
                <div class="main-content" 
                style="background-color: #afbfd7;">
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
                    <img src="img/iphone17/iphone17_blue.png" alt="iPhone 17">
                    <figcaption>Experience the future of smartphones.</figcaption>
                </figure>
            </article>

            <article class="item">
                <div class="main-content" 
                style="background-color: #6c6c6c;">
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
                    <img src="img/iphone17/iphone17_black.png" alt="iPhone 17">
                    <figcaption>Experience the future of smartphones.</figcaption>
                </figure>
            </article>

        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
    </section>
</main>

@endsection