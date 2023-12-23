<div class="container py-4">
    <?php include 'shared/header.php' ?>

    <h2 class="page-header">Create Job</h2>

    <form method="POST" action="create.php">

        <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" name="company"/>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category">
                <option value="0">Select a category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category -> id;?>"><?php echo $category -> name;?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title"/>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea type="text" class="form-control" name="description"/> </textarea>
        </div>

        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location"/>
        </div>

        <div class="form-group">
            <label>Salary</label>
            <input type="number" class="form-control" name="salary"/>
        </div>

        <div class="form-group">
            <label>Contact User</label>
            <input type="text" class="form-control" name="contact_user"/>
        </div>

        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email"/>
        </div>

        <br>

        <input type="submit" class="btn btn-lg btn-success" name="submit" value="Submit"/>

    </form>

    <?php include 'shared/footer.php' ?>
</div>
