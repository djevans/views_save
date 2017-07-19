<?php

namespace Drupal\views_save\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Saved View entities.
 */
class SavedViewViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
