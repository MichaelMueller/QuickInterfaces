<?php

namespace Qck\Interfaces\ObjectSerialization;

/**
 * An interface for conversion of objects to an array of scalar. Implementing classes must "know" these
 * classes.
 *  
 * @author muellerm
 */
interface SerializationHelper
{

  /**
   * 
   * @param mixed $Object a single object
   * @param \Qck\Interfaces\Data\IdProvider $IdProvider
   * @return array an array of primitives!
   */
  function toScalarArray( $Object, IdProvider $IdProvider );

  /**
   * 
   * @param array $ScalarArray
   * @param \Qck\Interfaces\Data\Importer $Importer
   */
  function fromScalarArray( $Object, array $ScalarArray, Importer $Importer );

  /**
   * 
   * @param object $Object
   * @return object[]
   */
  function getOwnedObjects( $Object );

  /**
   * 
   * @return string
   */
  function getFqcn();
}
