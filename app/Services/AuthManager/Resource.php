<?php

namespace App\Services\AuthManager;

class Resource
{
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function read()
    {
        echo "Read operation is  done";
    }

    public function write()
    {
        echo "Write operation is  done";
    }

    public function delete()
    {
        echo "Delete operation is  done";
    }
}
