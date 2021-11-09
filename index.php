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
    
    
        <form id= "ApplicationForm" class="form-horizontal graduation" role="form">
            <h2>Registration</h2>
            <p class="topText">Dear Madam: </br> </br> I would like to apply for graduation with the degree of</p>
            <div class="form-group degree">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Bachelor of Science of Arts</option>
                    <option>Bachelor of Science in Accountancy</option>
                    <option>Bachelor of Science in Elementary Education</option>
                    <option>Bachelor of Science in Secondary Education</option>
                    <option>Bachelor of Science in Business Administration</option>
                    <option>Bachelor of Science in Business AAAAAAAAAAAAAAAAAAdministration</option>
                </select>
            </div>

            </br>

            <p class="topText">Major / Specialization</p>
            <div class="form-group degree">
                <div class="col-sm-12">
                    <input type="text" id="major" placeholder="Major/Specialization" class="form-control">
                </div>
            </div>
            <p class="topText">at the end of the </p>
            <div class="form-group degree">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1st</option>
                    <option>2nd</option>
                </select>
            </div>
            <p class="topText">Semester of the Academic Year</p>
            <div class="form-group degree">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>2019-2020</option>
                    <option>2020-2021</option>
                </select>
            </div>

            </br>
            </br>

            <p class="topText">The following is my curriculum vitae pertinent to my graduation</p>
            
            <fieldset class="fsborder">
                <legend class="legendborder">Personal Profile</legend>
                <div class="form-group">
                <label for="firstName" class="control-label">Name</label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Family Name">Family Name</label>
                        <input type="text" class="form-control" id="graduateFamilyName" placeholder="PSA/NSO Birth Family Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Given Name">Given Name</label>
                        <input type="text" class="form-control" id="graduateGivenName" placeholder="Given Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Middle Name">Middle Name</label>
                        <input type="text" class="form-control" id="graduateMiddleName" placeholder="Middle Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Date of Birth">Date of Birth</label>
                        <input type="text" class="form-control" id="DateOfBirth" placeholder="Date of Birth">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Place of Birth">Place of Birth</label>
                        <input type="text" class="form-control" id="PlaceOfBirth" placeholder="Place of Birth">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Citizenship">Citizenship</label>
                        <input type="text" class="form-control" id="Citizenship" placeholder="Citizenship">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Religion">Religion</label>
                        <input type="text" class="form-control" id="Religion" placeholder="Religion">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Contact">Contact no.</label>
                        <input type="text" class="form-control" id="Contact" placeholder="Contact Number">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" id="Email" placeholder="Email">
                    </div>
                </div>

                <label for="address" class="control-label">Address</label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Street">Street</label>
                        <input type="text" class="form-control" id="graduateStreet" placeholder="Street">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Baranggay">Baranggay</label>
                        <input type="text" class="form-control" id="graduateBarangay" placeholder="Baranggay">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="City/Municipality">City / Municipality</label>
                        <input type="text" class="form-control" id="graduateCity" placeholder="City / Municipality">
                    </div>
                </div>

            </fieldset>
            
            <fieldset class="fsborder">
                <legend class="legendborder">Parents / Guardian</legend>
                    <fieldset class="fsborder">
                        <legend class="legendborder">Father</legend>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="FamilyName">Family Name</label>
                                    <input type="text" class="form-control" id="fatherFamilyName" placeholder="Family Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Baranggay">Given Name</label>
                                    <input type="text" class="form-control" id="fatherGivenName" placeholder="Given Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="City/Municipality">Middle Name</label>
                                    <input type="text" class="form-control" id="fatherMiddleName" placeholder="Middle Name">
                                </div>
                            </div>
                    </fieldset>
                    <fieldset class="fsborder">
                        <legend class="legendborder">Mother</legend>
                            <div class="form-row">
                               <div class="form-group col-md-4">
                                    <label for="FamilyName">Family Name</label>
                                    <input type="text" class="form-control" id="motherFamilyName" placeholder="Family Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Baranggay">Given Name</label>
                                    <input type="text" class="form-control" id="motherGivenName" placeholder="Given Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="City/Municipality">Middle Name</label>
                                    <input type="text" class="form-control" id="motherMiddleName" placeholder="Middle Name">
                                </div>
                            </div>
                    </fieldset>
                    <label for="address" class="control-label">Address</label>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Street">Street</label>
                            <input type="text" class="form-control" id="parentStreet" placeholder="Street">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Baranggay">Baranggay</label>
                            <input type="text" class="form-control" id="parentBaranggay" placeholder="Baranggay">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="City/Municipality">City / Municipality</label>
                            <input type="text" class="form-control" id="parentCity" placeholder="City / Municipality">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="fsborder">
                    <legend class="legendborder">Education</legend>
                    <fieldset class="fsborder">
                        <legend class="legendborder">Elementary</legend>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label for="Street">School Name</label>
                                <input type="text" class="form-control" id="elementaryName" placeholder="School Name">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Baranggay">Year Graduated</label>
                                <input type="text" class="form-control" id="elementaryYear" placeholder="Year Graduated">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="fsborder">
                        <legend class="legendborder">High School</legend>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label for="Street">School Name</label>
                                <input type="text" class="form-control" id="highschoolName" placeholder="School Name">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Baranggay">Year Graduated</label>
                                <input type="text" class="form-control" id="highschoolYear" placeholder="Year Graduated">
                            </div>
                        </div>
                    </fieldset>
                </fieldset>
                <p class="topText">I understand that this application is for my scholastic evaluation purposes.</p>
                <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="signature">signature</label>
                                </br></br>
                                <p>______________________________</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Baranggay">Student Number</label>
                                <input type="text" class="form-control" id="graduateID" placeholder="Student Number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Baranggay">Date Applied</label>
                                <input type="text" class="form-control" id="DateApplied" placeholder="Date Applied">
                            </div>
                        </div>
            </div>
            
        </form> <!-- /form -->
        <button  class="btn btn-primary" id="SubmitGraduateForm">Submit</button>

        <div class = "graduation">
        <form id= "GraduateClearance"class="form-horizontal" role="form" style="border:1px solid;">
            <h5>Cleared by:</h5>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <center><?php 
                            if ($value['is_cooperative_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                        <i class="fa fa-check" style="margin-top:10px"></i>
                        <p>________________________<br />
                            <small>Admission & Scholarship Office</small>
                        </p>
                    </center>
                </div>
                    <div class="col-md-4">
                        <center>
                        <i class="fa fa-check" style="margin-top:10px"></i>
                            <?php 
                            if ($value['is_cooperative_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>CES Office</small>
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                        <i class="fa fa-check" style="margin-top:10px"></i>
                            <?php 
                            if ($value['is_executive_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>Guidance Office</small>
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <?php 
                            if ($value['is_supply_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>Office of the Religous Affairs</small>
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <?php 
                            if ($value['is_librarian_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>DSSA Office</small>
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <?php 
                            if ($value['is_hrm_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>VERITAS</small>
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <?php 
                            if ($value['is_director_ppf_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>DAO</small>
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <?php 
                            if ($value['is_registrar_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>Cashier</small>
                            </p>
                        </center>
                    </div>
                    
                    
                    <div class="col-md-12">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>

                    <div class="col-md-4">
                    <h6 style="margin-left:50px">Recommended By:</h6>
                        <center>
                            <?php 
                            if ($value['is_registrar_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>Program Dean</small>
                            </p>
                        </center>
                    </div>

                    <div class="col-md-4">
                    <h6 style="margin-left:50px">Evaluated By</h6>
                        <center>
                            <?php 
                            if ($value['is_registrar_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>Records-in-Charge</small>
                            </p>
                        </center>
                    </div>

                    <div class="col-md-4">
                    <h6 style="margin-left:50px">Approved By:</h6>
                        <center>
                            <?php 
                            if ($value['is_registrar_approval'] == 0){
                                echo '';
                            }else{
                                echo '<i class="glyphicon glyphicon-ok"></i>';
                            }
                            ?>
                            <br />
                            <p>________________________<br />
                                <small>Maria Lourdes G. Naquita, LPT</small>
                                <br>
                                <small>University Registrar</small>
                            </p>
                        </center>
                    </div>
            </div>
        </form> <!-- /form -->
    </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
<style>
    
    *[role="form"] {
    max-width: 1000px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
    }

    .topText , .degree{
        display: inline-block;
        color: red;
    }

    fieldset.fsborder {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend.legendborder {
    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
}


</style>