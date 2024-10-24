<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>

<aside>
  <p class="teste">Logo</p>
  <div class="<?= $page == 'dashboard' ? 'selectedButtonArea' : 'buttonArea' ?>">
    <i class="fa-solid fa-chart-simple"></i>
    <p>Dashboard</p>
  </div>

  <div class="<?= $page == 'medicos' ? 'selectedButtonArea' : 'buttonArea' ?>">
    <i class="fa-solid fa-user-doctor"></i>
    <p>Médicos</p>
  </div>
</aside>


