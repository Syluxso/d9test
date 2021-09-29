<?php
namespace Drupal\nytech\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloController.
 ** @package Drupal\mymodule\Controller
 */
class HelloName extends ControllerBase
{

  use NodeTemplate;

  /**
   * @param $name
   * @return array
   */
  public function index($first, $last)
  {
    return $this->first_last($first, $last);
  }

}
