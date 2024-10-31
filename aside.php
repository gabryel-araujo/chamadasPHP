<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<aside>
  <img src="Queue-bro.png" alt="imagem de fila">
  <div class="<?= $page == 'dashboard' ? 'selectedButtonArea' : 'buttonArea' ?>">
    <i class="fa-solid fa-chart-simple"></i>
    <p>Dashboard</p>
  </div>
</aside>