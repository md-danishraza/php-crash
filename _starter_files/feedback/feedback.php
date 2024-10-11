<?php include "inc/header.php"; ?>


<?php 
// $feedback = [
//   [
//     "id" => 1,
//     "name" => "joh doe",
//     "email" => "lsdfs@gmail.com",
//     "body" => "sdfhsfsflsf s sodfosdf"
//   ]
 
// ]
$sql = "select * from feedback;";
$result = mysqli_query($connection, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC); // Fetch all rows as associative arrays



?>

   
    <h2>Feedback</h2>

    <?php

    if (empty($feedback)) {
        echo '<p class="lead mt-3">There is no feedback</p>';
    } else {

        foreach ($feedback as $fb) {
            echo '<div class="card my-3 ">';
            echo '<div class="card-body text-center bg-primary text-white rounded">';
            echo '<h5 class="card-title mb-3">'. $fb['name'].'</h5>';
            echo '<p class="card-text">'. $fb['body'].'</p>';
            echo '<p class="card-text m-0">'. $fb['email'].'</p>';
            echo '<p class="card-text m-0">'. $fb['date']. '</p>';
            echo '</div>';
            echo '</div>';
        }

    }
    ?>


    <!-- <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div> -->

   <!-- <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div> -->
  

   <?php include "inc/footer.php"; ?>


