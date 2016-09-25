<?php require('partials/header.php'); ?>
<h1 class='page-header'>Home Page</h1>

<div class="row">
    <div class="col-md-5">
        <div class="well">
            <h2>Task For the Day</h2>

            <ul>
                <?php foreach ($tasks as $task): ?>

                    <?php if ($task->completed): ?>
                        <li><strike><?= $task->description; ?></strike></li>   
                    <?php else: ?>
                        <li><?= $task->description; ?></li> 
                    <?php endif; ?>

                <?php endforeach; ?>        
            </ul>
        </div><!-- well -->
    </div><!-- col -->
</div><!-- row -->

<?php require('partials/footer.php'); ?>
