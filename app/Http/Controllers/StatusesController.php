<?php

namespace App\Http\Controllers;

use App\Models\Statuses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);

        Auth::user()->statuses()->create([
            'content' => $request['content']
        ]);

        session()->flash('success', '发布成功！');
        return redirect()->back();
    }

    public function destroy(Statuses $status)
    {
        $this->authorize('destroy', $status);
        $status->delete();
        session()->flash('success', '删除成功');
        return back();
    }
}