<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>OquSpace home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    </style>
</head>

<body>
    <div class="allrecords">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="../img-s/logo ver1 t-parent.png" alt="web-site logo"> OquSpace
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="head-content">
            <div class="container">
                <div class="page-desc">
                    <div class="row no-gutter">
                        <div class="col-md-4">
                            <img src="../img-s/page-desc logo.png" alt="page-desc oquspace logo" class="page-desc-logo">
                            <h2>Educational space with an interactive environment, just how you love it</h2>
                            <a href="signin.php">
                                <h2 class="log-in-link">Log In</h2>
                            </a>
                        </div>

                        <div class="col-md-8">
                            <div class="desc-img">
                                <img src="../img-s/group-study.png" alt="group study vector" class="group-study-vector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="courses-section">
            <div class="container">
                <div class="courses-desc">
                    <h1>COURSES</h1>
                    <h3>Browse all of our available courses.</h3>
                </div>

                <div class="row justify-content-around fir-half">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="course-container maths">
                                <img src="../img-s/course icons/maths.png">
                                <div class="course-name">Maths</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="course-container history">
                                <img src="../img-s/course icons/history.png">
                                <div class="course-name">History</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="course-container languages">
                                <img src="../img-s/course icons/languages.png">
                                <div class="course-name">Languages</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row justify-content-around sec-half">
                    <div class="col-md-4">
                        <a href="#">
                            <div class="course-container geo">
                                <img src="../img-s/course icons/map.png">
                                <div class="course-name">Geography</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="course-container science">
                                <img src="../img-s/course icons/scientist.png">
                                <div class="course-name">Science</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="teachers-section">
            <div class="container">
                <div class="teach-desc">
                    <h1>OUR TEACHERS</h1>
                    <h3>Meet our academic staff.</h3>
                </div>

                <div class="teachers">
                    <div class="row justify-content-around">
                        <div class="col-md-4 teacher-column">
                            <div class="avatar">
                                <div class="circle-border">
                                </div>
                            </div>
                            <div class="name">Jane Doe</div>
                            <div class="description">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere diam ac sapien lacinia fermentum. Duis quis bibendum odio, vel scelerisque enim."
                            </div>
                        </div>

                        <div class="col-md-4 teacher-column">
                            <div class="avatar">
                                <div class="circle-border">
                                </div>
                            </div>
                            <div class="name">Jane Doe</div>
                            <div class="description">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere diam ac sapien lacinia fermentum. Duis quis bibendum odio, vel scelerisque enim."
                            </div>
                        </div>

                        <div class="col-md-4 teacher-column">
                            <div class="avatar">
                                <div class="circle-border">
                                </div>
                            </div>
                            <div class="name">Jane Doe</div>
                            <div class="description">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere diam ac sapien lacinia fermentum. Duis quis bibendum odio, vel scelerisque enim."
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-around">
                        <div class="col-md">
                            <div class="more-teachers">
                                <button type="button" class="btn btn-info" id="teachers-btn"> <h3 class="more-teachers">...and many more! <a href="teachers.php"> Browse all teachers. </a> </h3> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-section">
            <div class="container">
                <div class="search-desc">
                    <h1>IF YOU KNOW WHAT YOU'RE LOOKING FOR..</h1>
                    <h3>use our search bar!</h3>
                </div>

                <div class="search-form-section">
                    <div class="form-outline">
                        <input type="search" id="search-form" class="form-control">
                    </div>
                    <button type="submit " class="btn btn-primary " id="search-btn">Search</button>
                </div>
            </div>
        </div>

        <div class="consulting-section ">
            <div class="container ">
                <div class="consult-desc ">
                    <h1>STILL DECIDING?</h1>
                    <h3>Leave your contacts below and we will schedule you for consulting.</h3>
                </div>

                <form>
                    <div class="form-group ">
                        <label for="inputName ">Name</label>
                        <input type="text " class="form-control " id="inputName " placeholder="Jane Doe ">
                    </div>

                    <div class="form-group ">
                        <label for="inputPhone ">Phone number</label>
                        <input type="phone " class="form-control " id="inputPhone " aria-describedby="phoneHelp " placeholder="+7 (___) ___ __-__ ">
                        <small id="emailHelp " class="form-text text-muted ">We'll never share your phone number with anyone else.</small>
                    </div>

                    <div class="form-group ">
                        <label for="inputEmail ">Email address</label>
                        <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                        <small id="emailHelp " class="form-text text-muted ">We'll never share your email with anyone else.</small>
                    </div>
                    <button type="submit " class="btn btn-primary ">Submit</button>
                </form>
            </div>
        </div>

        <footer>
            <div class="container ">
                <!-- <h3>OquSpace</h3>
            <p id="adress ">Nur-Sultan <br> EXPO Business Center, block C.1. <br> Kazakhstan, 010000</p>
            <p id="contacts ">+7 (700) 270 82-87 <br> info@oquspace.kz</p>
            <img src="C:\Users\khydf\github\teachingPlatform\img-s\page-desc logo.png " class="footer-logo "> -->
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>
</body>

</html>