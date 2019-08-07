/**
 * Created by test on 3/27/2017.
 */
(function($){
    wp.customize( 'pu_header_show_search', function( value ) {
        value.bind( function( new_value ) {
            if ( new_value ){
                $("#top-search").show();
            } else{
                $("#top-search").hide();
            }
        });
    });

    wp.customize( 'pu_header_show_cart', function( value) {
        value.bind( function( new_value ) {
            if ( new_value ){
                $("#top-cart").show();
            } else{
                $("#top-cart").hide();
            }
        });
    });

    wp.customize( 'pu_excerpt_show_recipe_rating', function( value) {
        value.bind( function( new_value ) {
            if ( new_value ){
                $("#recipe_rating").show();
            } else{
                $("#recipe_rating").hide();
            }
        });
    });
})(jQuery);