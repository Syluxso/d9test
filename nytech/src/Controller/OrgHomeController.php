<?php
namespace Drupal\nytech\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Class OrgHomeController.
 ** @package Drupal\nytech\Controller
 */
class OrgHomeController extends ControllerBase
{

  use OrgHomeTemplateTrate;

  /**
   * @param $org_id
   * @return Rendered output.
   */
  public function index($org_id)
  {
    $org_entity = \Drupal::service('nytech_org_home.org_id');
    $entity = $org_entity->org_load($org_id);
    return $this->output($entity);
  }

}
