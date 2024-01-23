<!DOCTYPE html>
<html lang="en">
{{-- Test --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTM - READY TO RACE1</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        #image {
            height: 100px;
            width: 100px;
            margin-top: -30px;

        }

        span {
            content: "\20B9";
        }

        * {
            box-sizing: border-box;
        }

        /* Style the search field */
        .example input[type=text] {
            padding: 8px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: white;
        }

        /* Style the submit button */
        .example button {
            float: left;
            width: 15%;
            padding: 8px;
            background: #f60;
            color: black;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        /* Clear floats */
        .example::after {
            content: "";
            clear: both;
            display: table;
        }

        .col-12 {
            padding: 2em;
            border: 1px solid #ccc;
            display: block;
            float: left;
            margin: -1px 0 0 -1px;
            color: black;
            background: linear-gradient(white, white 50%, #333 50%, #333);
            background-size: 100% 202%;
            transition: all 0.2s ease;
            animation: down-bump 0.4s ease;
        }

        .col-12 h2 {
            font-weight: 400;
            letter-spacing: -1.5px;
            line-height: 1.2;
        }

        .col-12 h3 {
            font: 0.8em "Lucida Grande", serif;
        }

        .col-12:hover {
            background-position: 100% 100%;
            animation: up-bump 0.4s ease;
        }

        .col-12:hover h2 {
            color: #48ad26;
        }

        .col-12:hover h2 span {
            color: white;
        }

        .col-12:hover h3 {
            color: #999;
        }

        @keyframes up-bump {
            0% {
                padding-top: 2em;
            }

            50% {
                padding-top: 1.5em;
            }

            100% {
                padding-top: 2em;
            }
        }

        @keyframes upp-bump {
            0% {
                padding-top: 0.3em;
            }

            50% {
                padding-top: 0.3em;
            }

            100% {
                padding-top: 0.3em;
            }
        }

        @keyframes down-bump {
            0% {
                padding-top: 2em;
            }

            50% {
                padding-top: 2.5em;
            }

            100% {
                padding-top: 2em;
            }
        }

        @media all and (max-width: 480px) {
            .card-text {
                display: none;
            }
        }

    </style>
</head>

<body>

    <!-- Top menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid common-padding-nav">
            <a class="navbar-brand" href="/"><img src="{{asset('img/ktm.svg')}}" alt='home-logo' class='logo'
                    height="100px" width="100px" style="margin-left: 50px" /></a>
            <button class="navbar-toggler p-3 mb-2 bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navigations">
                    <li class="nav-item" id="Home">
                        <a class="nav-link fs-18 fw-bold" href="#" style="color: white">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fs-18 fw-bold dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                            Models
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#" style="color: black">Duke 200</a>
                            <a class="dropdown-item" href="#" style="color: black">Duke 250</a>
                            <a class="dropdown-item" href="#" style="color: black">Duke 390</a>
                            <a class="dropdown-item" href="#" style="color: black">RC 200</a>
                            <a class="dropdown-item" href="#" style="color: black">RC 390</a>
                            <a class="dropdown-item" href="#" style="color: black">Adventure 390</a>
                        </div>
                    </li>
                    <li class="nav-item" id="Ktm Pro-XP">
                        <a class="nav-link fs-18 fw-bold" href="#" style="color: white">Ktm Pro-XP</a>
                    </li>
                    <li class="nav-item" id="Ktm App">
                        <a class="nav-link fs-18 fw-bold" href="#" style="color: white">Ktm App</a>
                    </li>
                    <li class="nav-item" id="Locate Us">
                        <a class="nav-link fs-18 fw-bold" href="#" style="color: white">Locate Us</a>
                    </li>
                </ul>
                <form class="example" action="action_page.php">
                    <input type="text" placeholder="Search..." name="search" style="background: white;">
                    <button type="submit"><i class="fa fa-search " style="background: #f60;
  color: black;"></i></button>
                </form>
            </div>
        </div>
    </nav>

       <!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/slide1.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Motocross Dominance Evolved</h2>
                <h1 class="fw-bold">2024 KTM SX-F Factory Editions </h1>
                <button class="btn rounded-pill"  style="color: black; background-color: #f60; font-weight: bold"><span class="fw-bold">Explore More</span></button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/slide2.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">KTM Academy of Speed</h2>
                <h1 class="fw-bold">Race. Rest. Repeat</h1>
                <button class="btn rounded-pill " style="color: black; background-color: #f60; font-weight: bold"><span class="fw-bold">Learn More</span></button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/slide3.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">2024 KTM 1390 Super Duke R Evo</h2>
                <h1 class="fw-bold">No Bullshit!</h1>
                <button class="btn rounded-pill" style="color: black; background-color: #f60; font-weight: bold"><span class="fw-bold">Explore the Range</span></button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/slide4.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Take the Long way Home</h2>
                <h1 class="fw-bold">Ktm Adventure 390</h1>
                <button class="btn rounded-pill" style="color: black; background-color: #f60; font-weight: bold"><span class="fw-bold">Book Now</span></button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>






    <!-- Product section starts here -->
    <div class="row row-cols-2 p-5 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col-12">
            <div class="card h-100">
                <img src="{{asset('img/duke 200.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM Duke 200</h5>
                    <p class="card-text">The KTM Duke 200 is powered by a 200 cc air-cooled engine which produces 25 PS
                        @ 10,000 rpm of power. It has a fuel tank of 13.4 L and a claimed mileage of 33 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button class="btn rounded-pill" style="color: black; background-color: #f60; font-weight: bold" id="eff1"
                        onclick=effect()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>229000</a>

                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="card h-100">
                <img src="{{asset('img/duke 250.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM Duke 250</h5>
                    <p class="card-text">The KTM Duke 250 is powered by a 249 cc air-cooled engine which produces 31 PS
                        @ 9250 rpm of power. It has a fuel tank of 13.4 L and a claimed mileage of 30 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button class="btn rounded-pill" style="color: black; background-color: #f60; font-weight: bold" id="eff2"
                        onclick=effect2()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>279000</a>
                </div>
            </div>
        </div>
        <div class="col-12 ">
            <div class="card h-100">
                <img src="{{asset('img/duke 390.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM Duke 390</h5>
                    <p class="card-text">The KTM Duke 390 is powered by a 389 cc air-cooled engine which produces 46 PS
                        @ 7000 rpm of power. It has a fuel tank of 13.4 L and a claimed mileage of 25 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button class="btn rounded-pill" style="color: black; background-color: #f60; font-weight: bold" id="eff3"
                        onclick=effect3()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>359000</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card h-100">
                <img src="{{asset('img/rc 200.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM RC 200</h5>
                    <p class="card-text">The KTM RC 200 is powered by a 200 cc air-cooled engine which produces 25 PS @
                        10,000 rpm of power. It has a fuel tank of 13.7 L and a claimed mileage of 30 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button class="btn rounded-pill" style="color: black; background-color: #f60; font-weight: bold" id="eff4"
                        onclick=effect4()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>269000</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card h-100">
                <img src="{{asset('img/rc 390.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM RC 390</h5>
                    <p class="card-text">The KTM Duke 390 is powered by a 373 cc air-cooled engine which produces 43 PS
                        @ 7000 rpm of power. It has a fuel tank of 13.4 L and a claimed mileage of 25 kmpl.</p>
                </div>
                <div class="card-footer">
                    <button class="btn rounded-pill" style="color: black; background-color: #f60; font-weight: bold" id="eff5"
                        onclick=effect5()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>379000</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card h-100">
                <img src="{{asset('img/Adv 390.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">KTM Adventure 390</h5>
                    <p class="card-text">The KTM Adventure 390 Duke is powered by a 373 cc air-cooled engine which
                        produces 43.5 PS @ 9000 rpm of power. It has a fuel tank of 14.5 L and a claimed mileage of 30
                        kmpl.</p>
                </div>
                <div class="card-footer">
                    <button class="btn rounded-pill" style="color: black; background-color: #f60; font-weight: bold" id="eff6"
                        onclick=effect6()>Book Now <i class="fa-solid fa-motorcycle"></i></i></button>
                    <a href=# style="font-weight: bold; color:black; text-decoration: none">Price starting from
                        <span>&#8377;</span>359000</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark border-bottom">
        <h6 class="d-flex justify-content-center justify-content-lg-between p-4 me-5 fs-6 fw-normal text-white">To Know More Details About Our Products: </h6>
        <div class="d-flex flex-wrap justify-content-center mx-auto">
            <a class="btn ms-2 ms-lg-5 btn rounded-pill mb-2 mb-lg-5 me-2" data-bs-toggle="offcanvas" href="#offcanvasDuke390" role="button" aria-controls="offcanvasDuke390" style="color: black; background-color: #f60; font-weight: bold">
                Duke 390
            </a>
            <button class="btn btn rounded-pill mb-2 mb-lg-5 me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDuke250" aria-controls="offcanvasDuke250" style="color: black; background-color: #f60; font-weight: bold">
                Duke 250
            </button>
            <button class="btn btn rounded-pill mb-2 mb-lg-5 me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDuke200" aria-controls="offcanvasDuke200" style="color: black; background-color: #f60; font-weight: bold">
                Duke 200
            </button>
            <button class="btn btn rounded-pill mb-2 mb-lg-5 me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRc390" aria-controls="offcanvasRc390" style="color: black; background-color: #f60; font-weight: bold">
                Rc 390
            </button>
            <button class="btn btn rounded-pill mb-2 mb-lg-5 me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRc200" aria-controls="offcanvasRc200" style="color: black; background-color: #f60; font-weight: bold">
                Rc 200
            </button>
            <button class="btn btn rounded-pill mb-2 mb-lg-5 me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAdv390" aria-controls="offcanvasAdv390" style="color: black; background-color: #f60; font-weight: bold">
                Adventure 390
            </button>
        </div>

    <!-- Duke 390 Off-canvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDuke390" aria-labelledby="offcanvasDuke390Label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold" id="offcanvasDuke390Label">Duke 390</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="text-align: justify;">
                 <!-- Content for Duke 390 Off-canvas -->
			The KTM Duke 390 is a dynamic and spirited motorcycle designed for versatile performance. Powered by a potent 373.2cc single-cylinder engine with liquid cooling, it offers a blend of agility and power. Its lightweight and rigid steel trellis frame, coupled with inverted front forks and a monoshock, provides responsive handling and stability. With a modern and aggressive design, including a distinctive headlight, the Duke 390 boasts a sleek appearance. Technologically advanced, it typically features a digital instrument cluster, ABS, and may include additional functionalities like ride modes and traction control. The bike's sporty tires, alloy wheels, and performance-oriented exhaust contribute to its overall appeal. Comfortable seating and a variety of color options make the KTM Duke 390 an exciting choice for riders seeking a thrilling and stylish experience on the road.
            </div>
        </div>
    </div>

    <!-- Duke 250 Off-canvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDuke250" aria-labelledby="offcanvasDuke250Label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold" id="offcanvasDuke250Label">Duke 250</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="text-align: justify;">
                <!-- Content for Duke 250 Off-canvas -->
			The KTM Duke 250 is a dynamic and compact motorcycle, offering a perfect balance between performance and agility. Powered by a robust 248.8cc single-cylinder engine, it delivers a thrilling riding experience. With a lightweight chassis and modern design, the Duke 250 is known for its nimble handling and distinctive appearance. Equipped with features like a digital instrument cluster, ABS, and sporty tires, it combines style with functionality. The comfortable seating and ergonomic design make it suitable for both urban commuting and spirited rides on open roads. The Duke 250 embodies the essence of a versatile and stylish motorcycle in a more approachable displacement, catering to riders seeking a dynamic yet manageable two-wheeled companion.
            </div>
        </div>
    </div>

    <!-- Duke 200 Off-canvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDuke200" aria-labelledby="offcanvasDuke200Label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold" id="offcanvasDuke200Label">Duke 200</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="text-align: justify;">
                <!-- Content for Duke 200 Off-canvas -->
			The KTM Duke 200 is a dynamic and agile motorcycle renowned for its energetic performance in a compact form. Powered by a spirited 200cc single-cylinder engine, it strikes a balance between power and maneuverability. The lightweight chassis and modern design contribute to its nimble handling, making it an excellent choice for urban commuting and spirited rides. With features such as a digital instrument cluster and ABS, the Duke 200 combines style with practicality. Its sporty aesthetics, comfortable seating, and responsive nature make it an appealing option for riders seeking an exhilarating yet approachable two-wheeled companion. The Duke 200 embodies the essence of a versatile and spirited ride in a more accessible displacement, catering to riders who value both performance and agility on the road.
            </div>
        </div>
    </div>

    <!-- Rc 390 Off-canvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRc390" aria-labelledby="offcanvasRc390Label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold" id="offcanvasRc390Label">Rc 390</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="text-align: justify;">
                <!-- Content for Rc 390 Off-canvas -->
			The KTM RC 390 is a thrilling and aggressive sportbike designed for riders who crave high-performance experiences. Powered by a potent 373.2cc single-cylinder engine, the RC 390 delivers impressive acceleration and power. Its sharp and aerodynamic design not only enhances its visual appeal but also contributes to its dynamic performance. The lightweight and rigid steel trellis frame, paired with high-quality suspension components, ensures precise handling and stability at high speeds. Equipped with advanced features such as a digital instrument cluster, ABS, and sporty tires, the RC 390 is geared towards offering a thrilling and controlled riding experience on both the track and the road. With a focus on performance, aesthetics, and cutting-edge technology, the KTM RC 390 stands out as a formidable choice for riders seeking an adrenaline-packed sportbike.
            </div>
        </div>
    </div>

    <!-- Rc 200 Off-canvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRc200" aria-labelledby="offcanvasRc200Label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold" id="offcanvasRc200Label">Rc 200</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="text-align: justify;">
                <!-- Content for Rc 200 Off-canvas -->
			The KTM RC 200 is an exhilarating sportbike that perfectly balances performance and agility. Powered by a spirited 200cc single-cylinder engine, the RC 200 offers a thrilling riding experience with quick acceleration and nimble handling. Its aggressive and aerodynamic design not only enhances its visual appeal but also contributes to its dynamic performance. The lightweight chassis, coupled with high-quality suspension components, ensures precise control and responsiveness on the road. Featuring advanced elements like a digital instrument cluster and sporty tires, the RC 200 caters to riders who appreciate a combination of style, performance, and maneuverability. With its track-inspired design and focus on delivering an exciting ride, the KTM RC 200 stands out as an appealing choice for those seeking a dynamic sportbike in a more approachable displacement.
            </div>
        </div>
    </div>

    <!-- Adv 390 Off-canvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAdv390" aria-labelledby="offcanvasAdv390Label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold" id="offcanvasAdv390Label">Adventure 390</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="text-align: justify;">
                <!-- Content for Adventure 390 Off-canvas -->
		The KTM Adventure 390 is a versatile and adventure-ready motorcycle designed for riders seeking a perfect balance between on-road performance and off-road capability. Powered by a robust 373.2cc single-cylinder engine, the Adventure 390 delivers a potent mix of power and efficiency. Its upright riding position, comfortable ergonomics, and adjustable suspension make it well-suited for long-distance touring and varied terrains. Equipped with modern features such as a comprehensive digital display, advanced ABS, and traction control, the Adventure 390 ensures a safe and technologically enhanced riding experience. With a rugged design, spoked wheels, and a durable chassis, this adventure motorcycle embodies KTM's commitment to providing riders with the tools to explore the open road and beyond. The Adventure 390 is an ideal choice for those who crave adventure and desire a capable motorcycle that can handle both urban streets and off-road trails with ease.
            </div>
        </div>
    </div>
</div>

    <!-- Footer section starts here -->

    <footer class="text-center text-lg-start bg-dark text-white">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="d-flex flex-wrap">
                <a href="#" class="me-4 text-reset" style="text-decoration: none">
                    <img src="{{asset('svc/facebook.svg')}}" alt="Facebook">
                </a>
                <a href="#" class="me-4 text-reset" style="text-decoration: none">
                    <img src="{{asset('svc/instagram.svg')}}" alt="Instagram">
                </a>
                <a href="#" class="me-4 text-reset" style="text-decoration: none">
                    <img src="{{asset('svc/twitter.svg')}}" alt="Twitter">
                </a>
                <a href="#" class="me-4 text-reset" style="text-decoration: none">
                    <img src="{{asset('svc/youtube.svg')}}" alt="YouTube">
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>THE COMPANY
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">KTM AG</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Brand Values</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Careers</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Contact</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Become a dealer</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            KTM World
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">News</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Racing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Stories</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">KTM Motohall</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Book a Testride</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            SERVICE
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Warrenty</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Safety</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Manual</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Maintenance</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Spare Parts Finder</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            LEGAL
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Imprint</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Privacy Policy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none">Legal Notices</a>
                        </p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </footer>
    <!-- Footer -->
    <script src="{{asset('js/javascript.js')}}"></script>
</body>

</html>
