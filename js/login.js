function abc() {
    $("#rProduct").click(function() {
        if (!$(this).hasClass('login')) {
            $('#loginModal').modal('show');
        } else {
            $("#ratingDetails").hide();
            $("#ratingSection").show();
        }
    });
}