@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Do you have an interesting project? Lets build something.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'Technology')

@section('page-crumbs')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark breadcrumb-fix">
            <li class="breadcrumb-item active" aria-current="page">Technology</li>
        </ol>
    </nav>

@endsection

@section('page-content')

    <!-- If we have animations on this page -->
    <animated-component></animated-component>

    <div class="container">

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h2 class="h3 animated-hover" id="technology" animation="jackInTheBox">resume.technology (skills)</h2>
                <p>
                    This is an overview of my favorite technologies. Each played a vital role in my professional and personal growth. This is not comprehensive, rather an overview of those that have had the most impact.
                </p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h3 class="h5 animated-hover" id="language" animation="fadeOut">Languages</h3>

            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/php.png" /> <br />
                    <small>PHP</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/python.png" /> <br />
                    <small>Python</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/jquery.png" /> <br />
                    <small>Javascript</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/perl.png" /> <br />
                    <small>Perl</small>
                </span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h3 class="h5 animated-hover" id="frameworks" animation="fadeOut">Frameworks</h3>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/laravel.png" /> <br />
                    <small>Laravel</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/flask.png" /> <br />
                    <small>Flask</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/vuejs.png" /> <br />
                    <small>Vue.JS</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/ros.png" /> <br />
                    <small>Robotics Operating System</small>
                </span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h3 class="h5 animated-hover" id="os" animation="fadeOut">Operating Systems</h3>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/osx.png" /> <br />
                    <small>OSX</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/windows.png" /> <br />
                    <small>Windows</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/ubuntu.png" /> <br />
                    <small>Ubuntu</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/centos.png" /> <br />
                    <small>CentOS</small>
                </span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h3 class="h5 animated-hover" id="productivity" animation="fadeOut">Productivity</h3>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/jetbrains.png" /> <br />
                    Jetbrians <br ><small>PHPStorm/PyCharm</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/adobe.png" /> <br />
                    <small>Adobe Creative</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/gsuite.png" /> <br />
                    <small>Google Apps</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/git.png" /> <br />
                    <small>Git</small>
                </span>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h3 class="h5 animated-hover" id="hosting" animation="fadeOut">Hosting</h3>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/aws.png" /> <br />
                    <small>Amazon AWS</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/linode.png" /> <br />
                    <small>Linode</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/whm.png" /> <br />
                    <small>cPanel/WHM</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/wpengine.png" /> <br />
                    <small>WP Engine</small>
                </span>
            </div>
        </div>

        <div class="row mt-3 mb-5">
            <div class="col-sm-12 text-black-50">
                <h3 class="h5 animated-hover" id="hardware" animation="fadeOut">Libs and Hardware</h3>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/video.png" /> <br />
                    <small>Video <br > (FFMPEG | OpenCV)</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/photoscan.png" /> <br />
                    <small>Photogrammetry <br> (PhotoScan, Pix4D</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/arm.png" /> <br />
                    <small>ARM <br> (Nvidia TX1/2 | HummingBoard | RaspberryPi)</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span class="shake">
                    <img src="/media/skills/hardware.png" /> <br />
                    <small>Microcontrollers <br > (Arduino | Teensy | STM32)</small>
                </span>

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