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

    <!-- If we have animations on this page -->
    <animated-component></animated-component>

    <div class="container mb-5">

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h2 class="h3 animated-hover" id="education" animation="jackInTheBox">resume.education (learn)</h2>
                <p>
                    Being a student with an early itch for technology was a challenge. I’ve spent my career developing rich experience and interest understanding the fast paced evolution of technology.
                </p>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 text-black-50">
                <h3 class="h5 animated-hover" id="bs" animation="lightSpeedOut">Bachelor Science</h3>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/devry.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold" >Technical Management</span><br/> <span class="small font-weight-light">May 2008</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Devry University <br> <span class="text-black-50">(Austin, Texas) </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Degree Highlights: </span><span>Project management, SAAS strategies, Global business, Business law</span>

            </div>
            <div class="col-12 mt-2 font-weight-light">
                DeVry allowed me to polish off my work experience by adding a more diverse perspective in business. Some of my favorite projects included breaking down real life case studies: General Motors moving operations to Russia, Monsanto’s GMO technologies on agriculture and Walmart’s global impact on distribution.
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-black-50">
                <h3 class="h5 animated-hover" id="aas" animation="lightSpeedOut">Associates Applied Science</h3>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/northharris.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold">Computer Information Systems</span><br/> <span class="small font-weight-light">May 2003</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                North Harris <br> <span class="text-black-50">(Spring, Texas) </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Degree Highlights: </span><span>Microsoft enterprise implementations, Network infrastructure, Hardware/software, Project management</span>
            </div>
            <div class="col-12 mt-2 font-weight-light">
                Early in my technical career the web was not what it is today. Fueled by onsite work experience and personal projects we were making the rules up as we went. Since I have been working with Hardware/Software since the MSDOS days I choose a concentration in networking specifically Microsoft and Cisco Enterprise implementations. This core background has proven to be an invaluable foundation for my technical career.
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-black-50">
                <h3 class="h5 animated-hover" id="certs" animation="lightSpeedOut">Certifications</h3>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/cisco.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold">Cisco Networking</span> <span class="small text-black-50">CCNA</span>
                <br/> <span class="small font-weight-light">May 2002</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                North Harris <br> <span class="text-black-50">(Spring, Texas) </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Degree Highlights: </span><span>Routing and Network Topology, OSI Model and Protocol Stacks, DNS, Routing and Switching Protocols</span>
            </div>
            <div class="col-12 mt-2 font-weight-light">
                Networking is everywhere; you’ll find its core principles in Application Development and Systems Architecture. Understanding the principles of Protocols, Routing, DNS and Network topology is helpful to understanding how complex environments work at a fundamental level. I’ve relied upon my cisco basics throughout much of my career as a developer.
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