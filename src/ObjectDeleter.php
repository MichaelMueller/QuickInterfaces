<?php

namespace Qck\Interfaces;

/**
 *
 *  An interface for deleting objects which are not in memory.
 *  @author muellerm
 */
interface ObjectDeleter
{

  /**
   * delete objects matching the properties. all referenced objects will also be deleted
   * @param object $Object
   */
  function delete( $Fqcn, ScalarProperties $Properties );
}
