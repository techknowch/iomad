<?php

// Inside your custom plugin's page PHP file or controller
require_once('../../../config.php'); // Adjust the path as needed

// Ensure the user is logged in
require_login();

// Set up the page context
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('noba');
$PAGE->set_title(get_string('pluginname', 'local_greetings'));
$PAGE->set_heading(get_string('pluginname', 'local_greetings'));

// Render the header
echo $OUTPUT->header();

// Include the student dashboard file
include('../../../my_custom_dashboard/student_dashboard.php'); // Adjust the path as needed

// Render the footer
echo $OUTPUT->footer();
