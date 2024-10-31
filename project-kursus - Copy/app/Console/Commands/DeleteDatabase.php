<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\Commands;

class DeleteDatabase extends Command
{
    protected $signature = 'db:delete';

    protected $description = 'Drop Database';

    public function handle (){
        $connection = config('database.default');
        $config = config("database.connections.$connection");
        $database = $config['database'];
        $host = $config['host'];
        $username = $config['username'];
        $password = $config['password'];

        $this->info('Deleting Database...');
        $this->dropDatabase($database, $host, $username, $password);
    }

    public function dropDatabase($database, $host, $username, $password){
        $pdo = new \PDO("mysql:host=$host",$username,$password);
        $pdo->exec("DROP DATABASE IF EXIST '$database'");
    }
}