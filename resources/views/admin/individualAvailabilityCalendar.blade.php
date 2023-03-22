@extends('layouts.admin')
@section('assets')
@endsection
@section('content')
    <div id="calendar"></div>
@endsection
@section('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
    <script src="{{ asset('js/individualAvailabilityCalendar.js') }}"></script>
@endsection
