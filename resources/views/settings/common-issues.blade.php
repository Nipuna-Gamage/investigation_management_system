@extends('layouts.app')

@section('content')
<div class="content">
    <div class="receiving-types-container">
        <div class="page-header">
            <h2>Common Issues</h2>
            <a href="add-new.html" class="btn btn-add" id="addNewIssue">
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
                    <tr>
                        <td>නොදනු කලා</td>
                        <td>Active</td>
                        <td><a href="#" class="edit-link">Edit</a></td>
                    </tr>
                    <tr>
                        <td>වේදිකා හා යොමු කලා</td>
                        <td>Active</td>
                        <td><a href="#" class="edit-link">Edit</a></td>
                    </tr>
                    <tr>
                        <td>ප්‍රකාශ ලබාගත් කලා</td>
                        <td>Active</td>
                        <td><a href="#" class="edit-link">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
