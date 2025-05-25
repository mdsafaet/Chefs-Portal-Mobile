@extends('layouts.app')
@section('content')
    {{-- <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <p class="text-gray-700">Welcome to your dashboard!</p>
            <p class="text-gray-500">Here you can manage your account, view statistics, and more.</p>
        </div>
    </div>  --}}
    @include('components.dashboard.chef_details')
    @include('components.dashboard.stat_ham')
    @include('components.dashboard.dash_main')

@endsection