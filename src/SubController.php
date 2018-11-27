<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a controller
 * @author muellerm
 */
interface SubController extends Controller
{

  /**
   * 
   * @param \Qck\App $FrontController
   */
  public function setFrontController( \Qck\App $FrontController );
}
