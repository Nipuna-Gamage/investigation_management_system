@extends('layouts.app')

@section('content')
<div class="content">
    <div class="receiving-types-container">
        <div class="page-header">
            <h2>Common Issues</h2>
            <a href="{{ route('settings.common-issues-add') }}" class="btn btn-add" id="addNewIssue">
                <i class="fas fa-plus"></i> Add new
            </a>
        </div>

        <div class="receiving-types-table">
            <table>
                <thead>
                    <tr>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->comment_name }}</td>
                            <td>{{ $comment->status }}</td>
                            <td>
                                <a href="#" class="edit-link" 
                                   data-name="{{ $comment->comment_name }}" 
                                   data-status="{{ $comment->status }}" 
                                   data-id="{{ $comment->comm_uuid }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal" id="typeModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Common Issues</h3>
                <button class="close-modal">&times;</button>
            </div>
            <form class="type-form" action="{{ route('settings.common-issues') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="typeName">Comment Name<span class="required">*</span></label>
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
