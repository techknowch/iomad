<?php
require_once('../../config.php');

$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url(new moodle_url('/local/greetings/layout-test.php'));

$PAGE->set_title(get_string('pluginname', 'local_greetings'));
$PAGE->set_heading(get_string('pluginname', 'local_greetings'));
$PAGE->set_pagelayout('login');


echo $OUTPUT->header();
// Your content goes here. We will just echo some HTML for simplicity.
echo '<div class="box border p-3">Here is some content but it can be anything else, too.</div>';
echo $OUTPUT->footer();