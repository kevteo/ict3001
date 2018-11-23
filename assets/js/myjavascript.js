const ans1_1 = "1";
const ans1_2 = "1";
const ans1_3 = "1";
const ans1_4 = "1";

const ans2 = "2";
const ans3 = "3";
const ans4 = "4";

const hint1 = "";
const hint2 = "";
const hint3 = "";
const hint4 = "";


function init() {
    $(document).ready(function() {
        var input;
        /* Question 1 */
        $('#button1').click(function() {
            input = $('#input1').val();
            if (checkAnswer(1, input)) { correctAnswer(); }
            else { showHint(hint1); }
        });
    
        /* Question 2 */
        $('#button2').click(function() {
            input = $('#input2').val();
            if (checkAnswer(2, input)) { correctAnswer(); }
            else { showHint(hint2); }
        });
    
        /* Question 3 */
        $('#button3').click(function() {
            input = $('#input3').val();
            if (checkAnswer(3, input)) { correctAnswer(); }
            else { showHint(hint3); }
        });
    
        /* Question 4 */
        $('#button4').click(function() {
            input = $('#input4').val();
            if (checkAnswer(4, input)) { correctAnswer(); }
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


function correctAnswer() {

}

function showHint(target) {
    alertWrongAnswer();

    // Display hint
}

function alertWrongAnswer() {

}



