function detectCardType(number) {
    const amexPattern = /^3[47][0-9]{0,13}/;
    const visaPattern = /^4[0-9]{0,15}/;
    const masterPattern = /^5[1-5][0-9]{0,14}/;

    if (amexPattern.test(number)) {
        return 'amex';
    } else if (visaPattern.test(number) || masterPattern.test(number)) {
        return 'visaMaster';
    } else {
        return 'default';
    }
}

function applyMask(mask, cvvMask) {
    $('#number').mask(mask);
    $('#cvv').mask(cvvMask);
}

$(document).ready(function() {
    $('#number').mask('0000 0000 0000 0000');
    $('#cvv').mask('000');
    $('#exp').mask('00/00');

    $('#number').on('input', function() {
        const cardNumber = $(this).val().replace(/\D/g, '');
        const cardType = detectCardType(cardNumber);

        if (cardType === 'amex') {
            applyMask('0000 000000 00000', '0000');
        } else {
            applyMask('0000 0000 0000 0000', '000');
        }
    });
});