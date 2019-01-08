<?php

namespace Qck\Interfaces;

/**
 * A generic interface to load, delete or save objects of any class from or to a persistent memory.
 * Implementing classes must have access to some kind of schema object to be able to do the job.
 * The Properties interface is a interface to filter arrays or objects, respectively dictionaries.
 *  
 * @author muellerm
 */
interface ObjectLoader
{

  const ASC  = 0;
  const DESC = 1;

  /**
   * get objects matching fqcn and properties
   * @param object $Object
   * @return mixed PersistableObject[] (could be empty) or if $Limit = 1 PersistableObject or null
   */
  function get( $Fqcn, ScalarProperties $Properties, $Limit = null, $Offset = null,
                Property $OrderByProperty = null, $Order = ObjectDatabase::ASC );
}
