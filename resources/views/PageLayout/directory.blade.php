@extends('Pagelayout.master')
@section('sidebar')
@parent
<h2>Gaganadeep Singh Kalsi</h2>
@endsection
@section('show')
@parent
<h2>Gaganadeep Singh Kalsi</h2>
@endsection
@section('gagan')
@parent
<h2>Gaganadeep Singh Kalsi</h2>
@endsection
@push('kalsi')
<h2>Gaganadeep Singh Kalsi</h2>
@endpush
@push('kalsi')
<h2>Gaganadeep Singh Kalsi</h2>
@endpush
@push('kalsi')
<h2>Gaganadeep Singh Kalsi</h2>
@endpush
@push('kalsi')
<h2>Gaganadeep Singh Kalsi</h2>
@endpush
@push('ram')
<h2>DDR 4</h2>
@endpush
@push('ram')
<h2>DDR 4</h2>
@endpush
@push('ram')
<h2>DDR 4</h2>
@endpush
@push('ram')
<h2>DDR 4</h2>
@endpush
@push('ram')
<h2>DDR 4</h2>
@endpush
@prepend('ram')
<h2>HARAM</h2>
@endprepend
@prepend('ram')
<h2>HARAM</h2>
@endprepend

@php
$v = "gagan";
@endphp

<script>
    var a = @json($v)
    document.write(a);
</script>