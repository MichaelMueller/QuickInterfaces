<?php

namespace Qck\Interfaces\ObjectSerialization;

/**
 * An importer for objects from a source
 * 
 * @author muellerm
 */
interface Importer
{

  /**
   * 
   * @param mixed $Id an id
   * @param bool $Reload
   * @return object or null if nothing was found
   */
  function import( $Id, $Reload=false );
}
