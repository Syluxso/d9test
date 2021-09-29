<?php
namespace Drupal\nytech\Controller;

trait OrgHomeTemplateTrate {

  public function output($entity)
  {
    return [
      '#theme' => 'o_home',
      '#org_id' => $entity->id->value,
      '#org_name' => $entity->get('title')->value,
    ];
  }
}
