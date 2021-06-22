
<?php include '../includes/header.php'; $title = 'Edit | Announcements'?>
<body class="bg-light">
<main class="container-fluid">
    <section class="container main-entry text-dark">
        <div class="row g-0 p-3 my-5">
            <div class="col">
                <h1 class="fw-lighter text-center text-dark">Create a new Announcement</h1>
                <hr class="w-100 bg-dark">
            </div>
            <form action="" class="form">
                <div class="row g-2">
                    <div class="col-lg-6 form-floating mb-2">
                        <input type="text" name="announce-title" class="form-control fc-white" id="float-title" placeholder="_">
                        <label for="float-title">Title <em>(6-24 Characters)</em></label>
                    </div>
                    <div class="col-lg-6 form-floating mb-2">
                        <input type="text" name="announce-tags" class="form-control fc-white" id="float-tags" placeholder="_">
                        <label for="float-tags">Tags <em>(Separated by comma)</em></label>
                    </div>
                    <div class="col-lg-6 form-floating">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Type</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Information</option>
                                <option value="2">Issue</option>
                                <option value="3">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 form-floating">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Status</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">Solved</option>
                                <option value="2">Ongoing</option>
                                <option value="3">Published</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-12">
                        <h3 class="fw-lighter mb-3">Excerpt</h3>
                        <textarea name="announce-excerpt" id="announce-excerpt"></textarea>
                    </div>
                    <div class="col-12">
                        <h3 class="fw-lighter mb-3">Body</h3>
                        <textarea name="announce-body" cols="110" rows="90"></textarea>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-lg-6">
                        <button type="submit" name="announce-draft-btn" class="btn btn-outline-secondary mt-3 my-lg-3 w-100">Draft</button>
                    </div>
                    <div class="col-lg-6">
                        <button type="submit" name="announce-submit-btn" class="btn btn-success my-0 my-lg-3 w-100">Publish</button>
                    </div>
                </div>
                <div class="row row-cols-lg-3 g-0 mt-5">
                    <div class="col"><hr class="w-100"></div>
                    <div class="col">
                        <a href="pages/allAnnouncements.php" class="a-link-dark fw-bolder mx-auto text-center">See all announcements</a>
                    </div>
                    <div class="col"><hr class="w-100"></div>
                </div>
            </form>
        </div>
    </section>
</main>
<?php include '../includes/footer.php' ?>