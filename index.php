<!--
    VIDEO: https://www.youtube.com/watch?v=LEkjrQMmIK0&list=PLeBOZ-QEtNYj0DdKR8ofBpqQTZmAkOB8a
    MINUTE: 14:33
    DATE: 17/12/2023

    RESOURCES:
    - Autoload: https://opensource.com/article/23/4/autoloading-namespaces-php#:~:text=In%20the%20PHP%20language%2C%20autoloading,were%20loaded%20before%20using%20them.
    -
 -->

<?php include_once 'config/init.php';?>

<?php
    $job = new Job;

    // ? The category value from the GET is it's ID.


    $frontPageTemplate = new Template('templates/frontpage.php');

    $category = isset($_GET['category']) ? $_GET['category'] : null;


    if($category) {
        $frontPageTemplate -> jobs = $job -> getByCategory($category);
        $frontPageTemplate -> title = "Latest Jobs in " . $job -> getCategory($category) -> name;
    } else {
        $frontPageTemplate -> title = "Latest Jobs";
        $frontPageTemplate -> jobs = $job -> getAllJobs();
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if($job -> deleteJob($id)) {
            // ? Custom helper function
            redirect('index.php', 'The job has successfully been <strong>deleted</strong>!', 'success');
        } else {
            redirect('index.php', '<strong>Something went wrong.</strong> Contact your administrator.', 'error');
        }


    }

    // ? Setting vars to frontpage
    $frontPageTemplate -> categories = $job -> getCategories();

    echo $frontPageTemplate;
?>
