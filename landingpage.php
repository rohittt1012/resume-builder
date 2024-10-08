<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Resume Builder Website - Online tools to get you hired</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        .btn-2 {
            -webkit-text-fill-color: white;
        }

        .btn-2:hover {
            text-decoration: none;
        }

        .footer {
            background-color: rgb(52, 58, 64);
        }

        .text {
            -webkit-text-fill-color: white;
        }

        .heading {
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body>
    <!-- Header  -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><h4>Resume Hub</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="popupLink">Resume Builder</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Topics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" id="popupLink">Import Resume</a>
                        <a class="dropdown-item" href="#" id="popupLink">Samples</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Support</a>
                        <a class="dropdown-item active" href="https://forms.gle/9DNCM4zEaPBM6Lhx7">Write for us</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#contact">Contact us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>

            <div class="mx-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
                <button class="btn btn-primary" data-toggle="modal" data-target="#signupModal">Sign Up</button>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to ResumeHub</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Get an ResumeHub Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="input-group flex-nowrap mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="addon-wrapping">
                        </div>
                        <div class="form-group mb-4">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <!-- <div class="form-group">
                            <label for="cexampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="cexampleInputPassword1">
                        </div> -->
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section class="py-3 py-md-5 mt-4">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5 order-md-2">
                    <img class="img-fluid rounded" id="image" loading="lazy" style="height: 350px;"
                        src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Resume">
                </div>
                <div class="col-12 col-lg-6 col-xl-6">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h1 class="mb-5"><i>Create Your Resume With Our Resume Builder</i></h1>
                            <p class="lead fs-4  mb-3">Build an effective 2024 resume in minutes with our
                                <br>free-to-use resume builder.
                                <br>We help people to build their professional Resume.
                                <br>Our perspective is to furnish outstanding captivating services.
                            </p>
                            <button class="btn btn-danger mr-5"><a target="_blank" href="#" class="btn-2">Import
                                    Resume</a></button>
                            <button class="btn btn-success"><a target="_blank" href="#" class="btn-2">Resume
                                    Builder</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://plus.unsplash.com/premium_photo-1661324498792-0fe8977062b7?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Web Development">
                        <div class="card-body">
                            <h5 class="card-title">A Well Crafted Resume</h5>
                            <p class="card-text">A well-crafted resume is your ticket to career opportunities,
                                showcasing your skills,
                                experience, and achievements concisely to make a strong first impression on potential
                                employers.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 1 month ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1565688534245-05d6b5be184a?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Software Development">
                        <div class="card-body">
                            <h5 class="card-title">Interview</h5>
                            <p class="card-text">Interviews are crucial moments to demonstrate your qualifications,
                                personality, and fit
                                for a role. Preparation, confidence, and effective communication are key to making a
                                lasting impression on
                                your potential employer.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 25 days ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Artificial Intelligence">
                        <div class="card-body">
                            <h5 class="card-title">Skills</h5>
                            <p class="card-text">Skills are the foundation of your professional toolkit, showcasing your
                                ability to
                                perform tasks effectively and contribute value to employers. Identifying, developing,
                                and highlighting
                                relevant skills can significantly enhance your employability and career prospects.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 20 days ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1485988412941-77a35537dae4?q=80&w=1796&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Web Development">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Web development involves creating, building, and maintaining websites.
                                It encompasses
                                web design, programming, and database management, ranging from simple static pages to
                                complex web
                                applications and electronic businesses.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 15 days ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1504270997636-07ddfbd48945?q=80&w=1771&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Software Development">
                        <div class="card-body">
                            <h5 class="card-title">Software Development</h5>
                            <p class="card-text">Software development is the process of designing, creating, testing,
                                and maintaining
                                different software applications. It involves applying principles from computer science,
                                engineering, and
                                mathematical analysis to create efficient, reliable, and user-friendly software.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 10 days ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1507146153580-69a1fe6d8aa1?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="card-img-top" alt="Artificial Intelligence">
                        <div class="card-body">
                            <h5 class="card-title">Artificial Intelligence</h5>
                            <p class="card-text">Artificial intelligence (AI) refers to computer systems capable of
                                performing complex
                                tasks that historically only a human could do, such as reasoning, making decisions, or
                                solving problems.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 5 days ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <hr>

    <!-- About  -->
    <div class="about" style="display: flex; justify-content: center; " id="about">
        <div class="col-12 col-lg-6 col-xl-7 mb-5 mt-5">
            <div class="row justify-content-xl-center">
                <div class="col-12 col-xl-11">
                    <h2 class="mb-3">Who Are We?</h2>
                    <p class="lead fs-4 text-secondary mb-3">We help people to build their professional Resume.
                        Our perspective is to furnish outstanding captivating services.</p>
                    <p class="mb-5">We are a fast-growing company, but we have never lost sight of our core
                        values. We believe in collaboration, innovation, and user satisfaction. We are
                        always looking for new ways to improve our services.</p>
                    <div class="row gy-4 gy-md-0 gx-xxl-5X">
                        <div class="col-12 col-md-6">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-gear-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="h4 mb-3">Versatile Brand</h2>
                                    <p class="text-secondary mb-0">We are crafting a digital method that
                                        subsists life across all mediums.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-fire" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="h4 mb-3">Digital Agency</h2>
                                    <p class="text-secondary mb-0">We believe in innovation by merging primary
                                        with elaborate ideas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Contact  -->
    <div class="contact-box mb-5" id="contact">
        <h2 class="heading">Contact Us</h2>
        <hr><br>
        <script src="https://sheetdb.io/s/f/cpozyztowj9bq.js"></script>
    </div>

    <!-- <div class="location-box"></div> -->

    <!-- Footer  -->
    <footer class="footer pt-5 pb-4 pl-5 pr-5">
        <div class="container">
            <div class="row">
                <div id="firstPart" class="col-12 col-sm-6 col-md-3" role="navigation" aria-label="Job Seekers">
                    <div class="row">
                        <h4 class="col-md-12 mb-4 text">ResumeHub</h4>
                        <div role="list">
                            <p role="listitem" class="text col-md-12">Resume Builder Website <br>Online tools to get you
                                hired</P>
                        </div>
                    </div>
                </div>
                <div id="secondPart" class="col-12 col-sm-6 col-md-3" role="navigation" aria-label="Job Seekers">
                    <div class="row">
                        <h4 class="col-md-12 mb-4 text">Job Seekers</h4>
                        <div role="list">
                            <div role="listitem" class="col-md-12"><a href="#" class="text">Build a
                                    Resume</a></div>
                            <div role="listitem" class="col-md-12"><a href="#" class="text">Samples</a></div>
                        </div>
                    </div>
                </div>
                <div id="thirdPart" class="col-12 col-sm-6 col-md-3" role="navigation" aria-label="Need Help">
                    <div class="row">
                        <h4 class="col-md-12 mb-4 text">Need Help?</h4>
                        <div role="list">
                            <div class="col-md-12"><a href="#" class="text">Help Center</a></div>
                            <div class="col-md-12"><a href="#" class="text">About Us</a></div>
                        </div>
                    </div>
                </div>
                <div id="firstPart" class="col-12 col-sm-6 col-md-3" role="navigation" aria-label="Job Seekers">
                    <div class="row">
                        <h4 class="col-md-12 mb-4 text">Connect with us</h4>
                        <div role="list">
                            <div class="col-md-12"><a target="_blank" href="https://github.com/rohittt1012"
                                    class="text"><i class="fa-brands fa-square-github"></i> GitHub</a></div>
                            <div class="col-md-12"><a target="_self" href="https://www.linkedin.com/in/rohit-shivhare"
                                    class="text"><i class="fa-brands fa-linkedin"></i>
                                    Linkedin</a></div>
                            <div class="col-md-12"><a href="#" class="text"><i class="fa-brands fa-square-twitter"></i>
                                    Twitter</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <p class="float-right"><a href="#" class="text">Back to top</a></p>
            <p class="text">© Copyright ResumeHub 2024. All Rights Reserved · <a href="#" class="text">Privacy</a> · <a
                    href="#" class="text">Terms</a></p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <!-- Chatboot  -->
    <script src="//code.tidio.co/tlpye6oqkuagyvytqykbsukbkko6ijrh.js" async></script>

    <script>
        document.getElementById("popupLink").addEventListener("click", function(event){
            event.preventDefault();  // Prevent the default action of the link
            alert("You need to Login first!");
        });
    </script>

</body>

</html>