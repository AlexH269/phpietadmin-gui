<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/phpietadmin/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="/phpietadmin/css/login.css" type="text/css" rel="stylesheet">
    <title>phpietadmin login</title>
</head>
<body>
    <div class = "container">
        <form method = "post" class="form-signin">
            <h2 align="center" class="form-signin-heading">Please sign in</h2>
            <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
            <input type="password" name="password" id="inputPassword2" class="form-control" placeholder="Password" required>
            <input class="btn btn-lg btn-primary btn-block" type='submit' value='Login'>
        </form>
    </div>
</body>
</html>