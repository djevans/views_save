<?php

namespace Drupal\views_save\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Saved View entities.
 *
 * @ingroup views_save
 */
interface SavedViewInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Saved View name.
   *
   * @return string
   *   Name of the Saved View.
   */
  public function getName();

  /**
   * Sets the Saved View name.
   *
   * @param string $name
   *   The Saved View name.
   *
   * @return \Drupal\views_save\Entity\SavedViewInterface
   *   The called Saved View entity.
   */
  public function setName($name);

  /**
   * Gets the Saved View creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Saved View.
   */
  public function getCreatedTime();

  /**
   * Sets the Saved View creation timestamp.
   *
   * @param int $timestamp
   *   The Saved View creation timestamp.
   *
   * @return \Drupal\views_save\Entity\SavedViewInterface
   *   The called Saved View entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Saved View published status indicator.
   *
   * Unpublished Saved View are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Saved View is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Saved View.
   *
   * @param bool $published
   *   TRUE to set this Saved View to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\views_save\Entity\SavedViewInterface
   *   The called Saved View entity.
   */
  public function setPublished($published);

  /**
   * Gets the Saved view path.
   *
   * @return string
   *   Path of the Saved view.
   */
  public function getViewPath();

  /**
   * Sets the Saved view path.
   *
   * @param string $path
   *   The path to the view.
   *
   * @return \Drupal\views_save\Entity\SavedViewInterface
   *   The called Saved view entity.
   */
  public function setViewPath($path);

}
