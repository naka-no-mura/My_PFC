<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::where('user_id', 1)
                    ->select('id', 'name', 'protein', 'fat', 'carbohydrate')
                    ->get();
        return response()->json(['message' => true, 'foods' => $foods]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food = new Food();
        $res = $food->fill($request->all())->save();
        return response()->json(['message' => $res, 'id' => $food->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);
        return response()->json(['message' => true, 'food' => $food]);
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
        $food = Food::find($id);
        $res = $food->fill($request->all())->save();
        return response()->json(['message' => $res]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        $db_user_id = $food->user_id;

        $user_id = 1;
        if ($user_id === $db_user_id) {
          $res = $food->delete();
        } else {
          $res = 'This ID is not yours';
        }
        return response()->json(['message' => $res]);
    }
}
