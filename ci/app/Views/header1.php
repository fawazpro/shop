<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <title>sgm | Mall</title>
</head>

<body>
    <header>
        <nav class="container navbar navbar-expand navbar-light bg-white">
            <a class="navbar-brand mr-auto mt-2 mt-lg-0 text-truncate" href="#">
                <img src="<?= $logo ?>" width="30" alt="" />
                <?= $brand ?>
            </a>
            <!-- Search Form -->
            <form class="form-inline ml-auto mt-2 mt-lg-0">
                <div class="input-group mr-sm-2">
                    <input type="search" class="form-control" placeholder="Search Products and Categories">
                </div>
            </form>
            <!-- Search Form -->
        </nav>
        <!-- Bottom nav -->
        <div class="bg-white navbar-light fixed-bottom p-2">
            <ul class="my-2 mx-3 my-lg-0 pl-0 nav-bottom">
                <li class="nav-item">
                    <a class="nav-link p-0" href="<?= base_url('/') ?>" title="Home">🏠</a>
                </li>
                <li class="nav-item">
                    <button class="p-0 btn btn-light btn-outline-danger bg-transparent nav-link display-3" title="Cart" data-toggle="modal" data-target="#cart">🛒<span class="total-count badge badge-pill badge-danger"></span></button>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="https://wa.me/<?= $phone ?>" title="Need Help?">🆘</a>
                </li>
            </ul>
        </div>
        <!-- Bottom nav -->
        <!--Cart Modal -->
        <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="cartTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cartTitle">Cart (<span class="total-count"></span>)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-1">
                        <!-- <table class="show-cart table"></table> -->
                        <div class="showCart"></div>
                        <div class="float-right pr-3">Total price: &#x20a6; <span class="total-cart"></span></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <a href="<?= base_url('summary') ?>" class="btn btn-danger">CheckOut</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Cart Modal -->
    </header>