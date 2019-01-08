<?php

namespace Qck\Interfaces;

/**
 *
 *  An interface for deleting objects which are not in memory.
 *  @author muellerm
 */
interface ObjectDatabase
{

  /**
   * delete objects matching the properties. all referenced objects will also be deleted
   * @param object $Object
   */
  function deleteMatching( $Fqcn, ScalarProperties $Properties );

  /**
   * delete objects matching the properties. all referenced objects will also be deleted
   * @param object $Object
   */
  function delete( $Object );

  function save( $Object );
}
