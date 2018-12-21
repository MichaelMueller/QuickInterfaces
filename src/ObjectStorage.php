<?php

namespace Qck\Interfaces;

/**
 *
 * Basic and simple interface for a DataNode
 * @author muellerm
 */
interface ObjectStorage
{

  /**
   * set a scalar value
   * @param string $Key
   * @param mixed $Value
   */
  function setScalar( $Key, $Value );

  /**
   * 
   * @param type $Key
   * @param \Qck\Interfaces\PersistableObject $PersistableObject
   */
  function setObject( $Key, PersistableObject $PersistableObject );

  /**
   * 
   * @param string $Key
   * @param mixed $DefaultValue
   */
  function get( $Key, $DefaultValue );

  /**
   * persist changes
   */
  function save();

  /**
   * deletes the storage
   */
  function delete();

  /**
   * returns the id of this storage
   */
  function getId();
}
