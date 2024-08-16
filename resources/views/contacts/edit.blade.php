@extends('layouts.app')

@section('content')
<h1>Edit Contact</h1>

<form method="POST" action="{{ route('contacts.update', $contact->id) }}">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $contact->name }}" required>
    <label>Email:</label>
    <input type="email" name="email" value="{{ $contact->email }}" required>
    <label>Phone:</label>
    <input type="text" name="phone" value="{{ $contact->phone }}">
    <label>Address:</label>
    <input type="text" name="address" value="{{ $contact->address }}">
    <button type="submit">Update</button>
</form>
@endsection
