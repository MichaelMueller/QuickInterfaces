<?php

namespace Qck\Interfaces\ObjectSerialization;

/**
 * A central interface for addressing objects using an id
 * @author muellerm
 */
interface ObjectRegistry extends IdProvider
{

  /**
   * sets an object
   * @param mixed $Id
   * @return object An object or null
   */
  function setObjectId( $Object, $Id );
  
  /**
   * 
   * @param mixed $Id
   * @return object or null
   */
  function getObject($Id);
}
