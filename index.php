<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="app.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <title>Todo List</title>
</head>
<body>
     <?php include "./sidebar.php" ?>
<div class="content-index">
     <h1>Todo List</h1>
     <form  method="post" class="form-data">
          <input type="text" name="todo" placeholder="Add a todo">
          <button type="submit">To Create</button>
     </form>
     <ul>
           <li>
               <label>
               <input type="checkbox" name="">
               <span>Go to gym</span>
               </label>
               <span>
                    <i class="fa-regular fa-pen-to-square"></i>
                    <i class="fa-regular fa-trash-can"></i>
               </span>
            </li>
            <li>
               <label>
               <input type="checkbox" name="">
               <span>Go to gym</span>
               </label>
                <span>
                     <i class="fa-regular fa-pen-to-square"></i>
                     <i class="fa-regular fa-trash-can"></i>
               </span>
           </li>
         
     </ul>
</div>
<script src="./app.js"></script>
</body>
</html>
