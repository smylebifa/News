@extends('layouts.app')

@section('title') Contacts @endsection

@section('content')
  <h1>Contacts</h1>

  <form action="{{ route ('contact-form') }}" method="post">

    @csrf

    <div class="form-group">
      <label for="name">Enter name</label>
      <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="subject">Theme of message</label>
      <input type="text" name="subject" placeholder="Theme of message" id="subject" class="form-control">
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" class="form-control" placeholder="Enter message"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Send</button>

  </form>  


@endsection