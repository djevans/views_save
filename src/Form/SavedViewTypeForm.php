<?php

namespace Drupal\views_save\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class SavedViewTypeForm.
 *
 * @package Drupal\views_save\Form
 */
class SavedViewTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $saved_view_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $saved_view_type->label(),
      '#description' => $this->t("Label for the Saved View type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $saved_view_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\views_save\Entity\SavedViewType::load',
      ],
      '#disabled' => !$saved_view_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $saved_view_type = $this->entity;
    $status = $saved_view_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Saved View type.', [
          '%label' => $saved_view_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Saved View type.', [
          '%label' => $saved_view_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($saved_view_type->toUrl('collection'));
  }

}
