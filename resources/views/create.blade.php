<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
    <title>create</title>
</head>
<body id="root">
    <nav class="nav">
        <h1>Group 7</h1>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('create')}}">Add Employee</a></li>
        </ul>
    </nav>
    <div class="create-emp-form-wrapper">
        <h1>Create new Employee</h1>
        <form action="{{route('add')}}" method="post">
            @csrf
            @method('post')
            <input required type="text" name="name" placeholder="name">
            <input required type="text" name="department" placeholder="department">
            <input required type="text" name="address" placeholder="address">
            <input required type="number" name="mobile" placeholder="mobile">
            <input required type="email" name="email" placeholder="email">
            <select required name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="non human">Non human</option>
            </select>
            <input required type="number" name="basic_salary" placeholder="salary">

            <input type="submit" value="submit" class="btn create">
        </form>
    </div>
</body>
</html>