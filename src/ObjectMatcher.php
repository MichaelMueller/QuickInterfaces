<?php

namespace Qck\Interfaces;

/**
 *
 *  An interface for deleting objects which are not in memory.
 *  @author muellerm
 */
interface ObjectMatcher
{

  /**
   * delete objects matching the properties. all referenced objects will also be deleted
   * @param object $Object
   */
  function matches( $Object );
}
