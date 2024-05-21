<?php

// local/greetings/reports.php

require_once(__DIR__ . '/../../config.php');
require_login();

$PAGE->set_url(new moodle_url('/local/greetings/reports.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('reports', 'local_greetings'));
$PAGE->set_heading(get_string('reports', 'local_greetings'));

// Example messages array (replace with actual data retrieval logic)
$messages = [
    ['id' => 1, 'content' => 'Hello, World!', 'author' => 'User1'],
    ['id' => 2, 'content' => 'Greetings!', 'author' => 'User2']
];

$renderable = new \local_greetings\output\reports_page($messages);
$output = $PAGE->get_renderer('local_greetings');
echo $output->header();
echo $output->render($renderable);
echo $output->footer();
