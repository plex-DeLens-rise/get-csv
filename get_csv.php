function get_csv($filename) ///Функция получает название файла
{
    $file_list = []; ///Создаём пустой массив
    $file = fopen($filename, 'r'); ///Открываем в режиме чтения файл
    $id = 0;

   while (($line = fgetcsv($file, 0, ';')) !== FALSE) ///Получаем строку в виде массива из файла 
   {
    $file_list[$id] = $line; ///Полученную строку добавляем в массив
    $id++;
   }

    fclose($file); ///Закрываем файл
    return $file_list; ///Возвращаем полученный результат
}
