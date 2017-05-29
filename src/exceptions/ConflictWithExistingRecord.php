<?php

/**
 * Created by PhpStorm.
 * User: ntimyeboah
 * Date: 29/05/2017
 * Time: 9:25 PM
 */

namespace Shopperholic\Exceptions;

use Illuminate\Database\Eloquent\Model;

class ConflictWithExistingRecord extends \InvalidArgumentException
{
    public static function fromModel(Model $model, $code = 422, \Exception $exception = null): ConflictWithExistingRecord
    {
        $message = sprintf('Conflict with an existing %s record', class_basename($model));

        // Use static to ensure that this class is returned from this method even if extended by another class
        return new static($message, $code, $exception);
    }
}