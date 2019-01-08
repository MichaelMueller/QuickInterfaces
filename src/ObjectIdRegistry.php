<?php

namespace Qck\Interfaces;

/**
 * A central interface for addressing objects using an id
 * @author muellerm
 */
interface ObjectIdRegistry
{

  /**
   * 
   * @param mixed $Id
   * @return object An object or null
   */
  function getId( $Object );

  /**
   * sets an object
   * @param mixed $Id
   * @return object An object or null
   */
  function setObjectId( $Object, $Id = null );
}
