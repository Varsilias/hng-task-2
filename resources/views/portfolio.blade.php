<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Daniel Okoronkwo - Portfolio</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Daniel Okoronkwo</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/Daniel-Okoronkwo.jpg') }}" alt="daniel-okoronkwo" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact-me">Contact Me</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#important-links">Important Links</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">

            <div class="container my-2">
                @include('includes.messages')
            </div>
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Daniel
                        <span class="text-primary">Okoronkwo</span>
                    </h1>
                    <div class="subheading mb-5">
                        Enugu state, Nigeria | +234 (0) 909-193-1407 | <a href="mailto:danielokoronkwo90@gmail.com">danielokoronkwo90@gmail.com</a>
                    </div>
                    <p class="lead mb-5">I am experienced Software Developer with knowledge on how to leverage agile frameworks to provide a robust synopsis for high level software requirement and overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://linkedin.com/in/daniel-okoronkwo/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/danielokoronkwo-coder"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://twitter.com/@varsilias"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="https://facebook.com/daniel.obineche.okoronkwo/‌"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Backend Developer</h3>
                            <div class="subheading mb-3">Innovation Growth Hub</div>
                            <div class="mb-3">PHP(Laravel), Javascript, HTML, OpenAPI, Swagger</div>
                            <p>Led the Backend team that was given the responsibility of building the Application Programming Interface (API) that was consumed by the Front facing (Mobile & Web) part of a revolutionary Learning Management System(LMS). I worked in a fast-paced agile development environment delivering scalable, extensible, and highly scalable code</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2020 - Dec 2020</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">PHP Developer</h3>
                            <div class="subheading mb-3">Sidehustle.ng</div>
                            <div class="mb-3">PHP, HTML, CSS, Bootstrap, Javascript</div>
                            <p>During the one month internship at Sidehustle, I worked independently under no supervision and completed weekly tasks to earn points. Tasks completed per week had a reward of 100 points. within the one month time frame i graduated from the internship with 380 points.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2021 - July 2021</span></div>
                    </div>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Nigeria, Nsukka</h3>
                            <div class="subheading mb-3">Bachelor of Science</div>
                            <div>Computer Science</div>
                            <p>GPA: 4.xx</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">October 2019 - Present</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">All Saints' Presbyterian Secondary School</h3>
                            <div class="subheading mb-3">Location: Aba, Abia Nigeria</div>
                            <div>Science </div>
                            <p>Grade: Top of Class</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2013 - July 2018</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Ochad College</h3>
                            <div class="subheading mb-3">Location: Gbagada, Lagos Nigeria</div>
                            <div>Science </div>
                            <p>Grade: Top of Class</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Novemeber 2018 - April 2019</span></div>
                    </div>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-bootstrap"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                        <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                        <li class="list-inline-item"><i class="fab fa-yarn"></i></li>
                        <li class="list-inline-item"><i class="fab fa-aws"></i></li>
                        <li class="list-inline-item"><i class="fab fa-docker"></i></li>

                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Object-Oriented Programming
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Code Modularication
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            E2E / Unit Testing
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="projects">
                <div class="resume-section-content">
                    <h2 class="mb-5">Projects</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">MarketPlace</h3>
                            <div class="subheading mb-3">Vendor Listing Web App</div>
                            <div class="mb-3">PHP, Javascript, HTML, Bootstrap</div>
                            <p>MarketPlace is a vendor listing web application built with Vanilla PHP that gives users access to a very responsive and highly cistomizable dashboard where they can comfortably upload their products</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><a href="https://github.com/danielokoronkwo-coder/marketplace">Repository</a> - <a href="https://markett-place.herokuapp.com/">Link to Live project</a></span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Moviedify</h3>
                            <div class="subheading mb-3">Movie recommendation Web App</div>
                            <div class="mb-3">PHP, Laravel, Javascript, HTML, Bootstrap, Blade Templating Engine, Laravel Livewire</div>
                            <p>Moviedify is a movie recommendation web applicatuon built with Laravel that draws movie information  from The Movie DB (TMDB) API, it displays movie details such as casts, crew, genre etc. I also the ability to search movies including yet to be released movies</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><a href="https://github.com/danielokoronkwo-coder/moviedify">Repository</a> - <a href="https://moviedify.herokuapp.com/">Link to Live project</a></span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">School System API</h3>
                            <div class="subheading mb-3">An API for a Revolutionary Learning Management System</div>
                            <div class="mb-3">PHP, Laravel, OpenAPI, Swagger, Trello</div>
                            <p>School System API is an application programming interface for a revolutionary Learning Management System. It contains 40 endpoints</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><a href="https://github.com/danielokoronkwo-coder/Lantern_APIs">Repository</a> - <a href="https://api-lantern.herokuapp.com/api/docs">Link to Live project</a></span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Shopeat</h3>
                            <div class="subheading mb-3">A minimalistic ecommerce web app</div>
                            <div class="mb-3">PHP, Laravel, Javascript, Blade Templating Engine, Bootstrap, Paystack Payment Gateway</div>
                            <p>Shopeat is a minimalistic ecommerce web application built with Laravel while putting more attention to the functionality rather than the the styling. It implements the CART functionality and uses the Paystack paymen gateway for receiving payment during checkout</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><a href="https://github.com/danielokoronkwo-coder/shopeat">Repository</a> - <a href="https://shopeat.herokuapp.com/">Link to Live project</a></span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Contact Me-->
            <section class="resume-section" id="contact-me">
                <div class="resume-section-content">
                    <h2 class="mb-5">Contact Me</h2>
                    <form action="{{ route('send-message') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label class="form-label" for="fullname">Fullname</label>
                            <input class="form-control @error('fullname') is-invalid @enderror" id="fullname" type="text" placeholder="Your Name" name="fullname" value="{{ old('fullname') }}"/>

                            @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="emailAddress">Email Address</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="emailAddress" type="email" placeholder="Your Email Address" name="email" value="{{ old('email') }}"/>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" type="text" placeholder="Your Message" style="height: 10rem;" name="message" value="{{ old('message') }}"></textarea>

                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </section>

            {{-- <hr class="m-0" /> --}}

            <section class="resume-section" id="important-links">
                <div class="resume-section-content">
                    <h2 class="mb-5">Important Links</h2>

                    <ul class="list-inline dev-icons">

                        <li class="list-inline-item">
                            <a href="https://hng.tech">
                                <img src="{{ asset('img/hng-logo.png') }}" alt="hng-logo" width="200" height="50">
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://training.zuri.team">
                                <img src="{{ asset('img/zuri-image.png') }}" alt="zuri-logo" width="100" height="50">
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="https://ingressive.org">
                                <img src="{{ asset('img/I4G-Logo.png') }}" alt="I4G-Logo" width="100" height="50">
                            </a>
                        </li>
                    </ul>

            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
