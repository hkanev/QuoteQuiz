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
<body>
<div class="row">

    <div class="well col-lg-4 col-lg-offset-2 container-results">
        <form method="post">
            <fieldset>
                <legend class="text-center ">Your Result: </legend>
                <div class="form-group row">
                    <label for="player" class="col-sm-2 col-form-label">Score: </label>
                    <div class="col-sm-10">
                        <p><?= $data['score'] ?> / 10 </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="player" class="col-sm-2 col-form-label">Time: </label>
                    <div class="col-sm-10">
                        <p><?= $data['duration'] ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="player" class="col-sm-2 col-form-label">Player</label>
                    <div class="col-sm-2">
                        <input type="text"  class="form-control-plaintext" name="player" >
                    </div>
                </div>
                <input type='hidden' name='duration' value='<?php echo $data['duration']?>'/>
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-sm" name="saveScore">Save Result</button>
                    <button  class="btn btn-success btn-sm" name="saveScore" id="btn-new-game">New game</button>
                </div>
            </fieldset>
        </form>
    </div> <!--end form-->

    <div class="container-results well col-lg-4 " style="height: 250px">
        <div style="margin-top: -8px;" class="text-center">
            <h4>Top Results:</h4>
        </div>
        <table class="table table-hover">
            <?php foreach ($data['results'] as $result) : ?>
                <tr>
                    <td> <?= htmlspecialchars($result->getPlayer()) ?></td>
                    <td> <?= $result->getScore() ?>/10</td>
                    <td> <?= $result->getDuration() ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div> <!-- end TopResult-->

</div><!--end row-->
</body>
</html>
