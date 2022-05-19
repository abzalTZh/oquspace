<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/courses.css">
    <link rel="shortcut icon" href="img-s/oquspace.ico" type="image/x-icon" />
</head>

<body>
    <div class="allrecords">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="./img-s/logo ver1 t-parent.png" alt="web-site logo"> OquSpace
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row justify-content-around">
            <div class="col-md-3">
                <div class="container courses-container">
                    <div class="courses-overview">
                        <div class="title">Courses</div>
                        <div class="courses-title">
                            <a href="#maths-sec">Maths</a> <br>
                            <a href="#history-sec">History</a> <br>
                            <a href="#lang-sec">Languages</a> <br>
                            <a href="#geo-sec">Geography</a> <br>
                            <a href="#science-sec">Science</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="container course-name-container">
                    <div class="coursename-overview">
                        <div class="coursename-title" id="maths-sec">Maths</div>

                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="lesson.php#arithmetic-reasoning">Pre-algebra</a> <br>
                                    <a href="">Algebra</a> <br>
                                    <a href="">Calculus</a> <br>
                                    <a href="">Geometry</a> <br>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="">Probability and statistics</a> <br>
                                    <a href="">Number system</a> <br>
                                    <a href="">Set theory</a> <br>
                                    <a href="">Trigonometry</a> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container course-name-container">
                    <div class="coursename-overview">
                        <div class="coursename-title" id="history-sec">History</div>

                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="">Prehistory</a> <br>
                                    <a href="">Classical era</a> <br>
                                    <a href="">The Middle Ages</a> <br>
                                    <a href="">Early modern era</a> <br>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="">Ancient Kazakhstan</a> <br>
                                    <a href="">Soviet Kazakhstan</a> <br>
                                    <a href="">Independent Kazakhstan</a> <br>
                                    <a href="">Modern Kazakhstan</a> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container course-name-container">
                    <div class="coursename-overview">
                        <div class="coursename-title" id="lang-sec">Languages</div>

                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="">Kazakh language</a> <br>
                                    <a href="">English language</a> <br>
                                    <a href="">Russian language</a> <br>
                                    <a href="">Chinese language</a> <br>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="">Turkish language</a> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container course-name-container">
                    <div class="coursename-overview">
                        <div class="coursename-title" id="geo-sec">Geography</div>

                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="">Physical geography</a> <br>
                                    <a href="">Geomorphology</a> <br>
                                    <a href="">Human geography</a> <br>
                                    <a href="">Urban geography</a> <br>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="">Economic geography</a> <br>
                                    <a href="">Population geography</a> <br>
                                    <a href="">Political geography</a> <br>
                                    <a href="">Biogeography</a> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container course-name-container">
                    <div class="coursename-overview">
                        <div class="coursename-title" id="science-sec">Science</div>

                        <div class="row justify-content-around">
                            <div class="col-md-4">
                                <div class="sectionname-title">
                                    <a href="">Natural sciences</a> <br>
                                    <a href="">Engineering and technology</a> <br>
                                    <a href="">Medical and Health science</a> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer>
            <div class="container ">
                <h3>OquSpace</h3>
            <p id="adress">Nur-Sultan <br> EXPO Business Center, block C.1. <br> Kazakhstan, 010000</p>
            <p id="contacts">+7 (700) 270 82-87 <br> info@oquspace.kz</p>
            </div>
        </footer>

    </div>
</body>

</html>