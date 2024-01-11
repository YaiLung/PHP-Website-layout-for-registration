<?php
function formatPhoneNumber($phoneNumber) {
    // Удаление всех символов, кроме цифр
    $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

    // Форматирование номера телефона
    $formattedNumber = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $phoneNumber);

    return $formattedNumber;
}
?>
