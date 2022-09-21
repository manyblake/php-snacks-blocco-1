<?php
$posts = [
  '10/01/2019' => [
    [
      'title' => 'Post 1',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 1'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 2'
    ],
  ],
  '10/02/2019' => [
    [
      'title' => 'Post 3',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 3'
    ]
  ],
  '15/05/2019' => [
    [
      'title' => 'Post 4',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 4'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 5'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 6'
    ]
  ],
];
?>

<ul>
  <?php for ($i = 0; $i < count($posts["10/01/2019"]); $i++) { ?>
  <li>
    <?php echo "{$posts["10/01/2019"][$i]['title']} {$posts["10/01/2019"][$i]['author']} {$posts["10/01/2019"][$i]['text']}";
}
?>
  </li>

  <?php for ($i = 0; $i < count($posts["10/02/2019"]); $i++) { ?>
  <li>
    <?php echo "{$posts["10/02/2019"][$i]['title']} {$posts["10/02/2019"][$i]['author']} {$posts["10/02/2019"][$i]['text']}";
}
?>
  </li>

  <?php for ($i = 0; $i < count($posts["15/05/2019"]); $i++) { ?>
  <li>
    <?php echo "{$posts["15/05/2019"][$i]['title']} {$posts["15/05/2019"][$i]['author']} {$posts["15/05/2019"][$i]['text']}";
}
?>
  </li>

</ul>