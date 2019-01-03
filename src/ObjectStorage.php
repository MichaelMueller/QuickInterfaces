<?php

namespace Qck\Interfaces;

/**
 *
 * An interface for storing objects data persistently
 * @author muellerm
 */
interface ObjectStorage
{

  /**
   * 
   * @param string $Key
   */
  function get( $Key );

  /**
   * 
   * @param type $Key
   * @param type $Value
   */
  function setScalar( $Key, $Value );

  /**
   * 
   * @param type $Key
   * @param type $Value
   */
  function setObject( $Key, PersistableObject $PersistableObject, $WeakRef = false );

  /**
   * persist changes
   */
  function save();

  /**
   * deletes the storage
   */
  function delete();

  /**
   * get 
   */
  function getId();
}
