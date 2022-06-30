@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Student ID : {{ $students->studid }}</h5>
        <p class="card-text">Last Name : {{ $students->lastname }}</p>
        <p class="card-text">First Name : {{ $students->firstname }}</p>
        <p class="card-text">Middle Initial : {{ $students->MI }}</p>
        <p class="card-text">Course : {{ $students->course }}</p>
        <p class="card-text">Year Level : {{ $students->yearlevel }}</p>
        <p class="card-text">User Level : {{ $students->user_level }}</p>
        <p class="card-text">Status : {{ $students->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>