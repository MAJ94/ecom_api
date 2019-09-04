<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
        return ['error' => 'Prduct Not Belongs to User'];
    }
}
