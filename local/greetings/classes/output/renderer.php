<?php
// local/greetings/classes/output/renderer.php

namespace local_greetings\output;

use plugin_renderer_base;

class renderer extends plugin_renderer_base {
    public function render_index_page($messages): string {
        $data = ['messages' => $messages];
        return $this->render_from_template('local_greetings/index', $data);
    }
    
    public function render_reports_page($messages): string {
        $data = ['messages' => $messages];
        return $this->render_from_template('local_greetings/reports', $data);
    }
}
