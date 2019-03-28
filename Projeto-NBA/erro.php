<style type="text/css">
	.error
	{
		float: right;
		color: #F62A2A;
		width: 200px;
		height: 167px;
		margin-top: 440px;
		position: absolute;
		margin-left: 10px;
		
	}
</style>
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>