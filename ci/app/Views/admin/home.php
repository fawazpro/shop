<!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content">
        <div class="page-header d-md-flex justify-content-between">
            <div>
                <h3>Welcome back, <?= $name ?></h3>
                <p class="text-muted">
                    This page shows an overview for your shopable website.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title mb-2">Monthly Traffic</h6>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-floating">
                                    <i class="ti-reload"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-more-alt"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- <a class="dropdown-item" href="#">Action</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mb-4">
                            Compare how much visitors you have on a monthly basis
                        </p>
                        <div id="sales"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Positive Reviews</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <div class="avatar">
                                            <span class="avatar-title bg-primary-bright text-primary rounded-pill">
                                                <i class="ti-cloud"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold ml-1 font-size-30 ml-3">
                                        0.16%
                                    </div>
                                </div>
                                <p class="mb-0">
                                    <a href="#" class="link-1">See comments</a> and
                                    respond to customers' comments.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Bounce Rate</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <div class="avatar">
                                            <span class="avatar-title bg-info-bright text-info rounded-pill">
                                                <i class="ti-map"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold ml-1 font-size-30 ml-3">
                                        12.87%
                                    </div>
                                </div>
                                <p class="mb-0">
                                    <a class="link-1" href="#">See visits</a> that had a
                                    higher than expected bounce rate.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Active Referrals</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <div class="avatar">
                                            <span class="avatar-title bg-secondary-bright text-secondary rounded-pill">
                                                <i class="ti-email"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold ml-1 font-size-30 ml-3">
                                        12.87%
                                    </div>
                                </div>
                                <p class="mb-0">
                                    <a class="link-1" href="#">See referring</a> domains
                                    that sent most visits last month.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Opened Invites</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <div class="avatar">
                                            <span class="avatar-title bg-warning-bright text-warning rounded-pill">
                                                <i class="ti-dashboard"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold ml-1 font-size-30 ml-3">
                                        12.87%
                                    </div>
                                </div>
                                <p class="mb-0">
                                    <a class="link-1" href="#">See clients</a> that
                                    accepted your invitation to connect.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title float-left">My Products</h6>
                <button class="btn btn-dark float-right" data-toggle="modal" data-target="#newproduct"><i class="ti-plus ml-1"></i> New Product </button>
                <div class="clearfix"></div>
                <div class="table-responsive">
                    <table id="recent-orders" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>SKU</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $prods) : ?>
                                <tr>
                                    <td><?= $prods->product_id ?></td>
                                    <td><?= $prods->product_code ?></td>
                                    <td><?= $prods->product_name ?></td>
                                    <td><?= $prods->product_price ?></td>
                                    <td><?= $prods->product_image ?></td>
                                    <td><?= $prods->product_description ?></td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-more-alt"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">View Detail</a>
                                                <a href="#" class="dropdown-item">Send</a>
                                                <a href="#" class="dropdown-item">Edit</a>
                                                <a href="#" class="dropdown-item text-danger">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Content -->

    <!--Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="newproduct" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Add New Product</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                    </button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->