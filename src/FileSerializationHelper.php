<?php

namespace Qck\Interfaces;

/**
 * An interface for creating File objects based on an id and for providing the associated 
 * ArraySerializer. Could be used for serialization tasks.
 *  
 * @author muellerm
 */
interface FileSerializationHelper
{

  /**
   * 
   * @param mixed $Id
   * @param string $FileExtension
   * @return \Qck\Interfaces\File
   */
  function getFile( $Id );

  /**
   * 
   * @return \Qck\Interfaces\ArraySerializer
   */
  function getArraySerializer();
}
