
<?php include 'includes/header.php' ?>
<body class="bg-body-dark">
<main class="container-fluid">
    <section class="container main-entry">
        <div class="row g-0 my-5 justify-content-center">
            <div class="col-lg-6 px-4">
                <h1 class="fw-lighter text-gold text-center">Admin</h1>
                <hr class="w-100 bg-gold">
                <form action="" class="form">
                    <input type="text" name="username" placeholder="Username" class="mb-3 form-control">
                    <input type="password" name="password" placeholder="Password" class="mb-3 form-control">
                    <input type="submit" name="admin-login-submit" value="Login" class="mb-3 form-control btn btn-warning">
                </form>

                <hr class="w-100 bg-gold">
                <p class="text-center">Forgot password? Reset it
                    <a href="#" class="a-link d-inline text-gold">here</a>.</p>
                <p class="text-center">Having problem logging in? Contact the
                    <a href="#" class="a-link d-inline text-gold">IT Support</a>.</p>
            </div>
        </div>
    </section>
</main>
<?php include 'includes/footer.php' ?>
