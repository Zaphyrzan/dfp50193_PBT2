<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <script>
        function checkPassword() {
            var currentpass = document.getElementById("currentpass").value;
            var newpass = document.getElementById("newpass").value;
            var confirmpass = document.getElementById("confirmpass").value;

            if (currentpass === newpass){
                alert("New Password cannot be the same with Current Password");
                return false;
            } else if (newpass !== confirmpass) {
                alert("New Password did not match with Confirm Password");
                return false;
            }

        }
    </script>
</head>

<body>
    <form method="post" action="newpswd.php" name="Form" onSubmit="return checkPassword()">
        <table>
            <tr>
            <td><label for="name">Current Password:</label></td>
            <td>
                <input type="text" id="currentpass" name="currentpass" value="">
            </td>
            </tr>
            <tr>
            <td><label for="name">New Password:</label></td>
            <td>
                <input type="text" id="newpass" name="newpass" value="">
            </td>
            </tr>
            <tr>
            <td><label for="name">Confirm New Password:</label></td>
            <td>
                <input type="text" id="confirmpass" name="confirmpass" value="">
            </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Change Password</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>