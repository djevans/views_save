<?php

/**
 * @file
 * Contains saved_view.page.inc.
 *
 * Page callback for Saved View entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Saved View templates.
 *
 * Default template: saved_view.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_saved_view(array &$variables) {
  // Fetch SavedView Entity Object.
  $saved_view = $variables['elements']['#saved_view'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
