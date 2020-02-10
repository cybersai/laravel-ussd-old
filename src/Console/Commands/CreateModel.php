<?php

namespace Cybersai\LaravelUssd\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CreateModel extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'ussd:model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create USSD Model';

    protected $type = 'USSD Model';

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace;
    }

    protected function getStub()
    {
        return __DIR__ . '/Stubs/ussd_model.stub';
    }
}
