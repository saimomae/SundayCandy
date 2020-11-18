<?php  if (count($errors) > 0) : ?>
<?php  require_once('connect.php'); ?>
  <div class="msg">
  	<?php foreach ($errors as $error) : ?>
  	  <span><?php echo $error ?></span>
  	<?php endforeach ?>
  </div>
<?php  endif ?>