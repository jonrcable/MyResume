@extends('layouts.app')

@section('meta-robots', 'index, follow')
@section('meta-description', 'Do you have an interesting project? Lets build something.')
@section('meta-keywords', 'Jon Cable, Resume, Portfolio, Full Stack, Open Source, Developer, Austin, Texas')

@section('page-title', 'History')

@section('page-crumbs')

    <span id="top"></span>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark breadcrumb-fix">
            <li class="breadcrumb-item active" aria-current="page">History</li>
        </ol>
    </nav>

@endsection

@section('page-content')

    <!-- If we have animations on this page -->
    <animated-component></animated-component>

    <div class="container mb-5">

        <div class="row mt-3">
            <div class="col-sm-12 text-black-50">
                <h2 class="h3 animated-hover" id="startups" animation="jackInTheBox">resume.history (startups)</h2>
                <p>
                    I immediately found my passion after building my first 286 machine and logging-on on at 2400bps. As a professional, it has been an amazing journey to watch technology evolve right before your eyes.
                </p>
            </div>
        </div>

        <span id="agellus"></span>

        <timeline-component></timeline-component>

        <div class="row mt-4">
            <div class="col-10 text-black-50">
                <h3 class="h5">Agellus Engineering</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/devry.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold" >Software Architect</span><br/> <span class="small font-weight-light">Nov '15 – Present</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Industrial Engineering <br> <span class="text-black-50">Austin, Texas </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: Photogrammetry, Camera Hardware, ARM Development (NVidia TX1), ROS, Web Applications</span>
            </div>
            <div class="col-12 mt-2 font-weight-light">
                Agellus is a research and development company specializing in computer vision and sensor technologies. The patented research attempts to innovate the way we aproach survey through sensor and photogrammetry advances. I lead a small team through the challenges of cutting edge open source technologies, university research and application development.
            </div>
            <span id="spcdirect"></span>
        </div>

        <div class="row mt-4">
            <div class="col-10 text-black-50">
                <h3 class="h5">SPC Direct</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/devry.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold" >Technical Consultant</span><br/> <span class="small font-weight-light">Oct '14 – Nov '15</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Digital Marketing <br> <span class="text-black-50">Austin, Texas </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: Application and Secure Cloud Architecture, Closed APIs Development</span>

            </div>
            <div class="col-12 mt-2 font-weight-light">
                Technical consultant for a pharmaceutical startup providing SAAS prototypes for distribution, marketing and sales management. Using Laravel and HIPPA/PCI compliant cloud architecture via Vormetric Security.
            </div>
            <span id="saleamp"></span>
        </div>

        <div class="row mt-4">
            <div class="col-10 text-black-50">
                <h3 class="h5">SaleAmp</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/devry.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold" >Director Development & Design</span><br/> <span class="small font-weight-light">Oct '13 – Oct '14</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Digital Marketing <br> <span class="text-black-50">Austin, Texas </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: Development and Design Direction, Technical Management, Application Support, Social and Analytics APIs</span>

            </div>
            <div class="col-12 mt-2 font-weight-light">
                SaleAMP is a full-service marketing startup specializing in Search Engine Optimization, Pay Per Click, Content Creation, Conversion and Socialmedia. Coordinating teams of developers, designers and marketing professionals through scope, direction, development and delivery of technical projects streamlining marketing workflows. One of the highlights included working with Carfax expanding a large corporate brand into used car sales.
            </div>
            <span id="photon"></span>
        </div>

        <div class="row mt-4">
            <div class="col-10 text-black-50">
                <h3 class="h5">Photon Factory</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/devry.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold" >Technical Director</span> <span class="small">Partner</span><br/> <span class="small font-weight-light">May '09 – Oct '13</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Offshore Engineering <br> <span class="text-black-50">Austin, Texas </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: Cloud Architecture, Steaming Video, 3D Modeling, Client/Server, Sonar</span>

            </div>
            <div class="col-12 mt-2 font-weight-light">
                Technical director of client/server applications and lead developer of remote web applications. Unity and IC3D were focused on servicing the offshore engineering industry with document controls, live/recorded video and 3D modeling tools. I supplied architecture of cloud technologies and technical direction of engineers supporting live salvage operations offshore.
            </div>
            <span id="pcinews"></span>
        </div>

        <div class="row mt-4">
            <div class="col-10 text-black-50">
                <h3 class="h5">Publications & Communications</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/devry.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold" >Web & Technical Manager</span><br/> <span class="small font-weight-light">May '04 – May '09</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Online Publishing <br> <span class="text-black-50">Austin, Texas </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: General Technical Management, Digital Portfolio Management, Magazine Distribution</span>

            </div>
            <div class="col-12 mt-2 font-weight-light">
                Technology manager for a national magazine publisher. Managed daily technical operations and production environments for both print and online distribution. Working with both executive publishes, art directors, sale mangers and web developers to maintain consistent results across both web and print products.
            </div>
            <span id="ableammo"></span>
        </div>

        <div class="row mt-4" >
            <div class="col-10 text-black-50">
                <h3 class="h5">Able Management Company</h3>
            </div>
            <div class="col-2 text-black-50 text-right h5">
                <a v-scroll-to="'#top'"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
            <div class="col-12 col-lg-1 col-md-1">
                <img src="/media/edu/devry.png" class="img-thumbnail image-thumb shake" />
            </div>
            <div class="col-6 col-lg-6 col-md-6 text-black-50">
                <span class="font-weight-bold" >Web & Technical Manager</span><br/> <span class="small font-weight-light">May '01 – Aug '02</span>
            </div>
            <div class="col-6 col-lg-5 col-md-5 small">
                Retail and Ecommerce <br> <span class="text-black-50">Huntsville, Texas </span>
            </div>
            <div class="col-12 mt-2 text-black-50 font-italic small">
                <span>Highlights: Technology, Web Development</span>

            </div>
            <div class="col-12 mt-2 font-weight-light">
                Managed technical operations of 7 retail locations over extended regional cisco appliances. Assisted in the setup, design and development of the e-commerce site Ableammo.com aimed at hunting accessories.
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