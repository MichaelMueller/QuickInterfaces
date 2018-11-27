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
   * @return Router or null
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
   * @return Env
   */
  function getHostName();

  /**
   * @return \Qck\Request
   */
  function getRequest();
}
