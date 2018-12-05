<?php

namespace Qck\Interfaces;

/**
 *
 * @author muellerm
 */
interface Authenticator
{

  public function check($Username, $PlainTextPassword);
}
