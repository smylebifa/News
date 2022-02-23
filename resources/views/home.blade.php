@extends('layouts.app')

@section('title') Main page @endsection

@section('content')
  <h1>Main page</h1>
@endsection

@section('aside')
  @parent
  <p>Additional text</p>
@endsection