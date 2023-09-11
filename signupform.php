<html>
    <head>
        <title>Sign up Page</title>
        <link rel="stylesheet" href="signupform.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
`       <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <form action="signup.php" method = "post">
                <div class="signup-head">
                    <label>Sign Up</label>
                </div>
                <div>
                    <?php
                    if (isset($_GET["error"])) {
                        $errorMessage = $_GET["error"];
                        echo '<label style="display: flex;
                                            color: red;
                                            font-family: \'Patrick Hand\';
                                            font-size: 25px;
                                            margin-left: 29px;
                                            margin-top: 20px;" >' . $errorMessage . '</label>';
                    }
                    ?>
                </div>
                <div class="name">
                    <input type="text" placeholder="First Name" name="fname" class="fname-box" required>
                    <input type="text" placeholder="Last Name" name="lname" class="lname-box" required>
                </div>
                <div>
                    <input type="text" placeholder="Enter Email-Address" name="email" class="email-address-box" required><br>
                </div>
                <div class="password">
                    <input type="password" placeholder="Password" name="password" required pattern=".{8,16}" maxlength="16" class="passwordbox"><br>
                    <label class="password-label">Password must contain 8 to 16 letters</label>
                </div>
                <input type="submit" value="Sign Up" name="signup-btn" class="signup-button"> 
            </form>
        </div>
    </body>
</html>