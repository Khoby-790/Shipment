/**
* @package Itl_Cargo
* @author Poets of Code
* @copyright Copyright (c) 2013 - 2018 Poets of Code
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
jQuery(function($) {
    $('.quick-booking').on('submit', function(event) {
        event.preventDefault();
        var $self = $(this);
        var value = $(this).serializeArray();
        var request = { 'option': 'com_sppagebuilder', 'task': 'ajax', 'addon': 'quick_booking', 'data': value };
        $.ajax({
            type: 'POST',
            data: request,
            beforeSend: function() {
                $self.find('.btn-booking').attr('disabled', 'disabled');
            },
            success: function(response) {
                $self.find('.booking-status').html($.parseJSON(response).data).fadeIn();
            }
        });
    });
});
