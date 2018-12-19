<?php

namespace Qck\Interfaces;

/**
 * An Config Service Class
 * 
 * @author muellerm
 */
interface App extends Functor
{

  /**
   * @return bool
   */
  function wasInvokedFromCli();
}
