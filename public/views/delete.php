<?php require_once('../../app/classes/VehicleManager.php'); ?>
<?php require_once('../../app/include/functions.php'); ?>
<?php require_once('../Controllers/DeleteController.php'); ?>
<?php require('header.php'); ?>

<main class="app-body delete-page">

    <div class="container">
    	<div class="delete content-container shadow py-5 ps-5 mx-auto">

    	    <h1 class="page-title pb-2 text-danger">Delete Vehicle</h1>
    	    <h5 class="page-subtitle">Are you sure you want to delete <strong>Mercedes-Benz</strong>?</h5>

    	    <div class="delete-action py-5 pt-4">
    	    	<form method="post">
    	    		<div class="btn-container d-flex">
    	    			<button type="submit" name="confirm" value="yes" class="btn btn-lg btn-danger px-5 py-2">Yes, Delete</button>
    	    			<a href="../index.php" class="btn btn-lg btn-secondary px-5 py-2">Cancel</a>
    	    		</div>
    	    	</form>
    	    </div> <!-- end of delete-action -->
    	</div> <!-- end delete box -->
    </div>

</main>

<?php require('footer.php'); ?>