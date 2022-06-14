<?php


use App\Models\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = config('db.travels');
    
    
    

       foreach($travels as $travel) {
        $new_travel= new Travel();
        $new_travel->title = $travel['title'];
        $new_travel->price = $travel['price'];
        $new_travel->city = $travel['city'];
        $new_travel->description = $travel['description'];
        $new_travel->type = $travel['type'];
        $new_travel->image = $travel['image'];
        $new_travel->is_available = $travel['is_available'];
        $new_travel->location = $travel['location'];
        $new_travel->season = $travel['season'];
        $new_travel->save();
    }
    }
}

