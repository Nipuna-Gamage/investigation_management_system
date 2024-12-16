@extends('layouts.app')

@section('content')
<div class="content">
    <div class="receiving-types-container">
        <div class="page-header">
            <h2>Receiving Types</h2>
            <a href="{{ route('settings.receiving-types-add') }}" class="btn btn-add" id="addNewType">
                <i class="fas fa-plus"></i> Add new
            </a>
        </div>
        <div class="receiving-types-table">
            <table>
                <thead>
                    <tr>
                        <th>Receiving Type</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($institutes as $institute)
                        <tr>
                            <td>{{ $institute->institute_name }}</td>
                            <td>{{ $institute->status }}</td>
                            <td>
                                <a href="#" class="edit-link" 
                                   data-name="{{ $institute->institute_name }}" 
                                   data-status="{{ $institute->status }}" 
                                   data-id="{{ $institute->inst_uuid }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal" id="typeModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Receiving Type</h3>
                <button class="close-modal">&times;</button>
            </div>
            <form class="type-form" action="{{ route('settings.receiving-types') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="typeName">Receiving Type<span class="required">*</span></label>
                    <input type="text" id="typeName" name="receivingType" required>
                </div>
                <div class="form-group">
                    <label for="typeStatus">Status</label>
                    <select id="typeStatus" name="status">
                        <option value="Active">Active</option>
                        <option value="De-active">De-Active</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
