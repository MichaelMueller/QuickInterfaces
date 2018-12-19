<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a DataNode
 * @author muellerm
 */
interface ObjectStore
{

  /**
   * @return PersistableObject
   */
  function load( $Uuid );

  /**
   * persist all changed objects
   */
  function commit();
}
