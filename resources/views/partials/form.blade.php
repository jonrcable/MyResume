<div class="row justify-content-center mb-3">
    <div class="col-12 col-md-12 col-lg-12 pb-5">


        <!--Form with header-->

        <form action="mail.php" method="post">
            <div class="card rounded-0">
                <div class="card-header p-0">
                    <div class="bg-secondary text-white-50 text-center py-2">
                        <h6>Do you want to chat about an opportunity?</h6>
                    </div>
                </div>
                <div class="card-body p-3">

                    <!--Body-->
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-dark"></i></div>
                            </div>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope text-dark"></i></div>
                            </div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="sample@gmail.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-comment text-dark"></i></div>
                            </div>
                            <textarea class="form-control" placeholder="Message..." required></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Contact Me" class="btn btn-outline-secondary btn-block rounded-0 py-2">
                    </div>
                </div>

            </div>
        </form>
        <!--Form with header-->


    </div>
</div>