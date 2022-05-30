<?php
    session_start();
    $con=mysqli_connect("localhost", "root", "", "oqu_space");
    if(isset($_SESSION['id']) & !empty($_SESSION['id'])){
        $userid=$_SESSION['id'];
		$sqlses = "SELECT * FROM users WHERE id=$userid";
        $sessionres = mysqli_query($con, $sqlses);

        while ( $r5 = mysqli_fetch_assoc($sessionres)) { 
            $name = $r5['full_name'];
            $email = $r5['email'];
        }
	}else{
        $errors[] = "You have to have an account in order to post feedbacks. <a href='signin.php'>Log in</a>/<a href='signup.php'>Register</a>.";
    }
?>

<?php
    $connection=mysqli_connect("localhost", "root", "", "oqu_space");
    if(isset($_POST) & !empty($_POST)){
        $subject = mysqli_real_escape_string($connection, $_POST['comment']);
     
        $isql = "INSERT INTO feedbacks (comment_sender_name, comment_sender_email, comment) VALUES ('$name', '$email', '$subject')";
        $ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- FavIco -->
    <link rel="shortcut icon" href="img-s/oquspace.ico" type="image/x-icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/aboutus.css">

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
                            <a class="nav-link" href="dashboard.php">Profile</a>
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

        <div class="comment-form-container" id="comment-form-container">
            <div class="comment-form-header">User Feedback</div>

            <?php
                if(!empty($errors)){
                    echo "<div class='alert alert-danger'>";
                    foreach ($errors as $error) {
                        echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;".$error."<br>";
                    }
                    echo "</div>";
                }
            ?>

            <form method="post" action="#comment-form-container">
                <div class="form-group">
			    <label for="comment">Subject</label> <br>
                <?php
                    if(!empty($errors)){
                        $string = '<textarea name="comment" class="comment" id="comment" placeholder="Add a Comment" rows="5" required></textarea>';
                        $pattern = '/<textarea name="comment" class="comment" id="comment" placeholder="Add a Comment" rows="5" required>/';
                        $replace = '<textarea name="comment" class="comment" id="comment" placeholder="Add a Comment" rows="5" required disabled></textarea>';
                        $style = 'style="display:none;"';

                        echo preg_replace($pattern, $replace, $string);
                    } else {
                        $style = 'style="display:block;"';
                    }
                ?>
			    <textarea name="comment" class="comment" id="comment" placeholder="Add a Comment" rows="5" required <?php echo $style;?>></textarea>

                <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
            
			  </div>
              <?php
                    if(!empty($errors)){
                        $string = '<button type="submit" class="btn btn-primary">Submit</button>';
                        $pattern = '/<button type="submit" class="btn btn-primary">Submit/';
                        $replace = '<button type="submit" class="btn btn-primary" disabled>Submit</button>';
                        $style = 'style="display:none;"';

                        echo preg_replace($pattern, $replace, $string);
                    } else {
                        $style = 'style="display:block;"';
                    }
                ?>
                <button type="submit" class="btn btn-primary" <?php echo $style;?>>Submit</button>
			</form>
        </div>

        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Comments</div>
                    <table class="table table-striped"> 
                        <thead> 
                            <tr>
                                <th>Name</th> 
                                <th>Comment</th> 
                                <th>Time</th>
                                <th></th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                        <?php
                            $con=mysqli_connect("localhost", "root", "", "oqu_space");
                                if(isset($_SESSION['id']) & !empty($_SESSION['id'])) {
                                    $userid=$_SESSION['id'];
                                    $sqlses = "SELECT * FROM users WHERE id=$userid";
                                    $sessionres = mysqli_query($con, $sqlses);
                            
                                    while ( $r5 = mysqli_fetch_assoc($sessionres)) { 
                                        $name = $r5['full_name'];
                                        $email = $r5['email'];
                                    }
                                    while ( $r = mysqli_fetch_assoc($res)) {
                                        if($r['comment_sender_name'] === $name && $r['comment_sender_email'] === $email) {
                        ?>
                            <tr>
                                <td><?php echo $r['comment_sender_name'] ?></td> 
                                <td><?php echo $r['comment']; ?></td> 
                                <td><?php echo $r['date']; ?></td>
                                <td><a href="delcomment.php?comment_id=<?php echo $r['comment_id']; ?>">Del</a></td> 
                            </tr> 
                        <?php } else { ?>
                            <tr>
                                <td><?php echo $r['comment_sender_name'] ?></td> 
                                <td><?php echo $r['comment']; ?></td> 
                                <td><?php echo $r['date']; ?></td>
                            </tr> 
                        <?php } } } else { 
                            while ($r = mysqli_fetch_assoc($res)) {
                        ?>
                            <tr>
                                <td><?php echo $r['comment_sender_name'] ?></td> 
                                <td><?php echo $r['comment']; ?></td> 
                                <td><?php echo $r['date']; ?></td>
                            </tr> 
                            <?php } } ?>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>