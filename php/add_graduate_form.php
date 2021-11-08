<?php

    require_once('php/dbcon.php');
   
    if($_POST['action'] == 'add_student_form'){
        echo "Hello world!<br>";
        $graduateFamilyName = $_POST ['graduate_data']['graduateFamilyName'];
        $graduateGivenName = $_POST ['graduate_data']['graduateGivenName'];
        $graduateMiddleName = $_POST ['graduate_data']['graduateMiddleName'];
        $DateOfBirth = $_POST ['graduate_data']['DateOfBirth'];
        $PlaceOfBirth = $_POST ['graduate_data']['PlaceOfBirth'];
        $Citizenship = $_POST ['graduate_data']['Citizenship'];
        $Religion = $_POST ['graduate_data']['Religion'];
        $Contact = $_POST ['graduate_data']['Contact'];
        $Email = $_POST ['graduate_data']['Email'];
        $graduateID = $_POST ['graduate_data']['graduateID'];
        $DateApplied = $_POST ['graduate_data']['DateApplied'];


        $pdo -> beginTransaction();
        $preparedStatement = $pdo -> prepare("INSERT tbl_profile (family_name,
                                                        given_name,
                                                        middle_name,
                                                        date_of_birth,
                                                        place_of_birth,
                                                        citizenship,
                                                        religion,
                                                        contact,
                                                        email,
                                                        student_number,
                                                        date_applied) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        echo json_encode($graduateFamilyName);
        
    }

?>