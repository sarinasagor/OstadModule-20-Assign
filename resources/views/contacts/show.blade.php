@extends('layouts.app')

@section('content')
<h1>Contact Details</h1>

<p>Name: {{ $contact->name }}</p>
<p>Email: {{ $contact->email }}</p>
<p>Phone: {{ $contact->phone }}</p>
<p>Address: {{ $contact->address }}</p>
@endsection
