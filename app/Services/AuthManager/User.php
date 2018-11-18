<?php

namespace App\Services\AuthManager;

class User
{
    protected $name;
    protected $roles = [];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addRole($role)
    {
        array_push($this->roles, $role);
    }

    public function removeRole($role)
    {
        unset($this->roles[array_search($role, $this->roles)]);
    }

    public function roles()
    {
        return $this->roles;
    }
}
