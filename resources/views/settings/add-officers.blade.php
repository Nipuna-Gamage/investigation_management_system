@extends('layouts.app')

@section('content')

<div class="content">
                <div class="registration-container">
                    <h2>Branch / Department User Registration</h2>
                    <div class="mandatory-note">
                        <span class="asterisk">*</span> Fields tag with star are mandatory and MUST be filled.
                    </div>

                    <form class="registration-form" action="{{ route('settings.store-officer') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="firstName">First Name<span class="required">*</span></label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>

                        <div class="form-group">
                            <label for="initials">Initials<span class="required">*</span></label>
                            <input type="text" id="initials" name="initials" required>
                        </div>

                        <div class="form-group">
                            <label for="userName">User Name<span class="required">*</span></label>
                            <input type="text" id="userName" name="userName" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password<span class="required">*</span></label>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password<span class="required">*</span></label>
                            <input type="password" id="confirmPassword" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <label for="subjectCode">Subject code<span class="required">*</span></label>
                            <input type="text" id="subjectCode" name="subjectCode" required>
                        </div>

                        <div class="form-group">
                            <label for="post">Post</label>
                            <input type="text" id="post" name="post">
                        </div>

                        <div class="form-group">
                            <label for="groupName">Group Name<span class="required">*</span></label>
                            <select id="groupName" name="groupName" required>
                                @foreach($userGroups as $userGroup)
                                <option value="{{ $userGroup->group_id }}">{{ $userGroup->group_name }}</option>
                                @endforeach
                                <!-- Add other options as needed -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="staffLevel">Staff Level</label>
                            <select id="staffLevel" name="staffLevel">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>

                                <!-- Add other options as needed -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone<span class="required">*</span></label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>

                        <div class="form-group checkbox-group">
                            <label>
                                <input type="checkbox" id="notifySMS" name="notifySMS">
                                Notify by SMS
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-cancel">Cancel</button>
                            <button type="submit" class="btn btn-save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            @endsection