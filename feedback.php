<?php include 'inc/header.php'; ?>
<?php include 'config/database.php'; ?> 
<?php 

  //fetch from database

  $sql = 'select * from feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //$feedback = [
  //hardcoded entry
  // [
  //   'id' => '1',
  //   'name' => 'Tina',
  //   'email' => 'tina@gmail.com',
  //   'body' => 'Tina is amazing',
  // ],
  // [
  //   'id' => '2',
  //   'name' => 'Appy',
  //   'email' => 'appy@gmail.com',
  //   'body' => 'appy needs to calm down',
  // ],
//];
?>

    <h2>Past Feedback</h2>
  <?php if(empty($feedback)): ?>
<p class="lead mt3">There is no feedback</p>
    <?php endif; ?>

<?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text-secondary mt2">
        By <?php echo $item['name']; ?>
       </div>
     </div>
   </div>
<?php endforeach; ?>
   
  
   <?php include 'inc/footer.php'; ?> 
