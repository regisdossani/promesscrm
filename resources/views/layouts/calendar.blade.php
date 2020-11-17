@extends('layouts.maincalendar')

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto my-4">
            <div id="calendar"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
       /*  document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid','interaction']
        });
        calendar.render(); */
      });
    </script>
@endsection
