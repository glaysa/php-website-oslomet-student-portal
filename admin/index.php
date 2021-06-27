
<?php include '../includes/header.php'; $title = 'Administrator' ?>
<body class="bg-body-dark">
<main class="container-fluid">
    <section class="main-entry p-3 p-lg-5 mb-5">
        <div class="row g-0 my-5 p-lg-0 px-3 justify-content-center">
            <div class="col-lg-2">
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="flush-2">
                        <button class="accordion-button collapsed bg-gold text-dark fs-5"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#major-collapse"
                                aria-expanded="false"
                                aria-controls="major-collapse">Majors
                        </button>
                    </h2>
                    <div id="major-collapse" class="accordion-collapse collapse" aria-labelledby="flush-2">
                        <div class="text-white">
                            <div class="p-3 bg-dark-secondary">
                                <div class="d-lg-flex d-block justify-content-between mb-2">
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-plus-circle me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">New Major</p>
                                        </div>
                                    </a>
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-eye me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">See All</p>
                                        </div>
                                    </a>
                                </div>
                                <content>
                                    <p class="m-0">Creates a new major shown to everyone under the 'Majors' page.</p>
                                </content>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="flush-2">
                        <button class="accordion-button collapsed bg-gold text-dark fs-5"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#course-collapse"
                                aria-expanded="false"
                                aria-controls="course-collapse">Courses
                        </button>
                    </h2>
                    <div id="course-collapse" class="accordion-collapse collapse" aria-labelledby="flush-2">
                        <div class="text-white">
                            <div class="p-3 bg-dark-secondary">
                                <div class="d-lg-flex d-block justify-content-between mb-2">
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-plus-circle me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">New Course</p>
                                        </div>
                                    </a>
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-eye me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">See All</p>
                                        </div>
                                    </a>
                                </div>
                                <content>
                                    <p class="m-0">Creates a new Course shown to everyone under the 'Courses' page.</p>
                                </content>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="flush-2">
                        <button class="accordion-button collapsed bg-gold text-dark fs-5"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#announcement-collapse"
                                aria-expanded="false"
                                aria-controls="fannouncement-collapse">Announcements
                        </button>
                    </h2>
                    <div id="announcement-collapse" class="accordion-collapse collapse" aria-labelledby="flush-2">
                        <div class="text-white">
                            <div class="p-3 bg-dark-secondary">
                                <div class="d-lg-flex d-block justify-content-between mb-2">
                                    <a href="create/editAnnouncement.php" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-plus-circle me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">New Announcement</p>
                                        </div>
                                    </a>
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-eye me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">See All</p>
                                        </div>
                                    </a>
                                </div>
                                <content>
                                    <p class="m-0">Creates a new announcement shown to all students under the 'Announcements' section and page.</p>
                                </content>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="flush-2">
                        <button class="accordion-button collapsed bg-gold text-dark fs-5"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#shortcut-collapse"
                                aria-expanded="false"
                                aria-controls="shortcut-collapse">Shortcuts
                        </button>
                    </h2>
                    <div id="shortcut-collapse" class="accordion-collapse collapse" aria-labelledby="flush-2">
                        <div class="text-white">
                            <div class="p-3 bg-dark-secondary">
                                <div class="d-lg-flex d-block justify-content-between mb-2">
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-plus-circle me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">New Shortcut</p>
                                        </div>
                                    </a>
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-eye me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">See All</p>
                                        </div>
                                    </a>
                                </div>
                                <content>
                                    <p class="m-0">Creates a new shortcut shown to everyone under the 'Shortcuts' section.</p>
                                </content>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="flush-2">
                        <button class="accordion-button collapsed bg-gold text-dark fs-5"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#activities-collapse-2"
                                aria-expanded="false"
                                aria-controls="activities-collapse-2">Activities
                        </button>
                    </h2>
                    <div id="activities-collapse-2" class="accordion-collapse collapse" aria-labelledby="flush-2">
                        <div class="text-white">
                            <div class="p-3 bg-dark-secondary">
                                <div class="d-lg-flex d-block justify-content-between mb-2">
                                    <a href="create/editActivity.php" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-plus-circle me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">New Activity</p>
                                        </div>
                                    </a>
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-eye me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">See All</p>
                                        </div>
                                    </a>
                                </div>
                                <content>
                                    <p class="m-0">Creates a new Activity shown to everyone under the 'Activity' section and page.</p>
                                </content>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="flush-2">
                        <button class="accordion-button collapsed bg-gold text-dark fs-5"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#news-collapse-2"
                                aria-expanded="false"
                                aria-controls="news-collapse-2">News
                        </button>
                    </h2>
                    <div id="news-collapse-2" class="accordion-collapse collapse" aria-labelledby="flush-2">
                        <div class="text-white">
                            <div class="p-3 bg-dark-secondary">
                                <div class="d-lg-flex d-block justify-content-between mb-2">
                                    <a href="create/editNews.php" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-plus-circle me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">Add News</p>
                                        </div>
                                    </a>
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-eye me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">See All</p>
                                        </div>
                                    </a>
                                </div>
                                <content>
                                    <p class="m-0">Creates a new News article shown to everyone under the 'News' section and page.</p>
                                </content>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3 border-0">
                    <h2 class="accordion-header" id="flush-2">
                        <button class="accordion-button collapsed bg-gold text-dark fs-5"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#fos-collapse"
                                aria-expanded="false"
                                aria-controls="fos-collapse">For Oslomet Students
                        </button>
                    </h2>
                    <div id="fos-collapse" class="accordion-collapse collapse" aria-labelledby="flush-2">
                        <div class="text-white">
                            <div class="p-3 bg-dark-secondary">
                                <div class="d-lg-flex d-block justify-content-between mb-2">
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-plus-circle me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">New Group</p>
                                        </div>
                                    </a>
                                    <a href="#" class="a-link p-0">
                                        <div class="mb-2 text-center d-flex align-items-center">
                                            <span class="bi-eye me-2 fs-5"></span>
                                            <p class="m-0 fw-bold">See All</p>
                                        </div>
                                    </a>
                                </div>
                                <content>
                                    <p class="m-0">Creates a new group of links shown to everyone under the 'For Oslomet Students' section.</p>
                                </content>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 px-lg-3">
                <h2 class="fw-lighter text-gold text-center">Dashboard</h2>
                <hr class="w-100 bg-gold">
                <div class="m-0 bg-dark text-center p-3">
                    <p>See how edit/add news page looks like under <b>News</b> -> <b>Add News</b></p>
                    <p>See how edit/add activity page looks like under <b>Activities</b> -> <b>New Activity</b></p>
                    <p>See how edit/add announcement page looks like under <b>Announcements</b> -> <b>New Announcement</b></p>
                    <p class="text-white-50">The rest of the accordions was not implemented, but will most likely have the same page content and structure as the above</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include '../includes/footer.php' ?>
