<?php
require_once('../../config.php');

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/layout-test.php'));

$PAGE->set_title(get_string('test', 'local_greetings'));
$PAGE->set_heading(get_string('test', 'local_greetings'));
$PAGE->set_pagelayout('standard');
$output = $PAGE->get_renderer('local_greetings');


echo $OUTPUT->header();
// Your content goes here. We will just echo some HTML for simplicity.
// echo '<div class="box border p-3">Here is some content but it can be anything else, too.</div>';

$data = [
    'name' => 'Lorem ipsum',
    'description' => format_text($description, FORMAT_HTML),
];

echo $OUTPUT->render_from_template('local_greetings/layout-test', $data);

echo $OUTPUT->footer();