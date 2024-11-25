<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<aside class="shadow-md">
  <img src="../assets/Ticket-White.png">
  <div class="<?= $page == 'dashboard' ? 'selectedButtonArea' : 'buttonArea' ?>">
    <i class="fa-solid fa-chart-simple text-white"></i>
    <p class="text-white">Dashboard</p>
  </div>
</aside>