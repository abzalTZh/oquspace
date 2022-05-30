<?php
    session_start();
    $con=mysqli_connect("localhost", "root", "", "oqu_space");
    if(isset($_SESSION['id']) & !empty($_SESSION['id'])){
        $userid=$_SESSION['id'];
		$sqlses = "SELECT * FROM users WHERE id=$userid";
        $sessionres = mysqli_query($con, $sqlses);
	}else{
        header("Location: signin.php");
    }
?>

<?php
    $con=mysqli_connect("localhost", "root", "", "oqu_space_courses");
    $esql = "SELECT * FROM enroll WHERE user_id=$userid";
    $eres = mysqli_query($con, $esql);

    if(!empty($eres)) {
        while ($r1 = mysqli_fetch_assoc($eres)) { 
            $courseid = $r1['course_id'];
        }

        $csql = "SELECT * FROM course WHERE course_id=$courseid";
        $cres = mysqli_query($con, $csql);

        while ($r2 = mysqli_fetch_assoc($cres)) { 
            $course_name = $r2['course_name'];
        }

        $ccsql = "SELECT * FROM course_category WHERE course_id=$courseid";
        $ccres = mysqli_query($con, $ccsql);
    } else {
        $course_name = "No courses";
    }
?>

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
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="account-info" style="height: 70%;">
        <div class="row">
            <?php
                while($r = mysqli_fetch_assoc($sessionres)) {
            ?>
            <div class="col-9">
                <div class="full-name"><?php echo $r['full_name'] ?></div>
                <div class="email"><?php echo $r['email'] ?></div>
            </div>
            <?php } ?>
            <div class="col-4">
                <button class="log-out-btn" ><a href="logout.php">Log Out</a></button>
            </div>
        </div>

    </div>

    <div class="enrolled-courses">
        <h1 class="enrolled-text">ENROLLED COURSES</h1>
        <div class="course-container collapsible">
            <button type="button" class="course-name collapsible"> <?php echo $course_name ?> </button>
            <div class="course-sections content">
                <?php
                    if(!empty($ccres)) {
                        while($r3 = mysqli_fetch_assoc($ccres)) {
                ?>
                <input type="checkbox" id="arithmetic" name="arithmetic">
                <label for="arithmetic"> <?php echo $r3['category_name'] ?> </label>
                <br>
                <?php } } ?>
            </div>
        </div>
    </div>

    <!-- section of calendar and Timeline -->
    <section class="main">
        <div class="container">
            <div class="main_wrapper">
            <div id='calendar'></div>
            </div>
        </div>
    </section>

    <footer>
            <div class="container ">
                <h3>OquSpace</h3>
            <p id="adress">Nur-Sultan <br> EXPO Business Center, block C.1. <br> Kazakhstan, 010000</p>
            <p id="contacts">+7 (700) 270 82-87 <br> info@oquspace.kz</p>
            </div>
    </footer>
    <script src="./js/collapsible.js"></script>
</body>

</html>