<?php

namespace Cybersai\LaravelUssd\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CreateSimpleView extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'ussd:view-simple';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create USSD Simple View';

    protected $type = 'Simple View';

    protected function getStub()
    {
        return __DIR__ . '/Stubs/ussd_simple_view.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Ussd\Views';
    }
}
