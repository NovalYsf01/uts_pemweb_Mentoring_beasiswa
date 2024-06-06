<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gurus</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h1 {
    margin-bottom: 20px;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

table th {
    background-color: #f2f2f2;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f1f1f1;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Guru List</h1>
        <table>
            <thead>
                <tr>
                    <th>KD Guru</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data rows will be inserted here -->
                <!-- Example row -->
                @foreach ($gurus as $m)
                <tr>
                    <td>{{$m->kd_guru}}</td>
                    <td>{{$m->first_name}}</td>
                    <td>{{$m->middle_name}}</td>
                    <td>{{$m->last_name}}</td>
                    <td>{{$m->address}}</td>
                    <td>{{$m->date_of_birth}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</body>
</html>


