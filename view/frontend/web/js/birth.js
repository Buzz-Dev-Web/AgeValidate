/**
 * @package   Buzz_AgeValidate
 * @author    github.com/mauricio-tonny
 * @copyright Copyright (c)
 * @version   1.1
 */

require(['jquery', 'mage/translate-inline'], function($) {
    $(document).ready(function() {
        var placeholderText = $.mage.__('Selecione a data no calendário ao lado.');
        $('#dob').attr('placeholder', placeholderText);
    });
});
