<?php

namespace Qck\Interfaces;

/**
 *  
 * @author muellerm
 */
interface ActiveRecord
{

  /**
   * @return an id for this record
   */
  function getId();
  
  /**
   * @return array
   */
  function getData();

  /**
   * 
   * @param string $Name
   * @param mixed $Default if not null set() will be called!
   */
  function get( $Name, $Default = null );

  /**
   * 
   * @param string $Name
   * @param mixed $Value
   * @return void
   */
  function set( $Name, $Value );

  /**
   * @return void
   */
  function save();

  /**
   * @return void
   */
  function delete();
}
