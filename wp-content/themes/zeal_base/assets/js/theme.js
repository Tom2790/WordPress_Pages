jQuery('[data-toggle]').click(function (){
    const item = jQuery(this).data('toggle');
    jQuery(item).toggleClass('show');
});