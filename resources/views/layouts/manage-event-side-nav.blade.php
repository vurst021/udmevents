<nav class=" section-padding-80 single-product" style="">
    <ul class="col-sm-12">
    	<hr>
        <li class="col-sm-12"><a href="{{ route('event.manage') }}/{{$event->event_id}}">Dashboard</a></li>
        <hr>
        <li class="col-sm-12"><a href="{{ route('event.attendees.pending') }}/{{$event->event_id}}">Attendees-Pending</a></li>
        <hr>
        <li class="col-sm-12"><a href="{{ route('attendees.responded') }}/{{$event->event_id}}/?status=1">Attendees-Accepted</a></li>
        <hr>
        <li class="col-sm-12"><a href="{{ route('attendees.responded') }}/{{$event->event_id}}/?status=2">Attendees-Rejected</a></li>
        <hr>
    </ul>
</nav>