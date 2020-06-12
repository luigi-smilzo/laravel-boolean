@extends('layouts.main')

@section('content')
        <section class="StudentDetails">
            <header>
                <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}">
                <div class="StudentCard-Info">
                    <h3>{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
                    <p>Assunt{{ ($student['gender'] === 'm') ? 'o' : 'a'}} da {{ $student['company'] }}</p>
                </div>
            </header>

            <p>{{ $student['description'] }}</p>
        </section>
@endsection