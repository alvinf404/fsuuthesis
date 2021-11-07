<?php

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class = "graduation">
        <form class="form-horizontal" role="form">
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
                    <input type="text" id="major" placeholder="Major/Specialization" class="form-control" name= "email">
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
                        <input type="text" class="form-control" id="" placeholder="PSA/NSO Birth Family Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Given Name">Given Name</label>
                        <input type="text" class="form-control" id="" placeholder="Given Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Middle Name">Middle Name</label>
                        <input type="text" class="form-control" id="" placeholder="Middle Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Date of Birth">Date of Birth</label>
                        <input type="text" class="form-control" id="" placeholder="Date of Birth">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Place of Birth">Place of Birth</label>
                        <input type="text" class="form-control" id="" placeholder="Place of Birth">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Citizenship">Citizenship</label>
                        <input type="text" class="form-control" id="" placeholder="Citizenship">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Religion">Religion</label>
                        <input type="text" class="form-control" id="" placeholder="Religion">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Contact">Contact no.</label>
                        <input type="text" class="form-control" id="" placeholder="Contact Number">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" id="" placeholder="Email">
                    </div>
                </div>

                <label for="address" class="control-label">Address</label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Street">Street</label>
                        <input type="text" class="form-control" id="" placeholder="Street">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Baranggay">Baranggay</label>
                        <input type="text" class="form-control" id="" placeholder="Baranggay">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="City/Municipality">City / Municipality</label>
                        <input type="text" class="form-control" id="" placeholder="City / Municipality">
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
                                    <input type="text" class="form-control" id="" placeholder="Family Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Baranggay">Given Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Given Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="City/Municipality">Middle Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Middle Name">
                                </div>
                            </div>
                    </fieldset>
                    <fieldset class="fsborder">
                        <legend class="legendborder">Mother</legend>
                            <div class="form-row">
                               <div class="form-group col-md-4">
                                    <label for="FamilyName">Family Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Family Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Baranggay">Given Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Given Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="City/Municipality">Middle Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Middle Name">
                                </div>
                            </div>
                    </fieldset>
                    <label for="address" class="control-label">Address</label>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Street">Street</label>
                            <input type="text" class="form-control" id="" placeholder="Street">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Baranggay">Baranggay</label>
                            <input type="text" class="form-control" id="" placeholder="Baranggay">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="City/Municipality">City / Municipality</label>
                            <input type="text" class="form-control" id="" placeholder="City / Municipality">
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
                                <input type="text" class="form-control" id="" placeholder="School Name">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Baranggay">Year Graduated</label>
                                <input type="text" class="form-control" id="" placeholder="Year Graduated">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="fsborder">
                        <legend class="legendborder">High School</legend>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label for="Street">School Name</label>
                                <input type="text" class="form-control" id="" placeholder="School Name">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Baranggay">Year Graduated</label>
                                <input type="text" class="form-control" id="" placeholder="Year Graduated">
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
                                <input type="text" class="form-control" id="" placeholder="Student Number">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="Baranggay">Date Applied</label>
                                <input type="text" class="form-control" id="" placeholder="Date Applied">
                            </div>
                        </div>
            </div>
            
                
            

        </form> <!-- /form -->
    </div>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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