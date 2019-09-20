<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/eliteSquad.png">
    <link rel="stylesheet" href="./css/login.css">

    <title>EliteSquad</title>
</head>

<body>
   <section class="left">
       <div class="txt">
           <span class="team">Elite Squad <img src="./img/eliteSquad.png" alt=""></span><br>
           <span class="jtf">Join the <span class="fun">fun</span>.</span>
       </div>
   </section>

    <section class="form">
        <div class="fContainer">
            <form method="post" action="loginAction.php">
                <label for="Email">Email</label>
                <input type="email" name="email" placeholder="Enter Email" required><br>

                <label for="paswrd">Password </label>
                <input type="password" placeholder="Enter Password" name="password" required><br>

                <button type="submit" name="submit"> Login</button>
            </form>
            <p>Don't have an account? <a href="./signup.php"> Sign up</a></p>
        </div>
    </section>

    <footer>
        <nav>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </footer>
</body>

</html>