<?php

namespace Qck\Interfaces\Serialization;

/**
 * An interface for exporting objects
 * 
 * @author muellerm
 */
interface Sink extends IdProvider
{

  /**
   * recursively save 
   * 
   * @param Serializable $Object an id
   * @return void
   */
  function save( Serializable $Object );
}
