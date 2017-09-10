<?php require 'partials/head.php'; ?>

<div class = "container">
	<div class = "row">
		<table class="table table-bordered">

			<tr class="text-info">
				<th>ID:</th>
				<th>Author:</th>
				<th>Title:</th>
				<th>Description:</th>
				<th>Creation Date:</th>
			</tr>
			
			<?php foreach ($AdressLine as $line) : ?>
				<tr >
					<th>
						<div class ="col-xl-1">
							<p><?=$line->id;?></p>
						</div>
					</th>

					<th>
						<div class ="col-xl-2">
							<p><?=$line->Author;?></p>
						</div>
					</th>

					<th>
						<div class ="col-xl-2">
							<p><?=$line->Title;?></p>
						</div>
					</th>
					<th>
						<div class ="col-xl-3">
							<p><?=$line->Description;?></p>
						</div>
					</th>
					<th>
						<div class ="col-xl-4">
							<span><?=$line->CreationDate;?></span>
						</div>
					</th>
				</tr>

			<?php endforeach; ?>

		</table>
	</div>
</div>	

<div class = "container">
	<div class = "row ">
		<div class ="col-xl-12 form-group">
			<p class="text-center text-info">Add the Address: </p>

			<form method="POST" action="/add-address">

				<input class = "form-control" name = "Author" value ="Enter Author"></input>
				<input class = "form-control" name = "Title" value ="Enter Title"></input>
				<input class = "form-control" name = "Description" value ="Enter Description"></input>
				<button class = "form-control btn btn-info" type="Submit"> Enter </button>

			</form>
		</div>
	</div>
	
	<div class = "row">
		<div class ="col-xl-12 form-group">
			<p class="text-center text-info">Update the Address: </p>

			<form method="POST" action="/update-address">

				<input class = "form-control" name = "id" value ="Enter id"></input>
				<input class = "form-control" name = "Author" value ="Enter Author"></input>
				<input class = "form-control" name = "Title" value ="Enter Title"></input>
				<input class = "form-control" name = "Description" value ="Enter Description"></input>
				<button class = "form-control btn btn-info" type="Submit"> Enter </button>

			</form>
		</div>
	</div>

	<div class = "row">
		<div class ="col-xl-12 form-group">
		<p class="text-center text-info">Delete the Address: </mark></p>

			<form method="POST" action="/delete-address">

				<input class = "form-control" name = "id" value =" Enter id"></input>
				<button class = "form-control btn btn-info" type="Submit"> Enter </button>
	
			</form>

		</div>
	</div>
</div>

<?php require 'partials/footer.php'; ?>