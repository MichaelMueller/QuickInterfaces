<?php

namespace Qck\Interfaces\GraphSerialization;

/**
 * A central interface for addressing objects using an id
 * @author muellerm
 */
interface IdRegistry extends ObjectIdProvider
{

  /**
   * sets an object
   * @param mixed $Id
   * @return object An object or null
   */
  function setObjectId( $Object, $Id = null );
}
