<?php

namespace Qck\Interfaces;

/**
 * Service class for sending messages to an admin
 * @author muellerm
 */
interface ObjectProperties
{
  /**
   * 
   * @param object $Object
   * @return bool
   */
  function matches($Object);
}
