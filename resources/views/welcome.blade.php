@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Explore my world as a technical professional and please let me know if you have any questions.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'Welcome')

@section('page-content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="bg-secondary pt-2 pb-1">
        <div class="container text-center">

            <h1 class="text-white-50">Welcome</h1>
            <div class="h3"><typer-component></typer-component></div>

        </div>
    </div>

    <div class="container">

        <div class="row mt-3">

            <div class="col-md-12">
                <carousel-component></carousel-component>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <h2 class="text-black-50">Watching Technology Evolve</h2>
            </div>
        </div>

        <hr class="style-transparent">

        <div class="row mt-3">
            <div class="col-md-12 text-center">

                <p><h5>Hi. My name is Jon. <br /> I am from Austin, Texas.</h5>
                <br />I love to build, design and create tools that solve real world problems.
                <br />Nurturing ideas or leading teams, I thrive in innovative startups.
                <br />Have fun with technology, keep it interesting, explore always.
                </p>

            </div>
        </div>

        @include('partials/pdf')

        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-4 mt-2 mb-3">
                <div class="card">
                    <img class="card-img-top image-home" src="/media/skillshome.png" alt="Technologies I love to use">
                    <div class="card-body">
                        <h3 class="text-center text-black-50">Technology</h3>
                        <p class="card-text">Hardware and software, I dig technology, always learning and exploring new challenges.</p>
                        <div class="text-center"><a href="#" class="btn btn-outline-secondary">Browse My Skills</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-3">
                <div class="card">
                    <img class="card-img-top image-home" src="/media/projecthome.png" alt="Projects I have worked on">
                    <div class="card-body">
                        <h3 class="text-center text-black-50">Projects</h3>
                        <p class="card-text">From work to play finding ways to apply creative use of technology can be fun.</p>
                        <div class="text-center"><a href="#" class="btn btn-outline-secondary">Explore My Projects</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-3">
                <div class="card">
                    <img class="card-img-top image-home" src="/media/historyhome.png" alt="Professional work history">
                    <div class="card-body">
                        <h3 class="text-center text-black-50">History</h3>
                        <p class="card-text">Providing technology leadership for startups since 2001 has been an enriching journey. </p>
                        <div class="text-center"><a href="#" class="btn btn-outline-secondary">View My History</a></div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials/form')

    </div> <!-- /container -->
@endsection

@section('footer-msg')
    <span class="text-muted">
        Built using Laravel, Bootstrap and Vue.js
    </span>
@endsection