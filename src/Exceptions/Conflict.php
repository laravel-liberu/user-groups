<?php

namespace LaravelEnso\UserGroups\Exceptions;

use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

class Conflict extends ConflictHttpException
{
    public static function hasUsers()
    {
        $message = "The user group has users attached and can't be deleted";

        return new self(__($message));
    }
}
