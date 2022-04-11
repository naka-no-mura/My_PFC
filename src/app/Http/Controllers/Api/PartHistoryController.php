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
      // 今日の記録がまだない場合のみ登録
      $today = Carbon::today()->format('Y-m-d');
      $today_part_history = PartHistory::whereDate('created_at', $today)->first();

      if (empty($today_part_history)) {
        $part_history = new PartHistory();
        $input = $request->all();
        $res = $part_history->fill($input)->save();
        $id = $part_history->id;
        return response()->json(['result' => $res, 'id' => $id]);

      } else {
        return response()->json(['result' => 'today is already registered']);
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
