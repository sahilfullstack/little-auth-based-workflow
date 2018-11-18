<?php

namespace App\Services\AuthManager;

use Exception;

class Auth
{
    protected $actionScore = [
        'READ' => 1, 
        'WRITE' => 4, 
        'DELETE' => 8
    ];

    protected $rolesScore = [
        'GUEST' => 1, 
        'EDITOR' => 4, 
        'ADMIN' => 8
    ];

    protected $user;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->resource = new Resource;
    }


    public function read()
    {
        if( ! $this->can($this->actionScore['READ'])) throw new Exception("Error Processing Request", 1);

        $this->resource->read();
    }    

    public function write()
    {
        if( ! $this->can($this->actionScore['WRITE'])) throw new Exception("Error Processing Request", 1);

        $this->resource->write();
    }

    public function delete()
    {
        if( ! $this->can($this->actionScore['DELETE'])) throw new Exception("Error Processing Request", 1);

        $this->resource->delete();
    }

    public function can($actionScore)
    {
        foreach ($this->user->roles() as $key => $role) 
        {
            if($this->rolesScore[$role] >= $actionScore)
            {
                return true;
            }
        }

        return false;
    }
}
