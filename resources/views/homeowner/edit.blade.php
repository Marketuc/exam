<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
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
        <form action="{{ route('homeowner.update', $homeowner->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="firstname">First Name</label>
            <input type="text" id="first_name" name="first_name" value="{{ $homeowner->first_name }}" required><br>

            <label for="lastname">Middle Name</label>
            <input type="text" id="middle_name" name="middle_name" value="{{ $homeowner->middle_name }}" required><br>

            <label for="lastname">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="{{ $homeowner->last_name }}" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $homeowner->email }}" required><br>

            <label for="phonenumber">Phone Number</label>
            <input type="text" id="phone" name="phone" value="{{ $homeowner->phone }}" required><br>

            <label for="job">Address</label>
            <input type="text" id="address" name="address" value="{{ $homeowner->address}}" required><br>

            <button type="submit">Update homeowner</button>
        </form>
    </body>
    </html>
</body>
</html>
