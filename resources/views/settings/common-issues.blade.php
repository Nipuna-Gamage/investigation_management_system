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
                            <td><a href="" class="edit-link">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
