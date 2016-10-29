<?php

namespace Drupal\react_module_boilerplate\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello React' Block
 *
 * @Block(
 *   id = "hello_react",
 *   admin_label = @Translation("Hello React"),
 * )
 */
class HelloReact extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = array(
      '#markup' => '<div id="hello-react"></div>',
    );

    // Add the example library.
    $build['#attached']['library'][] = 'react_module_boilerplate/example';

    return $build;
  }
}