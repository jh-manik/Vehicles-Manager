<?php

    require('../app/classes/VehicleManager.php');

    $vehicles = (new VehicleManager)->getVehicles();

    require('./views/header.php');

?>

<main class="app-body py-5 homepage">

	<div class="container">
		<div class="content-container--vehiclesAdding py-5">
			<p class="lead display-6">
				Click on this Button to Add new Vehicle: <a href="./views/add.php" class="btn btn-info btn-lg py-2 px-5 ms-2">Add New Vehicle</a>
			</p>
		</div> <!-- Add Vehicle Page Link -->

		<div class="row content-container--vehicles">

			<?php
				if ( $vehicles ) :
					foreach ( $vehicles as $id => $vehicle ) :
			?>
			<div class="col-md-4">
				<div class="vehicles-container mb-5">
					<div class="card">
						<img src="<?= $vehicle['image'] ?>" alt="Vehicles Images" class="card-img-top">
						<div class="card-body">
							<h4 class="card-title"><?= $vehicle['name'] ?></h4>
							<h5 class="card-text">Type: <?= $vehicle['type'] ?></h5>
							<p class="lead">Price: $<?= number_format((int) $vehicle['price']) ?></p>

							<div class="customize-btn d-flex pt-3">
								<a href="./views/edit.php?id=<?= $id ?>" class="btn btn-primary py-2 px-5">Edit</a>
								<a href="./views/delete.php?id=<?= $id ?>" class="btn btn-danger py-2 px-5">Delete</a>
							</div>
						</div>
					</div>
				</div> <!-- vehicles-container -->
			</div> <!-- column -->

			<?php
					endforeach;
				else:
					print("<p class='lead text-info text-center display-6'>Add New Vehicle in Your Inventory</p>");
				endif;
			?>
		</div> <!-- end of row -->
	</div> <!-- end of container -->

</main> <!-- app-body -->

<?php require('./views/footer.php'); ?>