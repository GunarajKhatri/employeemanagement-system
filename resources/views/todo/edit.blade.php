@extends('todo.create')
@section('editId',$items->id)
@section('editTitle',$items->title)
@section('editBody',$items->text)
@section('editMethod')
{{method_field('PUT')}}

@endsection