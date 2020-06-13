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

        <header class="Students-header mb-10">
            <h1>I nostri ex-studenti</h1>
        </header>

        <div class="Students-cards u-container">
            @foreach($students as $student)
                <a href="{{ route('students.show', ['slug' => $student['slug']] ) }}" class="u-studentCard">

                    <header>
                        <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}" class="mr-3 mb-3">
                        <div class="StudentCard-Info">
                            <h3 class="mb-3">{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
                            <p>Assunt{{ ($student['gender'] === 'm') ? 'o' : 'a'}} da {{ $student['company'] }}</p>
                        </div>
                    </header>
                    
                    <p class="mb-8">{{ $student['description'] }}</p>

                </a>
            @endforeach
        </div>
    </div>
@endsection
        
        
        