@extends('layouts.main')

@section('content')
        <section class="StudentDetails u-studentCard u-container mt-10">
            <header>
                <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}" class="mr-3 mb-3">
                <div class="StudentCard-Info">
                    <h3 class="mb-3">{{ $student['name'] }} ({{ $student['age'] }} anni)</h3>
                    <p>Assunt{{ ($student['gender'] === 'm') ? 'o' : 'a'}} da {{ $student['company'] }}</p>
                </div>
            </header>
                
            <p class="mb-8">{{ $student['description'] }}</p>
        </section>
@endsection