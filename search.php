
<?php include 'includes/header.php' ?>
<body class="bg-body-dark">
<main class="container-fluid">
    <section class="container main-entry">
        <div class="row g-0 my-5 justify-content-center">
            <div class="col-lg-6 px-4">
                <h1 class="fw-lighter text-gold text-center">Search</h1>
                <hr class="w-100 bg-gold">
                <form action="" class="form">
                    <div class="input-group">
                        <input type="text" name="search" placeholder="name, program code or location" class="form-control">
                        <button type="submit" class="btn btn-warning">
                            <span class="bi-search m-0 me-lg-2"></span>
                            <span class="d-none d-lg-inline">Search</span>
                        </button>
                    </div>
                </form>
                <hr class="w-100 bg-gold">
                <p class="text-center">
                    If you are a new student you can search for your program to view the study start information.
                    Existing students should <a href="login.php" class="a-link d-inline text-gold">log in</a> to view
                    their personal information.
                </p>
            </div>
        </div>
    </section>
</main>
<?php include 'includes/footer.php' ?>