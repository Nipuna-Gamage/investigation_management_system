<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CommonIssuesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment_name' => 'required|string|max:200',
            'status' => 'required|in:Active,De-active',
        ]);
        
        // Debugging: Log the request data
        Log::info('Incoming Request Data:', $request->all());

        DB::table('inv_comment')->insert([
            'comm_uuid' => (string) Str::uuid(),
            'comment_name' => $request->comment_name,
            'status' => $request->status,
            'created_on' => now(),
        ]);

        return redirect()->route('settings.common-issues')->with('success', 'Comment added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'receivingType' => 'required|string|max:255',
            'status' => 'required|in:Active,De-active',
            'typeId' => 'required|uuid',
        ]);

        DB::table('inv_comment')->where('comm_uuid', $request->typeId)->update([
            'comment_name' => $request->receivingType,
            'status' => $request->status,
            'updated_on' => now(),
        ]);

        return redirect()->route('settings.common-issues')->with('success', 'Common issue updated successfully.');
    }
} 