<?php

namespace Qck\Interfaces;

/**
 * An Config Service Class
 * 
 * @author muellerm
 */
interface AppConfig extends HostNameProvider
{

  /**
   * @return string the name identifying this web app
   */
  function getAppName();

  /**
   * @return Request
   */
  function getRequest();

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
}
