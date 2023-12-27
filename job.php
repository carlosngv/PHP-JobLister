<?php include_once 'config/init.php' ?>

<?php
    $job = new Job;

    $jobTemplate = new Template('templates/singlejob.php');

    $jobId = isset($_GET['id']) ? $_GET['id'] : null;

    if($jobId) {
        // TODO: get job by ID
        $jobTemplate -> job = $job -> getJobById($jobId);
    }

    $jobTemplate -> title = $jobTemplate -> job -> job_title;


    echo $jobTemplate
?>
