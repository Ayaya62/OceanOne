<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ocean One</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="ocean.css" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-lg-top shadow-sm" style="background-color: #00fff6">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="img/logo-2.png" alt="Ocean One" />Ocean One</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Actions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resouces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <div class="heading" style="background-color: #00E7FF">
            <h1 class="display-4 text-dark mb-4 p-5">Lorem, ipsum.</h1>
            <p class="lead text-dark fs-4 p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />Corporis
                itaque sapiente magni rerum inventore quas?</p>
            <a class="btn btn-dark btn-lg m-5" href="#" role="button" onclick="takeAction()">Take Action</a>
        </div>
        <svg class="wave-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#00E7FF" fill-opacity="1"
                d="M0,128L30,117.3C60,107,120,85,180,85.3C240,85,300,107,360,96C420,85,480,43,540,26.7C600,11,660,21,720,48C780,75,840,117,900,133.3C960,149,1020,139,1080,122.7C1140,107,1200,85,1260,106.7C1320,128,1380,192,1410,224L1440,256L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
    </section>
    <!-- End Jumbotron -->

    <!-- Action -->
    <section id="action">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>OFFSET YOUR <br />PASTIC FOOTPRINT</h2>
                </div>
            </div>
            <div class="row mt-5 fs-5" style="text-align: justify">
                <div class="col me-5">
                    <h3>ALIGN</h3>
                    <?php include 'data.php'; ?>
                    <p id="p1"><?php echo $alignContent; ?></p>
                    <div id="buttonContainer"></div>
                </div>
                <div class="col ms-2 me-5">
                    <h3>KICKSTART</h3>
                    <?php include 'data.php'; ?>
                    <p id="p2"><?php echo $kickstartContent; ?></p>
                </div>
                <div class="col ms-2">
                    <h3>AMPLIFY</h3>
                    <p>Is your actions already making strides in its commitment to sustainability? Measure your action
                        success using IMPACT</p>
                </div>
            </div>
            <div class="row mt-4 mb-5">
                <div class="col">
                    <a class="btn btn-secondary btn-lg rounded-pill" href="#" role="button">LEARN MORE</a>
                    <a class="btn btn-secondary btn-lg rounded-pill m-1" id="changeText">Edit</a>
                </div>
                <div class="col">
                    <a class="btn btn-secondary btn-lg ms-3 me-5 rounded-pill" href="#" role="button">START ACTION</a>
                </div>
                <div class="col">
                    <a class="btn btn-secondary btn-lg ms-5 rounded-pill" href="#" role="button">SEE HOW</a>
                </div>
            </div>
        </div>
        <svg class="wave-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#009EFF" fill-opacity="1"
                d="M0,192L48,202.7C96,213,192,235,288,202.7C384,171,480,85,576,53.3C672,21,768,43,864,74.7C960,107,1056,149,1152,144C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- End Action -->

    <!-- IMPACT -->
    <section id="impact" style="background-color: #009eff">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="m-5">MAKE YOUR IMPACT</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col fs-5">
                    <img src="img/beach.jpg" width="200" class="rounded-circle" />
                    <p class="mt-5">COMMIT TO REMOVING <br />A SPECIFIC AMOUNT</p>
                </div>
                <div class="col fs-5">
                    <img src="img/coral.jpg" width="200" class="rounded-circle" />
                    <p class="mt-5">TIE REMOVAL TO <br />PRODUCT SALES</p>
                </div>
                <div class="col fs-5">
                    <img src="img/split.jpg" width="200" class="rounded-circle" />
                    <p class="mt-5">INCENTIVIZE <br />COMUNITY ACTION</p>
                </div>
            </div>
        </div>
    </section>
    <svg class="wave-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#009EFF" fill-opacity="1"
            d="M0,320L40,282.7C80,245,160,171,240,149.3C320,128,400,160,480,176C560,192,640,192,720,197.3C800,203,880,213,960,197.3C1040,181,1120,139,1200,106.7C1280,75,1360,53,1400,42.7L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
        </path>
    </svg>
    <!-- End IMPACT -->

    <!-- Project -->
    <section class="project p-4">
        <div class="container">
            <div class="row mb-5">
                <h4>Project 1:</h4>
                <h3>OCEANBOUND CLEAN UP</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <img src="img/trash.jpg" class="img-fluid" />
                </div>
                <div class="col align-self-center">
                    <h4>PROBLEM</h4>
                    <p style="text-align: justify" class="fs-5">
                        Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty
                        discharge known as "Mud" is at risk of being discharged into the wastewater and, in the
                        best-case, is usually taken to the
                        nearest landfill
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col align-self-center">
                    <h4>SOLUTION</h4>
                    <p style="text-align: justify" class="fs-5">
                        Repurposes the “Mud” into useful building materials. It's composition is perfect for producing
                        bricks! Unfortunately, these recycled plastic compound bricks are slightly more expensive than
                        standard building bricks, so Impac+
                        program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open
                        market
                    </p>
                </div>
                <div class="col-6">
                    <img src="img/pickup.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
        <br /><br /><br />
        <div class="container">
            <div class="row mb-5">
                <h4>Project 2:</h4>
                <h3>FISHING NET RECOVERY</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <img src="img/trash.jpg" class="img-fluid" />
                </div>
                <div class="col align-self-center">
                    <h4>PROBLEM</h4>
                    <p style="text-align: justify" class="fs-5">
                        Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean.
                        Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets
                        landfilled or simply cut away at
                        sea. It's a huge reason for why fishing nets are the argest ocean plastic polluter
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col align-self-center">
                    <h4>SOLUTION</h4>
                    <p style="text-align: justify" class="fs-5">We provides the funds needed to incentivize collection
                        and recycling of this gear. This program creates a pathway for the reclamation of end of life
                        fishing gear.</p>
                </div>
                <div class="col-6">
                    <img src="img/pickup.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0014FF" fill-opacity="1"
            d="M0,160L40,181.3C80,203,160,245,240,256C320,267,400,245,480,218.7C560,192,640,160,720,138.7C800,117,880,107,960,101.3C1040,96,1120,96,1200,106.7C1280,117,1360,139,1400,149.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
    <!-- End Project -->

    <!-- Contact -->
    <section class="contact" style="background-color: #0014ff">
        <div class="container">
            <div class="row text-center text-light p-4">
                <h3>GET IN TOUCH</h3>
            </div>
            <div class="row">
                <!-- MAP -->
                <div class="col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7906.337638151198!2d110.37305805752567!3d-7.7719162067436685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sGadjah%20Mada%20University!5e0!3m2!1sen!2sid!4v1683547766177!5m2!1sen!2sid"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- MESSAGE -->
                <div class="col text-light">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter your name here" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Write your message here..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill" id="buttonSend">SEND</button>
                            <p id="newText"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- Footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center m-3">
            <p class="col-md-4 mb-0"><img src="img/logo-2.png" alt="Ocean One" />Ocean One</a></p>

            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-md-between">
                <li class="nav-item"><a href="#" class="nav-link px-2">NewsLetter</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2">Privacy Policy</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2">FAQs</a></li>
            </ul>
        </footer>
    </div>
    <!-- End Footer -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="ocean.js"></script>
</body>

</html>