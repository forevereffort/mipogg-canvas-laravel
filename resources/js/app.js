window.jQuery = require('jquery');
window.toastr = require('toastr');

jQuery(document).ready(function(){
    jQuery('#mobile-menu-button').click(function(){
        var status = jQuery(this).attr("data-status");

        if( status == 'close' ){
            jQuery(this).addClass("clicked-menu");
            jQuery(this).attr("data-status", "open");

            jQuery('#mobile-menu').slideDown();
        } else {
            jQuery(this).removeClass("clicked-menu");
            jQuery(this).attr("data-status", "close");

            jQuery('#mobile-menu').slideUp();
        }
    });

    // function blogButtonsEvents(parent_element){
    //     jQuery('.blog-read-more-btn', parent_element).click(function(){
    //         var post_id = jQuery(this).attr('data-post-id'),
    //             btn_element = this,
    //             status = jQuery(this).attr('data-status');
            
    //         if( status == 'no' ){
    //             jQuery('.ajax-spinner').removeClass('hide');

    //             jQuery.ajax({
    //                 url: "get/post/" + post_id,
    //                 dataType: 'json',
    //                 type: 'GET',
    //                 success: function(res) {
    //                     jQuery('#blog-info-' + post_id).html(res.data.body).removeClass('hide');
    //                     jQuery('#blog-info-extract-' + post_id).addClass('hide');

    //                     jQuery('#blog-read-more-btn-' + post_id).addClass('hide');
    //                     jQuery('#blog-info-cancel-' + post_id).removeClass('hide');

    //                     jQuery('.blog-info-inner', jQuery(btn_element).parent().parent()).removeClass('blog-info-extract');

    //                     jQuery(btn_element).attr('data-status', 'yes');

    //                     jQuery('#sthumbnail-' + post_id).addClass('hide');
    //                     jQuery('#thumbnail-' + post_id).removeClass('hide');

    //                     jQuery('.ajax-spinner').addClass('hide');
    //                 }
    //             });
    //         } else {
    //             jQuery('#blog-info-' + post_id).removeClass('hide');
    //             jQuery('#blog-info-extract-' + post_id).addClass('hide');

    //             jQuery('#blog-read-more-btn-' + post_id).addClass('hide');
    //             jQuery('#blog-info-cancel-' + post_id).removeClass('hide');

    //             jQuery('.blog-info-inner', jQuery(btn_element).parent().parent()).removeClass('blog-info-extract');

    //             jQuery('#sthumbnail-' + post_id).addClass('hide');
    //             jQuery('#thumbnail-' + post_id).removeClass('hide');
    //         }

    //         return false;
    //     });

    //     jQuery('.blog-info-cancel', parent_element).click(function(){
    //         var post_id = jQuery(this).attr('data-post-id');
            
    //         jQuery('#blog-info-' + post_id).addClass('hide');
    //         jQuery('#blog-info-extract-' + post_id).removeClass('hide');

    //         jQuery('#blog-read-more-btn-' + post_id).removeClass('hide');
    //         jQuery('#blog-info-cancel-' + post_id).addClass('hide');

    //         jQuery('.blog-info-inner', jQuery(this).parent().parent()).addClass('blog-info-extract');

    //         jQuery('#sthumbnail-' + post_id).removeClass('hide');
    //         jQuery('#thumbnail-' + post_id).addClass('hide');

    //         return false;
    //     });
    // }

    if( jQuery('.blog-list').length > 0 ){
        // blogButtonsEvents(jQuery('body'));

        jQuery(window).scroll(function () {
            if( jQuery(document).height() - jQuery(this).height() == jQuery(this).scrollTop() ) {
                var current_page = parseInt(jQuery('#blog-list').attr('data-current-page')),
                    last_page = parseInt(jQuery('#blog-list').attr('data-last-page'));
                
                if( current_page < last_page ){
                    var next_page = current_page + 1;
                    jQuery('.ajax-spinner').removeClass('hide');

                    jQuery.ajax({
                        url: "get/post-page?page=" + next_page,
                        dataType: 'json',
                        type: 'GET',
                        success: function(res) {
                            jQuery.each(
                                res.data.data,
                                function(index, value){
                                    var html = '';
                                    html += '<div class="blog-item blog-page-' + current_page + '" style="display:none;">';
                                        html += '<div class="blog-featured-image">';
                                            if( value.featured_image ){
                                                // html += '<img id="sthumbnail-' + value.id + '" src="' + value.sthumbnail + '" alt="' + value.featured_image_caption + '" />';
                                                // html += '<img id="thumbnail-' + value.id + '" class="hide" src="' + value.thumbnail + '" alt="' + value.featured_image_caption + '" />';
                                                html += '<img src="' + value.thumbnail + '" alt="' + value.featured_image_caption + '" />';
                                            }
                                        html += '</div>';
                                        html += '<div class="blog-info">';
                                            html += '<div class="blog-info-inner blog-info-extract">';
                                                html += '<h2 class="blog-post-title">' + value.title + '</h2>';
                                                html += '<div id="blog-info-extract-' + value.id + '">';
                                                    html += '<p>' + value.excerpt + ' &raquo;</p>';
                                                html += '</div>';
                                                html += '<div id="blog-info-' + value.id + '" clss="hide">';
                                                html += '</div>';
                                            html += '</div>';
                                            html += '<div id="blog-info-link-' + value.id + '" class="blog-info-link">';
                                                html += '<a href="' + value.url + '" id="blog-read-more-btn-' + value.id + '" data-post-id="' + value.id + '" class="blog-read-more-btn" data-status="no">Read more</a>';
                                                html += '<a href="#" id="blog-info-cancel-' + value.id + '" data-post-id="' + value.id + '" class="blog-info-cancel hide">Done!</a>';
                                            html += '</div>';
                                        html += '</div>';
                                    html += '</div>';

                                    jQuery('#blog-list .container').append(html);

                                    // blogButtonsEvents(jQuery('#blog-info-link-' + value.id));

                                }
                            );

                            jQuery('.ajax-spinner').addClass('hide');
                            jQuery('.blog-page-' + current_page).fadeIn(2000);
                        }
                    });

                    jQuery('#blog-list').attr('data-current-page', next_page);
                }
            }
        });
    }

    if (jQuery('.contact-us-container form button').length > 0) {
        jQuery('.contact-us-container form button').click(function(event) {
            event.preventDefault();

            jQuery('.contact-us-container form .error').remove();

            jQuery.ajax({
                url: 'https://backend.mipogg.com/api/contact',
                type: 'POST',
                data: {
                    'first_name': jQuery('#first_name').val(),
                    'last_name': jQuery('#last_name').val(),
                    'email': jQuery('#email').val(),
                    'message': jQuery('#message').val(),
                },
                success: function (data) {
                    jQuery('.contact-us-container form input, .contact-us-container form textarea').val('');

                    if (window.location.href.indexOf("/fr") > -1) {
                        toastr.success('Le message a été envoyé!');
                    } else {
                        toastr.success('Successfully sent message!');
                    }
                },
                error: function (data) {
                    jQuery.each(data.responseJSON.errors, function(key, value) {
                        if (window.location.href.indexOf("/fr") > -1) {
                            if (value == 'The first name field is required.') {
                                value = 'Le prénom est requis.';
                            }
                            if (value == 'The last name field is required.') {
                                value = 'Le nom est requis.';
                            }
                            if (value == 'The email field is required.') {
                                value = 'Le courriel est requis.';
                            }
                            if (value == 'The message field is required.') {
                                value = 'Le message est requis.';
                            }
                        }

                        var inputError = jQuery('.contact-us-container form input[name=' + key + ']');

                        if (!inputError.length) {
                            var inputError = jQuery('.contact-us-container form textarea[name=' + key + ']');
                        }

                        if (Array.isArray(value)) {
                            value = value.join(' ');
                        }

                        if (inputError.attr('type') != 'checkbox') {
                            inputError.after('<div class="error">' + value + '</div>');
                        } else {
                            inputError.parent().parent().after('<div class="error checkbox-error">' + value + '</div>');
                        }
                    });
                },
            });
        });
    }
});