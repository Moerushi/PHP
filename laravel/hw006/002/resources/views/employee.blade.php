<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
</head>
<body>
   <form name="employee" action="{{Route('store_employee')}}" method="post">
    @csrf
   <label>Name:</label><input type="text" name="first_name" value="@if($employee) {{ $employee->first_name}} @endif"><br>
    <label>Last name:</label><input type="text" name="last_name"  value="@if($employee) {{ $employee->last_name}} @endif"><br>
    {{-- <label>Department: <select name="department" >
        <option value="finace">Finance</option>
        <option value="logistics">Logistics</option>
        <option value="it">IT</option>
    </select><br> --}}
     <label>Finance:</label>
        <input value="finance" name="department[]" type='checkbox'  @if($employee && in_array('finance', unserialize($employee->department))) checked @endif>
        <label>Logistics:</label>
        <input value="logistics" name="department[]" type='checkbox'  @if($employee && in_array('logistics', unserialize($employee->department)))checked @endif>
        <label>IT:</label>
        <input value="it" name="department[]" type='checkbox' @if($employee && in_array('it',unserialize($employee->department))) checked @endif><br>
   <input type="submit" value="Submit">
   </form>
</body>
</html>
