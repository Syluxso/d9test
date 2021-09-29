<?php
namespace Drupal\nytech\Controller;

trait NodeTemplate {

  public function first_last($first, $last)
  {
    return [
      '#theme' => 'node_output',
      '#one' => $this->t($first),
      '#two' => $this->t($last),
    ];
  }
}
