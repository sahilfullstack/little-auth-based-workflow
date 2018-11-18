<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\AuthManager\{User, Auth};

class ManageRoleBasedSystemCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage-role-based-system';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to manage role based system.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // creating a user
        $user = new User("Sahil");

        // adding roles
        $user->addRole("GUEST");
        $user->addRole("EDITOR");


        // creating a user
        $auth = new Auth($user);

        dd($auth->delete());
    }   
}
