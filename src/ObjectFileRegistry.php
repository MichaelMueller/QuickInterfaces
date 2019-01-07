<?php

namespace Qck\Interfaces;

/**
 * A generic interface to load, delete or save objects of any class from or to a persistent memory.
 * Implementing classes must have access to some kind of schema object to be able to do the job.
 * The Properties interface is a interface to filter arrays or objects, respectively dictionaries.
 *  
 * @author muellerm
 */
interface ObjectFileRegistry
{

  /**
   * 
   * @param File
   * @return File Description
   */
  function getFile( $Object, $Extension );
}
