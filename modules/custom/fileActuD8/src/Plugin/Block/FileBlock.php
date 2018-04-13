<?php

namespace Drupal\fileActuD8\Plugin\Block;


use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "file_actu_d8_block",
 *   admin_label = @Translation("File Block"),
 * )
 */
class FileBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('This is a simple block!'),
    ];
  }