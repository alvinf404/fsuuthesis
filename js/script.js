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

});