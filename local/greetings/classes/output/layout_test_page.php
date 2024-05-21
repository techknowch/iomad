<?php

namespace local_greetings\output;

use renderable;
use renderer_base;
use templatable;
use stdClass;

class layout_test_page implements renderable, templatable {
    /** @var string $sometext Some text to pass data to a template. */
    private $sometext = null;

    public function __construct($sometext): void {
        $this->sometext = $sometext;
    }

    /**
     * Export data to be used as the context for a mustache template.
     *
     * @return stdClass
     */
    public function export_for_template(renderer_base $output): stdClass {
        $data = new stdClass();
        $data->sometext = $this->sometext;

        return $data;
    }
}