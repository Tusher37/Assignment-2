<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contact Details</title>
    <link rel="stylesheet" href="userinfoStyle.css">
</head>

<body>
        <table class="w-full mb-10">
            <thead>
                <tr class="border-b-2">
                    <th class="w-3/12 text-left text-xl text-blue-600 font-bold px-4 py-2">First Name</th>
                    <th class="w-3/12 text-left text-xl text-blue-600 font-bold px-4 py-2">Last Name</th>
                    <th class="w-3/12 text-left text-xl text-blue-600 font-bold px-4 py-2">Email</th>
                    <th class="w-6/12 text-left text-xl text-blue-600 font-bold px-4 py-2">Message</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    session_start();

                    // connect database
                    $connect = mysqli_connect('localhost', 'root', '', 'assignment2') or die("Error: Could not connect" . mysqli_error());

                    $sql = "SELECT * FROM userinfo";
                    $result = mysqli_query($connect, $sql) or die(mysqli_error());
                    if ($result == true){
                        while($row = mysqli_fetch_assoc($result)){
                            $firstName = $row['firstName'];
                            $lastName = $row['lastName'];
                            $email = $row['email'];
                            $message = $row['message'];
                            ?>                          
                            <tr class="border-b-2">
                                <td class="px-4 py-2"><?php echo $firstName;?></td>
                                <td class="px-4 py-2"><?php echo $lastName;?></td>
                                <td class="px-4 py-2"><?php echo $email;?></td>
                                <td class="px-4 py-2"><?php echo $message;?></td>
                            </tr>
                            <?php
                        }
                    }
                ?>

            </tbody>
        </table>

        <a href="logout.php" class="flex justify-center font-bold text-blue-500 hover:text-orange-400 mb-1 text-xl"> 
            <br><button type="logout" class="btn btn-dark">Sign Out</button>
        </a>
    </main>
</body>

</html>