<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Email;
use App\Models\Phone;
use App\Models\Order;
use App\Exceptions\CustomException;

class ModelControler extends Controller
{
    public function index()
    {

        // User::query()->delete();
        // Email::query()->delete();
        // Phone::query()->delete();
        // Order::query()->delete();

        // $user = new User();
        // $user->name = 'John Doe';
        // $user->save();
        
        // $email = new Email();
        // $email->email = 'john@example.com';
        
        // $user->email()->save($email);
        



        // $phone = new Phone();
        // $phone->number = '222';
        // $user->phones()->save($phone);


        // $phone = new Phone();
        // $phone->number = '333';
        // $user->phones()->save($phone);


        // $phone = new Phone();
        // $phone->number = '444';
        // $user->phones()->save($phone);


        // $phonesData = [
        //     ['number' => '222'],
        //     ['number' => '333'],
        //     ['number' => '444'],
        // ];
        // foreach ($phonesData as $phoneData) {
        //     $phone = new Phone($phoneData);
        //     $user->phones()->save($phone);
        // }


        // $order = new Order();
        // $order->number = '1';
        // $user->orders()->save($order);

        // $order = new Order();
        // $order->number = '2';
        // $user->orders()->save($order);

        // $order = new Order();
        // $order->number = '3';

        // $order = new Order();
        // $order->number = '4';
 
        // $user->orders()->save($order);




        $userId = 132;

        $user = User::find($userId);

        if (!$user) {
            throw new CustomException('User not found in DB !');
        }

        $text = $user->name . " - " . $user->email->pluck('email')->first();

        $text .= " - " .implode(", ", $user->phones()->pluck('number')->toArray() );

        $text .= " - " .implode(", ", $user->orders()->pluck('number')->toArray() );


        // // return dd("done.");
        return dd($text);
    }
}
