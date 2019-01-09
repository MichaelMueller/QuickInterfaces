<?php

namespace Qck\Interfaces\ObjectSerialization;

/**
 * An interface for exporting objects
 * 
 * @author muellerm
 */
interface Exporter
{

  /**
   * recursively save 
   * 
   * @param mixed $Id an id
   * @return object or null if nothing was found
   */
  function export( $Object );
}
