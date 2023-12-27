<div class="container py-4">
    <?php include 'shared/header.php' ?>

    <h2 class="page-header">Edit Job</h2>

    <form method="POST" action="edit.php">

        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" value="<?php echo $job -> company; ?>" name="company"/>
        </div>

        <div class="form-group">
            <label>New Category</label>
            <select class="form-control" name="category">
                <option value="0"><?php echo "Current category: " . $jobCategory -> name; ?></option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category -> id;?>"><?php echo $category -> name;?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" value="<?php echo $job -> job_title; ?>" name="job_title"/>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" name="description"/> <?php echo $job -> description; ?></textarea>
        </div>

        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" value="<?php echo $job -> location; ?>" name="location"/>
        </div>

        <div class="form-group">
            <label>Salary</label>
            <input type="number" class="form-control" value="<?php echo $job -> salary; ?>" name="salary"/>
        </div>

        <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" value="<?php echo $job -> contact_user; ?>" name="contact_user"/>
        </div>

        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" value="<?php echo $job -> contact_email; ?>" name="contact_email"/>
        </div>

        <br>

        <input type="submit" class="btn btn-lg btn-success" name="submit" value="Submit"/>

    </form>

    <?php include 'shared/footer.php' ?>
</div>
