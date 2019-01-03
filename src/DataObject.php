<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a DataNode
 * @author muellerm
 */
interface PersistableObject
{

  /**
   * 
   * @param mixed $Key
   */
  function get( $Key );

  function set( $Key, $Value );
}
