@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Search Section -->
    <div class="search-container">
        <h2>Search Person</h2>
        <div class="search-box">
            <div class="search-field">
                <label for="searchInput">Name / NIC</label>
                <input type="text" id="searchInput" placeholder="Enter name or NIC number">
            </div>
            <button class="search-btn">Search</button>
        </div>
    </div>

    <!-- Results Section -->
    <div class="search-results">
        <div class="officer-info">
            <p>Officer: Nisansala HAG - Assistant secretary</p>
        </div>
        <div class="results-list" id="resultsList">
            <!-- Results will be populated here via JavaScript -->
        </div>
    </div>
</div>  
@endsection