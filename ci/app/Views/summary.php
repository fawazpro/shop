<div class="bg-white pb-5 mb-3">
    <div class="container-fluid bg-white account">

        <!-- Real arrangement -->
        <div class="row">
            <div class="col-lg-8 mt-5 d-none d-sm-block">
                <img src="<?= $banner_desktop ?>" alt="" height="80vh" class="img-fluid">
            </div>
            <!-- card1 -->
            <div class="col-lg-4 mb-3">
                <div class="p-2 img-fluid ">
                    <div class="card bg-white r mt-5">
                        <div class="card-body pt-0 px-0 pb-2">
                            <h6 class="c-card__title text-uppercase text-white bg-danger text-center py-3 rtl rtr">
                                CheckOut Summary
                            </h6>
                            <div class="showCart"></div>
                            <!-- <div class="coupon"></div> -->
                            <div class="float-right pr-3">Total price: &#x20a6;<span class="total-cart"></span></div> <br>
                            <div class="clearfix"></div>
                            <div class="container">
                                <form action="<?= base_url('completeorder') ?>" method="post">
                                <input type="hidden" name="orders" id="carto" value="tested cart">
                                    <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="customer_name" placeholder="">
                                    </div>
                                    <div class="form-group">
                                    <label for="">Mobile Number</label>
                                    <input type="tel" class="form-control" name="customer_phone" placeholder="">
                                    </div>
                                    <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="customer_email" placeholder="">
                                    </div>
                                    <input type="submit" class="btn btn-danger text-center" value="Order">


                                </form>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card1 -->
    </div>
    <!-- Real arrangement -->

</div>
</div>