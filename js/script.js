$(document).ready(function(){

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
                            graduateBaranggay,
                            graduteCity,
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
                            DateApplied )=>{

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
            DateApplied : DateApplied
        };

        $.ajax({
            type : "POST",
            data : {data : graduate_data, action : 'add_student_form'},
            url  : './php/add_graduate_form.php',
            success: function(graduate_data){
                alert()
            }
        });

        const gradute_address_data = {
            Email : Email,
            graduateStreet : graduateStreet,
            graduateBaranggay : graduateBaranggay,
            graduteCity : graduteCity
        };

        const father_data = {
            Email : Email,
            fatherFamilyName : fatherFamilyName,
            fatherGivenName : fatherGivenName,
            fatherMiddleName : fatherMiddleName,
        };

        const mother_data = {
            Email : Email,
            motherFamilyName : motherFamilyName,
            motherGivenName : motherGivenName,
            motherMiddleName : motherMiddleName
        };


        const parent_address_data = {
            Email : Email,
            parentStreet : parentStreet,
            parentBaranggay : parentBaranggay,
            parentCity : parentCity
        };

        const elementary_data = {
            Email : Email,
            elementaryName : elementaryName,
            elementaryYear : elementaryYear,
        };

        const highschool_data = {
            Email : Email,
            highschoolName : highschoolName,
            highschoolYear : highschoolYear
        };
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
                         $("#graduateBaranggay").val(),
                         $("#graduteCity").val(),
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
                         );
    });

     /** ---------END SUBMIT GRADUATE FORM HERE----------- */


});


  