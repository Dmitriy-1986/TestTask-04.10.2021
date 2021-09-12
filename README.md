<h1>
    <a href="https://sharing.clickup.com/t/h/11m9me5/ZZ3LLDGNAGTKLSG">Тестовое задание набора (04.10.2021) MERN </a>  
</h1>

https://dmitriy-1986.github.io/TestTask-04.10.2021/

<h2>
    === Linux навигация и поиск ===
</h2>
<h3>
    Файловая структура
</h3>
<pre>
/
--/var/
----/www/
------/html/
--------/index.html
--------/404.html
--------/logs
----------/error.txt
----------/access.txt
--------/images
----------/icon.png
----------/cat.jpg
----------/dog.jpg
--------/.htaccess
</pre>
<h4>
    Набор команд с комментарием их работы для решения следующих задач:
</h4>
<ul>
    <li>
        1. Перейдите в папку html и выведите список всех папок (без файлов)? <br>
        - пишется команда cd, а затем путь, куда нужно перейти. <br>
<pre>cd/var/www/html</pre>
        - пишется команда ls, отобразится содержимое текущей директории. <br>
<pre>ls</pre>
    </li>
    <li>
        2. Удалите пустые строки из файла error.txt?<br>
        - пишется команда sed, для удаления пустых строк в файле,<br> -i используется
        для воздействия на файл,<br> ^ - это начало строки,<br> $ - это конец строки,<br>
        d - удалить, если есть пустая строка<br>
<pre> sed -i "/^$/d" error.txt</pre>
    </li>
    <li>
        3. Выведите список файлов с расширением .jpg в папке images?<br>
        - Переходим в каталог images, пишется команда ls, * знак сопоставляет все файлы,
        точка представляет текущий каталог,  расширение jpg ( подстановка ) к файлам 
        между фигурными скобками 
<pre> 
cd/var/www/html/images
ls *.{jpg}
</pre>
    </li>
    <li>
        4. Напишите bash скрипт который переименует все файлы в папке logs с .txt на .log ?<br>
        - пишется команда nano для использования редактора командной строки и создаем файл скрипта
        с названием script.sh, sh - расширение bash файлов.<br>
<pre>        
nano script.sh     
</pre>
- сообщаем shell интерпретировать сценарий bash при выполнении.        
<pre>         
#!/bin/bash        
</pre>
- Переходим в каталог logs, создаем цикл for, который перебирает список всех файлов .txt на .log., 
что применяет к каждому элементу списка и перемещает файл в новый, заменяя его .txt на .log, а деталь ${file%.txt}
использует расширение параметра оболочки, чтобы удалить .txt часть из имени файла, done указывает конец сегмента петли.
<pre>
cd/var/www/html/logs
for f in *.txt; do
    mv -- "$f" "${f%.txt}.log"
done       
</pre>  
- для манипуляций с файлом, добавляем файлу script.sh приоритет доступа - x      
<pre>         
sudo chmod a+x script.sh       
</pre>        
    </li>
    <li>
        5. Модифицируйте права доступа и владельца папки images следующим образом: <br>
        Пользователь www-data и группа www-data имеют чтение/запись на всю директорию и на файлы внутри директории остальные не имеют доступа к папке и файлам?<br>
        - От имени суперпользователя root, используем команду sudo для изменения режима доступа к файлу и изменяем с помощью команды chmod<br>
        u — владелец файла.<br>
        g — группа файла.<br>
        o — другие пользователи.<br>
        a — все пользователи.<br><br>
        r — право на чтение данных.<br>
        w — право на запись.<br>
<pre>
sudo chmod u www-data g www-data=rw,o= /var/www/html/images
</pre>
    </li>
    <li>
        6. Удалите все содержимое в файле access.txt не удаляя сам файл?<br>
        - Используя команду cat /dev/null стераем сдержимое файла.<br>
<pre>
cd/var/www/html/logs
cat /dev/null > access.txt
</pre>
    </li>
    <li>
        7. Выведите список файлов в папке images размер которых более 2 мегабайт?<br>
        - Команда find имеет опцию -size, которая позволяет указать размер файлов для поиска, -size +  означает, что нужно найти файлы, 
        размер которых превышает орпределенный формат.<br>
        Форматы:<br>
        b — блоки размером 512 байт. Числом указывается количество блоков.<br>
        c — в байтах.<br>
        w — в двухбайтовых словах<br>
        k — в килобайтах<br>
        M — в мегабайтах<br>
        G — в гигабайтах<br>
<pre>
$ find /var/www/html/images -size +2M
</pre>
    </li>
</ul>
<h2>
    === GIT внесение изменений ===
</h2>
<ol>
    <li>
        Клонируем репозиторий на рабочее место
<pre>
git clone git@example.com:example/test.git
</pre>
    </li>
    <li>
        Используем команду cd, чтобы начать работу с проектом
        после которой указываем название проекта на компьютере:
<pre>
cd test-project
</pre>
    </li>
    <li>
        Создадим ветку, вводим команду git branch, eсли мы находимся в master
        создаём новую ветку:
<pre>
git checkout -b имя-новой-ветки.
</pre>        
    </li>
    <li>
        Если текущая ветка не master, сначала переключимся в основную ветку:
<pre>
git checkout master
</pre>   
    </li>
    <li>
        Перед тем, как зафиксировать изменения отдельных файлов, 
        нужно добавить файлы в набор этих изменений командой
<pre>
git add имя-файла
</pre> 
    </li>
    <li>
        Если нужно сохранить все изменения, вводим:
<pre>
git add -A
</pre>         
    </li>
    <li>
        Теперь мы можем сделать коммит с помощью команды:
<pre>
git commit -m "сообщение"
</pre> 
    </li>
    <li>
       Чтобы отправить свои изменения (коммиты) в репозиторий на GitHub, 
        вводим команду:
<pre>
 git push origin название-текущей-ветки
</pre> 
    </li>
    
  </ol>
<h2>
    === CSS, HTML ===
</h2>
1. <a href="https://dmitriy-1986.github.io/TestTask-04.10.2021/layout.html">Посмотреть Layout;</a><br>
2. <a href="https://dmitriy-1986.github.io/TestTask-04.10.2021/animation.html">Посмотреть - квадрат по центру окна, вращается вокруг своей оси и меняет цвет;</a><br>
3. <a href="https://dmitriy-1986.github.io/TestTask-04.10.2021/baner.html">Посмотреть баннер с текстом;</a><br>
4. <a href="https://dmitriy-1986.github.io/TestTask-04.10.2021/form.html">Страница регистрации.</a><br>
<h2>
    === JS логика ===
</h2>

1. Напишите функцию deepEqual чтоб она проверяла что два объекта идентичны. Пример:<br>
<pre>
deepEqual({name: 'test'}, {name: 'test'}) // output true
deepEqual({name: 'test'}, {name: 'test1'}) // output false
deepEqual({name: 'test'}, {name: 'test', age: 10}) // false
</pre><br>
2. Напишите функцию chunkArray которая разбивает массив на подмассивы на заданное количество элементов. Пример:<br>
<pre>
var result = chunkArray([1,2,3,4,5,6,7,8], 3);
// Outputs : [ [1,2,3] , [4,5,6] ,[7,8] ]
</pre><br>
3. Напишите функцию обертку которая на вход принимает асинхронный метод и массив аргументов а отдает нам Promise с результатом. Пример:<br>
<pre>
function asyncPlus(x, y, cb){
	setTimeout(() => cb(x + y), 1000)
}
toPromise(asyncPlus, [1,2]).then(console.log)
 // Output: 3
</pre><br>
4. Напишите метод firstUnique который возвращает первый уникальный элемент в массиве. Пример: <br>
<pre>
console.log(firstUnique([1,2,3,2,1,3,4,5,5]) 
// output 4
</pre>
5. Напишите метод arrayToObject который возвращать объект(использовать рекурсию). Пример:<br>
<pre>
var arr = [['name', 'developer'], ['age', 5], ['skills', [['html',4], ['css', 5], ['js',5]]]];


console.log(arrayToObject(arr)) 
// Outputs: {
	name: 'developer',
	age: 5,
	skills: {
		html: 4,
		css: 5,
		js: 5
	}
}
</pre><br>
6. Написать метод getBase64FromUrl который конвертирует картинку в строку base64 (метод должен быть реализован с помощью Promise). Пример: <br>
<pre>
 getBase64FromUrl('https://lh3.googleusercontent.com/i7cTyGnCwLIJhT1t2YpLW-zHt8ZKalgQiqfrYnZQl975-ygD_0mOXaYZMzekfKW_ydHRutDbNzeqpWoLkFR4Yx2Z2bgNj2XskKJrfw8')
 .then(console.log)
 .catch(console.error)


// Output
data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAACeCAIAAADL6SW3AAAAA3NCSVQICAjb4U/gAAAMGElEQVR4nO3dfZBdZX3A8d....
</pre><br>
7. Написать обратный метод(см. задачу 5) objectToArray который из объекта создаст массив. Пример: <br>
<pre>
  objectToArray({
	name: 'developer',
	age: 5,
	skills: {
		html: 4,
		css: 5,
		js: 5
	}
})


// Outputs: [['name', 'developer'], ['age', 5], ['skills', [['html',4], ['css', 5], ['js',5]]]]
</pre><br>
8. Сделать функцию которая сможет делать срез данных с ассоциативного массива и вернуть средние значение (округленное до 2 цифр после запятой).<br>
<pre>
let testData3 = [{"name":"Vasya","email":"vasya@example.com","age":20,"skills":{"php":0,"js":-1,"madness":10,"rage":10}},{"name":"Dima","email":"dima@example.com","age":34,"skills":{"php":5,"js":7,"madness":3,"rage":2}},{"name":"Colya","email":"colya@example.com","age":46,"skills":{"php":8,"js":-2,"madness":1,"rage":4}},{"name":"Misha","email":"misha@example.com","age":16,"skills":{"php":6,"js":6,"madness":5,"rage":2}},{"name":"Ashan","email":"ashan@example.com","age":99,"skills":{"php":0,"js":10,"madness":10,"rage":1}},{"name":"Rafshan","email":"rafshan@example.com","age":11,"skills":{"php":0,"js":0,"madness":0,"rage":10}}]


let result2 = array_pluck_avg(testData3, 'skills.php') 


// Outputs: 3.1
</pre><br>
9. Создайте прототип для String toTitleCase каждый первый символ строки переводит в верхний регистр. Пример:<br>
<pre>
let x = 'test task'
console.log(x.toTitleCase())
// Outputs: Test Task

</pre><br>
10. Создайте прототип который удаляет дубликаты из строки. Пример:<br>
<pre>
let x = "Int32 Int32 Int32 Int32 Int32 Int32 Int32 Int32 Int32 Double Double Double"
x.removeDuplicate() 
// Int32 Double
</pre><br>
11. Напишите методы добавления/удаления строчки внизу таблицы с текстом 'Row{N} cell{K}' (N/K динамические числа пример Row{3} cell{1}, Row{3} cell{2}..., то есть если количество колонок в одной строчке будет изменено ваш код должен работать)<br>

<head> 
<meta charset=utf-8 /> 
<title>Insert row in a table - w3resource</title> 
</head><body> 
<table id="sampleTable" border="1"> 
<tr><td>Row1 cell1</td> 
<td>Row1 cell2</td></tr> 
<tr><td>Row2 cell1</td> 
<td>Row2 cell2</td></tr> 
</table><br> 
<button id="btnInsert" type="button" value="Insert row">  
<button id="btnRemove" type="button" value="Remove row">  
</body>
<br>
12. Добавьте валидацию формы на странице регистрации из задачи 4(HTML, CSS).<br>

1. Кнопка Submit должна быть disabled до тех пор пока данные в форме не корректны. <br>
2. Все поля формы обезательны к заполнению и не должны быть пустые<br>
3. Поле Email должно принимать только валидные email адресса<br>
4. Пароль должен быть минимум 8 символов и содержать буквы нижнего/верхнего регистра, цифры и хотя бы 1 спец символ.<br>
5. Поле Avatar принемает только файлы с расширением .png размер не больше 1Mb<br>
6. В случае ошибок под каждым input появляеться тест с причиной ошибки.<br>
<h2>	
Mongo
</h2>
<h3>
Рабочее окружение
База данных MongoDB содержит коллекции:
<h3><br>
posts - Записи - 
{
  "properties": {
    "_id": { "bsonType": "objectId" },
    "title": { "bsonType": "string" },
    "content": { "bsonType": "string" },
    "author": { "bsonType": "string" },
    "like": { "bsonType": "int" },
    "dislike": { "bsonType": "int" }
  }
}

Все команды вы выполняете в mongo shell
Задание
Напишите команды для получения следующих значений:
Выведите 10 записей из коллекции posts пропустив первые 5 и сделайте сортировку в алфавитном порядке по полю author
Выведите все записи у которых dislike меньше  100
Увеличить like на +1 во всех posts  у который author  === 'a1' 
Выведите список title и их общее количество dislike
