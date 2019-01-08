<?php

namespace Qck\Interfaces;

/**
 * Basic and simple interface for a DataObject using ActiveRecord pattern
 * 
 * @author muellerm
 */
interface DataObject
{
  /**
   * 
   * @return DataObjectSchema
   */
  function getSchema();

  /**
   * 
   * @return ActiveRecord
   */
  function getActiveRecord();

  /**
   * 
   * @param \Qck\Interfaces\ActiveRecord $ActiveRecord
   */
  function setActiveRecord( ActiveRecord $ActiveRecord );
}
