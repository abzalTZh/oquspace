<?php
    session_start();
    $con=mysqli_connect("localhost", "root", "", "oqu_space_admin");
    if(isset($_SESSION['id']) & !empty($_SESSION['id'])){
        $userid=$_SESSION['id'];
		$sqlses = "SELECT * FROM admins WHERE id=$userid";
        $sessionres = mysqli_query($con, $sqlses);
	}else{
        header("Location: signin.php");
    }
?>

<?php
    $connection=mysqli_connect("localhost", "root", "", "oqu_space");
 
	$sql = "SELECT * FROM feedbacks";
	$res = mysqli_query($connection, $sql);
    
    $con = mysqli_connect("localhost", "root", "", "oqu_space_admin");
    $usql = "SELECT * FROM admins";
    $ures = mysqli_query($con, $usql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
    <script src="fullcalendar/lib/jquery.min.js"></script>
    <script src="fullcalendar/lib/moment.min.js"></script>
    <script src="fullcalendar/fullcalendar.min.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/calendar.js"></script>
    <link rel="shortcut icon" href="img-s/oquspace.ico" type="image/x-icon" />
    <title>Admin Dashboard</title>

    <style>
        #calendar {
            width: 700px;
            margin: 0 auto;
        }

        .response {
            height: 60px;
        }

        .success {
            background: #cdf3cd;
            padding: 10px 60px;
            border: #c3e6c3 1px solid;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div id="allrecords">
        <div class="profile-header">
            <div class="account-info">
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
                        <a href="logout.php"><button class="log-out-btn">Log Out</button></a>
                    </div>
                </div>
            </div>

            <div class="tabs">
                <div class="row">
                    <div class="col">
                        <div class="rectangle calendar-container">
                            <button onclick="calendarToggle()">Calendar Manager</button>
                        </div>
                    </div>

                    <div class="col">
                        <div class="rectangle feedbacks-container">
                            <button onclick="feedbacksToggle()">Feedbacks</button>
                        </div>
                    </div>

                    <div class="col">
                        <div class="rectangle staff-container">
                            <button onclick="staffToggle()">OquSpace Staff</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="calendar-tab" id="calendar-tab-container">
            <div class="response"></div>
            <div id='calendar'></div>
        </div>

        <div class="panel panel-default" id="feedbacks-tab-container">
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <table class="table table-striped"> 
                        <thead> 
                            <tr> 
                                <th>#</th> 
                                <th>Name</th> 
                                <th>Email</th>
                                <th>Comment</th> 
                                <th>Time</th>
                                <th></th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                        <?php
                            while ( $r = mysqli_fetch_assoc($res)) {
                        ?>
                            <tr> 
                                <th scope="row"><?php echo $r['comment_id']; ?></th> 
                                <td><?php echo $r['comment_sender_name'] ?></td> 
                                <td><a href="<?php echo $r['comment_sender_email'] ?>"><?php echo $r['comment_sender_email'] ?></a></td> 
                                <td><?php echo $r['comment']; ?></td> 
                                <td><?php echo $r['date']; ?></td> 
                                <td><a href="delcomment.php?comment_id=<?php echo $r['comment_id']; ?>">Del</a></td> 
                            </tr> 
                        <?php } ?>
                        </tbody> 
                    </table>
                </div>
        
            </div>
        </div>
        </div>

        <div class="panel panel-default" id="staff-tab-container">
            <a href="register.php"><button class="add-admin-btn">Register admin</button></a>
            <div class="container">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <table class="staff-table table table-striped">
                            <thead>
                                <th>#</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Username</th>
                            </thead>
                            <tbody>
                                <?php
                                    while ( $ur = mysqli_fetch_assoc($ures)) {
                                ?>
                                <tr> 
                                    <th scope="row"><?php echo $ur['id']; ?></th> 
                                    <td><?php echo $ur['full_name'] ?></td> 
                                    <td><a href="<?php echo $ur['email'] ?>"><?php echo $ur['email'] ?></a></td> 
                                    <td><?php echo $ur['username']; ?></td>
                                </tr> 
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>