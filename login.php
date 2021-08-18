<style type="text/css">
    table{
        margin-left:auto; 
        margin-right:auto;
    }
    h3{
        text-align: center;
        font-size: 50;
    }
    .table{
        top: 50px;
    }
    th{
        text-align: left;
    }
    h4{
        text-align: center;
    }
</style>

<table>
    <h3>Login</h3>
    <form action="valid.php" method="post" class="table">
        <tr>
            <th>Username</th>
            <td>:</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <th>Password</th>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td class="submit" colspan="3" align="center"><input type="submit" value="Login" name="login"></td>
        </tr>
    </form>
    
</table>
<h4>Password : 12345
</h4>