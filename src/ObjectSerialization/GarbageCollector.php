<?php

namespace Qck\Interfaces\ObjectSerialization;

/**
 * An interface for removing serialized objects.
 * 
 * @author muellerm
 */
interface GarbageCollector
{

  /**
   * 
   * @param object $Object
   * @return void
   */
  function removeOrphans( $RootObject );
}
