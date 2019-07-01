@extends('layouts.app')

@section('content')
    <h1>Contact</h1>
    <form action="/submit" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" required name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" required name="email">
        </div>
        <div class="form-group">
            <label for="message">Message </label>
            <textarea name="message" id="" cols="30" rows="10" class="form-control" name="message" required></textarea>
        </div>
        <div class="form-group d-flex">
            <input type="submit" value="Send Message" class="btn btn-lg ml-auto btn-primary">
        </div>
    </form>
@endsection