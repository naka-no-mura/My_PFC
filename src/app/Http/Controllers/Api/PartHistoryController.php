<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PartHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $part_histories = PartHistory::select('id', 'part_id', DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS date"))->get();
      return response()->json($part_histories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // 今日の記録が登録済みか判断
      $today = Carbon::today()->format('Y-m-d');
      $today_part_history = PartHistory::whereDate('created_at', $today)->first();

      // 登録なし→登録
      if (empty($today_part_history)) {
        $part_history = new PartHistory();
        $res = $part_history->fill($request->all())->save();
        return response()->json(['message' => $res, 'id' => $part_history->id]);

      // 登録済み→更新
      } else {
        $db_part_id = $today_part_history->part_id;
        $posted_part_id = intval($request->part_id);

        // 同じpart_id→何もしない
        if ($db_part_id === $posted_part_id) {
          return response()->json(['message' => 'The same part ID is already registered today']);

          // 異なるpart_id→更新
        } else {
          // return redirect()->action([PartHistoryController::class, 'update'], ['part' => $today_part_history]);
          return response()->json(['message' => 'you have to update']);
        }
      }
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
        $part_history = PartHistory::find($id);
        $res = $part_history->fill($request->all())->save();
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
        //
    }
}
