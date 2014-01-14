<?php
/**
 * @author  brooke.bryan
 */

namespace Project;

use Bundl\DebugToolbar\DebugToolbarBundl;

class Project extends \Cubex\Core\Project\Project
{
  /**
   * Project Name
   *
   * @return string
   */
  public function name()
  {
    return "Project Name";
  }

  /**
   * @return \Cubex\Core\Application\Application
   */
  public function defaultApplication()
  {
    return new Applications\Www\WwwApplication();
  }

  public function getBundles()
  {
    return [new DebugToolbarBundl()];
  }
}
