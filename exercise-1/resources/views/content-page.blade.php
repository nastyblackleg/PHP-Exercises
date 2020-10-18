@extends('layout.main')

@section('title', $title ?? 'No Title')

@section('content')
<h1>{{'This is ' . $title ?? '' }}</h1>

@if($show_footer)

<footer style="position: absolute; bottom: 0; background: green; color: black; height: 50px; width: 99%; margin: 0; padding: 0;">
    This is {{ $footer_text }}
</footer>
@endif

@endsection
