<?php
/** @var $data \Data\Question[]  */
$count = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  rel="stylesheet" type="text/css"  href="Web/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="Web/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="Web/js/quiz-page.js"></script>
    <title>Quote Quiz</title>
</head>
<style>

    #btn-quiz-binary, #btn-quiz-multy{
        width: 50%;
        height: 40px;
        display: inline-block;
        margin-right: -3px;
       margin-bottom: 5px;
        background-color: #333;
        border: none;
    }

    #btn-quiz-binary{
        background-color: black;
    }
    i{
        color: white;
    }
</style>
<body>
<div class="container col-lg-push-6">

    <div id="btn-container">
        <button id="btn-quiz-binary">
            <i class="fa fa-list-alt"></i>
        </button>
        <button id="btn-quiz-multy">
            <i class="fa fa-clone"></i>
        </button>
    </div>

    <?php foreach ($data as $questions) : ?>

    <div class="quiz-question" id="<?php echo "$count"; $count++; ?>" style="display: none;">

        <?php $answers = [$questions->getAnswer(), $questions->getAnswer2(), $questions->getAnswerCorrect()] ?>

        <div class="container-question-static">
            Who said it?
            <div class="alert alert-dismissible alert-danger" id="wrong-answer" style="display: none;">
                <button type="button" class="close"  onclick="loadNextQuestion('<?= $output  = $count - 1; ?>')" >&rarr;</button>
                <strong>Sorry, you are wrong! The right answer is:</strong> <?= $questions->getAnswerCorrect() ?>
            </div>
            <div class="alert alert-dismissible alert-success" id="right-answer" style="display: none;">
                <button type="button" class="close"
                        onclick="loadNextQuestion('<?= $output  = $count - 1; ?>')">
                    &rarr;
                </button>
                <strong>Correct! The right answer is: </strong> <?= $questions->getAnswerCorrect() ?>
            </div>
        </div>

        <div class="container-question-dynamic well text-center">
            <?= $questions->getQuestion() ?>
        </div>

        <div class="text-center answer-binary" style="display:none;">
        <p  id="offered-answer"><?= $outputAnswer = $answers[array_rand ($answers, 1)] ?></p>
        <button type="button" class="btn btn-success submit-btn"
                onclick="checkAnswer(
                    '<?= $questions->getAnswerCorrect()?>',
                    '<?= $outputAnswer ?>',
                    '<?= $output  = $count - 1; ?>',
                    'yes'
                    )"
                id="btn_binary_yes">Yes
        </button>
        <button type="button" class="btn btn-danger submit-btn"
                onclick="checkAnswer(
                    '<?= $questions->getAnswerCorrect()?>',
                    '<?= $outputAnswer ?>',
                    '<?= $output  = $count - 1; ?>',
                    'no'
                    )"
                id="btn_binary_no">No
        </button>
        </div>

        <div class="list-group answers-multy" style="display:none;">
            <?php $randomOutputIndex = array_rand ($answers, 3) ?>
            <?php foreach ($randomOutputIndex as $index) : ?>
                <button class="list-group-item list-group-item-action btn-multy"
                   onclick="checkAnswer(
                       '<?= $questions->getAnswerCorrect() ?>',
                       '<?= $answers[$index] ?>',
                        <?= $output  = $count - 1; ?> ,
                       'multy')">
                    <?= $answers[$index]?>
                </button>
            <?php endforeach; ?>

        </div>

    </div> <!-- end quiz-question-->
    <?php endforeach; ?>  <!-- displaying quiz -->
</div> <!--end container-->

<script>
    startApp();
</script>
</body>
</html>
