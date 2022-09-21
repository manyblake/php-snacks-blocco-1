<?php

$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod fugiat corrupti cupiditate fuga totam. Dolores rerum ducimus asperiores iure iste aliquam. Nulla eos odio asperiores debitis repudiandae, expedita nemo reiciendis ex voluptate sequi, eligendi, ipsa perferendis accusamus tempora non sed itaque tempore est libero. Delectus excepturi, voluptatem autem eos sunt soluta doloremque eveniet totam iusto expedita quia aspernatur saepe? Rerum, sint rem maxime quidem dolore eius ex animi minus ut minima amet temporibus nulla saepe quos sapiente voluptatem? Beatae vel dolor dolores voluptates autem. Atque rerum iure earum nostrum laborum deleniti commodi ab voluptatem recusandae, alias at, rem neque velit.";

$stringArray = explode('.', $paragraph);

var_dump($stringArray);


for ($i = 0; $i < count($stringArray); $i++) { ?>
  <p>
    <?php echo "{$stringArray[$i]}" ?>
  </p>
<?php
}?>
