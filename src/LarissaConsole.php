<?php
namespace Larissa;
use Illuminate\Console\Command;
class LarissaConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:preview';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Craft database preview';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Hi Larissa!');
    }
}
