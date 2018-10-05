<?php

namespace Qck\Interfaces;

/**
 * An Config Service Class
 * 
 * @author muellerm
 */
interface AppConfig
{

  /**
   * @return string the name identifying this web app
   */
  function getAppName();

  /**
   * @return string
   */
  function getWorkingDir( $createIfNotExists = true );

}
