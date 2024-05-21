<?php

$output = $PAGE->get_renderer('local_greetings');

echo $output->header();

$sometext = 'Here is some content but it can be anything else, too.';
$renderable = new \local_greetings\output\layout_test_page($sometext);
echo $output->render($renderable);

echo $output->footer();