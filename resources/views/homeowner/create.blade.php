<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }


        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        </style>
</head>
<body>
    <form action="{{ route('homeowner.store') }}" method="POST">
        @csrf
        <label for="firstname">First Name</label>
        <input type="text" name="first_name" id="firstname" required>

        <label for="firstname">Middle Name</label>
        <input type="text" name="middle_name" id="middlename" required>

        <label for="lastname">Last Name</label>
        <input type="text" name="last_name" id="lastname" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="phonenumber">Phone Number</label>
        <input type="text" name="phone" id="phonenumber" required>

        <label for="phonenumber">Address</label>
        <input type="text" name="address" id="phonenumber" required>

        <button type="submit">Create Homeowner</button>
    </form>
</body>
</html>
