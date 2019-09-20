<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/eliteSquad.png">
        <link rel="stylesheet" href="./css/signup.css">
        <script type="text/javascript" src="js/formValidation.js"></script>
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
                <form method="POST" name="registration" action="registrationAction.php" onsubmit="return validateForm()">
                    <label for="fname">Firstname</label>
                    <input type="text" placeholder="Enter Firstname" name="firstName" required>

                    <label for="lname">Lastname</label>
                    <input type="text" placeholder="Enter Lastname" name="lastName" required>

                    <label for="Email">Email</label>
                    <input type="email" placeholder="Enter Email" name="email" required>

                    <label for="paswrd">Password</label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <label for="cpaswrd">Confirm Password </label>
                    <input type="password" placeholder="Enter Password" name="confirmPassword" required>

                    <input type="checkbox" checked="checked" name="agree" required> I agree to all <a
                        href="https://www.termsfeed.com/blog/wp-content/uploads/2019/04/terms-and-conditions-template.pdf" target="_blank" rel="noopener noreferrer">Terms
                        and Conditions </a>
                            
                    <input type="submit" name="submit" value="Join Now">
                </form>
                <span>Already have an account? <a href="./login.php">Sign in</a></span>        
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