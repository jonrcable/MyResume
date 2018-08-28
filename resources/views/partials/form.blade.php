<div class="row justify-content-center mb-3">
    <div class="col-12 col-md-12 col-lg-12 pb-5">

        <!--Form with header-->
        <!--Inject the Google Captcha from the Laravel Component-->
        <contact-component :captcha-data="'{{ json_encode(env('NOCAPTCHA_SITEKEY')) }}'"></contact-component>

    </div>
</div>