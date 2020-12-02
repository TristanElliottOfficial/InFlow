<?php

namespace App\Custom;

/**
 * Common Class Functions
 * @package InFlow
 * @author Tristan Elliott
 * @version 1.0.0
 */

class Common
{
  /**
   * Status Options
   * Below is the status options for the task status.
   * @return array The array returns status options.
   */
  public static function get_status_options()
  {
    return array(
      'completed'   => 'Completed',
      'running'     => 'Running',
      'paused'      => 'Paused',
      'pending'     => 'Pending',
    );
  }

  /**
   * Priority Options
   * Below is the priority options for the tasks.
   * @return array | Possible options are (low, medium, high, very_high)
   */
  public static function get_priority_options()
  {
    return array(
      'low'       => 'Low',
      'medium'    => 'Medium',
      'high'      => 'High',
      'very_high' => 'Very High'
    );
  }

  /**
   * Errors
   * Below are different errors the app can list.
   * @return array | Error Lists
   */
  public static function get_error_list()
  {
    return array(
      'can_not_delete_projects' => 'You do not have the required permission/s to delete this project',
    );
  }
}
