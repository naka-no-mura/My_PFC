<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FoodHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food_histories = FoodHistory::with('food:id,name')
                            ->where('user_id', 1)
                            ->select('id', 'food_id', 'count', DB::raw("DATE_FORMAT(updated_at, '%Y/%m/%d') AS date"))
                            ->get();
        return response()->json($food_histories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food_history = new FoodHistory();
        $res = $food_history->fill($request->all())->save();
        return response()->json(['message' => $res, 'id' => $food_history->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food_history = FoodHistory::find($id)
                          ->select('user_id', 1)
                          ->select('id', 'food_id', 'count', DB::raw("DATE_FORMAT(updated_at, '%Y/%m/%d') AS date"))
                          ->with('food:id,name,protein,fat,carbohydrate')
                          ->get();
        return response()->json(['message' => $food_history]);
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
        $food_history = FoodHistory::find($id);
        $res = $food_history->fill($request->all())->save();
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
        $food_history = FoodHistory::with('food:id,user_id')->find($id);
        $db_user_id = $food_history->food->user_id;

        // [add]リクエストしてきたユーザーと登録されているユーザーが一致したら削除
        $user_id = 1;
        if ($user_id === $db_user_id) {
          $res = $food_history->delete();
        } else {
          $res = 'This ID is not yours';
        }
        return response()->json(['message' => $res]);
    }
}
