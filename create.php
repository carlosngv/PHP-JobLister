<?php include_once 'config/init.php'; ?>


<?php

    $job = new Job;

    if(isset($_POST['submit'])) {
        $data = array();
        $data['job_title'] = $_POST['job_title'];
        $data['description'] = $_POST['description'];
        $data['salary'] = $_POST['salary'];
        $data['location'] = $_POST['location'];
        $data['contact_user'] = $_POST['contact_user'];
        $data['contact_email'] = $_POST['contact_email'];
        $data['company'] = $_POST['company'];
        $data['category_id'] = $_POST['category'];

        if($job -> createJob($data)) {
            // ? Custom helper function
            redirect('index.php', 'Your job has successfully been listed!', 'success');
        } else {
            redirect('index.php', 'Something went wrong. Contact your administrator.', 'error');
        }
    }

    $createTemplate = new Template('templates/job-create.php');

    $createTemplate -> categories = $job -> getCategories();

    echo $createTemplate;

?>
