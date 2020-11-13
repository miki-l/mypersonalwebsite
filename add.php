<?php 

	$email = $title = $ingredients = '';
	$errors = array('fname' => '', 'lname' => '', 'phone' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['fname'])){
			$errors['fname'] = 'A name is required';
		} else{
			$fname = $_POST['fname'];
			if(!filter_var($fname, FILTER_VALIDATE_EMAIL)){
				$errors['fname'] = 'name must be a more than 4 letters';
			}
		}

		// check title
		if(empty($_POST['lname'])){
			$errors['lname'] = 'A title is required';
		} else{
			$lname = $_POST['lname'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $lname)){
				$errors['lname'] = 'Title must be letters and spaces only';
			}
		}

		// check ingredients
		if(empty($_POST['phone'])){
			$errors['phone'] = 'At least one ingredient is required';
		} else{
			$phone = $_POST['phone'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $phone)){
				$errors['kphone'] = 'Ingredients must be a comma separated list';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			//echo 'form is valid';
			header('Location: index.php');
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
			<div class="red-text"><?php echo $errors['fname']; ?></div>
			<label>Name(last name):</label><br>
			<input type="text" name="lname" value="<?php echo htmlspecialchars($lname) ?>">
			<div class="red-text"><?php echo $errors['lname']; ?></div>
			<label>phone No.:</label><br>
			<input type="text" name="phone" value="<?php echo htmlspecialchars($phone) ?>">
			<div class="red-text"><?php echo $errors['phone']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>