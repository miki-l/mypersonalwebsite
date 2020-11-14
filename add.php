<?php 

	$fname = $lname = $phone = $email = '';
	$errors = array('fname' => '', 'lname' => '', 'phone' => '', 'email' => '');

	if(isset($_POST['submit'])){
		
		// check fname
		if(empty($_POST['fname'])){
			$errors['fname'] = 'A name is required';
		} else{
			$fname = $_POST['fname'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $fname)){
				$errors['fname'] = 'name must be a more than 4 letters';
			}
		}

		// check lname
		if(empty($_POST['lname'])){
			$errors['lname'] = 'A title is required';
		} else{
			$lname = $_POST['lname'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $lname)){
				$errors['lname'] = 'Title must be letters and spaces only';
			}
		}

		// check phone number
		if(empty($_POST['phone'])){
			$errors['phone'] = 'A phone number is required';
		} else{
			$phone = $_POST['phone'];
			if(!preg_match('/^[0-9\s]+$/', $phone)){
				$errors['phone'] = 'Please enter a valid phone Number';
			}
		}

		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email address is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Please enter a valid Email Address';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			//echo 'form is valid';
			header('Location: greeting.php');
		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container">
		<h4>Rigestration Form</h4>
		<form class="white" action="add.php" method="POST">
			<label>Name(first name):</label><br>
			<input type="text" name="fname" value="<?php echo htmlspecialchars($fname) ?>">
			<div class="text"><?php echo $errors['fname']; ?></div>

			<label>Name(last name):</label><br>
			<input type="text" name="lname" value="<?php echo htmlspecialchars($lname) ?>">
			<div class="text"><?php echo $errors['lname']; ?></div>

			<label>phone No.:</label><br>
			<input type="text" name="phone" value="<?php echo htmlspecialchars($phone) ?>">
			<div class="text"><?php echo $errors['phone']; ?></div>

			<label>Email:</label><br>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="text"><?php echo $errors['email']; ?></div>

			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>