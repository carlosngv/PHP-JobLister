<div class="container py-4">
    <?php include 'shared/header.php' ?>

    <h2><?php echo $job -> job_title; ?> (<?php echo $job -> location ?>)</h2>

    <small>Posted by <?php echo $job -> contact_user; ?> on <?php echo $job -> post_date; ?></small>

    <hr/>

    <p class="lead"><?php echo $job -> description; ?></p>

    <ul class="list-group">
        <li class="list-group-item"><strong>Company:</strong> <?php echo $job -> company;?></li>
        <li class="list-group-item"><strong>Salary:</strong> <?php echo $job -> salary;?></li>
        <li class="list-group-item"><strong>Contact user:</strong> <?php echo $job -> contact_user;?></li>
        <li class="list-group-item"><strong>Contact email:</strong> <?php echo $job -> contact_email;?></li>
    </ul>

    <br/><br/>

    <a class="btn btn-large btn-primary" href="index.php">Go back<a/>

    <br/><br/>

    <?php include 'shared/footer.php' ?>
</div>
