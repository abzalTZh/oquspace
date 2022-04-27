<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>OquSpace home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/lesson.css"/>
    <style>
        .sidenav {
        width: 100%;
        height: 100%;
        z-index: 1;
        position: absolute;
        top: 0;
        right: 2.1%;
        background-color: white;
        overflow-x: hidden;
        padding-top: 2%;
        }

        .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        }

        .sidenav a:hover {
        color: #f1f1f1;
        }

        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }

        .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        }

        .active, .collapsible:hover {
        background-color: #555;
        }

        .content {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>
</head>

<body>
    <div class="allrecords">
        <div class="lesson-content">
            <div class="row no-gutter">
                <div class="col-md">
                    <div class="lesson-video">
                        <video controls>
                            <source src="../videos/example.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="course-desc">
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere diam ac sapien lacinia fermentum. Duis quis bibendum odio, vel scelerisque enim.
                        </div>
                        <br>
                        <a href="">Download course materials</a>
                    </div>
                </div>

                <div class="col-md course-col">
                <div class="sidenav">
                    <a href="index.php">Home</a>
                    <a href="#about">Course name</a>
                    <button type="button" class="collapsible">Section 1</button>
                        <div class="content">
                        <p>Lesson 1.1</p>
                        <p>Lesson 1.2</p>
                        <p>Lesson 1.3</p>
                        </div>
                    <button type="button" class="collapsible">Section 2</button>
                        <div class="content">
                            <p>Lesson 2.1</p>
                            <p>Lesson 2.2</p>
                            <p>Lesson 2.3</p>
                        </div>
                    <button type="button" class="collapsible">Section 3</button>
                        <div class="content">
                            <p>Lesson 3.1</p>
                            <p>Lesson 3.2</p>
                            <p>Lesson 3.3</p>
                        </div>
                </div>
                </div>
            </div>
        </div>  

        <footer>
            <div class="container">
                <!-- <h3>OquSpace</h3>
            <p id="adress ">Nur-Sultan <br> EXPO Business Center, block C.1. <br> Kazakhstan, 010000</p>
            <p id="contacts ">+7 (700) 270 82-87 <br> info@oquspace.kz</p>
            <img src="C:\Users\khydf\github\teachingPlatform\img-s\page-desc logo.png " class="footer-logo "> -->
            </div>
        </footer>
    </div>

    <script src="../js/collapsible.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>
</body>

</html>