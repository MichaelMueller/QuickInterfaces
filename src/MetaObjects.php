<?php

namespace Qck\Interfaces;

/**
 * A collection of object schemas
 *  
 * @author muellerm
 */
interface MetaObjects
{
  /**
   * save an object (tree!)
   * @param string $Fqcn
   * @return MetaObject
   */
  function get( $Fqcn );
}
