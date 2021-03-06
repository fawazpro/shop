            <!-- Real arrangement -->
            <div class="row">
                <!-- card1 -->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col p-2 pb-0 img-fluid">
                            <div class="card bg-white r pb-0">
                                <div class="card-body p-0 pb-1">
                                    <h6 class="c-card__title text-uppercase text-white <?= $color ?> text-center py-2 mb-0 rtl rtr">
                                        <?= $banner_d ?>
                                    </h6>
                                    <div class="row">
                                        <div class="col pb-0">
                                            <img src="<?= $banner ?>" class="img-fluid m-0 rbl rbr" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 -->
                <!-- card1 -->
                <div class="col-lg-6 d-none d-sm-block">
                    <div class="row">
                        <div class="col p-2 pb-0 img-fluid">
                            <div class="card bg-white r pb-0">
                                <div class="card-body p-0 pb-1">
                                    <h6 class="c-card__title text-uppercase text-white <?= $color ?> text-center py-2 mb-0 rtl rtr">
                                        <?= $banner_desktop_d ?>
                                    </h6>
                                    <div class="row">
                                        <div class="col pb-0">
                                            <img src="<?= $banner_desktop ?>" class="img-fluid m-0 rbl rbr" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card1 -->
            </div>
            <!-- Real arrangement -->

            <h1 class="h4"></h1>
            <div class="container-fluid">
                <div class="row">
                    <?php foreach ($products as $prods) : ?>
                        <div class="col-6 col-sm-4 m-0 p-0 mt-1 pr-1">
                            <div class="card bg-white r">
                                <div class=" card-body p-0">
                                    <div class="desc rtl rtr p-3">
                                        <u class="h6">Description</u>
                                        <p><?= $prods->product_description ?></p>
                                    </div><img class="img-fluid m-auto rtl rtr" src="<?= $prods->product_image ?>" alt="">
                                    <div class="bg-light p-2 rbl rbr">
                                        <p class="m-0 text-truncate">
                                            <?= $prods->product_name ?>
                                        </p>
                                        <span class="text-info h5 p-0 m-0"><small class="bg-danger text-white text-uppercase float-left"></small>
                                            &nbsp; &#x20a6;<?= $prods->product_price ?></span>
                                        <span class="text-danger text-monospace p-0 m-0 float-right"></span>
                                        <div class="clearfix"></div>
                                        <div class="row m-0 mt-1">
                                            <a href="#" title="Add to Cart" data-name="<?= $prods->product_name ?>" data-img=<?= $prods->product_image ?> data-price="<?= $prods->product_price ?>" style="font-size: smaller;" class="col-12 btn btn-outline-danger add-to-cart">Add to Cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>