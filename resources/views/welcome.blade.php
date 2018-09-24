@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Explore my world as a technical professional and please let me know if you have any questions.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'Welcome')

@section('welcome')

    <div class="container text-center">

        <h1 class="text-white-50">Welcome</h1>
        <div class="h3"><typer-component></typer-component></div>

    </div>

@endsection

@section('page-content')

    <div class="container">

        <div class="row mt-3">

            <div class="col-md-12">
                <carousel-component></carousel-component>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-center">

                <p><h5>Hi. My name is Jon. <br /> I am from Austin, Texas.</h5>

                <hr class="style-transparent">

                <b>Build</b> teams that are always innovating.
                <br /><b>Design</b> often, have fun, keep it interesting.
                <br /><b>Create</b> tools that solve challenging problems.

                <hr class="style-transparent">

                <blockquote class="blockquote  text-center ml-5 mr-5">
                    <p class="mb-0 h6">Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program.</p>
                    <footer class="blockquote-footer"><cite title="Source Title">Linus Torvalds</cite></footer>
                </blockquote>
                </p>

            </div>
        </div>

        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-4 mt-2 mb-3">
                <div class="card">
                    <img class="card-img-top image-home shake" src="/media/historyhome.png" alt="Professional work history">
                    <div class="card-body">
                        <h3 class="text-center text-black-50">History</h3>
                        <p class="card-text">Providing technology leadership for startups since 2001 has been an enriching journey. </p>
                        <div class="text-center"><a href="/history" class="btn btn-outline-secondary">View My History</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-3">
                <div class="card">
                    <img class="card-img-top image-home shake" src="/media/projecthome.png" alt="Projects I have worked on">
                    <div class="card-body">
                        <h3 class="text-center text-black-50">Projects</h3>
                        <p class="card-text">From Web to LEDs finding ways to apply creative use of technology is really fun.</p>
                        <div class="text-center"><a href="#" class="btn btn-outline-secondary">Coming Soon!</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-3">
                <div class="card">
                    <img class="card-img-top image-home shake" src="/media/skillshome.png" alt="Technologies I love to use">
                    <div class="card-body">
                        <h3 class="text-center text-black-50">Technology</h3>
                        <p class="card-text">Hardware and software, I dig technology, always learning and exploring new challenges.</p>
                        <div class="text-center"><a href="/technology" class="btn btn-outline-secondary">Browse My Skills</a></div>
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