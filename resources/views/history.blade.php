@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Do you have an interesting project? Lets build something.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'History')

@section('page-crumbs')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark breadcrumb-fix">
            <li class="breadcrumb-item active" aria-current="page">History</li>
        </ol>
    </nav>

@endsection

@section('page-content')

    <div class="container">

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h2 class="h3">resume.history (startups)</h2>
                <p>
                    I immediately found my passion after discovering my first 286 machine and logging-on on at a blazing 2400bps. As a professional, it has been an amazing journey to watch the technology evolve right before my eyes.
                </p>
            </div>
        </div>

    </div>

    <div class="container">

        @include('partials/form')

    </div> <!-- /container -->
@endsection

@section('footer-msg')
    <span class="text-muted">
        Built using Laravel, Bootstrap and Vue.js
    </span>
@endsection