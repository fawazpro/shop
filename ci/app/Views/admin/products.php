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
                    <div class="container">
                        <form action="<?= base_url('admin/newproduct') ?>" method="POST">
                            <input type="hidden" name="product_type" value="null">
                            <div class="form-group">
                                <label for="">Product Code</label>
                                <input type="text" class="form-control" name="product_code" placeholder="e.g CHG025">
                            </div>
                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" class="form-control" name="product_name" placeholder="e.g XYZ Dual Port Charger">
                            </div>
                            <div class="form-group">
                                <label for="">Product Price</label>
                                <input type="number" class="form-control" name="product_price" placeholder="e.g 5000">
                            </div>
                            <div class="form-group">
                                <label for="">Product Image</label>
                                <input type="file" class="form-control-file" name="product_image">
                            </div>
                            <div class="form-group">
                                <label for="">Product Color</label>
                                <select class="form-control" name="product_color">
                                    <option value="">Select a Color</option>
                                    <option value="success">Green</option>
                                    <option value="danger">Red</option>
                                    <option value="warning">Yellow</option>
                                    <option value="primary">Blue</option>
                                    <option value="info">Grey</option>
                                </select>
                            </div>
                            <input type="hidden" name="product_size" value="null">
                            <div class="form-group">
                                <label for="">Product Description</label>
                                <textarea class="form-control" name="product_description" rows="3"></textarea>
                            </div>
                            <input type="hidden" name="product_tag" value="null">
                            <input type="hidden" name="product_discount" value="0">
                            <input type="hidden" name="product_promo" value="0">
                            <input type="hidden" name="product_sales" value="100">
                            <input type="submit" value="Add Product" class="btn btn-success">
                        </form>
                    </div>
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