
<?php include '../includes/header.php'; $title = 'News Post' ?>
<body class="bg-body-dark">
<main class="container-fluid">
    <section class="container main-entry">
        <div class="row g-0 my-5">
            <div class="post-column col pb-5 text-white">
                <article class="px-3">
                    <div class="news-post-header d-flex justify-content-center flex-column">
                        <img src="assets/images/img-placeholder.png" alt="placeholder" class="img-fluid">
                    </div>
                    <h1 class="fw-lighter text-gold my-3">News Title</h1>
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
                        <p class="m-lg-0"><span class="bi-pencil me-2"></span>Author Name</p>
                        <p class="m-lg-0"><span class="bi-clock me-2"></span>Published - January 24, 2021</p>
                        <p class="m-lg-0"><span class="bi-clock me-2"></span>Updated - January 24, 2021</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php include '../includes/sections/news.inc.php' ?>
</main>
<?php include '../includes/footer.php' ?>
