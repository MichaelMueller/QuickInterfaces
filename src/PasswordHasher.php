<?php

namespace Qck\Interfaces;

/**
 *
 * @author muellerm
 */
class PasswordHasher
{

  function verify($PlainTextPassword, $HashedPassword);

  function createHash($plainTextPassword);
}
