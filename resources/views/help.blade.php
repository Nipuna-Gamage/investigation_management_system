@extends('layouts.app')

@section('content')
<div class="content">
    <div class="help-container">
        <!-- Creator Information Section -->
         <div class="creator-info">
            <h2>System Information</h2>       
            <div class="creator-card">
                <div class="creator-header">
                    <img src="creator-avatar.jpg" alt="Creator Photo" class="creator-avatar">
                    <div class="creator-details">
                        <h3>Created By</h3>
                        <p class="creator-name">Didula Induwara</p>
                        <p class="creator-title">Software Engineer</p>    
                    </div>
                </div>
                <div class="creator-contact">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>     
                        <span>nipuna@example.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+94 77 123 4567</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-building"></i>
                        <span>State Ministry of Home Affairs</span>
                    </div>
                </div>         
            </div>
            <!-- System Version Info -->
            <div class="version-info">
                <p><strong>Version:</strong> 1.0.0</p>
                <p><strong>Last Updated:</strong> January 2024</p>
            </div>
        </div>

        <!-- Help Content Section -->
        <div class="help-content">
            <h2>Help & Documentation</h2>
                        
            <!-- Quick Start Guide -->
            <div class="help-section">
                <h3><i class="fas fa-rocket"></i> Quick Start Guide</h3>
                <div class="help-card">
                    <p>Welcome to the Investigation Management Portal. Here's how to get started:</p>
                    <ul>
                        <li>Add new investigations using the "Add investigations" menu</li>
                        <li>Track your cases in the "My cases" section</li>
                        <li>Search for specific persons using the "Search person" feature</li>
                        <li>Generate reports from the "Reports" section</li>
                    </ul>
                </div>
            </div>

            <!-- Common Tasks -->
            <div class="help-section">
                <h3><i class="fas fa-tasks"></i> Common Tasks</h3>
                <div class="help-card">
                    <div class="task-item">
                        <h4>Adding a New Investigation</h4>
                        <ol>
                            <li>Navigate to "Add investigations"</li>
                            <li>Fill in all required fields</li>
                            <li>Upload any relevant documents</li>
                            <li>Click "Save" to submit</li>
                        </ol>
                    </div>
                    <!-- Add more task items as needed -->
                </div>
            </div>

            <!-- Support Section -->
            <div class="help-section">
                <h3><i class="fas fa-headset"></i> Need Support?</h3>
                <div class="help-card support-card">
                    <p>For technical support or questions, please contact:</p>
                    <div class="support-contact">
                        <p><i class="fas fa-envelope"></i> support@ministry.gov.lk</p>
                        <p><i class="fas fa-phone"></i> +94 11 123 4567</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection