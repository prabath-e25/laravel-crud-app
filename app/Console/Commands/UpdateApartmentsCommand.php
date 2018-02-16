<?php

namespace App\Console\Commands;
use App\Apartment;

use Illuminate\Console\Command;

class UpdateApartmentsCommand extends Command
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
    public function __construct($id,$name,$address,$no_of_rooms)
    {
        parent::__construct();
          $this->id = $id;
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
      return Apartment::where('id', $this->id)->update([
        'apartment_name' => $this->name,
        'apartment_address' => $this->address,
        'no_of_rooms' => $this->no_of_rooms
      ]);
    }
}
