<h1>
    <a href="https://dmitriy-1986.github.io/TestTask-04.10.2021/">Тестовое задание набора (04.10.2021) MERN </a>  
</h1>

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
<pre>cd/var/www/html [Enter] </pre>
        - пишется команда ls, отобразится содержимое текущей директории. <br>
<pre>ls [Enter]</pre>
    </li>
    <li>
        2. Удалите пустые строки из файла error.txt?<br>
        - пишется команда sed, для удаления пустых строк в файле,<br> -i используется
        для воздействия на файл,<br> ^ - это начало строки,<br> $ - это конец строки,<br>
        d - удалить, если есть пустая строка<br>
<pre> sed -i "/^$/d" error.txt [Enter]</pre>
    </li>
    <li>
        3. Выведите список файлов с расширением .jpg в папке images?<br>
        - Переходим в каталог images, пишется команда ls, * знак сопоставляет все файлы,
        точка представляет текущий каталог,  расширение jpg ( подстановка ) к файлам 
        между фигурными скобками 
<pre> 
cd/var/www/html/images [Enter] 
ls *.{jpg} [Enter]
</pre>
    </li>
    <li>
        4. Напишите bash скрипт который переименует все файлы в папке logs с .txt на .log ?<br>
        ?<br>
        <pre> [Enter]</pre>
    </li>
    <li>
        5. Модифицируйте права доступа и владельца папки images следующим образом: <br>
        Пользователь www-data и группа www-data имеют чтение/запись на всю директорию и на файлы внутри директории остальные не имеют доступа к папке и файлам?<br>
        ?<br>
         <pre>[Enter]</pre>
    </li>
    <li>
        6. Удалите все содержимое в файле access.txt не удаляя сам файл?<br>
        ?<br>
        <pre> [Enter]</pre>
    </li>
    <li>
        7. Выведите список файлов в папке images размер которых более 2 мегабайт?<br>
        ?<br>
         <pre>[Enter]</pre>
    </li>
</ul>
