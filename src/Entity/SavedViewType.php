<?php

namespace Drupal\views_save\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Saved View type entity.
 *
 * @ConfigEntityType(
 *   id = "saved_view_type",
 *   label = @Translation("Saved View type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\views_save\SavedViewTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\views_save\Form\SavedViewTypeForm",
 *       "edit" = "Drupal\views_save\Form\SavedViewTypeForm",
 *       "delete" = "Drupal\views_save\Form\SavedViewTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\views_save\SavedViewTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "saved_view_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "saved_view",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/saved_view_type/{saved_view_type}",
 *     "add-form" = "/admin/structure/saved_view_type/add",
 *     "edit-form" = "/admin/structure/saved_view_type/{saved_view_type}/edit",
 *     "delete-form" = "/admin/structure/saved_view_type/{saved_view_type}/delete",
 *     "collection" = "/admin/structure/saved_view_type"
 *   }
 * )
 */
class SavedViewType extends ConfigEntityBundleBase implements SavedViewTypeInterface {

  /**
   * The Saved View type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Saved View type label.
   *
   * @var string
   */
  protected $label;

}
