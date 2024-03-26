<?php

function uniqueStrings($strings) {
    // Используем функцию array_unique() для удаления дубликатов
    // Она сохраняет первое вхождение каждого элемента и удаляет все последующие вхождения
    return array_unique($strings);
}

// Пример использования функции
$strings = ["apple", "banana", "apple", "orange", "banana", "pear"];
$unique = uniqueStrings($strings);
print_r($unique);

