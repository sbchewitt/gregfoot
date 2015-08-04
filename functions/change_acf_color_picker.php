<?php

// SOURCE: http://support.advancedcustomfields.com/forums/topic/customise-color-picker-swatches/
// Adds client custom colors to WYSIWYG editor and ACF color picker.

function change_acf_color_picker() {

    global $parent_file;

    echo "<script>
        (function($){
            acf.add_action('ready append', function() {
                acf.get_fields({ type : 'color_picker'}).each(function() {
                    $(this).iris({
                        color: $(this).find('.wp-color-picker').val(),
                        mode: 'hsv',
                        palettes: ['#09F', '#0F0', '#FF0', '#444', '#FFF', '#E62A61'],
                        change: function(event, ui) {
                            $(this).find('.wp-color-result').css('background-color', ui.color.toString());
                            $(this).find('.wp-color-picker').val(ui.color.toString());
                        }
                    });
                });
            });
        })(jQuery);
    </script>";
}