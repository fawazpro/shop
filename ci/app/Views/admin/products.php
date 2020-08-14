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