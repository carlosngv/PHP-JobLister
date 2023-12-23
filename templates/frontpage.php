<div class="container py-4">
    <?php include 'shared/header.php'; ?>

    <div class="jumbotron">
        <h1>Find a job!</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">Choose category</option>
                <?php foreach($categories as $category):?>
                    <option value="<?php echo $category -> id;?>"><?php echo $category -> name;?></option>
                <?php endforeach;?>
            </select>
            <br/>
            <input type="submit" class="btn btn-lg btn-success" value="FIND"/>
        </form>
    </div>

    <h3><?php echo $title; ?></h3>
    <hr/>
    <?php foreach($jobs as $job): ?>

    <div class="row">
        <div class="col-md-10">
            <h4><?php echo $job -> job_title; ?></h4>
            <b><?php echo $job -> cname; ?></b>
            <p><?php echo $job -> description; ?></p>
        </div>

        <div class="col-md-2">
            <a class="btn btn-primary btn-lg" href="job.php?id=<?php echo $job -> id; ?>" >View</a>
        </div>

    </div>

    <?php endforeach; ?>

    <?php include 'shared/footer.php'; ?>
</div>
