$(document).ready(function(){

    console.log($.ajax)

    $('.applicant').click(function(){
        $('#applicantModal').modal('show');

        var idnumber = $(this).val($(this).attr('key')).val();
        var name = this.children[0].childNodes[1].outerText;
        $('.applicant-name').text(name);
        $('.applicant-idnumber').text(idnumber);
        
    });

    $('.notif-btn').on('click',() => {
        $('.notif-count').last().addClass("d-none");
    });

    $('#exampleModalCenter').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    });

    $("#showApplicationForm").click(function() {
        $("#ApplicationForm").toggle();
    });

    $("#showGraduateClearance").click(function() {
        $("#GraduateClearance").toggle();
    });


    /** ---------START SUBMIT GRADUATE FORM HERE----------- */



    const add_graduate_form = (graduateFamilyName, 
                            graduateGivenName,
                            graduateMiddleName,
                            DateOfBirth,
                            PlaceOfBirth,
                            Citizenship,
                            Religion,
                            Contact,
                            Email,
                            graduateStreet,
                            graduateBarangay,
                            graduateCity,
                            fatherFamilyName,
                            fatherGivenName,
                            fatherMiddleName,
                            motherFamilyName,
                            motherGivenName,
                            motherMiddleName,
                            parentStreet,
                            parentBaranggay,
                            parentCity,
                            elementaryName,
                            elementaryYear,
                            highschoolName,
                            highschoolYear,
                            graduateID,
                            DateApplied,
                            Degree,
                            Major,
                            Semester,
                            AcademicYear) =>{

        const graduate_data = {
            graduateFamilyName : graduateFamilyName,
            graduateGivenName : graduateGivenName,
            graduateMiddleName : graduateMiddleName,
            DateOfBirth : DateOfBirth,
            PlaceOfBirth : PlaceOfBirth,
            Citizenship : Citizenship,
            Religion : Religion,
            Contact : Contact,
            Email : Email,
            graduateID : graduateID,
            DateApplied : DateApplied,
            Degree : Degree,
            Major : Major,
            Semester : Semester,
            AcademicYear : AcademicYear
        };

        console.log(graduateFamilyName);
        console.log(graduateGivenName);
        console.log(graduateMiddleName);
        console.log(DateOfBirth);
        console.log(PlaceOfBirth);
        console.log(Citizenship);
        console.log(graduateFamilyName);
        console.log(Religion);
        console.log(Contact);
        console.log(Email);
        console.log(graduateID);
        console.log(DateApplied);
        
        $.ajax({
            type : "POST",
            data : {data : graduate_data, action : 'add_student_form'},
            url  : './php/add_graduate_form.php',
            success: function(data){

                const graduate_address_data = {
                    Email : Email,
                    graduateStreet : graduateStreet,
                    graduateBarangay : graduateBarangay,
                    graduateCity : graduateCity
                };
        
                console.log(Email, graduateStreet, graduateBarangay, graduateCity);
        
                $.ajax({
                    type : "POST",
                    data :{data: graduate_address_data, action : 'add_graduate_address'},
                    url  : './php/add_graduate_form.php',
                    success: function(data){
                        
                    }
                });
        
                const father_data = {
                    Email : Email,
                    fatherFamilyName : fatherFamilyName,
                    fatherGivenName : fatherGivenName,
                    fatherMiddleName : fatherMiddleName,
                };
        
                $.ajax({
                    type : "POST",
                    data : {data : father_data, action : 'add_father_data'},
                    url : './php/add_graduate_form.php',
                    success : function(data){
        
                    }
                });
        
                const mother_data = {
                    Email : Email,
                    motherFamilyName : motherFamilyName,
                    motherGivenName : motherGivenName,
                    motherMiddleName : motherMiddleName
                };
                
                console.log(motherGivenName);
        
                $.ajax({
                    type : "POST",
                    data : {data : mother_data, action : 'add_mother_data'},
                    url : './php/add_graduate_form.php',
                    success : function(data){
        
                    }
                });
        
        
                const parent_address_data = {
                    Email : Email,
                    parentStreet : parentStreet,
                    parentBaranggay : parentBaranggay,
                    parentCity : parentCity
                };
        
                // $.ajax({
                //     type : "POST",
                //     data : {data : parent_address_data, action : 'add_parent_address_data'},
                //     url : './php/add_graduate_form.php',
                //     success : function(data){
        
                //     }
                // });
        
                const elementary_data = {
                    Email : Email,
                    elementaryName : elementaryName,
                    elementaryYear : elementaryYear,
                };
        
        
        
                $.ajax({
                    type : "POST",
                    data : {data : elementary_data, action : 'add_elementary_data'},
                    url : './php/add_graduate_form.php',
                    success : function(data){
        
                    }
                });
        
                const highschool_data = {
                    Email : Email,
                    highschoolName : highschoolName,
                    highschoolYear : highschoolYear
                };
        
        
                $.ajax({
                    type : "POST",
                    data : {data : highschool_data, action : 'add_highschool_data'},
                    url : './php/add_graduate_form.php',
                    success : function(data){
        
                    }
                });
        
        
                const clearance_request = ({
                    Email : Email,
                    clearance_type : 'graduate',
                    clearance_status : 'pending'
                });
        
        
                $.ajax({
                    type : "POST",
                    data : {data : clearance_request, action : 'add_graduate_clearance_request'},
                    url : './php/add_graduate_form.php',
                    success : function(data){
        
                    }
                });
                
            }
        });

        


    }

    $('#SubmitGraduateForm').click(function(){
        add_graduate_form($("#graduateFamilyName").val(), 
                         $("#graduateGivenName").val(),
                         $("#graduateMiddleName").val(),
                         $("#DateOfBirth").val(),
                         $("#PlaceOfBirth").val(),
                         $("#Citizenship").val(),
                         $("#Religion").val(),
                         $("#Contact").val(),
                         $("#Email").val(),
                         $("#graduateStreet").val(),
                         $("#graduateBarangay").val(),
                         $("#graduateCity").val(),
                         $("#fatherFamilyName").val(),
                         $("#fatherGivenName").val(),
                         $("#fatherMiddleName").val(),
                         $("#motherFamilyName").val(),
                         $("#motherGivenName").val(),
                         $("#motherMiddleName").val(),
                         $("#parentStreet").val(),
                         $("#parentBaranggay").val(),
                         $("#parentCity").val(),
                         $("#elementaryName").val(),
                         $("#elementaryYear").val(),
                         $("#highschoolName").val(),
                         $("#highschoolYear").val(),
                         $("#graduateID").val(),
                         $("#DateApplied").val(),
                         $("#selectDegree option:selected").text(),
                         $("#major").val(),
                         $("#selectSemester option:selected").text(),
                         $("#selectAcademicYear option:selected").text()
                         );
    });

     /** ---------END SUBMIT GRADUATE FORM HERE----------- */


});


  