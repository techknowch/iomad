<?php
require_once('../../config.php');

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/layout-test.php'));

$PAGE->set_title(get_string('test', 'local_greetings'));
$PAGE->set_heading(get_string('test', 'local_greetings'));
$PAGE->set_pagelayout('standard');


$output = $PAGE->get_renderer('local_greetings');

echo $output->header();

$sometext = 'Here is some content but it can be anything else, too.';
$renderable = new \local_greetings\output\layout_test_page($sometext);
echo $output->render($renderable);

echo $output->footer();

// echo $OUTPUT->header();
// // Your content goes here. We will just echo some HTML for simplicity.
// echo '<div class="box border p-3">Here is some content but it can be anything else, too.</div>';
// echo $OUTPUT->footer();