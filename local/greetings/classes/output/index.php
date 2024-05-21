<?php

// local/greetings/index.php

require_once(__DIR__ . '/../../config.php');
require_login();

$PAGE->set_url(new moodle_url('/local/greetings/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('greetingstitle', 'local_greetings'));
$PAGE->set_heading(get_string('greetingstitle', 'local_greetings'));

// Example messages array (replace with actual data retrieval logic)
$messages = [
    ['id' => 1, 'content' => 'Hello, World!', 'author' => 'User1'],
    ['id' => 2, 'content' => 'Greetings!', 'author' => 'User2']
];

$output = $PAGE->get_renderer('local_greetings');
echo $output->header();
echo $output->render_index_page($messages);
echo $output->footer();

