<?php

namespace Qck\Interfaces;

/**
 *
 * An interface for storing objects data persistently
 * @author muellerm
 */
interface ObjectSchema
{

  const BOOL_TYPE          = 0;
  const INT_TYPE           = 1;
  const FLOAT_TYPE         = 2;
  const STRING_TYPE        = 3;
  const SINGLE_REF_TYPE    = 4;
  const MULTIPLE_REFS_TYPE = 5;

  /**
   * @return string
   */
  function getIdKey();

  /**
   * @return bool
   */
  function shallCreateIds();

  /**
   * @return array
   */
  function getPropertyNames();

  /**
   * @return int
   */
  function getType( $PropName );

  /**
   * @return string
   */
  function getFqcn( $PropName );

  /**
   * @return int
   */
  function getMaxStringLength( $PropName );
}
