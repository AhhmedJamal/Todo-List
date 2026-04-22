<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION["tasks"])) {
        $_SESSION["tasks"] = [];
    }

  //  Add Task
  if (!empty($_POST["task"])) {
       $_SESSION["tasks"][] = [
            "id" => uniqid(),
            "task" => $_POST["task"]
          ];
          $data = json_encode($_SESSION["tasks"]);
          file_put_contents("tasks.json", $data);
          header("Location: " . $_SERVER['PHP_SELF']);
          exit;
     }
}

     
if ($_SERVER["REQUEST_METHOD"] === 'GET') {
  // delete
  if (isset($_GET["delete"])) {
     foreach($_SESSION["tasks"] as $key => $task){
          if ($task["id"] == $_GET["delete"]) {
               unset($_SESSION["tasks"][$key]);
          }
     }
  }
     

     if (isset($_GET["edit"]) && isset($_GET["editValue"])) {
      foreach($_SESSION["tasks"] as &$task){
          if ($task["id"] == $_GET["edit"]) {
               $task["task"] = $_GET["editValue"];
               break;
     }
}
header("Location: " . $_SERVER['PHP_SELF']);
    exit;
          }
     }

   $_SESSION["tasks"] ??  $_SESSION["tasks"] = array_values($_SESSION["tasks"]);


?>

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"  content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="app.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <title>Todo List</title>
 </head>
 <body>
     <?php include "./sidebar.php" ?>
  <div class="content-index">
     <h1>Todo List</h1>
     <form  method="POST" class="form-data">
          <input type="text" name="task" placeholder="Add a todo">
          <button type="submit">To Create</button>
     </form>
     <ul>
          <?php 
               if (!empty($_SESSION["tasks"])) {
                  $data = file_get_contents("tasks.json");
                  $tasks = json_decode($data, true);
                  foreach($tasks as $item){
                   $isEdit = (isset($_GET["edit"]) && $_GET["edit"] == $item["id"]);
                         echo '<li>
                              <form method="GET">
                                   <label>
                                   <input type="hidden" name="edit" value="'.$item["id"].'">';
                                   
                                   if ($isEdit) {
                              echo '<input value="'.$item["task"].'" name="editValue" type="text">';
                              echo '<button type="submit"><i class="fa-solid fa-circle-check"></i></button>';
                         } else {
                              echo '<span>'.$item["task"].'</span>';
                         }

                         echo '</label>
                              </form>

                              <span>
                                   <a href="?edit='.$item["id"].'"><i class="fa-regular fa-pen-to-square"></i></a>
                                   <a href="?delete='.$item["id"].'"><i class="fa-regular fa-trash-can"></i></a>
                              </span>
                         </li>';
                         }
                         } else {
                              echo "<div class='not-tasks'>Not Have Tasks ! </div>";
                         }
           ?>         
     </ul>
   </div>
  <script src="./app.js"></script>
 </body>
</html>
