<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

    <h1> Blood Donation Camp</h1>
    <body bgcolor="#B5C0D0">
        <div><h2>Registration Form</h2></div>
        <form action="connect.php" method= "POST">
            <label for="user">Name</label>
            <input type="text" name= 'name' id='name' required/> <br> <br>

            <label for="user">Email</label>
            <input type="text" name= 'email' id='email' required/> <br> <br>

            <label for="user">Phone</label>
            <input type="text" name= 'phone' id='phone' required/> <br> <br>

            <label for="user">Blood Type</label>
            <input type="text" name= 'blood' id='blood' required/> <br> <br>

            <input type="submit" name= 'submit' id= "submit" />
        </form>


</body>
</html>