<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Training;
use App\Models\TrainingHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training_histories = TrainingHistory::with('training:id,name')
                                ->where('user_id', 1)
                                ->select('id', 'training_id', 'weight', 'repetition', 'set', 'is_done', DB::raw("DATE_FORMAT(updated_at, '%Y/%m/%d') AS date"))
                                ->get();
        return response()->json($training_histories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $training_history = new TrainingHistory();
        $res = $training_history->fill($request->all())->save();
        return response()->json(['message' => $res, 'id' => $training_history->id]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $training_history = TrainingHistory::find($id);
        $res = $training_history->fill($request->all())->save();
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
        $training_history = TrainingHistory::with('training:id,user_id')->find($id);
        $db_user_id = $training_history->training->user_id;

        // [add]リクエストしてきたユーザーと登録されているユーザーが一致したら削除
        $user_id = 1;
        if ($user_id === $db_user_id) {
          $res = $training_history->delete();
        } else {
          $res = 'This ID is not yours';
        }
        return response()->json(['message' => $res]);
    }
}
