<?php 

$users = DB::table('users')->get(); // возр. массив объектов

// Возр. одни объект
$user = DB::table('users')->where('name', 'John')->first();

// Возр. значение конкретного столбца
$email = DB::table('users')->where('name', 'John')->value('email');

// Получение результатов из таблицы «по кускам»
DB::table('users')->orderBy('id')->chunk(100, function($users) {
  foreach ($users as $user) {
    //
  }
});

// Вы можете остановить обработку последующих «кусков» вернув false из замыкания:
DB::table('users')->orderBy('id')->chunk(100, function($users) {
  // Обработка записей...

  return false;
});

// Получение списка всех значений одного столбца
$titles = DB::table('roles')->pluck('title', 'name');
// 'name' произвольный ключ для возвращаемого массива
foreach ($titles as $name => $title) {
  echo $title;
}