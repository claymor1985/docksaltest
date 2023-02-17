<?php

namespace Drupal\dt_vue_app\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "dt_vue_app_example",
 *   admin_label = @Translation("VUE App example"),
 *   category = @Translation("dt_vue_app")
 * )
 */
class VueAppBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => '<div id="app">' . $this->t('It works!') . '</div>',
      '#attached' => [
        'library' => 'dt_vue_app/dt_vue_app',
      ],
    ];
    return $build;
  }

}
