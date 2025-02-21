<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class CreateDatabase extends Command
{
    protected $signature = 'db:create';
    protected $description = 'Create the database if it does not exist';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Temporarily set the database name to null
        $database = Config::get('database.connections.mysql.database');
        Config::set('database.connections.mysql.database', null);

        // Create the database if it does not exist
        $query = "CREATE DATABASE IF NOT EXISTS $database";
        DB::statement($query);

        // Reset the database name in the configuration
        Config::set('database.connections.mysql.database', $database);

        $this->info('Database created successfully');
        
        return 0;
    }
}
