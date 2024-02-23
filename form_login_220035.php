<!DOCTYPE html>
<html>

<head>
    <title>Pet Clinic Adri</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body id="bglogin">
    <h1><span style="color: blue;">Pet</span> <span style="color: green;">Clinic Adri</span></h1>
    <div class="frmlgn">
        <div id="titlfrm">
            <h3>Login</h3>
        </div>
        <form method="post" action="login_220035.php">
            <table id="tbllgn">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username_220035" required /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password_220035" id="pass" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp; <input type="checkbox" onclick="show()"><span style="font-size: 15px;">Show Password</span></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;
                        <input type="submit" name="login" value="LOGIN" />
                        <input type="reset" name="reset" value="RESET" />
                    </td>
                </tr>
            </table>
        </form>
        <script>
            function show() {
                var x = document.getElementById("pass");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </div>

</body>

</html>