<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- header start -->
    <?php include "header.php" ?>
    <!-- header finish -->
    <!-- hero services start -->
    <section class="hero_services">
        <div class="container">
            <div class="row">
                <div class="hero_titleservice text-center text-white">
                    <h1>Gym Equipment Service</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- hero services finish -->
    <!-- local provider start -->
    <section class="local_provider py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="local_heading">
                        <h1>FIND YOUR LOCAL PROVIDER</h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="local_picode d-flex justify-content-end">
                        <div class="row">
                            <div class="col">
                                <input type="number" name="" id="" class="form-control " placeholder="ZIP/ Postal Code">
                            </div>
                            <div class="col">
                                <button class="btn text-nowrap text-white rounded-0" style="background-color: #d74085;">FIND A
                                    LOCATION</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- local provoider finish -->
    <!-- Gym Equipment tab start -->
    <section class="gymequipment_start">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gymequiptab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active tab_gymitems" id="nav-COMMERCIA-tab" data-bs-toggle="tab" data-bs-target="#nav-COMMERCIA" type="button" role="tab" aria-controls="nav-COMMERCIA" aria-selected="false">FITNESS EQUIPMENT <br>
                                    COMMERCIAL
                                    INSTALLATIONS</button>

                                <button class="nav-link tab_gymitems" id="nav-fitness-tab" data-bs-toggle="tab" data-bs-target="#nav-fitness" type="button" role="tab" aria-controls="nav-fitness" aria-selected="false">FITNESS EQUIPMENT REPAIR</button>
                                <button class="nav-link tab_gymitems" id="nav-DISASSEMBLY-tab" data-bs-toggle="tab" data-bs-target="#nav-DISASSEMBLY" type="button" role="tab" aria-controls="nav-DISASSEMBLY" aria-selected="false">ASSEMBLY & DISASSEMBLY OF <br>
                                    FITNESS EQUIPMENT</button>
                                <button class="nav-link  tab_gymitems" id="nav-preventive-tab" data-bs-toggle="tab" data-bs-target="#nav-preventive" type="button" role="tab" aria-controls="nav-preventive" aria-selected="true">GYM EQUIPMENT PREVENTIVE <br>
                                    MAINTENANCE</button>

                            </div>
                        </nav>

                    </div>
                    <div class="content_tabgym mb-4">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-preventive" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="equipment_prevent row align-items-center  p-5">
                                    <div class="col-md-6">
                                        <div class="heading_equipmentservice p-3">
                                            <h2>GYM EQUIPMENT PREVENTIVE MAINTENANCE</h2>
                                            <p>Keep your equipment running its best with our gym equipment preventive
                                                maintenance program. We offer service contracts on a monthly, bimonthly,
                                                and quarterly basis, giving you the peace of mind that your equipment is
                                                in top condition.</p>
                                            <button class="btn">REQUEST A FREE QUOTE</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="heading_equipment">
                                            <img src="./assets/img/fmt_prwebp.webp" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-fitness" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row align-items-center equipment_prevent p-5">
                                    <div class="col-md-6">
                                        <div class="heading_equipmentservice p-3">
                                            <h2>FITNESS EQUIPMENT REPAIR</h2>
                                            <p>Whether you have a service contract or request services as needed, we
                                                provide fitness equipment repair and maintenance your machines may need.
                                                Our equipment repair services can help extend the life of your equipment
                                                and keep your facility operating safely.</p>
                                            <button class="btn">REQUEST A FREE QUOTE</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="heading_equipment">
                                            <img src="./assets/img/repairbox.webp" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="nav-DISASSEMBLY" role="tabpanel" aria-labelledby="nav-DISASSEMBLY-tab">

                                <div class="row align-items-center equipment_prevent p-5">
                                    <div class="col-md-6">
                                        <div class="heading_equipmentservice p-3">
                                            <h2>ASSEMBLY & DISASSEMBLY OF FITNESS EQUIPMENT</h2>
                                            <p>If you need fitness equipment assembled or disassembled, we have your
                                                back! Our qualified technicians make assembling and disassembling
                                                fitness equipment simple.</p>
                                            <button class="btn">REQUEST A FREE QUOTE</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="heading_equipment">
                                            <img src="./assets/img/assembly_box.webp" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="nav-COMMERCIA" role="tabpanel" aria-labelledby="nav-COMMERCIA-tab">
                                <div class="row align-items-center equipment_prevent p-5">
                                    <div class="col-md-6">
                                        <div class="heading_equipmentservice p-3">
                                            <h2>FITNESS EQUIPMENT COMMERCIAL INSTALLATIONS</h2>
                                            <p>We can help commercial customers like gyms, health clubs, or physical
                                                therapy centers make sure their equipment is installed correctly to
                                                ensure client safety. We install almost all manufacturers and can keep
                                                your machines functioning their best with a service agreement.</p>
                                            <button class="btn">REQUEST A FREE QUOTE</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="heading_equipment">
                                            <img src="./assets/img/installation_box.webp" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="brands_fotcontent text-center">
                        <p>Fitness Machine Technicians are corporately trained to provide fitness equipment repair services to an array of brands. Additional certifications are provided directly from the manufacturers providing our technicians with the confidence and knowledge to work on any type of equipment. Some of the brands whose equipment we service include Life Fitness, CORE, Technogym, Freemotion, Matrix, TRUE, and many more.</p>
                        <a href="#">Check out the list of gym equipment brands serviced here. </a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Gym Equipment tab finish -->

    <!-- maintaince and excerise start -->
    <section class="maint_excer">
        <div class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mainexcer_img">
                        <img src="./assets/img/services/preventive_maintenance.webp" alt="img" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mainexcer_txt p-2">
                        <h1>PREVENTIVE MAINTENANCE AND EXERCISE MACHINE REPAIR SERVICES</h1>
                        <p>Fitness Machine Technicians is a leader in the fitness equipment repair and maintenance industry. We’re the only national provider that offers both preventive maintenance and exercise machine repair services to residential and commercial clients. </p>
                        <p>We strive for 100% customer satisfaction and do so by providing a variety of services for a wide range of machines and clients. Additionally, our free commercial equipment assessment and quotes allow customers to make good use of better pricing and priority service when they sign a service agreement.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- maintaince and excerise finish -->
    <!-- brands we service start -->
    <section class="brand_start py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="heading_brandservice text-center">
                        <h1>BRANDS WE SERVICE</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="slick-wrapper">
                        <div id="slick">
                            <div class="slide-item">
                                <h3><img src="./assets/img/fmt-woodway-logo.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/2.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/3.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/4.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/6.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/7.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/8.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/9.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/fmt-woodway-logo.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/2.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/3.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/4.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/6.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/7.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/8.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/9.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/fmt-woodway-logo.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/2.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/3.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/4.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/6.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/7.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/8.webp" alt="img" class="img-fluid"></h3>
                            </div>
                            <div class="slide-item">
                                <h3><img src="./assets/img/9.webp" alt="img" class="img-fluid"></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- brands we service finish -->
    <!-- Our fitness equipment start -->
    <section class="fit_equipment">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="fit_equip_txt">
                        <h2>
                            OUR FITNESS EQUIPMENT REPAIR SERVICES
                        </h2>
                        <p>While we don’t sell equipment, Fitness Machine Technicians provides an array of services to improve the life of your equipment. Our preventive maintenance services are ideal for both residential and commercial owners, as they help users by reducing liability and improving the safety of the equipment. </p>

                        <p> We’re happy to provide the exercise equipment repair service your equipment requires, no matter what type of equipment you have.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="we_service">
                        <h4>We Service:</h4>
                    </div>
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="trademill bg-white p-3">
                                <div class="trademil_icon d-flex justify-content-evenly align-items-center">
                                    <img src="./assets/img/services/treadmill_icon.png" alt="img" class="img-fluid">
                                    <h6 class="mb-0">Treadmills</h6>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="trademill bg-white p-3">
                                <div class="trademil_icon d-flex justify-content-evenly align-items-center">
                                    <img src="./assets/img/services/ellipticals_icon.png" alt="img" class="img-fluid">
                                    <h6 class="mb-0">Ellipticals</h6>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="trademill bg-white p-3">
                                <div class="trademil_icon d-flex justify-content-evenly align-items-center">
                                    <img src="./assets/img/services/exercise_icon.png" alt="img" class="img-fluid">
                                    <h6 class="mb-0">Exercise Bikes</h6>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="trademill bg-white p-3">
                                <div class="trademil_icon d-flex justify-content-evenly align-items-center">
                                    <img src="./assets/img/services/step_mills_icon.png" alt="img" class="img-fluid">
                                    <h6 class="mb-0">Step Mills</h6>
                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="trademill bg-white p-3">
                                <div class="trademil_icon d-flex justify-content-evenly align-items-center">
                                    <img src="./assets/img/services/stationary_bike_icon.png" alt="img" class="img-fluid">
                                    <h6 class="mb-0 text-nowrap">Specialty Equipment</h6>
                                </div>

                            </div>

                        </div>
                        <div class="col-6">
                            <div class="trademill bg-white p-3">
                                <div class="trademil_icon d-flex justify-content-evenly align-items-center">
                                    <img src="./assets/img/services/barbel_icon.png" alt="img" class="img-fluid">
                                    <h6 class="mb-0">Gym Equipment</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- our fitness equipment finish -->
    <section class="request_quote ">
        <div class="container">
            <div class="row py-5">
                <div class="col-12">
                    <div class="heading_brandservice text-center">
                        <h1>REQUEST A QUOTE</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="request_img">
                        <img src="./assets/img/requestqo.webp" alt="img" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 request_form">
                    <div id="container" class="container mt-5">
                        <div class="progress px-1" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="step-container d-flex justify-content-between">
                            <div class="step-circle" onclick="displayStep(1)">1</div>
                            <div class="step-circle" onclick="displayStep(2)">2</div>
                            <div class="step-circle" onclick="displayStep(3)">3</div>
                        </div>

                        <form id="multi-step-form">
                            <div class="step step-1">

                                <hr>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                        </div>
                                    </div>


                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <input type="email" class="form-control" placeholder="Email" aria-label="First name">
                                        </div>
                                        <div class="col">
                                            <input type="number" class="form-control" placeholder="Phone Number" aria-label="Last name">
                                        </div>
                                    </div>


                                </div>
                                <h6 class="text-white">Preferred Contact Method</h1>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="form-check ms-2">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label text-white" for="gridRadios1">
                                                phone
                                            </label>


                                        </div>
                                        <div class="form-check ms-2">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label text-white" for="gridRadios2">
                                                Email
                                            </label>
                                        </div>
                                        <div class="form-check ms-2">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label text-white" for="gridRadios2">
                                                Text
                                            </label>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-lg next_step">Next</button>
                            </div>

                            <div class="step step-2">

                                <h3>Step 2</h3>
                                <div class="mb-3">
                                    <label for="field2" class="form-label">Field 2:</label>
                                    <input type="text" class="form-control" id="field2" name="field2">
                                </div>
                                <button type="button" class="btn btn-primary prev-step">Previous</button>
                                <button type="button" class="btn btn-primary next-step">Next</button>
                            </div>

                            <div class="step step-3">

                                <h3>Step 3</h3>
                                <div class="mb-3">
                                    <label for="field3" class="form-label">Field 3:</label>
                                    <input type="text" class="form-control" id="field3" name="field3">
                                </div>
                                <button type="button" class="btn btn-primary prev-step">Previous</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Request a quote finish -->


    <!-- our Affilation start -->
    <section class="affiliation py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="affilation_heading text-center">
                        <h1>OUR CLIENT</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 pt-3">

                        <div class="owl-carousel align-items-center">
                            <div class="affiliation1 text-center">
                                <img src="./assets/img/1logo.png" alt="img">
                            </div>
                            <div class="affiliation1">
                                <img src="./assets/img/2logo.png" alt="img">
                            </div>
                            <div class="affiliation1">
                                <img src="./assets/img/3-logo.png" alt="img">
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- our affilation finish -->

    <!-- linebrands start -->
    <section class="linebrands py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="line_heading text-center">

                        <img src="./assets/img/mlb_logo.png" alt="img" class="img-fluid">

                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-12">
                        <div class="linebrandslider">
                            <div class="owl-carousel align-items-center">
                                <div class="affiliation1 text-center">
                                    <img src="./assets/img/fitness-hub.png" alt="img" class="img-fluid">
                                </div>
                                <div class="affiliation1">
                                    <img src="./assets/img/ma_logo.png" alt="img" class="img-fluid">
                                </div>
                                <div class="affiliation1">
                                    <img src="./assets/img/pest_authority_logo.png" alt="img" class="img-fluid">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </section>

    <!-- linebrands finish -->
    <!-- contact us start -->
    <section class="contact_us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="conatct_heading text-white">
                        <h1 class="pt-5">CONTACT US</h1>
                        <p class="">Need repairs or maintenance for your fitness machine equipment? Reach out to Fitness
                            Machine
                            Technicians today and see how we can get you up and running!</p>
                        <button class="btn text-white btn-lg">START NOW</button>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- contact us finish -->
    <!-- footer logo start -->
    <?php include "footer.php" ?>

    <!-- footersite map finish -->




















    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Carousel -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>