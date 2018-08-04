@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Do you have an interesting project? Lets build something.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'Education')

@section('page-crumbs')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark breadcrumb-fix">
            <li class="breadcrumb-item active" aria-current="page">Education</li>
        </ol>
    </nav>

@endsection

@section('page-content')

    <div class="container">

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h2 class="h3">resume.education (learn)</h2>
                <p>
                    Being a student with an early itch for technology was a challenge. I’ve spent my career developing rich experience and interest understanding the fast paced evolution of technology.
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