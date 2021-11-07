<?php

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class = "graduation">
        <form class="form-horizontal" role="form" style="border:1px solid;">
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
                                <small>Maria Lourdes G. Naquita, LTP</small>
                                <br>
                                <small>University Registrar</small>
                            </p>
                        </center>
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