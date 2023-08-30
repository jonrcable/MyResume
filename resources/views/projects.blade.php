@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Do you have an interesting project? Lets build something.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'Projects')

@section('page-canonical', 'https://me.joncable.com/projects')

@section('page-crumbs')

    <span id="top"></span>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark breadcrumb-fix">
            <li class="breadcrumb-item active" aria-current="page">Projects</li>
        </ol>
    </nav>

@endsection

@section('page-content')

    <!-- If we have animations on this page -->
    <animated-component></animated-component>

    <div class="container mb-5">

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h1 class="h3 animated-hover" id="projects" animation="animate__jackInTheBox">resume.projects (create)</h1>
                <p>
                    Always be creating and working towards a better version. Technology is always evolving, challenging
                    and we should have fun doing it. These are just a few of the passionate, growth-oriented and plain fun
                    adventures I have had in working in technology.
                </p>
            </div>
        </div>

        <div class="row mb-4 ml-1 text-black-50 d-none d-sm-block d-md-block d-lg-block d-xl-block">
            <div class="btn-group flex-wrap" role="group" aria-label="education">
                <button type="button" class="btn btn-secondary"><i class="fa fa-code"></i></button>
                <button type="button" class="btn btn-outline-secondary" v-scroll-to="'#empirednb'">EmpireDnB.com</button>
                <button type="button" class="btn btn-outline-secondary" v-scroll-to="'#microcontroller'">Microcontroller</button>
                <button type="button" class="btn btn-outline-secondary" v-scroll-to="'#photogrammetry'">Photogrammetry</button>
            </div>
            <span id="empirednb"></span>
        </div>

        <div class="row mt-2">
            <div class="col-10 text-black-50">
                <h3 class="h5" id="bs">EmpireDnB.com</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold" >Web Development</span><br/> <span class="small font-weight-light">
                    <a href="https://www.empirednb.com" target="_blank">EmpireDnb.com</a></span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                2003 - Present<br/> <span class="small font-weight-light">Passion</span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: </span><span>Nginx, Python, Flask, Vue.js, Video Streaming</span>
            </div>
            <div class="col-12 mt-2 font-weight-light">
                <p>This project has played a vital role in my professional development career. A friend and I originally
                    started this project as everydayjunglist.com in 2003. We originally built it on a PHP open-source
                    social platform for artists called JamRoom. As it grew to over a thousand artists, we collected all
                    the uploaded music into a playlist and streamed it as a radio station using Shoutcast. Once we had
                    the playlist built, we were asked by the community to add Live Audio Streaming and eventually Video
                    Streaming.</p>
                <p>After several years and terabytes of music, the technical debt of gluing platforms together became
                    too much to manage and we decided to start from scratch at the bare bones. The current version of
                    the platform is entirely written in Python on Flask, Vue.js, and down to the core FFMPEG libraries.
                    We have streamed thousands of hours of live video with 100's unique videos in our on-demand library.
                    This will always be a work-in-progress and non-revenue-based project just for fun, why not?</p>
            </div>
            <span id="photogrammetry"></span>
        </div>

        <div class="row mt-2">
            <div class="col-10 text-black-50">
                <h3 class="h5" id="aas">Professional Development</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold">Photogrammetry</span><br/> <span class="small font-weight-light">More Soon</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Nov 2015 - Aug 2018 <br> <span class="text-black-50">Growth</span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: </span><span>Survey, GPS, Cameras, Nvidia, TX1, ROS and 3D Modeling</span>
            </div>
            <div class="col-12 mt-2 font-weight-light">
                I am highlighting this project because it's where I experienced the most growth as an engineer. Prior to
                this role I had mostly worked in LAMP Development but soon found myself in a challenging R&D environment
                working on Python APIs on ARM Processors down at the hardware level. This experience led me further into
                working with low-latency systems integration and connecting hardware with real-world sensors.
            </div>
            <span id="microcontroller"></span>
        </div>

        <div class="row mt-4">
            <div class="col-10 text-black-50">
                <h3 class="h5" id="aas">Microcontroller Projects</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold">Electronics</span><br/> <span class="small font-weight-light">More Soon</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Always <br> <span class="text-black-50">Fun</span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: </span><span>Arduino, RaspberryPi, Electronics, Soldering, LEDs, Sensors and Adventure</span>
            </div>
            <div class="col-12 mt-2 font-weight-light">
                When I first started working in R&D I was working alongside some very talented C and electronics
                engineers and wanted to be able to work comfortably with them in the lab on Python API
                development. The easiest way for me to do this was to start soldering and working on some personal projects.
                What I found was a world of Adult Legos that was soothing and creative, I fell in love with what I
                was doing and started building.
            </div>
        </div>

    </div>

    <div class="container">

        <hr class="style-transparent">

    </div> <!-- /container -->

@endsection

@section('footer-msg')
            <span class="text-muted small">
        <i class="fa fa-copyright"></i> {{ date('Y') }} Jon Cable
    </span>
@endsection