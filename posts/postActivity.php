
<?php include '../includes/header.php'; $title = 'Activity Post' ?>
<body class="bg-body-dark">
<main class="container-fluid">
    <section class="container main-entry">
        <div class="row g-0 my-5">
            <div class="news-post-column col pb-5 text-white">
                <article class="px-3">
                    <div class="news-post-header d-flex justify-content-center flex-column">
                        <img src="assets/images/img-placeholder.png" alt="placeholder" class="img-fluid">
                    </div>
                    <h1 class="fw-lighter text-gold my-3">Activity Title</h1>
                    <hr class="w-100">
                    <content>
                        <p class="news-excerpt lead">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci culpa
                            cumque dolorum fugiat harum labore praesentium similique vel voluptatibus!
                        </p>
                    </content>
                    <hr class="w-100">
                    <content>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi cupiditate eos expedita
                        ipsam minus, necessitatibus quod repudiandae? Adipisci atque beatae consequatur totam ullam.
                        Amet aperiam autem cupiditate deserunt distinctio dolorum eligendi expedita explicabo facere
                        id impedit incidunt, maxime minima, nam necessitatibus nobis placeat possimus provident sit
                        sunt suscipit, voluptas.
                    </content>
                    <hr class="w-100">
                    <div class="text-white-50 justify-content-between d-flex flex-lg-row flex-column">
                        <p class="m-lg-0"><span class="bi-map me-2"></span>Location - Oslomet Building 32</p>
                        <p class="m-lg-0"><span class="bi-clock me-2"></span>January 24, 2021 - January 26, 2021</p>
                        <p class="m-lg-0 text-danger">Ended<span class="ms-2 bi-circle-fill me-2"></span></p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php include '../includes/sections/activities.inc.php' ?>
</main>
<?php include '../includes/footer.php' ?>
