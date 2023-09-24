@extends('layout.dashboard')
@section('dashboard_content')
    @include('components.dashboard_categories.category-list')
    @include('components.dashboard_categories.category-delete')
    @include('components.dashboard_categories.category-create')
    @include('components.dashboard_categories.category-update')
@endsection
