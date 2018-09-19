@extends('master.master')
@section('title')
Create Profile | Friends Circle
@endsection
@section('container')
<div class="container-login100" style="background-image: url('images/patterns/grey_wash_wall.png');">
<div class="row">
  <br/>
  <div class="col-xs-offset-5">
    <h3 style="color:white;">Create Your Profile</h3>
  </div>
  <hr/>
  <div class="container">

  <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-sm">
<span class="input-group-addon" id="sizing-addon3"><b>First Name</b></span>
<input type="text" class="form-control" placeholder="First Name" aria-describedby="sizing-addon3">
</div>
    </div>
    <div class="col-md-6">
      <div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3"><b>Last Name</b></span>
  <input type="text" class="form-control" placeholder="Last Name" aria-describedby="sizing-addon3">
</div>
    </div>
  </div>
<br/>

<div class="row">
  <h5 style="color:white;">Upload Profile Pic</h5>
  <input type="file" name="#">
</div>
<br/>

<div class="row">
  <div class="col-md-6">
    <div class="input-group input-group-sm">
<span class="input-group-addon" id="sizing-addon3"><b>Nickname</b></span>
<input type="text" class="form-control" placeholder="Nickname" aria-describedby="sizing-addon3">
</div>
  </div>
  <div class="col-md-6">
    <div class="input-group input-group-sm">
<span class="input-group-addon" id="sizing-addon3"><b>Date of birth</b></span>
<input type="text" class="form-control" placeholder="DOB" aria-describedby="sizing-addon3">
</div>
  </div>
</div>
<br/>

<div class="row">
  <div class="col-md-6">
    <div class="input-group input-group-sm">
<span class="input-group-addon" id="sizing-addon3"><b>Address</b></span>
<input type="text" class="form-control" placeholder="Address" aria-describedby="sizing-addon3">
</div>
  </div>
  <div class="col-md-6">
    <div class="input-group input-group-sm">
<span class="input-group-addon" id="sizing-addon3"><b>Contact No.</b></span>
<input type="text" class="form-control" placeholder="Contact No." aria-describedby="sizing-addon3">
</div>
  </div>
</div>
<br/>

<div class="row">
  <div class="col-md-6">
    <div class="input-group input-group-sm">
<span class="input-group-addon" id="sizing-addon3"><b>Relationship Status</b></span>
<select class="form-control" name="#">
          <option value="#">Single</option>
          <option value="#">In a relationship</option>
          <option value="#">Married</option>
          <option value="#">Its complicated</option>
          <option value="#">Divorced</option>
        </select>
</div>
  </div>
  <div class="col-md-6">
    <div class="input-group input-group-sm">
<span class="input-group-addon" id="sizing-addon3"><b>Occupation</b></span>
<input type="text" class="form-control" placeholder="Occupation" aria-describedby="sizing-addon3">
</div>
  </div>
</div>
<br/>

<div class="row">
  <div class="col-md-10">
    <div class="input-group input-group-sm">
<span class="input-group-addon" id="sizing-addon3"><b>Hobbies</b></span>
<input type="text" class="form-control" placeholder="Hobbies" aria-describedby="sizing-addon3">
</div>
  </div>
</div>


</div>
</div>
</div>
@endsection
