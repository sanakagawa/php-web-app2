<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function getAll()
    {
        //
        $members = Member::all();
        $xxx = 1 + 1;
        return response()->json([
            'data' => $members,
            'message' => 'success'
        ], 200);
    }

    public function getOne($id)
    {
        //
        $member = Member::find($id);
        return response()->json([
            'data' => $member,
            'message' => 'success'
        ], 200);
    }

    public function create(Request $request)
    {
        //
        $member = Member::create($request->all());

        return response()->json([
            'data' => $member,
            'message' => 'success'
        ], 200);
    }
}
