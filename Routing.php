<?php

    include './lib/Router.php';
    include './lib/Cipher.php';

    include './lib/Config.php';
    // include './lib/Include.php';


    if(isset($_COOKIE['user_id']) && isset($_COOKIE['role']))
    {
        define('USER_ID', $_COOKIE['user_id']);
        define('USER_ROLE', $_COOKIE['role']);

        if(USER_ROLE == 'applicant') {
            /* (Applicant Dashboard) route */
            $router->get('/account', function () {
                include './lib/Include.php';

                if( $fetch->getInformation('applicant_personal_information', 'user_id') == null OR
                    $fetch->getInformation('applicant_education', 'user_id') == null OR
                    $fetch->getInformation('applicant_work_experience', 'user_id') == null OR
                    $fetch->getInformation('applicant_contact_information', 'user_id') == null ) {
                    include './pages/applicant/profile-completion.php';
                } 
                else {
                    include './pages/applicant/dashboard.php';
                }
            });
        }

        else if(USER_ROLE == 'employer') {
            /* (Employer Dashboard) route */
            $router->get('/account', function () {
                include './lib/Include.php';

                if( $fetch->getInformation('employer_information', 'user_id') == null ) {
                    include './pages/employer/profile-completion.php';
                }
                else {
                    include './pages/employer/dashboard.php';
                }
            });
        }

        else if(USER_ROLE == 'admin'){
            /* (Admin Dashboard) route */
            $router->get('/account', function () {
                include './lib/Include.php'; 
                include './pages/admin/side-navigation/reports/ReportsInclude.php'; 
                include './pages/admin/dashboard.php';
            });
        }

        else if(USER_ROLE == 'bpc'){
            /* (BPC Dashboard) route */
            $router->get('/account', function () {
                include './pages/bpc/dashboard.php';
            });
        }
    }

    /* (Find Job) route */ 
    $router->get('/find-job', function () {
        include './pages/find-job.php';
    });

    /* (Job Details) route */ 
    $router->get('/job-details', function () {
        include './pages/job-details.php';
    });

    /* (Job Details) route */ 
    $router->get('/privacy-policy', function () {
        include './pages/privacy-policy.php';
    });

    

    /* (Homepage) route */ 
    $router->get('/', function () {
        include './lib/Include.php';
        include './pages/admin/side-navigation/reports/ReportsInclude.php';         
        include './pages/home-page.php';
    });
?>