
<?php include 'includes/header.php'; $title = 'Announcements' ?>
<body class="bg-body-dark">
<main class="container-fluid">
    <section class="container main-entry">
        <div class="row g-0 p-3 my-5">
            <div class="col text-center">
                <p class="display-6 text-gold">Announcements</p>
                <hr class="w-100 bg-gold">
            </div>

            <div class="accordion-item mb-3 border-0">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed bg-gold text-dark fs-5"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne"
                            aria-expanded="false"
                            aria-controls="flush-collapseOne">Oslomet Server Error
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                    <div class="text-white">
                        <div class="px-3 bg-dark-secondary">
                            <div class="py-4 d-flex flex-lg-row flex-column align-items-center">
                                <p class="lead m-lg-0 text-lg-start text-center flex-grow-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, porro?</p>
                                <span class="text-white-50"><i class="bi-clock me-2"></i>Published - August 02, 2021</span>
                            </div>
                            <content>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi cupiditate eos expedita
                                    ipsam minus, necessitatibus quod repudiandae? Adipisci atque beatae consequatur totam ullam.
                                    Amet aperiam autem cupiditate deserunt distinctio dolorum eligendi expedita explicabo facere
                                    id impedit incidunt, maxime minima, nam necessitatibus nobis placeat possimus provident sit
                                    sunt suscipit, voluptas.
                                </p>
                            </content>
                            <div class="p-lg-0 py-4 d-flex flex-lg-row flex-column align-items-center gap-2 text-white-50">
                                <p>Type: <span class="me-3">Issue</span></p>
                                <p>Status: <span class="me-3">Solved</span></p>
                                <p class="flex-grow-1 text-end">Last Updated: <span class="">August 10, 2021</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3 border-0">
                <h2 class="accordion-header" id="flush-2">
                    <button class="accordion-button collapsed bg-gold text-dark fs-5"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse-2"
                            aria-expanded="false"
                            aria-controls="flush-collapse-2">Semester Registration
                    </button>
                </h2>
                <div id="flush-collapse-2" class="accordion-collapse collapse" aria-labelledby="flush-2">
                    <div class="text-white">
                        <div class="px-3 bg-dark-secondary">
                            <div class="py-4 d-flex flex-lg-row flex-column align-items-center">
                                <p class="lead m-lg-0 text-lg-start text-center flex-grow-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, porro?</p>
                                <span class="text-white-50"><i class="bi-clock me-2"></i>Published - August 02, 2021</span>
                            </div>
                            <content>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi cupiditate eos expedita
                                    ipsam minus, necessitatibus quod repudiandae? Adipisci atque beatae consequatur totam ullam.
                                    Amet aperiam autem cupiditate deserunt distinctio dolorum eligendi expedita explicabo facere
                                    id impedit incidunt, maxime minima, nam necessitatibus nobis placeat possimus provident sit
                                    sunt suscipit, voluptas.
                                </p>
                            </content>
                            <div class="p-lg-0 py-4 d-flex flex-lg-row flex-column align-items-center gap-2 text-white-50">
                                <p>Type: <span class="me-3">Issue</span></p>
                                <p>Status: <span class="me-3">Solved</span></p>
                                <p class="flex-grow-1 text-end">Last Updated: <span class="">August 10, 2021</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="w-100 bg-gold">
        </div>
    </section>
</main>
<?php include 'includes/footer.php' ?>
