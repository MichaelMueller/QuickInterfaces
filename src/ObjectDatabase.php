<?php

namespace Qck\Interfaces;

/**
 *
 *  An interface for storing and loading objects which are not in memory.
 *  @author muellerm
 */
interface ObjectDatabase
{

  function loadObjects( $Fqcn, Matcher $Matcher );

  function saveObject( $Object );

  /**
   * delete objects matching the properties. all referenced objects will also be deleted
   * @param object $Object
   */
  function deleteObjects( $Fqcn, Matcher $Matcher );

  /**
   * delete objects matching the properties. all referenced objects will also be deleted
   * @param object $Object
   */
  function deleteObject( $Object );
}
