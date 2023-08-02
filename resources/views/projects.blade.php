@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Do you have an interesting project? Lets build something.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'Projects')

@section('page-crumbs')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark breadcrumb-fix">
            <li class="breadcrumb-item active" aria-current="page">Projects</li>
        </ol>
    </nav>

@endsection

@section('page-content')

    <div class="container">

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h2 class="h3">resume.projects (create)</h2>
                <p>
                    From OS's to Bootloaders, AWS Cloud to Nvidia TX1's there is so much to do! Learning, troubleshooting and understanding is a journey that never ends; if you can get a little creative though it can always be fun.
                </p>
            </div>
        </div>

    </div>

    <div class="container">

        <hr class="style-transparent">

    </div> <!-- /container -->
@endsection

@section('footer-msg')
    <span class="text-muted small">
        Laravel, Bootstrap and Vue.js
    </span>
@endsection