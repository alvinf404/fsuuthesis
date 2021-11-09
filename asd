<?php

    require_once('dbcon.php');

    if($_POST['action'] == 'add_student_form'){
        
        $graduateFamilyName = $_POST['data']['graduateFamilyName'];
        $graduateGivenName = $_POST['data']['graduateGivenName'];
        $graduateMiddleName = $_POST['data']['graduateMiddleName'];
        $DateOfBirth = $_POST['data']['DateOfBirth'];
        $PlaceOfBirth = $_POST['data']['PlaceOfBirth'];
        $Citizenship = $_POST['data']['Citizenship'];
        $Religion = $_POST['data']['Religion'];
        $Contact = $_POST['data']['Contact'];
        $Email = $_POST['data']['Email'];
        $graduateID = $_POST['data']['graduateID'];
        $DateApplied = $_POST['data']['DateApplied'];
        $Degree = $_POST['data']['Degree'];
        $Major = $_POST['data']['Major'];
        $Semester = $_POST['data']['Semester'];
        $AcademicYear = $_POST['data']['AcademicYear'];

        echo json_encode($graduateFamilyName);
        echo json_encode($graduateGivenName);
        echo json_encode($graduateMiddleName);
        echo json_encode($DateOfBirth);
        echo json_encode($PlaceOfBirth);
        echo json_encode($Citizenship);
        echo json_encode($Religion);
        echo json_encode($Contact);
        echo json_encode($Email);
        echo json_encode($graduateID);
        echo json_encode($DateApplied);
       

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO tbl_profile (family_name,
                                                            given_name,
                                                            middle_name,
                                                            date_of_birth,
                                                            place_of_birth,
                                                            citizenship,
                                                            religion,
                                                            contact,
                                                            email,
                                                            student_number,
                                                            date_applied,
                                                            degree,
                                                            major,
                                                            semester,
                                                            academic_year) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
           
            $prepared_statement->execute(array($graduateFamilyName,
                                                $graduateGivenName,
                                                $graduateMiddleName,
                                                $DateOfBirth,
                                                $PlaceOfBirth,
                                                $Citizenship,
                                                $Religion,
                                                $Contact,
                                                $Email,
                                                $graduateID,
                                                $DateApplied,
                                                $Degree,
                                                $Major,
                                                $Semester,
                                                $AcademicYear));
            echo $pdo->lastInsertId();
            $pdo->commit();

        }catch (Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }

    if($_POST['action'] == 'add_graduate_address'){
        
        $Email = $_POST['data']['Email'];
        $graduateStreet = $_POST['data']['graduateStreet'];
        $graduateBarangay = $_POST['data']['graduateBarangay'];
        $graduateCity = $_POST['data']['graduateCity'];
        

        echo json_encode($Email);
        echo json_encode($graduateStreet);
        echo json_encode($graduateBarangay);
        echo json_encode($graduateCity);
       

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO tbl_address (street,
                                                            barangay,
                                                            city,
                                                            profile_email) VALUES (?,?,?,?)");
           
            $prepared_statement->execute(array($graduateStreet,
                                                $graduateBarangay,
                                                $graduateCity,
                                                $Email));
            echo $pdo->lastInsertId();
            $pdo->commit();

        }catch (Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }

    if($_POST['action'] == 'add_father_data'){
        
        $Email = $_POST['data']['Email'];
        $fatherFamilyName = $_POST['data']['fatherFamilyName'];
        $fatherGivenName = $_POST['data']['fatherGivenName'];
        $fatherMiddleName = $_POST['data']['fatherMiddleName'];
        

        echo json_encode($Email);
        echo json_encode($fatherFamilyName);
        echo json_encode($fatherGivenName);
        echo json_encode($fatherMiddleName);
       

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO tbl_father (given_name,
                                                            last_name,
                                                            middle_name,
                                                            profile_email) VALUES (?,?,?,?)");
           
            $prepared_statement->execute(array($fatherGivenName,
                                                $fatherFamilyName,
                                                $fatherMiddleName,
                                                $Email));
            echo $pdo->lastInsertId();
            $pdo->commit();

        }catch (Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }

    if($_POST['action'] == 'add_mother_data'){
        
        $Email = $_POST['data']['Email'];
        $motherFamilyName = $_POST['data']['motherFamilyName'];
        $motherGivenName = $_POST['data']['motherGivenName'];
        $motherMiddleName = $_POST['data']['motherMiddleName'];
        

        echo json_encode($Email);
        echo json_encode($motherFamilyName);
        echo json_encode($motherGivenName);
        echo json_encode($motherMiddleName);
       

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO tbl_mother (given_name,
                                                            last_name,
                                                            middle_name,
                                                            profile_email) VALUES (?,?,?,?)");
           
            $prepared_statement->execute(array($motherGivenName,
                                                $motherFamilyName,
                                                $motherMiddleName,
                                                $Email));
            echo $pdo->lastInsertId();
            $pdo->commit();

        }catch (Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }

    if($_POST['action'] == 'add_parent_address_data'){
        
        $Email = $_POST['data']['Email'];
        $parentStreet = $_POST['data']['parentStreet'];
        $parentBaranggay = $_POST['data']['parentBaranggay'];
        $parentCity = $_POST['data']['parentCity'];
        

        echo json_encode($Email);
        echo json_encode($parentStreet);
        echo json_encode($parentBaranggay);
        echo json_encode($parentCity);
       

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO tbl_mother (given_name,
                                                            last_name,
                                                            middle_name,
                                                            profile_email) VALUES (?,?,?,?)");
           
            $prepared_statement->execute(array($motherGivenName,
                                                $motherFamilyName,
                                                $motherMiddleName,
                                                $Email));
            echo $pdo->lastInsertId();
            $pdo->commit();

        }catch (Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }

    if($_POST['action'] == 'add_elementary_data'){
        
        $Email = $_POST['data']['Email'];
        $elementaryName = $_POST['data']['elementaryName'];
        $elementaryYear = $_POST['data']['elementaryYear'];
        
        echo json_encode($Email);
        echo json_encode($elementaryName);
        echo json_encode($elementaryYear);

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO tbl_elementary (school_name,
                                                            year_graduated,
                                                            profile_email) VALUES (?,?,?)");
           
            $prepared_statement->execute(array($elementaryName,
                                                $elementaryYear,
                                                $Email));
            echo $pdo->lastInsertId();
            $pdo->commit();

        }catch (Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }

    if($_POST['action'] == 'add_highschool_data'){
        
        $Email = $_POST['data']['Email'];
        $highschoolName = $_POST['data']['highschoolName'];
        $highschoolYear = $_POST['data']['highschoolYear'];
        
        echo json_encode($Email);
        echo json_encode($highschoolName);
        echo json_encode($highschoolYear);

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO tbl_elementary (school_name,
                                                            year_graduated,
                                                            profile_email) VALUES (?,?,?)");
           
            $prepared_statement->execute(array($highschoolName,
                                                $highschoolYear,
                                                $Email));
            echo $pdo->lastInsertId();
            $pdo->commit();

        }catch (Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }

    if($_POST['action'] == 'add_graduate_clearance_request'){
        
        $Email = $_POST['data']['Email'];
        $clearance_type = $_POST['data']['clearance_type'];
        $clearance_status = $_POST['data']['clearance_status'];
        
        echo json_encode($Email);
        echo json_encode($clearance_type);
        echo json_encode($clearance_status);

        try{
            $pdo->beginTransaction();
            $prepared_statement = $pdo->prepare("INSERT INTO tbl_clearance_status (clearance_type,
                                                            clearance_status,
                                                            email) VALUES (?,?,?)");
           
            $prepared_statement->execute(array($clearance_type,
                                                $clearance_status,
                                                $Email));
            echo $pdo->lastInsertId();
            $pdo->commit();

        }catch (Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }

?>