<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

    public function showCommonIssues()
    {
        $comments = DB::table('inv_comment')->select('comm_uuid', 'comment_name', 'status')->get();
        return view('settings.common-issues', compact('comments'));
    }

    public function storeOfficer(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'firstName' => 'required|string|max:255',
            'initials' => 'nullable|string|max:10',
            'userName' => 'required|string|unique:users,user_name|max:255',
            'password' => 'required|string|min:8|confirmed',
            'subjectCode' => 'nullable|string|max:50',
            'post' => 'nullable|string|max:100',
            'groupName' => 'required|exists:sys_user_groups,group_id',
            'staffLevel' => 'nullable|string',
            'phone' => 'required|string|max:15',
            'notifySMS' => 'nullable|boolean',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->firstName;
        $user->initials = $request->initials;
        $user->user_name = $request->userName;
        $user->password = Hash::make($request->password); // Hash the password
        $user->subject_code = $request->subjectCode;
        $user->post = $request->post;
        $user->group_id = $request->groupName; // Assuming you have a foreign key for group
        $user->staff_level = $request->staffLevel;
        $user->phone = $request->phone;
        $user->notify_sms = $request->has('notifySMS'); // Convert checkbox to boolean
        $user->save();

        // Redirect back with a success message
        return redirect()->route('settings.add-officers')->with('success', 'Officer added successfully.');
    }
}