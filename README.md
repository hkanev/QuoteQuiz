# Famous Quote Quiz

In the famous quote quiz game system will ask questions and user should try to pick a
correct answer. Depending on selected mode user will have to choose correct answer
from a list of answers, or simply to answer with Yes/No to the question.


## Installing

Famous Quote Quiz requires PHP 7 and ECMA Script 6.

```
https://github.com/hkanev/QuoteQuiz
```

### Database configuration

Database export can be found in db folder.

To configurate with custom database change data in Config/DbConfig.php
```
    const DB_HOST = 'localhost';
    const DB_NAME = 'quote-quiz';
    const DB_USER = 'root';
    const DB_PASS = '';
```

## Framework

The project use basic MVC model.

### Controllers

Controllers are in folder Service
To add a new controller/service add following line in app.php
```
$name =  new \Service\SERVICENAME();
```
Example:
```
<?php
session_start();
spl_autoload_register(function($class) {
    require_once $class . '.php';
});

$db = new \Adapter\PDODatabase(
    \Config\DbConfig::DB_HOST,
    \Config\DbConfig::DB_NAME,
    \Config\DbConfig::DB_USER,
    \Config\DbConfig::DB_PASS
);

$app = new \Core\Application();
$quizService =  new \Service\QuizService($db)
```

### Views

Views are stored in folder frontend.
To load a view you need to execute the following line:
```
$app->loadTemplate("name_frontend", $data);
```

name_frontend - name of the view

$data - data parsed to the view


In order to call $app you need to add this line to your .php file:
```
require_once 'app.php';
```

### Data

Data is stored in data folder. 

## Quiz
Quiz is loaded from the database and yield into the data class:

```
        $query = "SELECT * FROM questions ORDER BY RAND() LIMIT 11";
        $stmt = $this->db->prepare($query);
        $stmt->execute([]);

        while($question = $stmt->fetchObject(Question::class)){
            yield $question;
        }
```	

Quiz functionality  (show next question, answer type, etc.) operate with jQuery.

## Statistic
After the game you are shown your result which is saved in cookies 
and you are allowed to save your score by adding player name.
You can also see top 5 results retrived from database.

