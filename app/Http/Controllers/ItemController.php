<?php

namespace App\Http\Controllers;
use App\Item;
use App\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "index";
        $items = Item::all();
        // dd($items);

        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('backend.items.create',
        compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "photo" => 'required',
            "price" => 'required',
            "description" => 'required',
            "technology" => 'required',
            "category" => 'required'
        ]);
        // If include file, upload file
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/itemimg'),$imageName);
            $path = 'backend/itemimg/'.$imageName;
        // Data insert
            $item = new Item;
            // tablecolumnname        formname
            //$item->codeno = $request->codeno;
            $item->name = $request->name;
            $item->photo = $path;
            $item->price = $request->price;
            $item->description = $request->description;
            $item->technology = $request->technology;
            $item->category_id = $request->category;
            $item->save();
        // redirect
            return redirect()->route('items.index');
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
    public function edit(Item $item)
    {
        
        $categories = Category::all();
        return view('backend.items.edit',
        compact('categories','item'));
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
        //return "update";
        $request->validate([
            "name" => 'required',
            "price" => 'required',
            "description" => 'required',
            "technology" => 'required',
            "category" => 'required'
        ]);
        //file upload, if data
            if($request->hasFile('photo')){
                    $imageName = time().'.'.$request->photo->extension();
                    $request->photo->move(public_path('backend/itemimg'),$imageName);
                    $path = 'backend/itemimg/'.$imageName;
            }else{
                    $path = $request->oldphoto;
            }
        //data update
            $item = Item::find($id);
            $item->name = $request->name;
            $item->photo = $path;
            $item->price = $request->price;
            $item->description = $request->description;
            $item->technology = $request->technology;
            $item->category_id = $request->category;
            $item->save();
        //redirect
            return redirect()->route('items.index');
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
