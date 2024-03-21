<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Fitness Equipment Sales & Service</title>
    <!-- custom css link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <h1>All Fitness Equipment Sales & Service
                    </h1>
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
                                <button class="btn text-nowrap text-white rounded-0"
                                    style="background-color: #d74085;">FIND A
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
                                <button class="nav-link active tab_gymitems" id="nav-COMMERCIA-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-COMMERCIA" type="button" role="tab"
                                    aria-controls="nav-COMMERCIA" aria-selected="false">FITNESS EQUIPMENT <br>
                                    COMMERCIAL
                                    INSTALLATIONS</button>

                                <button class="nav-link tab_gymitems" id="nav-fitness-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-fitness" type="button" role="tab" aria-controls="nav-fitness"
                                    aria-selected="false">FITNESS EQUIPMENT REPAIR</button>
                                <button class="nav-link tab_gymitems" id="nav-DISASSEMBLY-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-DISASSEMBLY" type="button" role="tab"
                                    aria-controls="nav-DISASSEMBLY" aria-selected="false">ASSEMBLY & DISASSEMBLY OF <br>
                                    FITNESS EQUIPMENT</button>
                                <button class="nav-link  tab_gymitems" id="nav-preventive-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-preventive" type="button" role="tab"
                                    aria-controls="nav-preventive" aria-selected="true">GYM EQUIPMENT PREVENTIVE <br>
                                    MAINTENANCE</button>

                            </div>
                        </nav>

                    </div>
                    <div class="content_tabgym mb-4">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-preventive" role="tabpanel"
                                aria-labelledby="nav-home-tab">
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
                            <div class="tab-pane fade" id="nav-fitness" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
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
                            <div class="tab-pane fade" id="nav-DISASSEMBLY" role="tabpanel"
                                aria-labelledby="nav-DISASSEMBLY-tab">

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
                            <div class="tab-pane fade" id="nav-COMMERCIA" role="tabpanel"
                                aria-labelledby="nav-COMMERCIA-tab">
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
                        <p>Fitness Machine Technicians are corporately trained to provide fitness equipment repair
                            services to an array of brands. Additional certifications are provided directly from the
                            manufacturers providing our technicians with the confidence and knowledge to work on any
                            type of equipment. Some of the brands whose equipment we service include Life Fitness, CORE,
                            Technogym, Freemotion, Matrix, TRUE, and many more.</p>
                        <a href="#">Check out the list of gym equipment brands serviced here. </a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Gym Equipment tab finish -->
    <!-- maintain_andrepair start -->
    <section class="maintain_andrepair">

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">

                    <div class="maintain_andrepair_img">
                        <img src="./assets/img/services/maintenance_img.webp" alt="img" class="img-fluid">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="maintain_andrepair_txt">
                        <h2>Fitness Equipment Sales & Service</h2>
                        <p>There are a number of unique components—like consoles, cabling, and belts—that make up
                            exercise equipment, and a lot that goes into ensuring your gym equipment is operating at its
                            best. Fitness Machine Technicians are the best choice to keep your machines performing
                            optimally and prolong your equipment's life.</p>
                        <p>We can help you take care of your equipment with our repairs, fitness equipment preventive
                            maintenance, and more. Our professional and trusted technicians assist individual and
                            commercial clients daily and are corporately trained by the manufacturer to provide the very
                            best service. We have the knowledge and experience to take care of your exercise machines
                            and equipment!</p>
                        <p>With expert services across a wide variety of industries, brands, and equipment types,
                            Fitness Machine Technicians can handle your machine repairs and provide preventive
                            maintenance so you can enjoy the peace of mind that your equipment is running at its best.
                        </p>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- maintain_andrepair finish -->
    <!-- RECOMMENDED GYM EQUIPMENT SALE AND SERVICE START -->
    <section class="recommeded_sale">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title_sale">
                        <h2>
                            RECOMMENDED GYM EQUIPMENT MAINTENANCE
                        </h2>
                        <p>There’s no doubt about it: major equipment repairs can be costly and inconvenient, especially
                            if
                            you’re a commercial gym or health club owner. It’s important for commercial clients, like
                            gyms
                            and health clubs, to ensure their machines are operating safely and properly, as most
                            manufacturers’ warranties require you to have preventive maintenance.</p>
                        <p>The best way to extend the life of your equipment is to keep it in top condition with a
                            preventive maintenance service agreement from Fitness Machine Technicians. Our monthly,
                            bimonthly, and quarterly gym maintenance service agreements decrease downtime and “out of
                            order”
                            sign postings while keeping your facility safe by preventing major equipment failures.</p>
                    </div>
                </div>

            </div>
            <div class="row repair_equiment align-items-center p-3">
                <div class="col-md-6">
                <div class="reapir_txtquiment">
                    <h2>
                    Looking for preventive maintenance services for your fitness equipment? We proudly work with treadmill repair, elliptical maintenance, exercise bikes and stepper machines repair, along with specialty equipment, including:
                    </h2>
                 <ul>
                    <li>Strength equipment (multi and single station)</li>
                    <li>Air bikes</li>
                    <li>Rowers</li>
                    <li>Pneumatic equipment</li>
                    <li>Upholstery repair</li>
                    <li>Exercycles</li>
                    <li>Jacob’s Ladder climbing machines</li>
                    <li>Treadmill desks</li>
                    <li>Spin bikes</li>
                    <li>Reformers (Pilates)</li>
                </ul>
                </div>

                </div>
                <div class="col-md-6">
                    <div class="repir_img">
                        <img src="./assets/img/services/employee_repairing.webp" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </section>




    <!-- RECOMMENDED GYM EQUIPMENT SALE AND SERVICE FINISH -->
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
                                    <img src="./assets/img/fmt_logo.png" alt="img" class="img-fluid">
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





    <!-- footer start -->

    <?php include "footer.php"?>
    <!-- footer finish -->








    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
         <!-- jQuery -->
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick Carousel -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="./assets/js/main.js"></script>

</body>

</html>