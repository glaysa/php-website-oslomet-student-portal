
<?php include '../includes/header.php'; $title = 'Edit | News'?>
<body class="bg-light">
<main class="container-fluid">
    <section class="container main-entry text-dark">
        <div class="row g-0 p-3 my-5">
            <div class="col">
                <h1 class="fw-lighter text-center text-dark">Publish a News Article</h1>
                <hr class="w-100 bg-dark">
            </div>
            <form action="" class="form">
                <div class="row g-2">
                    <div class="col-lg-6 form-floating mb-2">
                        <input type="text" name="news-title" class="form-control fc-white" id="float-title" placeholder="_">
                        <label for="float-title">Title <em>(6-24 Characters)</em></label>
                    </div>
                    <div class="col-lg-6 form-floating mb-2">
                        <input type="text" name="news-tags" class="form-control fc-white" id="float-tags" placeholder="_">
                        <label for="float-tags">Tags <em>(Separated by comma)</em></label>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-group mb-3">
                            <input type="file" name="news-cover" class="form-control" id="cover-img">
                            <label class="input-group-text" for="cover-img">
                                <span class="bi-upload me-2"></span>Cover Image</label>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-12">
                        <h3 class="fw-lighter mb-3">Excerpt</h3>
                        <textarea name="activity-excerpt" id="news-excerpt"></textarea>
                    </div>
                    <div class="col-12">
                        <h3 class="fw-lighter mb-3">Body</h3>
                        <textarea name="activity-body" cols="110" rows="90"></textarea>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-lg-6">
                        <button type="submit" name="news-draft-btn" class="btn btn-outline-secondary mt-3 my-lg-3 w-100">Draft</button>
                    </div>
                    <div class="col-lg-6">
                        <button type="submit" name="news-submit-btn" class="btn btn-success my-0 my-lg-3 w-100">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include '../includes/sections/news.inc.php' ?>
</main>
<?php include '../includes/footer.php' ?>