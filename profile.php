<div class="profile">
<?php if ($account->picture) { print theme('user_picture', $account); } ?>
  <?php foreach ($fields as $category => $items) {
    if (strlen($category) > 0) { ?>
<h2 class="title"> <?php print check_plain($category); ?> </h2>
<?php } ?>
    <dl>
<?php
      foreach ($items as $item) {
        if (isset($item['title'])) { ?>
        <dt class="<?php print ($item['class'].'">'. $item['title']); ?> </dt>
  <?php } ?>
    <dd class="<?php print ( $item['class'] .'">'. $item['value']); ?></dd>
<?php } ?>
     </dl>
<?php } ?>
</div>
