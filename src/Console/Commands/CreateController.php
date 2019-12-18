<?php

namespace CyberSai\LaravelUSSD\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

class CreateController extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'ussd:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create USSD Controller';

    protected $type = 'USSD Controller';

    protected function getStub()
    {
        return __DIR__.'/Stubs/ussd_controller.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Http\Controllers';
    }

    protected function replaceClass($stub, $name)
    {
        return str_replace(['DummyClass', 'source'],
            [$this->argument('name'), ucfirst(Config::get('laravelussd.provider'))],
            $stub);
    }
}
