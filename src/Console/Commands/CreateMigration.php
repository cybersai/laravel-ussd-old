<?php

namespace Cybersai\LaravelUssd\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class CreateMigration extends GeneratorCommand
{
    /**
     * The name of the console command.
     *
     * @var string
     */
    protected $name = 'ussd:migration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create USSD Tracker Migration';

    protected $type = 'USSD migration';

    protected function getStub()
    {
        return __DIR__ . '/Stubs/ussd_migration.stub';
    }

    protected function replaceClass($stub, $name)
    {
        $table_name = $this->argument('name');

        $classname = Str::camel('create_'.$this->argument('name').'_table');

        return str_replace(['DummyClass', 'ussd_migration'], [$classname, $table_name],  $stub);
    }

    protected function getPath($name)
    {
        $name = str_replace($this->laravel->getNamespace(), '', $name);
        return $this->laravel['path.base'].'/database/migrations/'.date('Y_m_d_His_').'create_'.str_replace('\\','/', $name).'_table.php';
    }
}
