<?php

$alunni = [
  [
    'name' => 'Michele',
    'lastname' => 'Papagni',
    'votes' => [8, 7, 6, 9, 7, 8],
  ],
  [
    'name' => 'Fabio',
    'lastname' => 'Forghieri',
    'votes' => [7, 7, 6, 9, 6, 5],
  ],
  [
    'name' => 'Roberto',
    'lastname' => 'Marazzini',
    'votes' => [8, 4, 6, 7, 6, 5],
  ],
  [
    'name' => 'Federico',
    'lastname' => 'Pellegrini',
    'votes' => [6, 7, 6, 6, 6, 5],
  ]
]; ?>

<ul>
  <?php for ($i = 0; $i < count($alunni); $i++) {
    $averageVote = array_sum($alunni[$i]['votes']) / count($alunni[$i]['votes']);
  ?>
  <li>
    <?php echo "{$alunni[$i]['name']} {$alunni[$i]['lastname']} {$averageVote}" ?>
  </li>
  <?php
}?>
</ul>