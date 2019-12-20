<?php

namespace CyberSai\LaravelUSSD\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class CreateTitledView extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'ussd:view-titled';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create USSD Titled View';

    protected $type = 'Titled View';

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\USSD';
    }

    protected function getStub()
    {
        if ($this->option('compact') && $this->option('footer')) {
            return __DIR__ . '/Stubs/ussd_titled_footer_compact_view.stub';
        } else if ($this->option('compact')) {
            return __DIR__ . '/Stubs/ussd_titled_compact_view.stub';
        } else if ($this->option('footer')) {
            return __DIR__ . '/Stubs/ussd_titled_footer_view.stub';
        } else {
            return __DIR__ . '/Stubs/ussd_titled_view.stub';
        }
    }

    protected function getOptions()
    {
        return [
            ['footer', null, InputOption::VALUE_NONE, 'Indicates that view should include a footer'],
            ['compact', null, InputOption::VALUE_NONE, 'Indicates that view should be compact']
        ];
    }
}
