<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Homeowners</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .button-group {
         
            margin-bottom: 20px;
            gap: 10px;
            margin-top: 15px;
        }
        .back-btn {
            background-color: #6c757d;
            color: white;
        }

        .back-btn:hover {
            background-color: #545b62;
        }
        button {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
    <h1>All Homeowners</h1>
    <div class="button-group">
    <a href="{{ route('welcome') }}" class="back-btn" style="text-align: center; padding: 12px; text-decoration: none; border-radius: 5px;">Back</a>
    </div>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($homeowners as $homeowner)
                <tr>
                    <td>{{ $homeowner->id }}</td>
                    <td>{{ $homeowner->first_name }}</td>
                    <td>{{ $homeowner->middle_name }}</td>
                    <td>{{ $homeowner->last_name }}</td>
                    <td>{{ $homeowner->email }}</td>
                    <td>{{ $homeowner->phone }}</td>
                    <td>{{ $homeowner->address }}</td>
                    <td>
                        <form action="{{ route('homeowner.edit', $homeowner->id) }}" method="GET" style="display:inline;">
                            <button type="submit">Update</button>
                        </form>
                        <form action="{{ route('homeowner.destroy', $homeowner->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this homeowner?')">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
