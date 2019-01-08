<?php

namespace Qck\Interfaces;

/**
 * An interface for retrieving associated File objects to arbitrary objects
 *  
 * @author muellerm
 */
interface ObjectFileProvider
{

  /**
   * returns or creates a File Object for the object
   * @param File
   * @return File Description
   */
  function getObjectFile( $Id );
}
