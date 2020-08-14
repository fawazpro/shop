<!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content">
        <div class="page-header d-md-flex justify-content-between">
            <div>
                <h3>Welcome, <?= $name ?></h3>
                <p class="text-muted">
                    This page shows the list of orders you have.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title float-left">Recent Orders</h6>
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
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Content -->