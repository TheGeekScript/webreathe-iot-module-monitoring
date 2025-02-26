<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Module;
use App\Models\ModuleData;

class SimulateModuleData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'simulate:module-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simulate IoT module data generation';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $modules = Module::all();

        foreach ($modules as $module) {
            $value = rand(0, 100);
            $status = (rand(0, 10) > 8) ? 'malfunction' : 'active';
    
            $module->data()->create(['value' => $value]);
            $module->update(['status' => $status]);
        }
    
        $this->info('Module data simulated successfully!');
    }
}
