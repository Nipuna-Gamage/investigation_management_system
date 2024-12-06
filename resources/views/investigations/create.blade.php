@extends('layouts.app')

@section('content')
<div class="content">
    <div class="investigation-form-container">
        <h2>Add Investigation Details</h2>            
        <form class="investigation-form">
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" required>
                    <option value="">Select Type</option>
                    <option value="type1">විමර්ශන</option>
                </select>
            </div>

            <div class="form-group">
                <label for="receiveType">Receive Type</label>
                <select id="receiveType" required>
                    <option value="">Select Receive Type</option>
                    <option value="type1">ඍජුව</option>
                </select>
            </div>

            <div class="form-group">
                <label for="receivedDate">Received Date</label>
                <input type="date" id="receivedDate" required>
            </div>

            <div class="form-group">
                <label for="complainBy">Complain By</label>
                <textarea id="complainBy" required></textarea>
            </div>

            <div class="form-group">
                <label for="dateSentToInv">Date Sent to Investigation Branch</label>
                <input type="date" id="dateSentToInv" required>
            </div>

            <div class="form-group">
                <label for="summary">Summary</label>
                <textarea id="summary" required></textarea>
            </div>

            <div class="form-group">
                <label for="complainType">Complain Type</label>
                <input type="text" id="complainType" required>
            </div>

            <div class="form-group">
                <label for="complainAgainst">Complain Against</label>
                <textarea id="complainAgainst" required></textarea>
            </div>

            <div class="form-group">
                <label for="district">District</label>
                <select id="district" required>
                    <option value="">Select District</option>
                </select>
            </div>

            <div class="form-group">
                <label for="divSecretariat">Divisional Secretariat</label>
                <select id="divSecretariat" required>
                    <option value="">Select Secretariat</option>
                </select>
            </div>

            <div class="form-group">
                <label for="delegatingDate">Date of Delegating Power</label>
                <input type="date" id="delegatingDate">
            </div>

            <div class="form-group">
                <label for="fileRef">File Reference</label>
                <input type="text" id="fileRef">
            </div>

            <div class="form-group">
                <label for="appointTo">Appoint To</label>
                <select id="appointTo" required>
                    <option value="">Select Person</option>
                </select>
            </div>

            <div class="form-group">
                <label for="completionDate">Date to be Completed</label>
                <input type="date" id="completionDate">
            </div>

            <div class="form-section">
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label for="scan_copy">Scan Copy</label>
                        <input type="file" id="scan_copy" name="scan_copy" class="file-input" accept=".pdf,.jpg,.jpeg,.png">
                        <p class="help-text">Accepted formats: PDF, JPG, PNG (Max: 5MB)</p>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn btn-cancel"><i class="fas fa-times"></i> Cancel</button>
                <button type="reset" class="btn btn-reset"><i class="fas fa-redo"></i> Reset</button>
                <button type="submit" class="btn btn-save"><i class="fas fa-save"></i> Save Investigation</button>
            </div>
        </form>
    </div>
</div>
@endsection