<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Homeowner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            display: flex;
            flex-direction: column;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 15px;
        }

        button {
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }

        .submit-btn {
            background-color: #007BFF;
            color: white;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .back-btn {
            background-color: #6c757d;
            color: white;
        }

        .back-btn:hover {
            background-color: #545b62;
        }

    </style>
</head>
<body>
    <form action="{{ route('homeowner.store') }}" method="POST">
        @csrf
        <h2>Create Homeowner</h2>

        <label for="firstname">First Name</label>
        <input type="text" name="first_name" id="firstname" required>

        <label for="middlename">Middle Name</label>
        <input type="text" name="middle_name" id="middlename">

        <label for="lastname">Last Name</label>
        <input type="text" name="last_name" id="lastname" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="phonenumber">Phone Number</label>
        <input type="text" name="phone" id="phonenumber" required>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" required>

        <div class="button-group">
            <button type="submit" class="submit-btn">Create Homeowner</button>
            <a href="{{ route('welcome') }}" class="back-btn" style="text-align: center; padding: 12px; text-decoration: none; border-radius: 5px;">Back</a>
        </div>
    </form>
</body>
</html>
