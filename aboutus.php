<?php
    $connection=mysqli_connect("localhost", "root", "", "oqu_space");
    if(isset($_POST) & !empty($_POST)){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $subject = mysqli_real_escape_string($connection, $_POST['subject']);
     
        $isql = "INSERT INTO feedbacks (name, email, subject, status) VALUES ('$name', '$email', '$subject', 'draft')";
        $ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
        mysqli_query($connection, 'SET NAMES cp1251_bin');
        if($ires){
            $smsg = "Your Comment Submitted Successfully";
        }else{
            $fmsg = "Failed to Submit Your Comment";
        }
     
    }
?>

<?php
require("includes/connection.php");
 
    $connection=mysqli_connect("localhost", "root", "", "oqu_space");
	$sql = "SELECT * FROM feedbacks";
	$res = mysqli_query($connection, $sql);
 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>About OquSpace</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/aboutus.css">
    <link rel="shortcut icon" href="img-s/oquspace.ico" type="image/x-icon" />
    </style>
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
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="head-content">
            <div class="row">
                <div class="col">
                    <div class="page-desc">
                        <h3>On the road to develop Kazakhstan's online educational platform for everyone to enjoy</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row about">
                <div class="col">
                    <h1>Providing accessible education for learners across the country</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at turpis a nisl convallis fringilla. 
                        Suspendisse dapibus sollicitudin varius. Vestibulum ac faucibus lacus. Nam tincidunt augue et lorem convallis, 
                        gravida tincidunt mauris tempus. Donec bibendum accumsan magna, eu luctus eros sodales id. Fusce felis purus, 
                        euismod vitae congue vitae, cursus lobortis nunc.</p>
                </div>
            </div>
        </div>

        <div class="feedback" id="feedback">
            <div class="row">
                <div class="col">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Submit Your Comments</h1></div>
                    <div class="panel-body">
                        <form method="post" action="#feedback">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            <small id="emailHelp " class="form-text text-muted ">Your email won't be displayed.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Subject</label>
                            <textarea name="subject" class="form-control" rows="3"></textarea>
                            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                            <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Feedbacks</div>
			<table class="table table-striped">
				<tbody> 
				<?php
					while ( $r = mysqli_fetch_assoc($res)) {
				?>
					<tr> 
						<td><?php echo $r['name'] ?></td> 
						<td><?php echo $r['subject']; ?></td>
						<td><a href="delcomment.php?id=<?php echo $r['id']; ?>">Del</a></td> 
					</tr> 
				<?php } ?>
				</tbody> 
			</table>
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF " crossorigin="anonymous "></script>
</body>

</html>