<?php 

include('config/db_connect.php');

if(isset($_POST['delete'])){
  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
  $sql = "DELETE FROM players WHERE id = $id_to_delete";

  if(mysqli_query($conn, $sql)){
    // sucess
    header('Location: index.php');
  }
  else{
    // fialure
    echo 'query error: ' . mysql_eror($conn);
  }
}



  // write query from sfg
  $sql = 'SELECT fname, lname, id, create_at FROM players ORDER BY create_at';

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
              <div>
                <?php echo htmlspecialchars($players['id']); ?> 
                <?php echo htmlspecialchars($players['fname']); ?> 
                <?php echo htmlspecialchars($players['lname']);?> <br>
                <?php echo htmlspecialchars($players['create_at']);?>  
              </div>

              <form id="del" action="players.php" method="post">
                <input type="hidden" name="id_to_delete" value="<?php echo $players['id'] ?>">
                <input type="submit" name="delete" value="Delete" class="del_btn brand z-depth-0">
              </form>
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