
<?php include '../includes/header.php'; $title = 'Major Post' ?>
<body class="bg-body-dark">
<main class="container-fluid">
    <section class="container main-entry">
        <div class="my-5">
            <div class="post-column text-white">
                <div class="row">
                    <div class="col px-4">
                        <h1 class="fw-lighter text-lg-start text-center text-gold my-3">Bachelor in Information Technology</h1>
                    </div>
                </div>
                <div class="row g-3 text-center">
                    <hr class="w-100">
                    <div class="col-lg-4 px-4">
                        <h4 class="fw-lighter text-gold">Program Names</h4>
                        <p class="fw-lighter text-white">Information Technology, Informasjonsteknologi</p>
                    </div>
                    <div class="col-lg-4 px-4">
                        <h4 class="fw-lighter text-gold">ECTS Credits</h4>
                        <p class="fw-lighter text-white">180 ECTS Credits</p>
                    </div>
                    <div class="col-lg-4 px-4">
                        <h4 class="fw-lighter text-gold">Duration</h4>
                        <p class="fw-lighter text-white">6 Semesters</p>
                    </div>
                    <div class="col-lg-4 px-4">
                        <h4 class="fw-lighter text-gold">Valid From</h4>
                        <p class="fw-lighter text-white">2021 Fall</p>
                    </div>
                </div>
                <hr class="w-100">
                <?php include '../includes/sections/majors.inc.php' ?>

                <!-- TODO: Show only to admin -->

                <div class="row">
                    <div class="col px-4 my-4 text-end">
                        <a href="#" class="a-link text-gold ms-auto"><span class="bi-pencil me-2"></span>Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include '../includes/footer.php' ?>
