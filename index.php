<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles.css">
        <title>EliteSquad</title>
        <script type="text/javascript" src="formValidation.js"></script>
    </head>

    <body>
        <section>
            <p>Elite Squad <img src="" alt=""></p>
            <p>Join the <span>fun</span>.</p>
        </section>
            <!IMAGE FROM UI TEAM>
    <img src="" alt="">
        <section>
            
            <div class="fContainer form--signup">
                <form name="registration" method="POST" action="registrationAction.php" onsubmit="return validateForm()">
                    <label for="fname">Firstname</label>
                    <input type="text" placeholder="Enter Firstname" name="firstName" >

                    <label for="lname">Lastname</label>
                    <input type="text" placeholder="Enter Lastname" name="lastName" >

                    <label for="Email">Email</label>
                    <input type="email" placeholder="Enter Email" name="email" required>

                    <label for="paswrd">Password</label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <label for="cpaswrd">Confirm Password </label>
                    <input type="password" placeholder="Enter Password" name="confirmPassword" required>

                    <input type="checkbox" checked="checked" name="agree"> I agree to the <a href="#">Terms and Condition </a>
                            
                    <button type="submit" name="submit"> Join Now</button>
                </form>
                <p>Already have an account? <a href="#">Sign in</a></p>        
            </div>
            
            
            <div class="fContainer form--login">
                <form>
                    <label for="Email">Email</label>
                    <input type="email" name="email" placeholder="Enter Email" required>

                    <label for="paswrd">Password </label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit" name="submit">Login</button>
                </form>
                <p>Don't have an account? <a href="#"> Sign up</a></p>
            </div> 
        </section>

        <footer>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </footer>
    </body>
</html>