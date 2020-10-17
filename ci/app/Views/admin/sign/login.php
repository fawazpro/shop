<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img src="<?= base_url('assets/media/image/dark-logo.png') ?>" alt="image" width="100px">
    </div>
    <!-- ./ logo -->


    <h5>Sign in</h5>

    <!-- form -->
    <form method="POST" action="postlogin">
        <div class="form-group">
            <input type="login" class="form-control" placeholder="Email" name="email" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="pass" required>
        </div>
        <div class="form-group d-flex justify-content-between">
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
    </form>
    <!-- ./ form -->


</div>