<footer class="site-footer fixed-bottom">
    <div class="container">

        <!-- Grid row-->
        <div class="row mt-2 mb-2">

            <!-- Grid column -->
            <div class="col-6 mb-2">

                @yield('footer-msg')

            </div>

            <!-- Grid column -->
            <div class="col-6">
                <div class="float-right">
                    <!--Linkedin -->
                    <a class="li-ic">
                        <a href="{{ config('app.linkedin') }}" target="_blank"><i class="fa fa-linkedin fa-lg text-muted mr-md-5 mr-1"> </i></a>
                    </a>
                    <!--Github-->
                    <a class="ins-ic">
                        <a href="{{ config('app.github') }}" target="_blank" ><i class="fa fa-github fa-lg text-muted mr-md-5 mr-1"> </i></a>
                    </a>
                    <!--PDF -->
                    <a class="li-ic">
                        <a href="{{ config('app.pdf') }}" target="_blank"><i class="fa fa-file-pdf-o fa-lg text-muted"> </i></a>
                    </a>
                </div>
            </div>

            <!-- Grid column -->

        </div>
        <!-- Grid row-->


    </div>
</footer>