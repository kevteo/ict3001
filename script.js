const ans1 = "1";
const ans2 = "2";
const ans3 = "3";
const ans4 = "4";

const hint1 = [];
const hint2 = [];
const hint3 = [];
const hint4 = [];


function init() {
    $(document).ready(function() {
        var input;
        /* Question 1 */
        $('#button1').click(function() {
            input = $('#input1').val();
            if (checkAnswer(1, input)) { scrollToID('topic1'); }
            else { showHint(hint1); }
        });
    
        /* Question 2 */
        $('#button2').click(function() {
            input = $('#input2').val();
            if (checkAnswer(2, input)) { scrollToID('topic2'); }
            else { showHint(hint2); }
        });
    
        /* Question 3 */
        $('#button3').click(function() {
            input = $('#input3').val();
            if (checkAnswer(3, input)) { scrollToID('topic3'); }
            else { showHint(hint3); }
        });
    
        /* Question 4 */
        $('#button4').click(function() {
            input = $('#input4').val();
            if (checkAnswer(4, input)) { scrollToID('topic4'); }
            else { showHint(hint4); }
        });
    
    });
}



function checkAnswer(questionNumber, answer) {
    switch (questionNumber) {
        case 1:
        return (answer==ans1);

        case 2:
        return (answer==ans2);

        case 3:
        return (answer==ans3);

        case 4:
        return (answer==ans4);
    }
}


function scrollToID(target) {
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $("#"+target).offset().top
        }, 800);
    });
}

function showHint(target) {
    alertWrongAnswer();

    // Display hint
}

function alertWrongAnswer() {

}