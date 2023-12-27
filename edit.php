<?php include_once 'config/init.php'; ?>


<?php

    $job = new Job;
    $id = null;

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    if(isset($_POST['submit'])) {
        $data = array();
        $data['job_id'] = $id;
        $data['job_title'] = $_POST['job_title'];
        $data['description'] = $_POST['description'];
        $data['salary'] = $_POST['salary'];
        $data['location'] = $_POST['location'];
        $data['contact_user'] = $_POST['contact_user'];
        $data['contact_email'] = $_POST['contact_email'];
        $data['company'] = $_POST['company'];
        $data['category_id'] = $_POST['category'];

        if($job -> updateJob($data)) {
            // ? Custom helper function
            redirect('index.php', 'Your job has successfully been <strong>edited</strong>!', 'success');
        } else {
            redirect('index.php', '<strong>Something went wrong.</strong> Contact your administrator.', 'error');
        }
    }

    $editTemplate = new Template('templates/job-edit.php');

    $editTemplate -> categories = $job -> getCategories();
    $editTemplate -> job = $job -> getJobById($id);
    $editTemplate -> title = $editTemplate -> job -> job_title;
    $editTemplate -> jobCategory = $job -> getCategory($editTemplate -> job -> category_id);

    echo $editTemplate;



?>
