<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="vendor/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap-icons-1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-gothic-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-5" id="home-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="aboutme-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Acerca de mi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="portfolio-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Portafolio</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="topics-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Topicos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-5" id="contact-tab" data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Contacto</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="home-container">
        <div class="container-fluid bg-white px-0 m-0">
            <div class="row">
                <div class="col background-slider">
                    <div class="row h-100">
                        <div class="col-lg-6 col-md-8 col-12 position-relative">
                            <div class="row mt-5">
                                <div class="col mt-md-5 mt-0 text-white text-center">
                                    <p class="fs-1 mt-md-5 mt-0">Hello, it´s me</p>
                                    <p class="display-3 fw-bold">Michael Eduardo</p>
                                    <p class="display-3 text-gothic-light fw-bold">Web developer</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-9 mx-auto">
                                    <a href="" id="link-contact-tab" class="btn bg-gothic-primary text-white w-100">Contactame</a>
                                </div>
                            </div>
                            <div class="col-12 position-absolute bottom-0 start-0 d-lg-block d-md-block d-none">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-tiktok"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-12 position-relative mi-foto">
                            <div class="col rounded-circle bg-gothic-light position-absolute top-50 start-50 translate-middle text-white fs-1 text-center">
                                <img src="img/yofase1.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 position-absolute bottom-0 start-0 d-lg-none d-md-none d-show">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                        <a href="#/" class="btn btn-outline link-social">
                                            <i class="bi bi-tiktok"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col py-5 position-relative">
                    <div class="row mt-5">
                        <div class="col text-center py-5 text-dark">
                            HOME
                        </div>
                    </div>
                    <div class="col position-absolute top-0 start-0">
                        <div class="triangulo-superior"></div>
                    </div>
                    <div class="col position-absolute top-0 end-0">
                        <div class="triangulo-superior2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="aboutme-container">
        <div class="container-fluid border bg-white">
            <div class="row">
                <div class="col py-5">
                    ABOUT ME
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-container">
        <div class="container-fluid border bg-white">
            <div class="row">
                <div class="col py-5">
                    PORTFOLIO
                </div>
            </div>
            <div class="row">
                <div class="col-11 mx-auto border py-5">
                    <div class="row py-5">
                        <div class="col-lg-4 col-md-6 col-11 mx-auto border border-dark">
                            <div class="row">
                                <div class="col-12 border border-dark" style="height: 4rem;">
                                    <div class="row h-100">
                                        <div class="col-6 border-end border-dark"></div>
                                        <div class="col-2 border border-dark d-flex align-items-center justify-content-center"><i class="bi bi-dash fs-3"></i></div>
                                        <div class="col-2 border border-dark d-flex align-items-center justify-content-center"><i class="bi bi-square fs-3"></i></div>
                                        <div class="col-2 border border-dark d-flex align-items-center justify-content-center"><i class="bi bi-x-lg fs-3"></i></div>
                                    </div>
                                </div>
                                <div class="col-12 border border-dark" style="height: 16rem;">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-11 mx-auto">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-11 mx-auto">
                            
                        </div>
                        <div class="col-lg-4 col-md-6 col-11 mx-auto border border-dark">
                            <div class="row">
                                <div class="col-12 border border-dark" style="height: 4rem;">
                                    <div class="row h-100">
                                        <div class="col-6 border-end border-dark"></div>
                                        <div class="col-2 border border-dark d-flex align-items-center justify-content-center"><i class="bi bi-dash fs-3"></i></div>
                                        <div class="col-2 border border-dark d-flex align-items-center justify-content-center"><i class="bi bi-square fs-3"></i></div>
                                        <div class="col-2 border border-dark d-flex align-items-center justify-content-center"><i class="bi bi-x-lg fs-3"></i></div>
                                    </div>
                                </div>
                                <div class="col-12 border border-dark" style="height: 20rem;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="topics-container">
        <div class="container-fluid border bg-white">
            <div class="row">
                <div class="col py-5">
                    TOPICS
                </div>
            </div>
        </div>
    </div>

    <div class="contact-container">
        <div class="container-fluid border bg-white">
            <div class="row">
                <div class="col py-5">
                    CONTACT
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="vendor/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
</body>
</html>



