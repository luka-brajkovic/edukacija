$(document).ready(function() {
    
    $.expr[":"].contains = $.expr.createPseudo(function(arg) {
        return function( elem ) {
            return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
        };
    });
    
        
    
      $(document).on('click', '.add-to-cart', function() {
      alert('Morate uneti bar 1 proizvod');
      var element       = $(this);
      var data          = element.data();
      var quantity      = element.closest('tr').find('qty').val();
      if (quantity == 0 || !quantity) {
        alert('Morate uneti bar 1 proizvod');
        return false;
      }
      $.ajax({
      url: $('#appurl').val() + "work.php",
        data:{action:'add-to-cart', sif: data.sif, quantity: quantity},
      }).done(function(data) {
        $('#mini-cart').html(data);
      });
    });
    
    
    
    
    $('.remove-action').on('click', function(){
        var data    = $(this).data();
        var msg     = data.removeMsg;
        var status  = confirm(msg);
        if(!status) {
            return false;
        }
    });
    
    $('#admin-search').keypress(function(e){
        if(e.which == 13) {
            filterAdmins();
        }
    });
    
    $('#admin-search-button').on('click', function(e){
        filterAdmins();
    });
    
    $('.load-attributes').on('change', function(){
        var val = $(this).val();
        if(val != '') {
            $.ajax({
                type: "GET",
                url: "work.php",
                data: "categoryID="+val+"&action=load-attributes",
                success: function(data){
                    $('.attributes-container').html(data);
                }
            });
        }
    });
    
    if($('#category-table').size() > 0) {
        $('#category-table').sortable({
            axis: 'y',
            items: 'tr:not(.header)',
            handle: '.handle',
            placeholder: 'sortable-class',
            containment: 'parent',
            helper: function(e, tr) {
                var $originals = tr.children();
                var $helper = tr.clone();
                $helper.children().each(function(index) {
                        $(this).width($originals.eq(index).width())
                });
                return $helper;
            },
            forcePlaceholderSize: true,
            delay: 150,
            update: function(event, ui) {
                    var order       = $(this).sortable('serialize');
                    var parent_id   = $(this).attr("parent");
                    $.ajax({
                        type: "POST",
                        url: "work.php",
                        data: order+"&parent_id="+parent_id+"&action=order",
                        success: function(msg){}
                    });
            } 
        });
    }
    
    if($('#footer-group').size() > 0) {
        $('#footer-group').sortable({
            axis: 'y',
            items: 'tr:not(.header)',
            handle: '.handle',
            placeholder: 'sortable-class',
            containment: 'parent',
            helper: function(e, tr) {
                var $originals = tr.children();
                var $helper = tr.clone();
                $helper.children().each(function(index) {
                        $(this).width($originals.eq(index).width())
                });
                return $helper;
            },
            forcePlaceholderSize: true,
            delay: 150,
            update: function(event, ui) {
                    var order       = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        url: "work.php",
                        data: order+"&action=order",
                        success: function(msg){}
                    });
            } 
        });
    }
    
    if($('#footer-links').size() > 0) {
        $('#footer-links').sortable({
            axis: 'y',
            items: 'tr:not(.header)',
            handle: '.handle',
            placeholder: 'sortable-class',
            containment: 'parent',
            helper: function(e, tr) {
                var $originals = tr.children();
                var $helper = tr.clone();
                $helper.children().each(function(index) {
                        $(this).width($originals.eq(index).width())
                });
                return $helper;
            },
            forcePlaceholderSize: true,
            delay: 150,
            update: function(event, ui) {
                    var order       = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        url: "work.php",
                        data: order+"&action=order",
                        success: function(msg){}
                    });
            } 
        });
    }
    
    
     if($('.resizeble').size() > 0) {
        $('.resizeble').sortable({
            axis: 'y',
            items: 'tr:not(.header)',
            handle: '.handle',
            placeholder: 'sortable-class',
            containment: 'parent',
            helper: function(e, tr) {
                var $originals = tr.children();
                var $helper = tr.clone();
                $helper.children().each(function(index) {
                        $(this).width($originals.eq(index).width())
                });
                return $helper;
            },
            forcePlaceholderSize: true,
            delay: 150,
            update: function(event, ui) {
                    var order       = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        url: "work.php",
                        data: order+"&action=order",
                        success: function(msg){console.log(msg)}
                    });
            } 
        });
    }
    
    
    if($('.resizeblearticle').size() > 0) {
        $('.resizeblearticle').sortable({
            axis: 'y',
            items: 'tr:not(.header)',
            handle: '.handle',
            placeholder: 'sortable-class',
            containment: 'parent',
            helper: function(e, tr) {
                var $originals = tr.children();
                var $helper = tr.clone();
                $helper.children().each(function(index) {
                        $(this).width($originals.eq(index).width())
                });
                return $helper;
            },
            forcePlaceholderSize: true,
            delay: 150,
            update: function(event, ui) {
                    var order       = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        url: "work.php",
                        data: order+"&action=order&article=1",
                        success: function(msg){console.log(msg)}
                    });
            } 
        });
    }
    
    $('.add-to-page').on('click', function(){
       var prodID = $('#products').val();
       var prodName = $('#products').find('option:selected').text();
       
       var html = "<div class='single-product'><span>"+prodName+"</span><a href='javascript:void(0);' class='remove-single-prod'> - Remove</a><input type='hidden' name='files[]' value='"+prodID+"' /></div>";
       $('.added-products').append(html);
       
    });
    
    $(document).on('click', '.remove-single-prod', function() {
       $(this).parent().remove();
    });
    
    $('.homepage-category').change(function(){
       
        var val = $(this).val();
        var id = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: "work.php",
            data: "action=get-products-for-category&categoryID=" + val,
            'dataType': 'json',
            success: function(data){
                console.log(data);
                var html = '<option value="">Select Product...</option>';
                for(var i in data) {
                    var product = data[i];
                    console.log(product);
                    html += '<option value="'+product.id+'">'+product.name+'</option>';
                }
                $('.product-'+id).html(html);
            }
        });
        
    });
    
    $('.chosen-select').chosen();
    
    function filterAdmins() {
        var val = $('#admin-search').val();
        if(val != "") {
            $('#admin-table > tbody > tr.table-row').hide();
            $('#admin-table > tbody >  tr.table-row > td:contains("'+val+'")').each(function(){
                $(this).parent().show();
            });
        }
        else {
            $('#admin-table > tbody > tr.table-row').show();
        }
    }

    $(document).on('blur', '.product-price-vendor', function() {
        var input = $(this);
        input.parent().append('<i class="fa fa-spin fa-spinner"></i>');
        input.hide();
        var data = input.data();

        var appURL = $('#appURL').val();
        $.ajax({
          type: "POST",
          url: appURL + 'product/work.php',
          data: {action: 'price-update', price: input.val(), productID: data.productId, vendorID: $('#vendorID').val()},
          success: function(data) {
            data = jQuery.parseJSON(data);
            input.show();
            input.parent().find('.fa-spin').remove();
            input.val(data.newPrice);
          }
        });

    });
    
    
   
    
    
});