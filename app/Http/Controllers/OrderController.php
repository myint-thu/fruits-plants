<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;
=======
use Carbon\Carbon;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
>>>>>>> f704d5441a9e27d6a9e79722f498d1f0ebfbc58f

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function index()
    {
        //
=======
    public function __construct($value='')
    {
        $this->middleware('role:Admin')->only('index','show');
        $this->middleware('role:Customer')->only('store');
    }
    public function index()
    {
        $date1 = $request->sdate;
        $date2 = $request->edate;

        if ($request->sdate && $request->edate) {
            $orders = Order::whereBetween('orderdate', [new Carbon($date1), new Carbon($date2)])->where('status',0)->get();
        }else{
            $orders = Order::all();
        }

        return view('backend.orders.index',compact('orders'));
>>>>>>> f704d5441a9e27d6a9e79722f498d1f0ebfbc58f
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
<<<<<<< HEAD
        //
=======
        // return "store";
         $cartArr = json_decode($request->G); // arr
        // $cartArr = $myArr->product_list; // if use array in localstorage

        $total = 0;
        // foreach ($cartArr as $row) {
        //     $total+=($row->price * $row->qty);
        // }

        $order = new Order;
        $order->voucherno = uniqid(); // 8880598734
        $order->orderdate = date('Y-m-d');
        $order->user_id = Auth::id(); // auth id (1 => users table)
        $order->note = $request->notes;
        $order->save(); // only saved into order table

        // save into order_detail
        // foreach ($cartArr as $row) {
        //     $order->items()->attach($row->id,['qty'=>$row->qty]);
        // }

        return 'Successful!';

>>>>>>> f704d5441a9e27d6a9e79722f498d1f0ebfbc58f
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
