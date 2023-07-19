<?

use MyArray\Cate6\Example\VersionManager;

include_once($_SERVER['DOCUMENT_ROOT'] . '/sandbox/init.php');
?>
<!--<p style="color: red">Не решено!!!</p>-->
<p style="color: green; background-color: #D8E8F4; padding: 10px; border-radius: 10px;">Решено!!!</p>
<div>
    <b>Менеджер версий</b><br/><br>
    В этом ката мы собираемся имитировать систему управления версиями программного обеспечения.<br><br>
    Вы должны реализовать класс <code style="background-color: #999999; padding: 5px; border-radius: 10px;">VersionManager</code><br><br>
    Он должен принимать необязательный параметр, представляющий начальную версию. Ввод будет в одном из следующих
    форматов:<br>
    «<code style="background-color: #999999; padding: 5px; border-radius: 10px;">{MAJOR}</code>», «<code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">{MAJOR}</code>.<code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">{MINOR}</code>» или «<code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">{MAJOR}</code>.<code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">{MINOR}</code>.<code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">{PATCH}</code>».<br>
    После PATCH могут быть указаны дополнительные значения, но их следует игнорировать.<br>
    Если эти 3 части не являются десятичными значениями, исключение с сообщением «Произошла ошибка при разборе версии!»
    следует бросить.<br>
    Если исходная версия не указана или представляет собой пустую строку, по умолчанию используйте «<code
            style="background-color: #999999; padding: 5px; border-radius: 10px;">0.0.1</code>».<br><br>
    Этот класс должен поддерживать следующие методы, все из которых должны быть связаны (кроме выпуска):<br>

    <ul>
        <li><code style="background-color: #999999; padding: 5px; border-radius: 10px;">major()</code> - увеличить <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">MAJOR</code> на <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">1</code>, установить <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">MINOR</code> и <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">PATCH</code> на 0
        </li>
        <li><code style="background-color: #999999; padding: 5px; border-radius: 10px;">minor()</code> - увеличить <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">MINOR</code> на <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">1</code>, установить <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">PATCH</code> на <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">0</code></li>
        <li><code style="background-color: #999999; padding: 5px; border-radius: 10px;">patch()</code> - увеличить <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">ПАТЧ</code> на <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">1</code></li>
        <li><code style="background-color: #999999; padding: 5px; border-radius: 10px;">rollback()</code> — возвращает
            <code style="background-color: #999999; padding: 5px; border-radius: 10px;">MAJOR</code>, <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">MINOR</code> и <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">PATCH</code> к их значениям до
            предыдущего вызова <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">main</code>/<code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">minor</code>/<code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">patch</code> или выдает
            исключение с сообщением <code style="background-color: #999999; padding: 5px; border-radius: 10px;">«Cannot
                rollback!»</code> если нет версии для отката. Должны быть возможны множественные вызовы <code
                    style="background-color: #999999; padding: 5px; border-radius: 10px;">rollback()</code> и
            восстановление истории версий.
        </li>
        <li><code style="background-color: #999999; padding: 5px; border-radius: 10px;">release()</code> - возвращает
            строку в формате <code style="background-color: #999999; padding: 5px; border-radius: 10px;">'{MAJOR}.{MINOR}.{PATCH}'</code>
        </li>
    </ul>
    Да прибудет с вами бинарная сила!

    <br><br>
    <a href="https://www.codewars.com/kata/5bc7bb444be9774f100000c3">ЗАДАЧА</a><br><br>
</div>
<br>
<?
$startTime = microtime(true);// засекли время на выполнене скрипта
?>
<b>Начало.</b><br>
<?

//$this->assertSame("0.0.1", (new VersionManager())->release());
//$this->assertSame("0.0.1", (new VersionManager(""))->release());
//$this->assertSame("1.2.3", (new VersionManager("1.2.3"))->release());
//$this->assertSame("1.2.3", (new VersionManager("1.2.3.4"))->release());
//$this->assertSame("1.2.3", (new VersionManager("1.2.3.d"))->release());
//$this->assertSame("1.0.0", (new VersionManager("1"))->release());
//$this->assertSame("1.1.0", (new VersionManager("1.1"))->release());

//$this->assertSame("1.0.0", (new VersionManager())->major()->release());
//$this->assertSame("2.0.0", (new VersionManager("1.2.3"))->major()->release());
//$this->assertSame("3.0.0", (new VersionManager("1.2.3"))->major()->major()->release());

//$this->assertSame("0.1.0", (new VersionManager())->minor()->release());
//$this->assertSame("1.3.0", (new VersionManager("1.2.3"))->minor()->release());
//$this->assertSame("1.1.0", (new VersionManager("1"))->minor()->release());
//$this->assertSame("4.2.0", (new VersionManager("4"))->minor()->minor()->release());

//$this->assertSame("0.0.2", (new VersionManager())->patch()->release());
//$this->assertSame("1.2.4", (new VersionManager("1.2.3"))->patch()->release());
//$this->assertSame("4.0.2", (new VersionManager("4"))->patch()->patch()->release());

//$this->assertSame("0.0.1", (new VersionManager())->major()->rollback()->release());
//$this->assertSame("0.0.1", (new VersionManager())->minor()->rollback()->release());
//$this->assertSame("0.0.1", (new VersionManager())->patch()->rollback()->release());
//$this->assertSame("1.0.0", (new VersionManager())->major()->patch()->rollback()->release());
//$this->assertSame("1.0.0", (new VersionManager())->major()->patch()->rollback()->major()->rollback()->release());
$str = '(new VersionManager("4"))->minor()->minor()->release()';
myDamp($str);
?>
<br>
<b>ответ: </b><br>

<?
try {
    myDamp((new VersionManager("4"))->minor()->minor()->release());
} catch (Exception $ex) {
    echo $ex->getMessage();
}


?>
<br>
<br><b>Конец.</b><br>
Время выполнения скрипта: <?= round(microtime(true) - $startTime, 4) ?> сек.
<br/><br/>
<a href="http://test.loc/sandbox/sandbox.php">Назад.</a>
