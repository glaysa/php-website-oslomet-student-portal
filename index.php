
<?php include 'includes/header.php'; $title = 'Student Portal' ?>
<body class="bg-body-dark">
<div id="cover-container" class="container-fluid">
    <section class="cover-entry container d-flex flex-lg-row flex-column">
        <div class="text-lg-start text-center order-lg-1 order-2">
            <p class="display-6">Login</p>
            <hr class="w-100">
            <p class="lead">Login to access your personal timetable, tools, services, announcements and other information.</p>
            <a href="login.php" class="btn btn-dark"><span class="bi-person-fill me-2"></span>LOGIN</a>
        </div>
        <div class="order-lg-2 order-1">
            <img src="assets/images/cover-side-image.png" alt="cover image" class="img-fluid cover-img">
        </div>
    </section>
</div>

<main class="container-fluid">
    <?php include 'includes/sections/forStudents.inc.php' ?>
    <?php include 'includes/sections/news.inc.php' ?>
    <?php include 'includes/sections/activities.inc.php' ?>
</main>
<?php include 'includes/footer.php' ?>
