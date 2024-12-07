@extends('layouts.app')

@section('content')
<div class="content">
    <div class="account-container">
        <h2>Account Details</h2>
        <div class="user-details">
            <div class="detail-item">
                <label>Name:</label>
                <span id="userName">Nipuna</span>
            </div>
            <div class="detail-item">
                <label>Email:</label>
                <span id="userEmail">nipuna@example.com</span>
            </div>
            <div class="detail-item">
                <label>Role:</label>
                <span id="userRole">Admin</span>
            </div>
        </div>
        <h2>Change Password</h2>
        <div class="change-password-form">
            <p class="mandatory-note"><span class="asterisk">*</span> Fields marked with an asterisk are mandatory.</p>
            <form id="changePasswordForm">
                <div class="form-group">
                    <label for="oldPassword">Old Password <span class="required">*</span></label>
                    <input type="password" id="oldPassword" required>
                </div>
                <div class="form-group">
                    <label for="newPassword">New Password <span class="required">*</span></label>
                    <input type="password" id="newPassword" required>
                </div>
                <div class="form-group">
                    <label for="confirmNewPassword">Confirm New Password <span class="required">*</span></label>
                    <input type="password" id="confirmNewPassword" required>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-save">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection