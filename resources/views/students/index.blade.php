@extends('layouts.main')

@section('content')
    <div class="Students">
        <h1>I nostri ex-studenti</h1>
        @foreach($students as $student)
            <a href="{{ route('students.show', ['id' => $student['id']] ) }}" class="StudentCard">
                <header>
                    <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}">
                    <div class="StudentCard-Info">
                        <h3>{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
                        <p>Assunt{{ ($student['genre'] === 'm') ? 'o' : 'a'}} da {{ $student['company'] }}</p>
                    </div>
                </header>
                
                <p>{{ $student['description'] }}</p>
            </a>
        @endforeach
    </div>
@endsection