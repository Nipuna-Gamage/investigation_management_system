@extends('layouts.app')

@section('content')
<div class="content">
                <div class="add-receiving-type-container">
                    <h2>Receiving Types</h2>
                    
                    <div class="mandatory-note">
                        <span class="asterisk">*</span> Fields tag with star are mandatory and MUST be filled.
                    </div>

                    <form class="add-receiving-type-form" action="{{ route('settings.receiving-types.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="receivingType">Receiving Type<span class=""></span></label>
                            <textarea 
                                id="receivingType" 
                                name="receivingType" 
                                rows="4" 
                                required
                                placeholder="Enter receiving type"
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
                            <a href="{{ route('settings.receiving-types') }}" class="btn btn-cancel">Cancel</a>
                            <button type="reset" class="btn btn-reset">Reset</button>
                            <button type="submit" class="btn btn-save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection 