@extends('layouts.main-layout')

@section('content')
    <h1>People</h1>

    <ul>
        @foreach ($people as $person)

            <li> 
                <img class="rounded-circle" style="width: 125px" src="{{ $person -> personDetail -> avatar}}" alt="">
                <br>
                <h3> {{ $person->name }}</h3> 
                Email:{{ $person->email }}
                <br>
                Phone: {{ $person->personDetail -> phone}}
                <br>
                Address: {{ $person -> personDetail -> address}}
                <h3>Posts: {{ $person -> posts -> count()}} </h3>
                <ul>
                    @foreach ($person -> posts as $post)
                        <li>
                            <b> {{ $post -> title }} </b>
                            <div>
                                {{ $post -> body }}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </li>
            <hr>
        @endforeach
    </ul>
@endsection