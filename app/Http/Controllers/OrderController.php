<?php

namespace App\Http\Controllers;




use Carbon\Carbon;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
        //

    // public function __construct($value='')
    // {
    //     $this->middleware('role:Admin')->only('index','show');
    //     $this->middleware('role:Customer')->only('store');
    // }
    public function index()
    {
        
        $orders = Order::all();

        return view('backend.orders.index',compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        

        // return "store";
         $cartArr = json_decode($request->shop_data); // arr
        // $cartArr = $myArr->product_list; // if use array in localstorage

        $total = 0;
         foreach ($cartArr as $row) {
             $total+=($row->price * $row->qty);
         }

        $order = new Order;
        $order->voucherno = uniqid(); // 8880598734
        $order->orderdate = date('Y-m-d');

        $order->user_id = Auth::id(); 
        $order->total = $total;// auth id (1 => users table)
        $order->note = $request->notes;
        $order->save(); // only saved into order table

        // save into order_detail
         foreach ($cartArr as $row) {
             $order->items()->attach($row->id,['qty'=>$row->qty]);
         }

        return 'Successful!';


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('backend.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

