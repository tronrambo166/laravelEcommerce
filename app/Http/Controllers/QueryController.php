<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    //


    //Query Buider queries



//Getting data
   
        $users = DB::table('users')->get();

        return view('user.index', ['users' => $users]);
    



$user = DB::table('users')->where('name', 'John')->first();

return $user->email;



$email = DB::table('users')->where('name', 'John')->value('email');




//To retrieve a single row by its id column value, use the find method:

$user = DB::table('users')->find(3);


// single colum from from multiple users

titles = DB::table('users')->pluck('title');

foreach ($titles as $title) {
    echo $title;
}


// 1000 of users getting 100 at each loop

DB::table('users')->orderBy('id')->chunk(100, function ($users) {
    foreach ($users as $user) {
        //
    }






//You may stop further chunks from being processed by returning false from the closure:

DB::table('users')->orderBy('id')->chunk(100, function ($users) {
    // Process the records...

    return false;
});




//count, max, min, avg, and sum.
use Illuminate\Support\Facades\DB;

$users = DB::table('users')->count();

$price = DB::table('orders')->max('price');

$price = DB::table('orders')
                ->where('finalized', 1)
                ->avg('price');


              //  Instead of using the count method to determine //if any records exist that match your query's constraints, you may use the exists and doesntExist methods:

if (DB::table('orders')->where('finalized', 1)->exists()) {
    // ...
}

if (DB::table('orders')->where('finalized', 1)->doesntExist()) 
    // ...
//}




// Select

 $users = DB::table('users')
            ->select('name', 'email as user_email')
            ->get();


//for creating raw string 

$users = DB::table('users')
             ->select(DB::raw('count(*) as user_count, status'))
             ->where('status', '<>', 1)
             ->groupBy('status')
             ->get();




             $orders = DB::table('orders')
                ->select('city', 'state')
                ->groupByRaw('city, state')
                ->get();



//Inner Join multiple tables

                $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();




            //Left Join multiple tables
            //Right Join multiple tables


//Advance Join

            DB::table('users')
        ->join('contacts', function ($join) {
            $join->on('users.id', '=', 'contacts.user_id')
                 ->where('contacts.user_id', '>', 5);
        })
        ->get();


//where
$users = DB::table('users')
                ->where('votes', '=', 100)
                ->where('age', '>', 35)
                ->get();

or

$users = DB::table('users')->where('votes', 100)->get();

$users = DB::table('users')
                ->where('name', 'like', 'T%')
                ->get();



$users = DB::table('users')->where([
    ['status', '=', '1'],
    ['subscribed', '<>', '1'],
])->get();




$users = DB::table('users')
            ->where('votes', '>', 100)
            ->orWhere(function($query) {
                $query->where('name', 'Abigail')
                      ->where('votes', '>', 50);
            })
            ->get();



//Group by order by and Limit

            $users = DB::table('users')
                ->orderBy('name', 'desc')
                ->orderBy('email', 'asc')
                ->get();



                $users = DB::table('users')
                ->groupBy('account_id')
                ->having('account_id', '>', 100)
                ->get();



$users = DB::table('users')
                ->offset(10)
                ->limit(5)
                ->get();


//Insert

                DB::table('users')->insert([
    ['email' => 'picard@example.com', 'votes' => 0],
    ['email' => 'janeway@example.com', 'votes' => 0],
]);


//Upsert will insert new colms and update existing colums

                DB::table('flights')->upsert([
    ['departure' => 'Oakland', 'destination' => 'San Diego', 'price' => 99],
    ['departure' => 'Chicago', 'destination' => 'New York', 'price' => 150]
], ['departure', 'destination'], ['price']);




  //Update 


                $affected = DB::table('users')
              ->where('id', 1)
              ->update(['votes' => 1]);



              DB::table('users')
    ->updateOrInsert(
        ['email' => 'john@example.com', 'name' => 'John'],
        ['votes' => '2']
    );


//Increment ... Decrement 
    DB::table('users')->increment('votes', 1, ['name' => 'John']);
    DB::table('users')->decrement('votes', 1, ['name' => 'John']);




DB::table('users')->truncate(); // Delete




// For debugging if there's a problem in the query

DB::table('users')->where('votes', '>', 100)->dd();

DB::table('users')->where('votes', '>', 100)->dump();


// pagination

public function index()
    {
        return view('user.index', [
            'users' => DB::table('users')->paginate(15)
        ]);
    }


}
