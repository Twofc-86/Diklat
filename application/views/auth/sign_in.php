<style>
    @media screen and (max-width: 660px) {
        .side-left {
            display: none;
        }
    }

    .shadow-custom {
        box-shadow: 0 3px 1px 0 rgba(0, 0, 0, 0.12) !important
    }

    .btn-custom {
        color: #fff;
        cursor: pointer;
        height: 40px;
        text-align: center;
        border: none;
        background-size: 300% 100%;
        border-radius: 20px;
        moz-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .btn-custom:hover {
        background-position: 100% 0;
        moz-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }

    .btn-custom:focus {
        outline: none;
    }

    .btn-custom.color-1 {
        background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
        box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
    }

    .btn-custom.color-2 {
        background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
        box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
    }

    .btn-custom.color-3 {
        background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
        box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
    }

    .btn-custom.color-4 {
        background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
        box-shadow: 0 4px 15px 0 rgba(252, 104, 110, 0.75);
    }

    .btn-custom.color-5 {
        background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673);
        box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
    }

    .btn-custom.color-6 {
        background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
        box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
    }

    .btn-custom.color-7 {
        background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
        box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
    }

    .btn-custom.color-8 {
        background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
        box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
    }

    .btn-custom.color-9 {
        background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
        box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
    }

    .btn-custom.color-10 {
        background-image: linear-gradient(to right, #ed6ea0, #ec8c69, #f7186a, #FBB03B);
        box-shadow: 0 4px 15px 0 rgba(236, 116, 149, 0.75);
    }

    .btn-custom.color-11 {
        background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
        box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
    }

    .side-left-bg {
        position: absolute;
        height: 100%;
        width: 60%
            /*calc(100% - 340px);*/
        ;
        background-image: url('<?= base_url('assets/'); ?>img/curved-images/curved7.jpg');
        background-size: cover;
        background-position: center;
    }

    .side-left-bg.carousel .carousel-item {
        background-size: cover;
        background-position: center;
        height: 100vh;
    }

    .side-left-bg.carousel .carousel-item:first-child {
        background-image: url('<?= base_url('assets/'); ?>img/curved-images/curved-6.jpg');
    }

    .side-left-bg.carousel .carousel-item:nth-child(2) {
        background-image: url('<?= base_url('assets/'); ?>img/curved-images/curved-7.jpg');
    }

    .side-left-overlay {
        background-color: #213352c9;
        position: absolute;
        width: 80%;
        /*calc(100% - 340px);*/
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .side-left-content {
        padding: 50px 50px 30px;
        color: #FFF;
        min-height: 560px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .side-left-content h1.org-name {
        text-transform: uppercase;
    }

    .side-left-content h2.org-tagline {
        font-style: italic;
        font-size: 13pt;
        margin-bottom: 24px;
    }

    .side-left-content h3.org-values {
        font-family: #213352c9;
        font-style: italic;
        font-size: 8pt;
    }

    .side-left-content p {
        font-size: .9rem;
        padding: 25px 0;
        margin-bottom: 10px;
        border-bottom: 1px solid #cccccc70;
    }

    .side-left-content ul.links {
        display: flex;
    }

    .side-left-content ul.links li {
        color: #fff;
        padding: 2px 10px 2px 0;
        font-size: 0.8rem;
    }

    .side-left-content ul.links li a {
        color: #fff;
        border-right: 1px solid #fff;
        padding-right: 10px;
    }

    .side-left-content ul.links li:last-child a {
        border-right: none;
    }

    .side-right {
        background-color: #FFF;
        min-height: 560px;
        height: 100vh;
        width: 40%;
        /*340px;*/
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .side-right-content {
        background-color: #FFF;
        padding: 60px 20px 10px;
        text-align: center;
        height: calc(100% - 140px);
        min-height: 450px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .side-right-footer {
        background-color: #FFF;
        min-height: 140px;
        width: 100%;
        text-align: center;
    }

    @media screen and (max-width: 660px) {
        .side-right {
            width: 100%;
        }
    }

    .side-right .logo {
        height: 80px;
    }

    .side-right h2 {
        text-transform: uppercase;
        font-size: 1rem;
        font-family: var(--def-font-family);
        padding: 20px 10px;
    }

    .side-right .social-container {
        display: flex;
    }

    .side-right .social-container ul {
        float: none;
        margin: auto;
    }

    .side-right .social-container ul li {
        float: left;
        padding: 8px;
        background-color: #FFF;
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
        border-radius: 2px;
        width: 35px;
        height: 35px;
        border-radius: 50px;
        margin-left: 10px;
        font-size: 12px;
    }

    .side-right .social-container {
        padding: 10px 0;
    }

    .side-right .social-container a {
        color: #FFF;
    }

    .side-right .social-container ul .facebook {
        background-color: #3b5894;
    }

    .side-right .social-container ul .twitter {
        background-color: #19a1f7;
    }

    .side-right .social-container ul .instagram {
        background-color: #e1306c;
    }

    .side-right .social-container ul .youtube {
        background-color: #db443b;
    }

    .side-right .social-container ul .linkedin {
        background-color: #007ab4;
    }

    .side-right .form-row label {
        font-size: 1rem;
    }

    .side-right .form-extras {
        font-size: 0.8rem;
    }

    .side-right .copyright-section {
        margin-top: 20px;
        text-align: center;
        font-size: 0.8rem;
        min-height: 30px;
    }

    /* forgot password */
    .side-forgot {
        height: 100vh;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #007ab4;
        color: #fff;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: 0.5s;
    }

    .side-forgot.opened {
        width: 40%;
    }

    @media screen and (max-width: 660px) {
        .side-forgot.opened {
            width: 100%;
        }
    }

    .side-forgot .btn-close {
        color: #fff;
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    .side-forgot-content {
        padding: 20px;
        /*text-align: center;*/
        height: calc(100% - 140px);
        min-height: 450px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .side-forgot-content h2 {
        text-transform: uppercase;
        text-align: left;
        width: 100%;
        margin-bottom: 42px;
        font-size: 1.2rem;
        font-weight: bold;
        font-family: var(--def-font-family);
    }

    .side-forgot-content .form-group label {
        font-size: 1rem;
    }

    .side-forgot-content .form-group input.form-control {
        padding: 2px 4px !important;
        background-color: #007ab4;
        border-color: #fff;
        color: #fff;
    }

    .side-forgot-content .btn-forgot {
        background-color: #fff;
        color: var(--def-color);
    }

    .side-forgot-content .btn-forgot:hover {
        background-color: #13627e !important;
        color: #fff;
    }

    /* extend: bootstrap carousel fade anim */
    .carousel-fade .carousel-item {
        opacity: 0;
        transition-duration: .6s;
        transition-property: opacity;
    }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        opacity: 0;
    }

    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
        transform: translateX(0);
        transform: translate3d(0, 0, 0);
    }
</style>
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
        </div>
    </div>
</div>
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="mt-6">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">Login Page</h3>
                            </div>
                            <div class="card-body">
                                <form role="form" method="post" action="<?= base_url('auth'); ?>">
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control shadow-custom" placeholder="Email" aria-label="Email" id="email" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control shadow-custom" placeholder="Password" aria-label="Password" id="password" Name="password">
                                        <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn-custom color-3 w-100 mt-4 mb-1">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 side-left">
                        <!-- bgcarousel -->
                        <div class="side-left-bg carousel slide carousel-fade top-0 h-100 d-md-block d-none me-n8" data-ride="carousel" data-interval="5000"">
                            <div class=" carousel-inner">
                            <div class="carousel-item active"></div>
                            <div class=" carousel-item"></div>
                        </div>
                        <div class="side-left-overlay" style="top: 0px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    <?php if ($this->session->flashdata('pesan')) { ?>
        var message = <?= json_encode($this->session->flashdata('pesan')) ?>;
        Swal.fire({
            text: message,
            icon: 'error',
        })
    <?php } ?>
</script>