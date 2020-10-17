<!-- Content body -->
<div class="content-body">
    <!-- Content -->
    <div class="content">
        <div class="page-header d-md-flex justify-content-between">
            <div>
                <h3>Welcome, <?= $name ?></h3>
                <p class="text-muted">
                    Update and setup your store credentials.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title float-left">Store Preferences</h6>
                <div class="clearfix"></div>
                <div class="container">
                    <form action="<?= base_url('admin/pref/basicinfo') ?>" method="POST">
                        <div class="form-group row">
                            <label for="store_name" class="col-sm-1-12 col-form-label">Store Name:</label>
                            <div class="col-sm-1-12 col-8">
                                <input type="text" class="form-control" name="store_name" id="store_name" value="<?= $store->store_name ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="store_phone" class="col-sm-1-12 col-form-label">Store Phone:</label>
                            <div class="col-sm-1-12 col-8">
                                <input type="text" class="form-control" name="store_phone" id="store_phone" value="<?= $store->store_phone ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="store_fullname" class="col-sm-1-12 col-form-label">Store Owner Full Name:</label>
                            <div class="col-sm-1-12 col-6">
                                <input type="text" class="form-control" name="store_fullname" id="store_fullname" value="<?= $store->store_fullname ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="store_email" class="col-sm-1-12 col-form-label">Store Email:</label>
                            <div class="col-sm-1-12 col-8">
                                <input type="text" class="form-control" name="store_email" id="store_email" value="<?= $store->store_email ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="store_address" class="col-sm-1-12 col-form-label">Store Address:</label>
                            <div class="col-sm-1-12 col-8">
                                <input type="text" class="form-control" name="store_address" id="store_address" value="<?= $store->store_address ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10  col-8">
                                <button type="submit" class="col btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="card-title float-left">Admin Login Details</h6>
                <div class="clearfix"></div>
                <div class="container">
                    <form action="<?= base_url('admin/pref/logininfo') ?>" method="POST">
                        <div class="form-group row">
                            <label for="Username" class="col-sm-1-12 col-form-label">Username:</label>
                            <div class="col-sm-1-12 col-8">
                                <input type="text" class="form-control" name="username" id="username" value="<?= $user['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Password" class="col-sm-1-12 col-form-label">Password:</label>
                            <div class="col-sm-1-12 col-8">
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10  col-8">
                                <button type="submit" class="col btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="card-title float-left">Banner Update</h6>
                <div class="clearfix"></div>
                <div class="container">
                    <div class="row">
                        <form action="<?= base_url('admin/pref/mbanner') ?>" method="POST" enctype="multipart/form-data" class="col-12 col-md-6">
                            <div class="form-group row">
                                <label for="store_banner" class="col-sm-1-12 col-form-label">Mobile Banner:</label>
                                <div class="col-sm-1-12 col-8">
                                    <input type="file" class="form-control" name="store_banner" id="store_banner" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="store_banner_desc" class="col-sm-1-12 col-form-label">Mobile Banner Description:</label>
                                <div class="col-sm-1-12 col-8">
                                    <input type="text" class="form-control" name="store_banner_desc" id="store_banner_desc" value="<?= $store->store_banner_desc ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10  col-8">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <form action="<?= base_url('admin/pref/dbanner') ?>" method="POST" enctype="multipart/form-data" class="col-12 col-md-6">
                            <div class="form-group row">
                                <label for="store_banner" class="col-sm-1-12 col-form-label">Desktop Banner:</label>
                                <div class="col-sm-1-12 col-8">
                                    <input type="file" class="form-control" name="store_desktop_banner" id="store_banner">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="store_banner_desc" class="col-sm-1-12 col-form-label">Desktop Banner Description:</label>
                                <div class="col-sm-1-12 col-8">
                                    <input type="text" class="form-control" name="store_desktop_banner_desc" id="store_banner_desc" value="<?= $store->store_desktop_banner_desc ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10  col-8">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="card-title float-left">Store Bank Account</h6>
                <div class="clearfix"></div>
                <div class="container">
                    <form action="<?= base_url('admin/pref/bankinfo') ?>" method="POST">
                        <div class="form-group row">
                            <label for="store_bank" class="col-sm-1-12 col-form-label">Store Bank:</label>
                            <div class="col-sm-1-12 col-8">
                                <input type="text" class="form-control" name="store_bank" id="store_bank" value="<?= $store->store_bank ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="store_accname" class="col-sm-1-12 col-form-label">Store Bank Account Name:</label>
                            <div class="col-sm-1-12 col-8">
                                <input type="text" class="form-control" name="store_accname" id="store_accname" value="<?= $store->store_accname ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="store_accnumber" class="col-sm-1-12 col-form-label">Store Bank Account Number:</label>
                            <div class="col-sm-1-12 col-6">
                                <input type="text" class="form-control" name="store_accnumber" id="store_accnumber" value="<?= $store->store_accnumber ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10  col-8">
                                <button type="submit" class="col btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Content -->