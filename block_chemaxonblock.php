<?php
class block_chemaxonblock extends block_base {
  public function init() {
    $this->title = get_string('chemaxonblock', 'block_chemaxonblock');
    }
  public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }

    $this->content       = new stdClass;
    $this->content->text = 'The content goes here';
    $this->content->footer = 'Footer goes here';

    return $this->content;
  }
}
