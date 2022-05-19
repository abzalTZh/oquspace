<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="img-s/oquspace.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="../css/dashboard.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/moment.min.js"></script>
    <script src="../js/fullcalendar.min.js"></script>

    <script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: false,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },

    });
});
</script>

<style>
#calendar {
    width: 700px;
    margin: 0 auto;
}
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="..\img-s\logo ver1 t-parent.png" alt="web-site logo"> OquSpace
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

    <div class="account-info" style="height: 70%;">
        <div class="full-name">Abzal Tashenov</div>
        <div class="email">khydfgaed@gmail.com</div>
    </div>

    <div class="enrolled-courses">
        <h1 class="enrolled-text">ENROLLED COURSES</h1>
        <div class="course-container collapsible">
            <button type="button" class="course-name collapsible">Math</button>
            <div class="course-sections content">
                <input type="checkbox" id="arithmetic" name="arithmetic">
                <label for="arithmetic">Arithmetic</label>
                <br>
                <input type="checkbox" id="pre-algebra" name="pre-algebra">
                <label for="pre-algebra">Pre-algebra</label>
                <br>
                <input type="checkbox" id="algebra-basics" name="algebra-basics">
                <label for="algebra-basics">Algebra basics</label>
            </div>
        </div>
    </div>

    <!-- section of calendar and Timeline -->
    <section class="main">
        <div class="container">
            <div class="main_wrapper">
            <div id='calendar'></div>
                <div class="timeline">
                    <div class="timeline_header">
                        <h3>Courses history</h3>
                    </div>
                    <div class="timeline_content">
                        <div class="container">
                            <!-- 1 -->
                            <div class="timeline_event">
                                <div class="event_content">
                                    <div class="event_content_title">
                                        <a href="#">course name <br> lesson title</a>
                                    </div>
                                </div>
                                <br>
                                <hr class="timeline_event_hr">
                            </div>
                            <!-- 1 end -->
                            <!-- 2 -->
                            <div class="timeline_event">
                                <div class="event_content">
                                    <div class="event_content_title">
                                        <a href="#">course name <br> lesson title</a>
                                    </div>
                                </div>
                                <br>
                                <hr class="timeline_event_hr">
                            </div>
                            <!-- 2 end -->
                            <!-- 3 -->
                            <div class="timeline_event">
                                <div class="event_content">
                                    <div class="event_content_title">
                                        <a href="#">course name <br> lesson title</a>
                                    </div>
                                </div>
                                <br>
                                <hr class="timeline_event_hr">
                            </div>
                            <!-- 3 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./js/collapsible.js"></script>
</body>

</html>