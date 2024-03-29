<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fitnessmachinetechnicians</title>
    <!-- custom css  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


</head>

<body>
    <!-- start top head -->
    <?php include "header.php" ?>
    <!-- header finish -->
    <!-- video overlay start -->
    <section class="video_overlay position-relative">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="video_overlayheading">
                        <h2 class="text-white">We Keep You Up And Running</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-0">
                    <div class="video_item ">
                        <video controls="" autoplay id="video" class="w-100">
                            <source src="https://fitnessmachinetechnicians.com//wp-content/uploads/2023/01/fmt-video-banner-new.mp4" type='video/ogg; codecs="theora, vorbis"'>
                            <source src="https://fitnessmachinetechnicians.com//wp-content/uploads/2023/01/fmt-video-banner-new.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        </video>
                    </div>
                    <div class="overlay_content">
                        <h1 class="pb-5 text-Warning">Fitness Equipment Repair and<br>Preventive Maintenance Services</h1>
                        <div class="locator d-flex justify-content-around align-items-center">
                            <h4 class="mb-0 text-nowrap">FIND YOUR LOCAL PROVIDER</h2>
                                <input type="number" name="" id="" class="form-control w-25" placeholder="ZIP/ Postal Code">
                                <button class="btn text-nowrap text-white">FIND A LOCATION</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- video overlay finish -->
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
                    <div class="content_tabgym">
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
                </div>
            </div>
        </div>

    </section>

    <!-- Gym Equipment tab finish -->
    <!-- brands we service start -->
    <section class="brand_start">
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
    <!-- INDUSTRIES WE SERVE start -->
    <section class="industries_start pt-5">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12">
                    <div class="heading_brandservice text-center">
                        <h1 class="mb-4">INDUSTRIES WE SERVE</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3 px-0">
                        <div class="cor_gyms">
                            <h2 class="text-white text-center pt-5 mt-5">First Responders</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 px-0">
                        <div class="apartments">
                            <h2 class="text-white text-center pt-5 mt-5">Apartments & Condominiums</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 px-0">
                        <div class="college">
                            <h2 class="text-white text-center pt-5 mt-5">College & <br>Universities</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 px-0">

                        <div class="hotels">
                            <h2 class="text-white pt-5 mt-5">Hotels</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 px-0">
                        <div class="first_respond">
                            <h2 class="text-white text-center pt-5 mt-5">Physical Therapy & Rehab

                            </h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 px-0">
                        <div class="Med_facilities">
                            <h2 class="text-white text-center pt-5 mt-5">Health Clubs</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 px-0">
                        <div class="residental">
                            <h2 class="text-white text-center pt-5 mt-5">Residential</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 px-0">

                        <div class="health_club">
                            <h2 class="text-white text-center pt-5 mt-5">Corporations</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- INDUSTRIES WE SERVE finish -->
    <!-- HIRE FITNESS start -->
    <section class="hire_fitness">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="hire_heading">
                        <h2>WHY HIRE FITNESS MACHINE TECHNICIANS?</h2>
                        <p>Fitness Machine Technicians commits to delivering the most reliable service, repair, and
                            preventive maintenance services. We go above and beyond to deliver superior repairs and
                            service, including performing safety checks, disinfecting high-touch areas, and applying
                            lubricant after servicing your equipment if necessary. It’s our mission to provide exemplary
                            customer service, and we strive for professional, friendly, and accurate service at all
                            times.</p>
                        <span>We pride ourselves on our customer service. Fitness Machine
                            Technicians:</span>
                    </div>
                    <div class="green_arrow mt-2">
                        <p class="mb-0"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(87, 157, 39, 1);transform: ;msFilter:;">
                                    <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z">
                                    </path>
                                    <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path>
                                </svg></span>Are well-trained professionals</p>
                        <p class="mb-0"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(87, 157, 39, 1);transform: ;msFilter:;">
                                    <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z">
                                    </path>
                                    <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path>
                                </svg></span>Wear neat, clearly branded gear</p>
                        <p class="mb-0"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(87, 157, 39, 1);transform: ;msFilter:;">
                                    <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z">
                                    </path>
                                    <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path>
                                </svg></span>Send quality, well-designed work orders with photos of services provided
                            <br>and professional quotes
                        </p>
                        <p class="mb-0"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(87, 157, 39, 1);transform: ;msFilter:;">
                                    <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z">
                                    </path>
                                    <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path>
                                </svg></span>Provide clear and constant customer communication</p>
                        <p class="mb-0"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(87, 157, 39, 1);transform: ;msFilter:;">
                                    <path d="M10.296 7.71 14.621 12l-4.325 4.29 1.408 1.42L17.461 12l-5.757-5.71z">
                                    </path>
                                    <path d="M6.704 6.29 5.296 7.71 9.621 12l-4.325 4.29 1.408 1.42L12.461 12z"></path>
                                </svg></span>Get the job done promptly</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="hire_img">
                        <img src="./assets/img/car_image.webp" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- HIRE FITNESS finish -->
    <!-- our Vision start -->
    <section class="vision_start">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID_HERE" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="vision_content">
                        <h2>OUR VISION</h2>
                        <p>
                            OUR VISION
                            Our vision is to be the largest provider of service, repair, and preventive maintenance for
                            all types of residential and commercial fitness equipment. In our partnership with Main Line
                            Brands, Fitness Machine Technicians is expanding our footprint across the US and Canada to
                            bring our gym equipment repair services to more residential and commercial customers</p>

                        <button class="btn text-white">READ MORE</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- our vision finish -->
    <!-- Request a Quote start -->
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
    <!-- CAN EXPECT start -->
    <section class="can_except my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="canexcept_text text-white py-3">
                        <h2>WHAT YOU CAN EXPECT</h2>
                        <p>
                            Exercise equipment is made of many unique parts—like consoles, cabling, and belts—that allow
                            them to operate successfully. If you want to ensure your equipment is performing optimally,
                            choose Fitness Machine Technicians!</p>
                        <p>
                            We help you take care of your exercise machines by offering ongoing repair and maintenance
                            plan
                            options. Our technicians are committed to delivering lasting results with regularly
                            scheduled
                            maintenance, exercise equipment repair, preventive maintenance, parts, and assembly and
                            disassembly.</p>
                        <p>
                            Fitness Machine Technicians offer service contracts on a monthly, bimonthly, and quarterly
                            basis. Service contracts are the best way to extend the life of your equipment by keeping it
                            in
                            top condition, decreasing downtime and “out of order” sign postings, and keeping your
                            facility
                            safe by preventing major equipment failures. We offer on-site repairs and preventive
                            services
                            when needed if a contract is not feasible for your current situation.
                        </p>
                        <p>
                            We guarantee that our trusted technicians will be able to service your equipment, so
                            unexpected
                            breakdowns are a thing of the past!
                        </p>
                        <button class="btn text-white btn-lg">READ MORE</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6"></div>
            </div>
        </div>

    </section>
    <!-- CAN EXPECT finish -->
    <!-- local provider start -->
    <section class="local_provider">
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

    <!--  CUSTOMERS HAVE TO SAY start -->
    <section class="customer_say my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="customer_heading text-center">
                        <h1>HEAR WHAT OUR CUSTOMERS HAVE TO SAY</h1>
                        <img src="./assets/img/icons/quote_icon.png" alt="img" class="img-fluid">
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <p class="text-white p-5">“It's truly nice to work with a company that actually returns
                                calls,
                                gets the work done in a timely manner and more importantly lets our managers know what's
                                going on with the equipment.”</p>
                            <p class="text-white">DAN HOREN & STEVE SMITH</p>
                            <span class="text-white">Planet Fitness</span>
                        </div>
                        <div class="carousel-item text-center text-white">
                            <p>"I can honestly say Fitness Machine Technicians are the best I have contracted with! They
                                are experts at a variety of commercial grade fitness equipment, provide timely response
                                to questions and/or requests for repairs, are efficient with the work they provide, do a
                                great job of explaining the diagnosis they arrived at with equipment not working
                                properly, are a good value, and go out of their way to consistently provide outstanding
                                customer service! I strongly recommend to others considering Fitness Machine Technicians
                                as their service provider as they go above and beyond in exceeding expectations in
                                regards to customer service, expertise, timely response, and value."</p>
                            <p>Eric Maki</p>
                            <span>Director of Campus Recreation</span>
                        </div>
                        <div class="carousel-item text-center text-white">
                            <span>"PMC first signed a preventive maintenance contract with Fitness Machine Technicians
                                in January of 2016 for our 19 properties. We went from multiple service providers to
                                just a single point of contact. Fitness Machine Technicians has been great to work
                                with!"</span>
                            <p>Kate Groshong</p>
                            <p>Vice President / PMC Property Group</p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>

    </section>

    <!--  CUSTOMERS HAVE TO SAY finish -->
    <!-- our Affilation start -->
    <section class="affiliation">
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
    <!-- Bootstrap JS (including Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Carousel -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/main.js"></script>



</body>

</html>