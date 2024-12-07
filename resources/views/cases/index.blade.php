@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Search Section -->
    <div class="search-section">
        <form action="{{ route('cases.index') }}" method="GET" class="search-form">
            <div class="search-field">
                <label>From:</label>
                <div class="date-input-wrapper">
                    <input type="date" name="from" value="{{ request('from') }}">
                </div>
            </div>
            
            <div class="search-field">
                <label>To:</label>
                <div class="date-input-wrapper">
                    <input type="date" name="to" value="{{ request('to') }}">
                </div>
            </div>
            <div class="search-field summary">
                <label>Summary:</label>
                <input type="text" name="summary" value="{{ request('summary') }}" placeholder="Search by summary...">
            </div>
            <button type="submit" class="search-btn">
                <i class="fas fa-search"></i> Search
            </button>
        </form>
    </div>

    <!-- Cases List Section -->
    <div class="cases-section">
        <div class="cases-header">
            <h2>My Cases</h2>
            <div class="cases-actions">
                <button class="btn-export">
                    <i class="fas fa-download"></i> Export
                </button>
                <button class="btn-add">
                    <i class="fas fa-plus"></i> New Case
                </button>
            </div>
        </div>
        
        <div class="cases-table-wrapper">
            <table class="cases-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Complainant</th>
                        <th>Against</th>
                        <th>Summary</th>
                        <th>Current Action</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 5; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>2024-03-{{ sprintf('%02d', $i) }}</td>
                        <td>John Doe {{ $i }}</td>
                        <td>Department {{ $i }}</td>
                        <td>Sample complaint summary {{ $i }}</td>
                        <td>Under Investigation</td>
                        <td>
                            <span class="status-badge {{ ['pending', 'active', 'completed'][($i-1) % 3] }}">
                                {{ ['Pending', 'Active', 'Completed'][($i-1) % 3] }}
                            </span>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-icon" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn-icon" title="View">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn-icon" title="More">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <button class="btn-page"><i class="fas fa-chevron-left"></i></button>
            <button class="btn-page active">1</button>
            <button class="btn-page">2</button>
            <button class="btn-page">3</button>
            <button class="btn-page"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</div>
@endsection