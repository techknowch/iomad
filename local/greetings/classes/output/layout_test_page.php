<?php

// local/greetings/classes/output/reports_page.php

namespace local_greetings\output;

use renderable;
use templatable;
use renderer_base;
use stdClass;

class reports_page implements renderable, templatable {
    private $messages;

    public function __construct($messages) {
        $this->messages = $messages;
    }

    public function export_for_template(renderer_base $output): stdClass {
        $data = new stdClass();
        $data->messages = $this->messages;
        return $data;
    }
}
