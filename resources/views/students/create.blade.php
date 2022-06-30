@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Create New Student</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Student ID</label></br>
        <input type="text" name="studid" id="studid" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
        <label>First Name</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
        <label>Middle Initial</label></br>
        <input type="text" name="MI" id="MI" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <label>Year Level</label></br>
        <input type="text" name="yearlevel" id="yearlevel" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        <a href="{{ url('student')}}" class="btn btn-primary btn-sm float-right">Show Students</a>
    </form>
   
  </div>
</div>
 
@stop