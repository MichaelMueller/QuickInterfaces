<?php

namespace Qck\Interfaces;

/**
 * An Config Service Class
 * 
 * @author muellerm
 */
interface App
{

  /**
   * @return string the name identifying this web app
   */
  function getAppName();

  /**
   * @return Router
   */
  function getRouter();

  /**
   * @return ControllerFactory
   */
  function getControllerFactory();

  /**
   * @return Mail\AdminMailer
   */
  function getAdminMailer();

  /**
   * @return ErrorController
   */
  function getErrorController();

  /**
   * @return string
   */
  function getHostName();

  /**
   * @return \Qck\Inputs
   */
  function getInputs();

  /**
   * @return DirectoryConfig
   */
  function getDirectoryConfig();

  /**
   * 
   * @param \Qck\Interfaces\DirectoryConfig $DirectoryConfig
   */
  function setDirectoryConfig( DirectoryConfig $DirectoryConfig );
}
