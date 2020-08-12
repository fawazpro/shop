 <!-- Real arrangement -->
 <div class="row">
     <!-- card1 -->
     <div class="col-lg-12">
         <div class="row">
             <div class="col p-2 pb-0 img-fluid">
                 <div class="card bg-white r pb-0">
                     <div class="card-body p-0 pb-1">
                         <h6 class="c-card__title text-uppercase text-white bg-danger text-center py-2 mb-0 rtl rtr">
                             Top Ranking
                         </h6>
                         <div class="row px-1">
                             <?php foreach ($tops as $top) : ?>
                                 <div class="col-4 d-flex flex-column">
                                     <img src="<?= $top->product_image ?>" alt="" class="img-fluid pl-2" />
                                     <p class="text-center text-truncate font-weight-lighter mb-0">
                                         <?= $top->product_name ?> <br><span class="badge badge-pill badge-info font-small p-1">📝<?= $top->product_sales ?>
                                             Orders</span>
                                     </p>
                                     <div class="row m-0 mt-1">
                                         <a href="#" title="Add to Cart" data-name="<?= $top->product_name ?>" data-img=<?= $top->product_image ?> data-price="<?= $top->product_price ?>" style="font-size: smaller;" class="col-12 btn btn-outline-danger add-to-cart">Add to Cart</a>
                                     </div>

                                 </div>
                             <?php endforeach; ?>
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
                             <span class="text-info p-0 m-0"><small class="bg-danger text-white text-uppercase float-left"></small>
                                 &#x20a6;<?= $prods->product_price ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                             <a href="<?= base_url('cat/' . $prods->product_type) ?>" class="float-right text-secondary text-truncate p-0 m-0 font-smaller"><?= $prods->product_type ?></a>
                             <strike class="text-danger text-monospace p-0 m-0 "></strike>
                             <div class="clearfix"></div>
                             <a href="<?= base_url($prods->product_store) ?>" class="d-block text-secondary text-truncate p-0 m-0 font-smaller"><?= $prods->product_store ?></a>
                             <div class="row m-0 mt-1">
                                 <a href="#" title="Add to Cart" data-name="<?= $prods->product_name ?>" data-img=<?= $prods->product_image ?> data-price="<?= $prods->product_price ?>" style="font-size: smaller;" class="col-12 btn btn-outline-danger add-to-cart">Add to Cart</a>
                                 <!-- <a href="#" title="Add to Cart" data-name=<?= $prods->product_name ?> data-img=<?= $prods->product_image ?> data-price="<?= $prods->product_price ?>" style="font-size: small;" class="col-6 btn btn-outline-success add-to-cart">Buy Now</a> -->
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         <?php endforeach; ?>
     </div>
 </div>