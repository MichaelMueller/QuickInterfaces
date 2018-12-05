<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a controller
 * @author muellerm
 */
interface User
{

  /**
   * @return string or null if none is set
   */
  function getName();

}
