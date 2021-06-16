<section class="container">
    <div class="row g-0" id="shortcut-section">
        <p class="display-6 text-center text-white pt-5">Shortcuts</p>
        <hr class="w-100 bg-gold mb-5">

        <div class="p-2 col-lg-2 col-md-4 col-6">
            <a href="#" class="a-link-block text-decoration-none">
                <div class="p-3 bg-gold text-dark text-center">
                    <span class="bi-person-check" style="font-size: 30px"></span>
                    <p class="m-0">New Student</p></div>
            </a>
        </div>
        <div class="p-2 col-lg-2 col-md-4 col-6">
            <a href="#" class="a-link-block text-decoration-none">
                <div class="p-3 bg-gold text-dark text-center">
                    <span class="bi-geo-alt" style="font-size: 30px"></span>
                    <p class="m-0">MazeMap</p></div>
            </a>
        </div>
        <div class="p-2 col-lg-2 col-md-4 col-6">
            <a href="#" class="a-link-block text-decoration-none">
                <div class="p-3 bg-gold text-dark text-center">
                    <span class="bi-calendar3-week" style="font-size: 30px"></span>
                    <p class="m-0">Course Schedule</p></div>
            </a>
        </div>
        <div class="p-2 col-lg-2 col-md-4 col-6">
            <a href="#" class="a-link-block text-decoration-none">
                <div class="p-3 bg-gold text-dark text-center">
                    <span class="bi-link-45deg" style="font-size: 30px"></span>
                    <p class="m-0">Reserve Rooms</p></div>
            </a>
        </div>
        <div class="p-2 col-lg-2 col-md-4 col-6">
            <a href="#" class="a-link-block text-decoration-none">
                <div class="p-3 bg-gold text-dark text-center">
                    <span class="bi-link-45deg" style="font-size: 30px"></span>
                    <p class="m-0">Inspera</p></div>
            </a>
        </div>
        <div class="p-2 col-lg-2 col-md-4 col-6">
            <a href="#" class="a-link-block text-decoration-none">
                <div class="p-3 bg-gold text-dark text-center">
                    <span class="bi-link-45deg" style="font-size: 30px"></span>
                    <p class="m-0">StudentWeb</p></div>
            </a>
        </div>

        <template id="shortcut-template">
            <div class="p-2 col-lg-2 col-md-4 col-6 shortcut">
                <a href="#" class="a-link-block text-decoration-none">
                    <div class="p-3 bg-gold text-dark text-center">
                        <span class="bi-link-45deg" style="font-size: 30px"></span>
                        <p class="m-0">StudentWeb</p></div>
                </a>
            </div>
        </template>

        <!-- TODO: Should only be visible to admin and students -->
        <div class="p-2 col-lg-2 col-md-4 col-6 order-12">
            <a class="a-link-block-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#shortcutModal">
                <div class="p-3 bg-dark-secondary text-gold text-center">
                    <span class="bi-plus-circle" style="font-size: 30px"></span>
                    <p class="m-0">Add Shortcut</p></div>
            </a>
        </div>
        <div class="modal fade bg-dark-secondary-50" id="shortcutModal" tabindex="-1" aria-labelledby="shortcutModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered text-white">
                <div class="modal-content bg-dark">
                    <div class="modal-body">
                        <h3 class="modal-title fw-light text-gold text-center">New Shortcut</h3>
                        <hr class="w-100 bg-gold">
                        <form action="" class="form">
                            <input type="text" name="shortcut-name" placeholder="Name" id="shortcut-name" class="mb-3 form-control">
                            <input type="text" name="shortcut-link" placeholder="Link" id="shortcut-link" class="mb-3 form-control">
                            <button type="submit"
                                    name="shortcut-submit"
                                    id="add-shortcut-btn"
                                    class="mb-3 form-control btn btn-warning">Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
