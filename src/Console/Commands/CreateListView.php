<?php

namespace CyberSai\LaravelUSSD\Console\Commands;

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
    protected $description = 'Create a Normal USSD list view';

    protected $type = 'List View';

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\USSD';
    }

    protected function getStub()
    {
        return __DIR__ . '/Stubs/ussd_list_normal.stub';
    }
}
