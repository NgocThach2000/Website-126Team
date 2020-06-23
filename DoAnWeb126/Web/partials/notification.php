<?php if(isset($_SESSION['success'])): ?> 
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo "<b>". $_SESSION['success']."</b>"; unset($_SESSION['success']); ?>
    </div>
<?php endif; ?>
<?php if(isset($_SESSION['error'])): ?> 
    <div class="alert alert-danger">
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo "<b>". $_SESSION['error']."</b>"; unset($_SESSION['error']); ?>
    </div>
<?php endif; ?>




