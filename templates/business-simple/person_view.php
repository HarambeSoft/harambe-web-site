<div class="col-md-4 col-sm-6">
<div class="well text-center fixed-panel">           
    <img src="<?php echo $person->image(); ?>" class="img-circle" alt="<?php echo $person->name(); ?>" width="175" height="175" /> 
    <h2><?php echo $person->name(); ?></h2>
    <p><?php echo $person->info(); ?></p>
    <p><?php echo $person->email(); ?></p>
</div>
</div>
