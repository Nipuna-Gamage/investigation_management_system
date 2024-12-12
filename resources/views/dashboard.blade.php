@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-600 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<div class="bg-white rounded-lg shadow-sm p-6">
    <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Dashboard cards -->
        <div class="bg-blue-50 p-6 rounded-lg">
            <h3 class="font-semibold mb-2">Total Cases</h3>
            <p class="text-3xl font-bold text-blue-600">0</p>
        </div>
        
        <div class="bg-green-50 p-6 rounded-lg">
            <h3 class="font-semibold mb-2">Active Investigations</h3>
            <p class="text-3xl font-bold text-green-600">0</p>
        </div>
        
        <div class="bg-yellow-50 p-6 rounded-lg">
            <h3 class="font-semibold mb-2">Pending Reviews</h3>
            <p class="text-3xl font-bold text-yellow-600">0</p>
        </div>
        
        <div class="bg-purple-50 p-6 rounded-lg">
            <h3 class="font-semibold mb-2">Completed Cases</h3>
            <p class="text-3xl font-bold text-purple-600">0</p>
        </div>
    </div>
</div>
@endsection