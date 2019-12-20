<?php

namespace CyberSai\LaravelUSSD\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CreateViewGroup extends GeneratorCommand
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
    protected $description = 'Create new USSD View Group';

    protected $type = 'View Group';

    protected function getStub()
    {
        return __DIR__.'/Stubs/ussd_view_group.stub';
    }

}
