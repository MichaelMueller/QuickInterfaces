<?php

namespace Qck\Interfaces;

/**
 * A collection of object schemas
 *  
 * @author muellerm
 */
interface ObjectSerializerProvider
{
  /**
   * save an object (tree!)
   * @param string $Fqcn
   * @return ObjectSerializer
   */
  function getObjectSerializer( $Fqcn );
}
