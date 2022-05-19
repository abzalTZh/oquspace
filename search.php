<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<h2>Result</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
		$con=mysqli_connect("localhost", "root", "", "oqu_space_courses");
		$query = mysqli_query($con, "SELECT * FROM `course` WHERE `course_name` LIKE '%$keyword%'") or mysqli_query($con, "SELECT * FROM `course_category` WHERE `category_name` LIKE '%$keyword%'") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>