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
1. Создайте такой Layout https://i.imgur.com/MzT0cmR.png 
<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8" &gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1" &gt;
    &lt;title &gt;Заголовок &lt;/title&gt;
    &lt;style>
        #page {
              display: grid;
              width: 100%;
              grid-template: [header-left] "head head" 30px [header-right]
                             [main-left]   "nav  main" 1fr  [main-right]
                             [footer-left] "nav  foot" 30px [footer-right]
                             / 120px 1fr;
            }
    </style>
 &lt;/head&gt;
    &lt;body id="page"&gt;    
        &lt;header>HEADER&lt;/header>
        &lt;nav>NAVIGATION&lt;/nav>
        &lt;main>
            &lt;article>CONTENT&lt;/article>
            &lt;aside>SIDEBAR&lt;/aside>
        &lt;/main>
        &lt;footer>FOOTER&lt;/footer>
    &lt;/body>
&lt;/html&gt;  
</pre> 
