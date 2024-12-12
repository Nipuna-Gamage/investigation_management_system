<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReceivingTypeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'receivingType' => 'required|string|max:255',
            'status' => 'required|in:Active,De-active',
        ]);

        // Generate a unique UUID for inst_uuid
        $inst_uuid = (string) Str::uuid();

        // Insert the new receiving type into the database
        DB::table('inv_institute')->insert([
            'inst_uuid' => $inst_uuid,
            'institute_name' => $request->receivingType,
            'status' => $request->status,
            'created_on' => now(),
        ]);

        // Redirect back with a success message
        return redirect()->route('settings.receiving-types')->with('success', 'Receiving type added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'receivingType' => 'required|string|max:255',
            'status' => 'required|in:Active,De-active',
            'typeId' => 'required|uuid',
        ]);

        DB::table('inv_institute')->where('inst_uuid', $request->typeId)->update([
            'institute_name' => $request->receivingType,
            'status' => $request->status,
            'updated_on' => now(),
        ]);

        return redirect()->route('settings.receiving-types')->with('success', 'Receiving type updated successfully.');
    }
} 