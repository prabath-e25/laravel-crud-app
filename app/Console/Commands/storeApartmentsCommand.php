<?php

namespace App\Console\Commands;
use App\Apartment;

use Illuminate\Console\Command;

class storeApartmentsCommand extends Command
{
  public $name;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($name,$address,$no_of_rooms)
    {
        parent::__construct();
          $this->name = $name;
          $this->address = $address;
          $this->no_of_rooms = $no_of_rooms;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      return Apartment::create([
        'apartment_name' => $this->name,
        'apartment_address' => $this->address,
        'no_of_rooms' => $this->no_of_rooms,
      ]);
    }
}
