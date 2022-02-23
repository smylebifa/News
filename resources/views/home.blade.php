@extends('layouts.app')

@section('title') Main page @endsection

@section('content')
  <h1>Main page</h1>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
     Officiis magnam incidunt aliquam tempore, eaque rem earum laboriosam ex. 
     Illum, nihil. Officia suscipit voluptatem et. Quam soluta in commodi quia enim.
  </p>
@endsection

@section('aside')
  @parent
  <p>Additional text</p>
@endsection