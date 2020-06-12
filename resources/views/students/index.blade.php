@extends('layouts.main')

@section('content')
    <div class="Students">
        <div class="Students-filter">
            <select name="filter" id="filter">
                @foreach ($genders as $gender)
                    <option value="{{ $gender }}">
                        @if ($gender == 'm') Uomo @elseif ($gender == 'f') Donna @else All @endif
                    </option>
                @endforeach
            </select>
        </div>
        <h1>I nostri ex-studenti</h1>
        @foreach($students as $student)
            <a href="{{ route('students.show', ['slug' => $student['slug']] ) }}" class="StudentCard">
                <header>
                    <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}">
                    <div class="StudentCard-Info">
                        <h3>{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
                        <p>Assunt{{ ($student['gender'] === 'm') ? 'o' : 'a'}} da {{ $student['company'] }}</p>
                    </div>
                </header>
                
                <p>{{ $student['description'] }}</p>
            </a>
        @endforeach
    </div>
@endsection