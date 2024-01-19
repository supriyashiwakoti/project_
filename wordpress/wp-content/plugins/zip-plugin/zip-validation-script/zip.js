(function ($) {
    $(document).ready(function () {
        var zipInput = $('#zip-code');

        zipInput.inputmask('A9A 9A9', { placeholder: 'A__ ___' });

        zipInput.on('input', function () {
            updatePlaceholder();
        });

        $('#submit-button').on('click', function () {
            var zipCode = zipInput.val();

            var zipRegex = /^[A-Za-z]\d[A-Za-z] \d[A-Za-z]\d$/;
            var numRegex = /^\d{5}$/;

            if (!zipRegex.test(zipCode) && !numRegex.test(zipCode)) {
                alert('Invalid Zip Code');
                return false;
            }
            console.log('Zip Code: ' + zipCode);
        });

        function updatePlaceholder() {
            var inputValue = zipInput.val();
            var firstChar = inputValue.charAt(0);

            if (isNaN(firstChar)) {
                zipInput.inputmask('A9A 9A9', { placeholder: 'A__ ___' });
            } else {
                zipInput.inputmask('99999', { placeholder: '9____' });
            }
        }
    });
})(jQuery);
