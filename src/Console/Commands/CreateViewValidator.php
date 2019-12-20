<?php

namespace CyberSai\LaravelUSSD\Console\Commands;

use Illuminate\Console\GeneratorCommand;


class CreateViewValidator extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'command:name';

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
}
