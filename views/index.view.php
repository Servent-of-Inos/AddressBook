<?php require 'partials/head.php'; ?>

<?php foreach ($AdressLine as $line) : ?>

	<div>
		<p> 
			<?=$line->id;?>
			<?=$line->Author;?> 
			<?=$line->Title;?>
			<?=$line->Description;?> 
			<?=$line->CreationDate;?>
		</p>  
	</div>	

<?php endforeach; ?>

<h1> Add the Address: </h1>

<?php require 'partials/add-address.php'; ?>

<h1> Update the Address: </h2>

<?php require 'partials/update-address.php'; ?>

<h1> Delete the Address: </h2>

<?php require 'partials/delete-address.php'; ?>
	
</form>

<?php require 'partials/footer.php'; ?>