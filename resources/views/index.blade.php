<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
    <title>Home</title>
</head>

<body id="root">
    <nav class="nav">
        <h1>Group 7</h1>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('create')}}">Add Employee</a></li>
        </ul>
    </nav>
    <div class="user-tbl-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Basic Salary</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emp as $emp)
                <tr>
                    <td>{{$emp -> id}}</td>
                    <td>{{$emp -> name}}</td>
                    <td>{{$emp -> department}}</td>
                    <td>{{$emp -> address}}</td>
                    <td>{{$emp -> mobile}}</td>
                    <td>{{$emp -> email}}</td>
                    <td>{{$emp -> gender}}</td>
                    <td>{{$emp -> basic_salary}}</td>
                    <td class="btn edit"><a href="{{route('update', ['emp' => $emp])}}">edit</a></td>
                    <td>
                        <form action="{{route('delete', ['emp' => $emp])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>