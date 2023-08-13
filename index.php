<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- inserting user data to database -->

    <h3>Create Account</h3> 

    <form action="includes/formhandler.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="email" placeholder="Email">
            <button>Register</button>
        </form>
        

    <!-- changing user data -->

    <h3>Change Account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button>Update</button>
    </form>

    <!-- deleting user data -->

    <h3>Delete Account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button>Delete</button>
    </form>

    <h3>Search Data </h3>

    <form class="searchform" action="search.php" method="post">
    <label for="search">Search for User:</label>
    <input id="search" type="text" name="usersearch" placeholder="Search...">
    <button>Search  </button>

    </form>

</body>
</html>