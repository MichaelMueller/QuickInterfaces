<?php

namespace Qck\Interfaces;

/**
 *
 * An interface for storing objects data persistently
 * @author muellerm
 */
interface ObjectSerializer
{

  /**
   * @return PersistableObject[]
   */
  function getReferencedObjects( $Object );

  /**
   * 
   * @param object $Object
   */
  function toStringArray( $Object );
}
