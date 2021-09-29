<?php
namespace Drupal\nytech\Services;
use Drupal\node\Entity\Node;
class OrgLoadController {

  function org_load($org_id) {
    $org_id = (int) $org_id;
    $node = \Drupal::entityTypeManager()->getStorage('node')->load($org_id);
    return $node;
  }
}
