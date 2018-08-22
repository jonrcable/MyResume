@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Do you have an interesting project? Lets build something.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'Contact')

@section('page-crumbs')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark breadcrumb-fix">
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>

@endsection

@section('page-content')

    <div class="container">

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h2 class="h3">resume.contact (about)</h2>
                <p>
                    I am currently seeking opportunities. I love working with excited professionals on fun, creative and unique concepts. If you have made it this far, lets talk!
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