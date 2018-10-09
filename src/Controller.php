<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a controller
 * @author muellerm
 */
interface Controller extends Functor
{

  /**
   * @return Response
   */
  public function run();
}
