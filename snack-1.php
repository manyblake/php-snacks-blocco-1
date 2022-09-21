<?php

$fixtures = [
  [
    'home' => 'Treviso',
    'visitors' => 'Venezia',
    'homeScore' => 99,
    'visitorsScore' => 96,
  ],
  [
    'home' => 'Reggiana',
    'visitors' => 'Scafati',
    'homeScore' => 88,
    'visitorsScore' => 94,
  ],
  [
    'home' => 'Varese',
    'visitors' => 'Napoli',
    'homeScore' => 78,
    'visitorsScore' => 86,
  ],
  [
    'home' => 'Derthona',
    'visitors' => 'Olimpia Milano',
    'homeScore' => 97,
    'visitorsScore' => 101,
  ],
  [
    'home' => 'Trento',
    'visitors' => 'Brescia',
    'homeScore' => 89,
    'visitorsScore' => 88,
  ],
  [
    'home' => 'Trieste',
    'visitors' => 'Verona',
    'homeScore' => 91,
    'visitorsScore' => 93,
  ],
  [
    'home' => 'Pesaro',
    'visitors' => 'Brindisi',
    'homeScore' => 79,
    'visitorsScore' => 84,
  ],
];

?>

<ul>
  <?php for ($i = 0; $i < count($fixtures); $i++) { ?>

  <li>
    <?php echo "{$fixtures[$i]['home']} - {$fixtures[$i]['visitors']} | {$fixtures[$i]['homeScore']}-{$fixtures[$i]['visitorsScore']}"; ?>
  </li>

  <?php
}?>
</ul>