@extends('dashboard.adminDashboard')

@section('content')
    <div>
        <p>Total Number of Users with role User: {{ $user }}</p>
        <p>Total Number of Users with role asesor: {{ $asesor }}</p>
    </div>
@endsection
