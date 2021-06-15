<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="http://localhost/CMS/school-cms/">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <title></title>
</head>

<header class="sticky-top bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo50px.png" alt="logo" style="height: 40px">
                    <small class="mx-4">Student Portal</small>
                </a>

                <button class="navbar-toggler" id="btn-toggle" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span style="color: gold; font-size: 25px" class="bi bi-list"></span>
                    <span style="color: gold; font-size: 25px" class="bi bi-x"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <hr class="d-lg-none d-md-block w-100 bg-secondary">
                    <div class="navbar-nav ms-auto">
                        <a class="me-lg-4 nav-link" href="index.php">
                            <span class="bi-house me-2"></span>Home</a>
                        <a class="me-lg-4 nav-link" href="login.php">
                            <span class="bi-person me-2"></span>Login</a>
                        <a class="me-lg-4 nav-link" href="student/index.php">
                            <span class="bi-person me-2"></span>Profile</a>
                        <a class="me-lg-4 nav-link" href="search.php">
                            <span class="bi-search me-2"></span>Search</a>
                        <a class="nav-link" href="#">
                            <span class="bi-globe me-2"></span>No</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
