<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function create()
    {
        $userGroups = DB::table('sys_user_groups')->select('group_id', 'group_name')->get();
        return view('settings.add-officers', compact('userGroups'));
    }

    public function store(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'firstName' => 'required|string|max:255',
                'initials' => 'required|string|max:20',
                'userName' => 'required|string|unique:users,user_name|max:255',
                'password' => 'required|string|min:8|confirmed',
                'subjectCode' => 'required|string|max:50',
                'post' => 'nullable|string|max:100',
                'groupName' => 'required|exists:sys_user_groups,group_id',
                'staffLevel' => 'required|in:yes,no',
                'phone' => 'required|string|max:15',
            ]);

            DB::beginTransaction();

            // Create the user
            $user = User::create([
                'name' => $validated['firstName'],
                'initials' => $validated['initials'],
                'user_name' => $validated['userName'],
                'email' => $validated['userName'] . '@example.com', // Generate email from username
                'password' => Hash::make($validated['password']),
                'subject_code' => $validated['subjectCode'],
                'post' => $validated['post'],
                'group_id' => $validated['groupName'],
                'staff_level' => $validated['staffLevel'],
                'phone' => $validated['phone'],
                'notify_sms' => false,
                'status' => 'active',
                'created_by' => Auth::id() ?? 1
            ]);

            // Create user log entry
            DB::table('user_logs')->insert([
                'user_id' => $user->id,
                'action' => 'created',
                'performed_by' => Auth::id() ?? 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::commit();

            // Redirect with success message
            return redirect()
                ->route('settings.add-officers')
                ->with('success', 'Officer added successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            
            // Log the error
            \Log::error('User creation failed: ' . $e->getMessage());
            
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Failed to create user. ' . $e->getMessage()]);
        }
    }
} 