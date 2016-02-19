$(document).ready(function() {
    $('button#delete').click(function(){
        var groupid = $('span#groupId').text();
        var userid = $(this).siblings('span#userId').text();
        var URL = 'http://localhost/cordis4/index.php/admin_ajax/ajax_removeUserFromGroup';
        var myButton = $(this);

        $.ajax({
            type: 'POST',
            data: {groupid: groupid, userid: userid},
            url: URL,
            success: function(){
                $(myButton).parent().slideUp(300, function(){
                    $(myButton).parent().remove();
                });
            }
        });
    });

    $('span#removeGroup').click(function(){
        $('div#removeGroupConfirmation').slideToggle(300);
    });

    $('button#removeGroupConfirmationNo').click(function(event){
        event.preventDefault();
        $('div#removeGroupConfirmation').slideToggle(300);
    });

});