@extends('layouts.app')

@section('content')
<div class="content">
                <div class="edit-officers-container">
                    <!-- User Selection Section -->
                    <div class="user-select-section">
                        <h2>User accounts</h2>
                        <div class="mandatory-note">
                            <span class="asterisk">*</span> Fields tag with star are mandatory and MUST be filled.
                        </div>
                        
                        <div class="select-form">
                            <div class="form-group">
                                <label for="officerSelect">Name<span class="required">*</span></label>
                                <select id="officerSelect" required>
                                    <option value="">Select an officer</option>
                                    <!-- Options will be populated dynamically -->
                                </select>
                            </div>
                            <button type="button" class="btn btn-select">Select</button>
                        </div>
                    </div>

                    <!-- Edit Form Section -->
                    <div class="edit-form-section">
                        <h2>Edit user accounts</h2>
                        <form class="edit-officer-form">
                            <div class="form-group">
                                <label for="userName">User Name<span class="required">*</span></label>
                                <input type="text" id="userName" required>
                            </div>

                            <div class="form-group">
                                <label for="officerName">Officer name<span class="required">*</span></label>
                                <input type="text" id="officerName" required>
                            </div>

                            <div class="form-group">
                                <label for="subjectCode">Subject code<span class="required">*</span></label>
                                <input type="text" id="subjectCode" required>
                            </div>

                            <div class="form-group">
                                <label for="post">Post</label>
                                <input type="text" id="post">
                            </div>

                            <div class="form-group">
                                <label for="groupName">Group Name<span class="required">*</span></label>
                                <select id="groupName" required>
                                    <option value="admin">Administrator (Admin)</option>
                                    <!-- Add other options as needed -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="staffLevel">Staff Level<span class="required">*</span></label>
                                <select id="staffLevel" required>
                                    <option value="no">No</option>
                                    <!-- Add other options as needed -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone<span class="required">*</span></label>
                                <input type="tel" id="phone" required>
                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-cancel">Cancel</button>
                                <button type="reset" class="btn btn-reset">Reset</button>
                                <button type="submit" class="btn btn-update">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection