$(document).ready(function () {

    // Date picker
    function datepicker() {
        if ($('#datepicker').length) {
            $('#datepicker').datepicker();

        };
    }

    jQuery(document).on('ready', function () {
        (function ($) {
            // add your functions
            datepicker();
        })(jQuery);


    });

    // task add ajax 

    $('#add_task').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: data,
            dataType: 'html',
            contentType: false,
            cache: false,
            processData: false,

            beforesend: function () {
                $('#parentsuccess').html('loading.....');
            },
            success: function (result) {
                $('#parentsuccess').html(result);
            }
        });
    });

    // child task ajax

    $('#add_child_task').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: data,
            dataType: 'html',
            contentType: false,
            cache: false,
            processData: false,

            beforesend: function () {
                $('#childsuccess').html('loading.....');
            },
            success: function (result) {
                $('#childsuccess').html(result);
            }
        });
    });




    // complete task ajax
    $('.complete').click(function (event) {
        // alert("kfjdkjf");
        event.preventDefault();
        var taskid = $(this).data("taskid");
        var token = $("#form_token").val();
        var pagename = $("#pagename").val();

        jQuery.ajax({

            url: 'edit_process.php',
            method: 'POST',
            data: {
                taskid: taskid,
                token: token,
                pagename: pagename

            },
            beforesend: function () {
                $('#success').html('loading.....');
            },
            success: function (result) {
                $('#success').html(result);
            }

        });
    });

    // uncomplete task ajax
    $('.mark_incomplete').click(function (event) {
        event.preventDefault();
        var taskid = $(this).data("taskidi");
        var pagename = $("#ipagename").val();

        jQuery.ajax({

            url: 'edit_process.php',
            method: 'POST',
            data: {
                taskid: taskid,
                pagename: pagename

            },
            beforesend: function () {
                $('#successi').html('loading.....');
            },
            success: function (result) {
                $('#successi').html(result);
            }
        });
    });


   

    // confirm delete js

    $('.delete').on("click", function () {
        if (confirm("Are you sure want to delete this task")) {
            var id = $(this).data("taskid");
            $("#taskid").val(id);
            $("#deleteform").submit();
        }

    });

    // update complete task ajax

    $('#complete_task').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'edit_process.php',
            data: data,
            dataType: 'html',
            contentType: false,
            cache: false,
            processData: false,
            beforesend: function () {
                $('#success').html('loading.....');
            },
            success: function (result) {
                $('#success').html(result);
            }
        });
    });

    // bulk data confirm delete

    $("#bulksubmit").on("click", function () {
        if ($("#action").val() == 'bulkdelete') {
            if (!confirm("Are you sure want to delete?")) {
                return false;
            }
        }
    });


    $('#datetimepicker1').datetimepicker();
    $('#datetimepicker2').datetimepicker();

});