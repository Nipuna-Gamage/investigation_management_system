@extends('layouts.app')

@section('content')
<div class="content">
    <div class="receiving-types-container">
        <div class="page-header">
            <h2>Receiving Types</h2>
            <a href="add-new.html" class="btn btn-add" id="addNewType">
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
                    <tr>
                        <td>1905 මහජන පැමිණිලි</td>
                        <td>Active</td>
                        <td><a href="#" class="edit-link">Edit</a></td>
                    </tr>
                    <tr>
                        <td>ඍජුව</td>
                        <td>Active</td>
                        <td><a href="#" class="edit-link">Edit</a></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add/Edit Modal -->
    <div class="modal" id="typeModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Add/Edit Receiving Type</h3>
                <button class="close-modal">&times;</button>
            </div>
            <form class="type-form">
                <div class="form-group">
                    <label for="typeName">Receiving Type<span class="required">*</span></label>
                    <input type="text" id="typeName" required>
                </div>
                <div class="form-group">
                    <label for="typeStatus">Status</label>
                    <select id="typeStatus">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-cancel">Cancel</button>
                    <button type="submit" class="btn btn-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
