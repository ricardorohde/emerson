
$(document).ready(function(){
    // PRELOAD GIF

    /*
    var $loading = $('#loader').hide();
    $(document)
    .ajaxStart(function () {
        $loading.show();
    })
    .ajaxStop(function () {
        $loading.hide();
    });

    / *
    $('#loader').hide();
    jQuery.ajaxSetup({
      beforeSend: function() {
         $('#loader').fadeIn(500);
      },
      complete: function(){
         $('#loader').fadeOut(500);
      },
      success: function() {}
    });
    */

    // ACTIVE BUTTON
    var navBtn = 'ul#main-nav > li';
    $(navBtn).click(function() {
        $(navBtn)
        .removeClass('active')
        .find('a > span')
        .remove();

        $(this)
        .addClass('active')
        .find('a')
        .append('<span class="sr-only">(current)</span>');
    });

    // ACTION: VIEW
    $('a.action-view').click(function(e) {
        e.preventDefault();

        var tbl = $(this).attr('href');

        $.ajax({
            url: '_view.php?tb='+tbl,
            success: function(r) {
                $('#common-wrapper').html(r);
            }
        });
    });

    // ACTION: CREATE
    $('a.action-create').click(function(e) {
        e.preventDefault();

        var tbl = $(this).attr('href');

        $.ajax({
            url: '_create_form.php?tb='+tbl,
            success: function(r) {
                $('#common-wrapper').html(r);
            }
        });
    });

    // ACTION: READ
    $('a.action-read').click(function(e) {
        e.preventDefault();

        var tbl = $(this).attr('data-tbl');
        var idColName = $(this).attr('data-id-col-name');
        var id = $(this).attr('data-id');

        $.ajax({
            url: 'actions/act_read.php?tbl='+tbl+'&id-col-name='+idColName+'&id='+id,
            success: function(r) {
                $('#common-wrapper').html(r);
            }
        });
    });

    // ACTION: UPDATE
    $('a.action-update').click(function(e) {
        e.preventDefault();

        var tbl = $(this).attr('data-tbl');
        var idColName = $(this).attr('data-id-col-name');
        var id = $(this).attr('data-id');

        $.ajax({
            url: '_update_form.php?tbl='+tbl+'&id-col-name='+idColName+'&id='+id,
            success: function(r) {
                $('#common-wrapper').html(r);
            }
        });
    });

    // ACTION: DELETE
    $('a.action-delete').click(function(e) {
        e.preventDefault();

        var tbl = $(this).attr('data-tbl');
        var idColName = $(this).attr('data-id-col-name');
        var id = $(this).attr('data-id');

        $.ajax({
            url: '_delete_confirm.php?tb='+tbl+'&id-col-name='+idColName+'&id='+id,
            success: function(r) {
                $('#common-wrapper').html(r);
            }
        });
    });

    // ACTION: CANCEL
    $('a.action-cancel').click(function(e) {
        e.preventDefault();

        var tbl = $(this).attr('href');

        $.ajax({
            url: '_view.php?tb='+tbl,
            success: function(r) {
                $('#common-wrapper').html(r);
            }
        });
    });



        ///////



        /*
        $('form#form-create').submit(function(e) {
            e.preventDefault();

            $(this).ajaxForm({url: 'server.php', type: 'post'});

            var tbl = $(this).find( "input[name='tb']" ).val();

            $.ajax({
                url: 'actions/act_create.php?tb='+tbl,
                success: function(r) {
                    $('#common-wrapper').html(r);
                }
            });
        });
    */

    // CREATE
    $('form#form-create').submit(function(e) {
        e.preventDefault();

        var dados = jQuery( this ).serialize();

        var tbl = $(this).find( "input[name='tb']" ).val();

        jQuery.ajax({
            type: "POST",
            url: 'actions/act_create.php?tb='+tbl,
            data: dados,
            success: function(data) {
                $('#common-wrapper').html(data);
            }
        });

        return false;
    });

    // UPDATE
    $('form#form-update').submit(function(e) {
        e.preventDefault();

        var dados = jQuery( this ).serialize();

        var tbl = $(this).find( "input[name='tb']" ).val();
        var idColName = $(this).find( "input[name='id-col-name']" ).val();
        var id = $(this).find( "input[name='id']" ).val();

        jQuery.ajax({
            type: "POST",
            url: 'actions/act_update.php?tb='+tbl+'&id-col-name='+idColName+'&id='+id,
            data: dados,
            success: function(data) {
                $('#common-wrapper').html(data);
            }
        });

        return false;
    });

    // DELETE
    $('a.process-delete').click(function(e) {
        e.preventDefault();

        var tbl = $(this).attr('data-tbl');
        var idColName = $(this).attr('data-id-col-name');
        var id = $(this).attr('data-id');

        $.ajax({
            url: 'actions/act_delete.php?tb='+tbl+'&id-col-name='+idColName+'&id='+id,
            success: function(r) {
                $('#common-wrapper').html(r);
            }
        });
    });

});
