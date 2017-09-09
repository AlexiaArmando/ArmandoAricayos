<?php include 'C:\wamp64\www\ArmandoAricayos\application\views\include\header1.php' ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">	
			<h1> Hello Bootstrap </h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4 bg-danger">
			<a href=""><p class="lead">Menu</p></a>
			<a href=""><p class="lead">Students</p></a>
		</div>
<div>
	
	<div class="row">
		<p><b>ID No: </b><?php echo $student[0]['idno']; ?></p>
		<p><b>Name: </b><?php echo $student[0]['lname'].', '.$student[0]['fname'].' '.$student[0]['mname']; ?></p>
		<p><b>Course: </b><?php echo $student[0]['course']; ?></p>
		<p><b>Sex: </b><?php echo $student[0]['sex']; ?></p>
	</div>
	<a href="../../boots" class="btn btn-danger btn-md">Back</a>
</div>
</div>
</div>
<?php include 'C:\wamp64\www\ArmandoAricayos\application\views\include\footer.php' ?>
