let score = 0;

function startApp(){
    $('#0').show();
    document.cookie = 'startTime=' + new Date().toLocaleTimeString('it-IT');
    clearCookies();
    loadQuiz();

    $('#btn-quiz-binary').click(() => {
        localStorage['quiz'] = 'binary';
        location.reload();
    });

    $('#btn-quiz-multy').click(() => {
        localStorage['quiz'] = 'multy';
        location.reload();
        console.log(score);
    });

    $('#btn-new-game').click(() => {
        window.location = 'index.php';
    })
}

function loadQuiz(){
   if('quiz' in localStorage){
       if(localStorage['quiz'] == 'binary'){
           $('.answers-multy').hide();
           $('.answer-binary').show();
       } else if(localStorage['quiz'] == 'multy') {
           $('.answers-multy').show();
           $('.answer-binary').hide();
       }
   } else {
       localStorage['quiz'] = 'binary';
       $('.answer-binary').show();
   }
}

function loadNextQuestion(count){
    if(count < 9){
        $('#' + count).hide();
        count++;
        $('#' + count).show();
    } else {
        getQuizResult();
        window.location = 'statistic.php';
    }
    $('.btn-multy').removeAttr('disabled');
}

function getQuizResult(){
    document.cookie = 'score=' + score;
    document.cookie = 'endTime=' + new Date().toLocaleTimeString('it-IT');
}

function clearCookies(){
    eraseCookie('score');
    eraseCookie('endTime');
    score = 0;
}

function eraseCookie(name) {
    document.cookie = name+'=; Max-Age=-99999999;';
}

function checkAnswer(answer, offeredAnswer, count, type){
    switch(type){
        case 'yes':
            if(offeredAnswer === answer){
                $('#' + count ).find('#right-answer').show();
                score ++;
            } else {
                $('#' + count ).find('#wrong-answer').show();
            }
            $('#btn_binary_no').attr("disabled", true);
            break;
        case 'no':
            if(offeredAnswer !== answer){
                $('#' + count ).find('#right-answer').show();
                score ++;
            } else {
                $('#' + count ).find('#wrong-answer').show();
            }
            $('#btn_binary_yes').attr("disabled", true);
            break;
        case 'multy':
            if(offeredAnswer === answer){
                $('#' + count ).find('#right-answer').show();
                score ++;
            } else {
                $('#' + count ).find('#wrong-answer').show();
            }
            $('.btn-multy').attr("disabled", true);
            break;
    }
}




