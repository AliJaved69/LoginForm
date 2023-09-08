<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="loginform.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
`       <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
        <title>
            Log In Form
        </title>
    </head>
    <body>
        <div class="wrapper">
            <form action="logincheck.php" method = "post">
                <div class="login-head">
                    <label class="login">Log In</label>
                </div>
                <div>
                    <?php
                    if (isset($_GET["error"])) {
                        $errorMessage = $_GET["error"];
                        echo '<label style="display: flex;
                                            color: red;
                                            font-family: \'Patrick Hand\';
                                            font-size: 17px;
                                            margin-top: 30px;" >' . $errorMessage . '</label>';
;
                    }
                    ?>
                </div>
                <div class="email">
                    <label>Enter email:</label> <br>
                    <input type="text" placeholder="Email Address" name="email" class="emailbox" required><br>
                    <img class="email-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATdJREFUSEvF070rRWEcB/DPTWaEwSiZLIpVRgulKBaLzWLwNlqUUiIpf4Is8pbFP0BJBpnISAoDSikvnbpXt3PPued2zr052znn+X0/v+fp9+TU+MnVOF+lQD+W0ZVv6AoLOE1qsBJgHNuUNPONYRyVQ5KARtyhKSbkAR34iEOSgKDDvYRjGMBJWmAWqwnADNbTAkM4TAAGcZwWaMAtWmICHtGJt7RAUDeGnYiAYIpGsJ9ligq1fVjJ34MvXGMeZ9W4B0kZZf8njWmm8KC4HNCKOfSgG80h7RmXOMcanqK6iQMmsIlgiip5XjCJg/DiKGAaG5WkRqwZxW7x9zDQjhvUpQTeEWT8HVcY2MJUyvBC2SKWCi9h4B5tGYEL9MYBn6jPCLwWD0d4Bz8Zw0sa/9eLVpXN1HwHvyTBLRlrv90tAAAAAElFTkSuQmCC"/>           
                </div>
                <div class="password">
                    <label class="password">Enter Password:</label> <br>
                    <input type="password" name="password" placeholder="Password" required pattern=".{8,}" class="passwordbox" ><br>
                    <img class="password-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAR1JREFUSEvV1LFKxEAQxvHf+QpiIVaCKGjlK2hxPoBYWdoIVmKnhaKgcIWVvoMgWCtq4QPYKVhoaSWWdqIsbOAuJLdJMBxuNSQz339mZ3Y6Wj6dlvVVBaxiE0sxoTuc4SqVYBVADzslQvs4GAZJAdZwEQUOcR7tLexGu4ubMkgK8IhFbOM0JxIAR7jGSlPAN8YwgY+cyCTe8YnxpoCfGJiqtLQNqcD/CQgzH5o3l5rx3P8X7OGy/3vRFT1hvqZ45v6MhRQgu/eGjMHtUFTByAAP2MAXTrBeUuJA0nUqmMFrFJ1FaGrRaQyYii83iE7j7a8B91iOord9dp7TuIIglAUPG4TRA1p/aGFVHCNMTZ1TeVXUEU36ptZ1UiDl8Au/9DEZm/1ElAAAAABJRU5ErkJggg=="/>
                </div>
                <a class="signup" href="signupform.html">Sign Up Here</a> <br>
                <input type="submit" value="Log In" name="login-btn" class="login-button" > 
            </form>
        </div>
    </body>
</html>