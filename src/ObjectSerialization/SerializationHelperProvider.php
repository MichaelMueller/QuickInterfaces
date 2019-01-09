<?php

namespace Qck\Interfaces\ObjectSerialization;

/**
 * An interface for accessing Array Converters based on its Fqcn.
 *  
 * @author muellerm
 */
interface SerializationHelperProvider
{
  /**
   * 
   * @param string $Fqcn
   * @return SerializationHelper
   */
  function getSerializationHelper( $Fqcn );
}

