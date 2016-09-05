<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WCP | Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        background-color: #3498db;
            font-family: Arial, Sans-Serif;
        }

        input {
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-top: 130px;
            font-size: 3em;
        }

        .login {
            width: 100%;
            max-width: 350px;
            background-color: #fff;
            margin: 30px auto 0 auto;
            box-sizing: border-box;
            padding: 20px;
            box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, .5);
        }

        .login p {
            margin: 0 0 20px 0;
            font-size: 1.3em;
            text-align: center;
            font-weight: bold;
        }

        .erro-msg {
            margin: 20px 0 !important;
            color: red;
            text-align: left !important;
            font-size: .8em !important;
        }

        .login .in-text {
            width: 100%;
            border: 1px solid #ccc;
            font-size: 1em;
            outline: none;
            margin-bottom: 0px;
            padding: 15px;
            transition: .5s;
        }

        .in-text:focus {
            border-color: #2980B9;
        }

        .login .in-btn {
            width: 100%;
            border: 1px solid #ccc;
            padding: 15px;
            margin-top: 20px;
            background-color: #34495e;
            color: #fff;
            outline: none;
            font-size: 1.1em;
        }

        .login .in-btn:hover {
            background-color: #273a4e;
        }

    </style>

</head>
<body>

<h1>WCP</h1>

<div class="login">

    <p>Faça o login</p>

    <?php if (isset($_SESSION['erro_login'])): ?>
        <p class="erro-msg"><?php echo $_SESSION['erro_login'];?></p>
    <?php endif; ?>
    <form action="" method="post">
        <input class="in-text" type="email" name="email" id="email" placeholder="Email" required/>
        <input class="in-text" type="password" name="senha" id="senha" placeholder="Senha" required/>
        <input class="in-btn" type="submit" name="logar" value="Logar"/>
    </form>
</div>
<p style="color: #34495E; text-align: center; font-size: .8em; margin-top: 50px; font-weight: bold;">WCP - Work Control
    Panel</p>

</body>
</html>