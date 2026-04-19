<?php
     $current = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebar">
    <h2 class="logo">CRUD OPERATIONS</h2>
    <div class="account">
     <i class="fa-regular fa-circle-user"></i>
     <h3>Name User</h3>
    </div>
    <nav>
     <ul>
          <li><a href="./index.php" class="<?= $current == "index.php" ? 'active':'' ?>"><i class="fa-regular fa-house "></i> Home</a></li>
          <li><a href="./settings.php" class="<?= $current == "settings.php" ?  'active':'' ?>"><i class="fa-solid fa-gear"></i> Settings</a></li>
     </ul>
    </nav>
    <div class="logout">
     <a href="./login.php">
          logout  <i class="fa-solid fa-arrow-right-from-bracket"></i> 
     </a>
    </div>
</div>
