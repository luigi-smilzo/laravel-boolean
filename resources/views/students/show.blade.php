@extends('layouts.main')

@section('content')
        <header>
            <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}">
            <div class="StudentCard-Info">
                <h3>{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
                <p>Assunt{{ ($student['genre'] === 'm') ? 'o' : 'a'}} da {{ $student['company'] }}</p>
            </div>
        </header>
        <p>{{ $student['description'] }}</p>
    
@endsection