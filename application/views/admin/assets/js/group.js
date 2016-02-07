$(document).ready(function() {
    $('button#delete').click(function(e) {
        e.preventDefault();
        var parent = $(this).parent();
        $.ajax({
            type: 'post',
            url: 'jquery-record-delete.php',
            data: 'ajax=1&delete=' + parent.attr('id').replace('record-',''),
            beforeSend: function() {
                parent.animate({'backgroundColor':'#fb6c6c'},300);
            },
            success: function() {
                parent.slideUp(300,function() {
                    parent.remove();
                });
            }
        });
    });
});