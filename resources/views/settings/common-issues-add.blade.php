@extends('layouts.app')

@section('content')
<div class="content">
                <div class="add-receiving-type-container">
                    <h2>Common Issues</h2>
                    
                    <div class="mandatory-note">
                        <span class="asterisk">*</span> Fields tagged with a star are mandatory and MUST be filled.
                    </div>

                    <form class="add-receiving-type-form" action="{{ route('settings.common-issues.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="commentName">Comment Name<span class="required">*</span></label>
                            <textarea 
                                id="commentName" 
                                name="comment_name" 
                                rows="4" 
                                required
                                placeholder="Enter comment"
                            ></textarea>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input 
                                        type="radio" 
                                        name="status" 
                                        value="Active" 
                                        checked
                                    >
                                    Active
                                </label>
                                <label class="radio-label">
                                    <input 
                                        type="radio" 
                                        name="status" 
                                        value="De-active"
                                    >
                                    De-Active
                                </label>
                            </div>
                        </div>

                        <div class="form-actions">
                            <a href="{{ route('settings.common-issues') }}" class="btn btn-cancel">Cancel</a>
                            <button type="reset" class="btn btn-reset">Reset</button>
                            <button type="submit" class="btn btn-save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection 