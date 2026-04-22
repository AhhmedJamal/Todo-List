<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="app.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <title>Settings</title>
</head>
<body>
     <?php include "./sidebar.php" ?>
     <div class="content-settings">
      <form class="account" action="POST">
          <div class="avatr">
               <i class="fa-regular fa-circle-user"></i>
               <h3>Name User</h3>
          </div>
          <label for="name">Name</label>
          <input type="name" name="name" id="name">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
          <label for="password">Password</label>
          <input type="password" name="password" id="password">
          <button class="btn">Submit</button>
      </form>
     </div>

     <script src="./app.js"></script>
</body>
</html>