<?php

namespace Qck\Interfaces;

/**
 * A central interface for creating objects
 * @author muellerm
 */
interface ObjectFactory
{

  /**
   * creates a new object
   * @param type $Id
   * @param \Qck\Interfaces\Serialization\Serializable $Object
   */
  function create( $Fqcn );

}
