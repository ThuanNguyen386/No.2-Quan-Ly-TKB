$(document).ready(function() {
    $('#school_year').multiselect({
        columns: 1,
        placeholder: ''
    });

    var numFile = 0;
    $('input[type="file"]').on("change", function(e) {
        var target = e.target || e.srcElement;
        console.log(target,"changed");
        console.log(e);
        if ($(target).val().length == 0) {
            console.log("Suspect Cancel was hit, no files selected.");
            $("#browser-text").val("");
            $("#tmp").val("");
            $("#avatar").removeAttr('src');
            if (numFile == target.files.length) {
                cancelButton.click();
            }        
        } 
        else {
        console.log("File selected: ", target.value);
        numFile = target.files.length;
        var geekss = e.target.files[0].name;
        $("#browser-text").val(geekss);
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#tmp").val(e.target.result);
                $("#avatar").attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    }
    });

    $('.myPopup').addClass('show').click(function() {
        $('.show').hide();
    });
});
