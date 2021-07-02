<!DOCTYPE html>
<script type="text/javascript" src="./public/js/login-page-script.js"></script>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>Login Page</title>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                <img src="public/img/logo.svg">
            </div>
            <div class="login-container">
                <form class="login" action="login" method="post">
                    <div class="messages">
                        <?php if(isset($messages))
                        {
                            foreach($messages as $message)
                            {
                                echo $message;
                            }
                        }
                        ?>
                    <input name="email" type="text" placeholder="email@email.com">
                    <input name="password" type="password" placeholder="password">
                    <button type="submit">LOGIN</button>
                </form>
            </div>
                <div>
                    <button id="signUpBtn" onclick="signup()">Sign Up</button>
                </div>
            
                    </div>
        </div>
    </body>
