<?php
require_once('php/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <!-- JS -->
        <title>Clearance Automation</title>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-default container-fluid">
                <div class="collapse-fluid navbar-collapse ms-5" id="navbarNav">
                    <a href="#">
                        <img src=".\image\FSUU_LOGO_1.png" alt="fsuu_logo" height="60">
                    </a>
                </div>
                
                <button class="me-1 btn bg-transparent icon-white notif-btn" data-toggle="tooltip" data-placement="bottom" title="Notification"
                data-bs-toggle="modal" data-bs-target="#noficationModal">
                    <span class="position-relative">
                        <i class="fas fa-bell fa-2x"></i>
                        <span 
                            class="notif-count position-absolute top-0 start-100 translate-middle bg-danger badge rounded-pill">
                                10
                        </span>
                    </span>
                </button>
                    <a href="#" class="p-2"><img src="<?php echo $_SESSION["profile_pic"]; ?>" alt="profile_pic"
                    data-toggle="tooltip" data-placement="bottom" title="Profile"
                    class="rounded-circle img-fluid" width="40" height="40"></a>
                <h5 class="mt-2 me-5 text-white"> 
                    <form class="nav-item dropdown" action="../fsuu_thesis/php/logout.php" method="POST">
                    <!--  UserLogged In -->
                    <?php
                        echo $_SESSION["user_name"];
                    ?>
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><button
                                        type="submit"
                                        name="Signout"
                                        class="dropdown-item text-center sign-out"
                                        type="button">Sign Out</button>
                                    </li>
                                <!-- </ul>
                            <button type="submit" name="Signout" 
                            class="me-5 btn bg-transparent sign-out icon-white" 
                            data-bs-toggle="tooltip" data-bs-placement="bottom" 
                            title="Sign Out"><i class="fas fa-power-off"></i></i></button> -->
                    </form>
                        
                    </span>
                </h5>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="col" id="navbarNav">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item">
                            <a id="showApplicationForm" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#addUserModal">Apply Clearance</a>
                        </li>
                        <li class="nav-item">
                            <a id="showGraduateClearance" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#addOfficeModal">View CLearance</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
    
        </header>

        <div class="right_col" role="main">
        <div>
            <div class="page-title">
                <div class="title_left">
                    <h3>ALVIN</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class = "ol-md-12 col-sm-12 col-xs-12">
                <div class="x_pannel">
                    <div class="x_title">
                        <h2>List Of Graduate Student</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <table id = "datatable-buttons" class = "table table-striped table-bordered">
                        <thead>
								<tr>
									<th class="hidden">ID</th>
									<th>Student Number</th>
									<th>Name</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Degree</th>
									<th>Major</th>
									<th>year</th>
									<th>remarks</th>
								</tr>
							</thead>

                            <tbody>
                                

								<?php
                                    $sql = "SELECT * FROM tbl_profile NATURAL JOIN tbl_clearance_status";
                                    $query = $conn->prepare($sql);
                                    $query->execute();
                                    $fetch = $query->fetchAll();

								    foreach ($fetch as $key => $value) { 
                                ?>

                                <tr>
                                    <td class="hidden"><?php echo $value['id'] ?></td>
									<td><?php echo $value['student_number'];?></td>
									<td><?php echo $value['family_name'], '&nbsp;', $value['middle_name'], '&nbsp;', $value['family_name']?></td>
									<td><?php echo $value['email'] ?></td>
									<td><?php echo $value['contact']?></td>
									<td><?php echo $value['degree']?></td>
									<td><?php echo $value['clearance_status']?></td>	
                                   
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
        
            
        

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
