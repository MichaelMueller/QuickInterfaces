<?php

namespace Qck\Interfaces;

/**
 * A central interface for addressing objects using an id
 * @author muellerm
 */
interface ObjectIdProvider
{

  /**
   * 
   * @param mixed $Id
   * @return object An object or null
   */
  function getObjectId( $Object );
}
