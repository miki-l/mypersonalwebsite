<?php 

  //connect to the database
  $conn = mysqli_connect('localhost', 'Miki', 't8tc4AwT5CpOwqdo', 'sfg');

  //check connection
  if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // write query from sfg
  $sql = 'SELECT fname, lname, id FROM players ORDER BY create_at';

  //make query and get result
  $result = mysqli_query($conn, $sql);

  //fetch the resulting rows as and array
  $players = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);

  //close connection
  mysqli_close($conn);

  //explode(',', $players[0]['ingredient'])

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

  <h4 class="plysheader">Players!</h4>

  <div class="container">
    <div class="row">

      <?php foreach($players as $players): ?>

        <div class="col s6 md3">
          <div class="card z-depth-0">
            <div class="card-content">
              <div><?php echo htmlspecialchars($players['id']); ?> .
                   <?php echo htmlspecialchars($players['fname']); ?> 
                   <?php echo htmlspecialchars($players['lname']);?>  
              </div>
            </div>
            <!-- <div class="card-action right-align">
            <a href="#" class="branf-text">more info</a>
            </div> -->
          </div>
        </div>

      <?php endforeach ?>

    </div>
  </div>

	<?php include('templates/footer.php'); ?>

</html>