<?php echo "<link rel='stylesheet' href='adminindex.css'>" ?>

<?php require('../includes/dbh.inc.php');

    //write sql to select all users
    $sql = "SELECT * FROM users";

    //query and get result
    $result = mysqli_query($conn, $sql);

    //return as associative array
    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result
    mysqli_free_result($result);

    //close conection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('adminsidenav.php'); ?>

    <div class="main">
        <?php include('adminheader.php'); ?>

        <div class="mainholder">
                <div class="title1">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#000"/>
                    <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#000"/>
                    </svg><span>Registered Users</span>
                </div>
        </div>

        <div class="no">Showing <?= count($user); ?> users</div>

        <div class="tablon">
        <table>

            <tbody>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Registration Date</th>
                    <th>Action</th>
                </tr>

                <?php foreach($user as $users): ?>
                    <tr><td><?= $users['id']; ?></td>
                    <td><?= $users['nameUser']; ?></td>
                    <td><?= $users['emailUser']; ?></td>
                    <td><?= $users['phoneUser']; ?></td>
                    <td><?= $users['date_created']; ?></td>
                    <td><form class="deleteform" action='../includes/deleteuser.inc.php' method='POST'>
                    <input type='hidden' name='userid' value='<?= $users['id']; ?>'>
                    <button  class='delete' type='submit' name='deleteuser-submit'>
                    <span class="span1">
                        <svg width='25' height='25' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z' fill='#000'/>
                        <path d='M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z' fill='#000'/>
                        </svg>
                    </span>
                    <span class="span2">Delete User</span>
                    </button>
                    </form></td></tr>
                <?php endforeach; ?>



          
                <!-- <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@gmail.com</td>
                    <td>08188332094</td>
                    <td>23/02/2021</td>
                    <td>
                        <a class="delete" href="#">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 14C6.23858 14 4 16.2386 4 19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19C20 16.2386 17.7614 14 15 14H9Z" fill="#000"/>
                    <path d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#000"/>
                    </svg>
                    <span>Delete User</span>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>bugatti enyata</td>
                    <td>14,000 naira</td>
                    <td>4.15 litres</td>
                    <td>5 Seats</td>
                    <td></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Sienna</td>
                    <td>14,000 naira</td>
                    <td>2.35 litres</td>
                    <td>7 Seats</td>
                    <td></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Lamborghini</td>
                    <td>14,000 naira</td>
                    <td>2.35 litres</td>
                    <td>5 Seats</td>
                    <td></td>
                </tr> -->
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>