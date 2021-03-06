<?php

namespace Drupal\dddlx_home\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Render\Renderer;

/**
 * Class HomeController.
 *
 * @package Drupal\dddlx_home\Controller
 */
class HomeController extends ControllerBase {

  /**
   * Drupal\Core\Render\Renderer definition.
   *
   * @var \Drupal\Core\Render\Renderer
   */
  protected $renderer;

  /**
   * {@inheritdoc}
   */
  public function __construct(Renderer $renderer) {
    $this->renderer = $renderer;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('renderer')
    );
  }

  /**
   * Home.
   *
   * @return
   */
  public function home() {
    return [
      '#theme' => 'home_main_content',
      '#attached' => [
        'library' => ['dddlx_home/fullPage.home']
      ]
    ];
  }

}
