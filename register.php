
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="gayatambah.css">
</head>
<body>
 
    <br/>
    <button type="button" class="btn btn-secondary btn-sm"><a href="login.php">KEMBALI</a></button>
    <br/>
    <br/>
    <h3>REGISTER</h3>
    <form name="registerForm" method="POST" action="register_aksi.php" onsubmit="return validateForm()">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>           
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>           
                <td>Konfirmasi Password</td>
                <td><input type="password" name="confirm_pass"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

    <script>
        function validateForm() {
            var username = document.forms["registerForm"]["username"].value;
            var password = document.forms["registerForm"]["pass"].value;
            var confirmPassword = document.forms["registerForm"]["confirm_pass"].value;

            if (username == "") {
                alert("Username harus diisi");
                return false;
            }

            if (password == "") {
                alert("Password harus diisi");
                return false;
            }

            if (confirmPassword == "") {
                alert("Konfirmasi password harus diisi");
                return false;
            }

            if (password != confirmPassword) {
                alert("Password dan konfirmasi password tidak sesuai");
                return false;
            }
        }
</script>

</body>
</html>
