<?php

namespace Drupal\views_save;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Saved View entity.
 *
 * @see \Drupal\views_save\Entity\SavedView.
 */
class SavedViewAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\views_save\Entity\SavedViewInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished saved view entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published saved view entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit saved view entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete saved view entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add saved view entities');
  }

}
