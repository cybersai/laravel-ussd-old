<?php

namespace Cybersai\LaravelUssd\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CreateListView extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'ussd:view-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create USSD List View';

    protected $type = 'List View';

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Ussd\Views';
    }

    protected function getStub()
    {
        return __DIR__ . '/Stubs/ussd_list_normal.stub';
    }
}
