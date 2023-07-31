<?php

    $fname = $_POST('fname');
    $lname = $_POST('lname');
    $uname = $_POST('uname');
    $password = $_POST('pwd');
    $gender = $_POST('gender');
    $AcademicYear = $_POST('year');
    $email = $_POST('email');
    $tel = $_POST('tel');

    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $_POST['fname']; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $_POST['lname']; ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?php echo $_POST['uname']; ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $_POST['pwd']; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $_POST['gender']; ?></td>
        </tr>
        <tr>
            <td>Academic Year</td>
            <td><?php echo $_POST['year']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><?php echo $_POST['tel']; ?></td>
        </tr>
    </table>

    


?>