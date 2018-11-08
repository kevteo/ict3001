const ans1 = "";
const ans2 = "";
const ans3 = "";
const ans4 = "";

    
$(document).ready(function() {
    var input;
    /* Question 1 */
    $('#test').click(function() {
        input = $('#input1').val();
        if (checkAnswer(1, input)) { scrollTo(); }
        else { displayHint(); }
    });

    /* Question 2 */


    /* Question 3 */


    /* Question 4 */


});


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


function scrollTo(arg1) {

}

function displayHint(arg1) {

}
