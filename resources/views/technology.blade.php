@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Do you have an interesting project? Lets build something.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'Technology')

@section('page-crumbs')

    <span id="top"></span>

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
                <h2 class="h3 animated-hover" id="technology" animation="animate__jackInTheBox">resume.technology (skills)</h2>
                <p>
                    This is an overview of my favorite technologies. Each played a vital role in my professional and personal growth. This is not comprehensive, rather an overview of those that have had the most impact.
                </p>
            </div>
        </div>

        <!-- Bootstrap.vue menu group with tooltips -->
        <b-row class="mb-4 text-black-50 small">
            <b-col cols="12">
                <b-button-group>
                    <b-button variant="secondary"><i class="fa fa-bookmark"></i></b-button>
                    <b-button id="languages-menu" variant="outline-secondary" v-scroll-to="'#languages'"><i class="fa fa-code"></i></b-button>
                    <b-button id="frameworks-menu" variant="outline-secondary" v-scroll-to="'#frameworks'"><i class="fa fa-cogs"></i></b-button>
                    <b-button id="os-menu" variant="outline-secondary" v-scroll-to="'#os'"><i class="fa fa-laptop"></i></b-button>
                    <b-button id="productivity-menu" variant="outline-secondary" v-scroll-to="'#productivity'"><i class="fa fa-window-restore"></i></b-button>
                    <b-button id="hosting-menu" variant="outline-secondary" v-scroll-to="'#hosting'"><i class="fa fa-cloud"></i></b-button>
                    <b-button id="hardware-menu" variant="outline-secondary" v-scroll-to="'#hardware'"><i class="fa fa-microchip"></i></b-button>
                </b-button-group>
            </b-col>
            <span id="languages"></span>
        </b-row>
        <!-- Tooltips and controls for menu -->
        <b-tooltip target="languages-menu" title="Languages" placement="bottom" triggers="hover"></b-tooltip>
        <b-tooltip target="frameworks-menu" title="Frameworks" placement="bottom" triggers="hover"></b-tooltip>
        <b-tooltip target="os-menu" title="Operating Systems" placement="bottom" triggers="hover"></b-tooltip>
        <b-tooltip target="productivity-menu" title="Productivity" placement="bottom" triggers="hover"></b-tooltip>
        <b-tooltip target="hosting-menu" title="Hosting" placement="bottom" triggers="hover"></b-tooltip>
        <b-tooltip target="hardware-menu" title="Libs & Hardware" placement="bottom" triggers="hover"></b-tooltip>


        <div class="row mt-3">
            <div class="col-10 text-black-50">
                <h3 class="h5">Languages</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/php.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>PHP</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/python.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Python</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/jquery.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Javascript</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/perl.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Perl</small>
                </span>
            </div>
            <span id="frameworks"></span>
        </div>

        <div class="row mt-3">
            <div class="col-10 text-black-50">
                <h3 class="h5">Frameworks</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/laravel.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Laravel</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/flask.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Flask</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/vuejs.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Vue.JS</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/ros.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Robotics Operating System</small>
                </span>
            </div>
            <span id="os"></span>
        </div>

        <div class="row mt-3">
            <div class="col-10 text-black-50">
                <h3 class="h5">Operating Systems</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/osx.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>OSX</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/windows.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Windows</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/ubuntu.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Ubuntu</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/centos.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>CentOS</small>
                </span>
            </div>
            <span id="productivity"></span>
        </div>

        <div class="row mt-3">
            <div class="col-10 text-black-50">
                <h3 class="h5">Productivity</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/jetbrains.png" class="animated-hover" animation="animate__bounce" /> <br />
                    Jetbrians <br ><small>PHPStorm/PyCharm</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/adobe.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Adobe Creative</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/gsuite.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Google Apps</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/git.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Git</small>
                </span>
            </div>
            <span id="hosting"></span>
        </div>

        <div class="row mt-3">
            <div class="col-10 text-black-50">
                <h3 class="h5">Hosting</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/aws.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Amazon AWS</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/linode.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Linode</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/whm.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>cPanel/WHM</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/wpengine.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>WP Engine</small>
                </span>
            </div>
            <span id="hardware"></span>
        </div>

        <div class="row mt-3 mb-5">
            <div class="col-10 text-black-50">
                <h3 class="h5">Libs & Hardware</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/video.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Video <br > (FFMPEG | OpenCV)</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/photoscan.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Photogrammetry <br> (PhotoScan, Pix4D</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/arm.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>ARM <br> (Nvidia TX1/2 | HummingBoard | RaspberryPi)</small>
                </span>
            </div>
            <div class="col-12 col-lg-3 col-md-6 col-sm-6 col-xs-12 text-black-50 text-center">
                <span>
                    <img src="/media/skills/hardware.png" class="animated-hover" animation="animate__bounce" /> <br />
                    <small>Microcontrollers <br > (Arduino | Teensy | STM32)</small>
                </span>

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