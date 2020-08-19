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
                <h6 class="card-title float-left">Orders</h6>
                <div class="clearfix"></div>
                <div class="table-responsive">
                    <table id="orders" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Orders</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order) : ?>
                                <tr>
                                    <td><?= $order->order_id ?></td>
                                    <td><?= $order->customer_name ?></td>
                                    <td><?= $order->customer_phone ?></td>
                                    <td><?= $order->customer_email ?></td>
                                    <td><?= $order->orders ?></td>
                                    <td class="text-right">
                                        <button onclick="orderfulfill(<?= $order->order_id ?>)" class="btn btn-success">
                                            <i class="ti-thumb-up"></i>
                                        </button>
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