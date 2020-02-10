<?php

namespace Cybersai\LaravelUssd\Console\Commands;

use Illuminate\Console\GeneratorCommand;


class CreateViewValidator extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'ussd:validator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create USSD View Validator';

    protected $type = 'View Validator';

    protected function getStub()
    {
        return __DIR__.'/Stubs/ussd_view_validator.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Ussd\Validators';
    }
}
