<?php

namespace Qck\Interfaces;

/**
 *
 * @author muellerm
 */
interface Property
{
  /**
   * 
   * @param object $Object
   * @param mixed $Scalar
   * @param \Qck\Interfaces\ObjectSource $Source
   * @param bool $Reload
   */
  function setScalar( $Object, $Scalar, ObjectSource $Source, $Reload = false );

  /**
   * 
   * @param object $Object
   * @param \Qck\Interfaces\ObjectIdProvider $ObjectIdProvider
   */
  function toScalar( $Object, \Qck\Interfaces\ObjectIdProvider $ObjectIdProvider );
  
  /**
   * 
   * @param mixed $Object
   * @return mixed
   */
  function getValue($Object);
  
  /**
   * @return bool
   */
  function isWeakReference();
}
