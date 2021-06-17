
<?php include '../includes/header.php'; $title = 'Administrator' ?>
<body class="bg-body-dark">
<div id="cover-container" class="container-fluid">
    <section class="container">
        <section class="cover-entry container d-flex flex-lg-row flex-column">
            <div class="text-lg-start flex-grow-1 text-center order-lg-1 order-2">
                <p class="display-6">Your Program(s)</p>
                <hr class="w-100">

                <a href="#" class="a-link-block-dark text-decoration-none">
                    <div class="p-3 mb-3 bg-gold text-dark text-center d-flex align-items-center">
                        <span class="bi-chevron-right" style="font-size: 30px"></span>
                        <p class="px-4 m-0 fw-bold">Bachelor in Information Technology</p>
                    </div>
                </a>

                <a href="#" class="a-link-block-dark text-decoration-none">
                    <div class="p-3 mb-3 bg-gold text-dark text-center d-flex align-items-center">
                        <span class="bi-chevron-right" style="font-size: 30px"></span>
                        <p class="px-4 m-0 fw-bold">Master in Business Management</p>
                    </div>
                </a>

                <div class="p-3 mb-3 bg-gold text-dark text-center d-flex align-items-center">
                    <hr class="w-100 bg-dark">
                    <div class="w-100">
                        <a href="#" class="a-link-dark d-inline fw-bolder text-dark mx-auto">Your Schedule</a>
                    </div>
                    <hr class="w-100 bg-dark">
                </div>

            </div>
            <div class="order-lg-2 order-1">
                <img src="assets/images/student-cover.png" alt="cover image" class="img-fluid cover-img">
            </div>
        </section>
    </section>
</div>

<main class="container-fluid">
    <?php include '../includes/sections/announcements.inc.php' ?>
    <?php include '../includes/sections/shortcuts.inc.php'?>
    <?php include '../includes/sections/forStudents.inc.php'?>
    <?php include '../includes/sections/news.inc.php' ?>
    <?php include '../includes/sections/activities.inc.php' ?>
</main>
<?php include '../includes/footer.php' ?>
