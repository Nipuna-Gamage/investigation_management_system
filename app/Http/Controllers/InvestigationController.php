<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestigationController extends Controller
{
    /**
     * Show the form for creating a new investigation.
     */
    public function create()
    {
        // Fetch districts from the database
        $districts = DB::table('inv_district')->select('dist_uuid', 'dist_name')->get();
        $divisionals = DB::table('inv_dsd')->select('dsd_uuid', 'dsd_name')->get();
        
        // Fetch receive types from the inv_institute table
        $receiveTypes = DB::table('inv_institute')->select('inst_uuid', 'institute_name')->get();
        
        // Pass districts, divisionals, and receive types to the view
        return view('investigations.create', compact('districts', 'divisionals', 'receiveTypes'));
    }

    public function addOfficers()
    {
        $userGroups = DB::table('sys_user_groups')->select('group_id', 'group_name')->get();
        return view('settings.add-officers', compact('userGroups'));
    }

    public function editOfficers()
    {
        $userGroups = DB::table('sys_user_groups')->select('group_id', 'group_name')->get();
        return view('settings.edit-officers', compact('userGroups'));
    }

    public function showReceivingTypes()
    {
        // Fetch institutes from the database
        $institutes = DB::table('inv_institute')->select('inst_uuid', 'institute_name', 'status')->get();
        
        // Pass the institutes to the view
        return view('settings.receiving-types', compact('institutes'));
    }
}