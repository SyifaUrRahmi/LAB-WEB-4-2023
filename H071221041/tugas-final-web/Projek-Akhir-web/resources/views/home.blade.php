<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiCourse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
            </ul>
            <form class="d-flex mt-4 ms-auto">
                <a href="{{ route('login') }}" class="btn btn-outline-secondary me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
            </form>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="custom-image-container">
            <!-- <img src="img/tutor.jpg" class="img-fluid custom-image" alt="Web Tutoring Image"> -->
            <img src="img/logo-belajar.jpg" class="img-fluid custom-image" alt="Web Tutoring Image">
            <div>
                <h2 class="ms-4">Welcome to MiCourse</h2>
                <p class="lead">Your Best Study Buddies</p>
            </div>
        </div>
    </div>

    <section id="about" class="about" style="background-color: #f8f9fa; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">About Us</h2>
                    <p class="lead">
                        Welcome to MiCourse, where learning meets convenience and excellence! MiCourse is not just a
                        platform; it's your dedicated companion on the journey of acquiring knowledge and skills.
                        Whether you're a student aiming to excel in academics or a professional seeking to upgrade your
                        expertise, MiCourse is designed to cater to your unique learning needs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="popular" style="background-color: #fff; padding: 20px;">
        <div class="col-md-12 text-center">
            <h2>Top 5 Most Popular Courses</h2>
        </div>

        <div class="col-md-4 mx-auto mt-4">
            <div class="card mb-4">
                <img src="img/kimia.jpg" class="card-img-top" alt="Course 1">
                <div class="card-body">
                    <h5 class="card-title">Chemistry</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn btn-secondary">Enroll Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto mt-4">
            <div class="card mb-4">
                <img src="img/fisika.jpg" class="card-img-top" alt="Course 2">
                <div class="card-body">
                    <h5 class="card-title">Physics</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn btn-secondary">Enroll Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto mt-4">
            <div class="card mb-4">
                <img src="img/math.jpg" class="card-img-top" alt="Course 3">
                <div class="card-body">
                    <h5 class="card-title">Math</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn btn-secondary">Enroll Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto mt-4">
            <div class="card mb-4">
                <img src="img/java.jpg" class="card-img-top" alt="Course 1">
                <div class="card-body">
                    <h5 class="card-title">Java</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn btn-secondary">Enroll Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mx-auto mt-4">
            <div class="card mb-4">
                <img src="img/python.jpg" class="card-img-top" alt="Course 1">
                <div class="card-body">
                    <h5 class="card-title">Python</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn btn-secondary">Enroll Now</a>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="mt-5" style="background-color: #6c757d; color: #fff; padding: 2px 0;">
        <div class="container text-center">
            <h5>Ready to Boost Your Skills?</h5>
            <p class="lead">Choose from our wide range of courses and get started today.</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </section>

    <section id="contact" style="background-color: #f8f9fa; padding: 50px 0;">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>Contact Us</h2>
            </div>

            <div class="col-md-8 mx-auto mt-4">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer" style="background-color: #343a40; color: #fff; padding: px;">
        <div class="container text-center">
            &copy; 2023 MiCourse All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-cTyDw0V3KvFbDUCWU6TbPEHI2t05pIGhHPLe5OPB/Qk4evvLV+lvL2gJSOuVXg1s"
        crossorigin="anonymous"></script>
</body>

</html>