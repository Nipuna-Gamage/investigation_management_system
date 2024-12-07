@extends('layouts.app')

@section('content')
<div class="content">
                <div class="add-receiving-type-container">
                    <h2>Receiving Types</h2>
                    
                    <div class="mandatory-note">
                        <span class="asterisk">*</span> Fields tag with star are mandatory and MUST be filled.
                    </div>

                    <form class="add-receiving-type-form">
                        <div class="form-group">
                            <label for="receivingType">Receiving Type<span class="required">*</span></label>
                            <textarea 
                                id="receivingType" 
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
                                        value="active" 
                                        checked
                                    >
                                    Active
                                </label>
                                <label class="radio-label">
                                    <input 
                                        type="radio" 
                                        name="status" 
                                        value="deactive"
                                    >
                                    De-Active
                                </label>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-cancel">Cancel</button>
                            <button type="reset" class="btn btn-reset">Reset</button>
                            <button type="submit" class="btn btn-save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection 