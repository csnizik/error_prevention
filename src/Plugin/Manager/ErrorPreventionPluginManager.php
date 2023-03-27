<?php

namespace Drupal\error_prevention\Plugin\Manager;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\error_prevention\Plugin\ErrorPreventionPluginInterface;

/**
 * Manages error prevention plugins.
 *
 * @see \Drupal\error_prevention\Annotation\ErrorPreventionPlugin
 * @see \Drupal\error_prevention\Plugin\ErrorPreventionPluginInterface
 * @see plugin_api
 */
class ErrorPreventionPluginManager extends DefaultPluginManager {

  /**
   * Constructs a new ErrorPreventionPluginManager object.
   *
   * @param string $type
   *   The plugin type.
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   */
  public function __construct($type, \Traversable $namespaces, ModuleHandlerInterface $module_handler) {
    parent::__construct(
      $type,
      $namespaces,
      $module_handler,
      ErrorPreventionPluginInterface::class,
      'Drupal\error_prevention\Annotation\ErrorPreventionPlugin'
    );
  }

}
