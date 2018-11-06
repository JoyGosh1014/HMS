<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <meta charset="utf-8">

</head>
<body>

<div class="container">
    <h2>Registration</h2>
    <form action="{{ URL::to('/store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label>Address:</label>
            <textarea name="address" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Mobile Number:</label>
            <input type="number" class="form-control" placeholder="Mobile Number" name="mobile_number">
        </div>
        <div class="form-group">
            <label>Profession:</label>
            <input type="text" class="form-control" placeholder="Profession" name="profession">
        </div>
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>