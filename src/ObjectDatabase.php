<?php

namespace Qck\Interfaces;

/**
 *
 * @author muellerm
 */
interface ObjectDatabase
{
  
  function getObjectStorage( $Fqcn, $Id = null );
}
