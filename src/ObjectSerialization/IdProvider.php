<?php

namespace Qck\Interfaces\ObjectSerialization;

/**
 * An interface for retrieving Objects
 * 
 * @author muellerm
 */
interface IdProvider
{

  /**
   * 
   * @param object $Object
   * @return mixed an existing id or a new one if none exists
   */
  function getObjectId( $Object );
}
