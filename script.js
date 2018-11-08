const ans1 = "";
const ans2 = "";
const ans3 = "";
const ans4 = "";

    
$(document).ready(function() {
    /* Question 1 */
    $('#').click(function() {
        if (checkAnswer(1)) { scrollTo(); }
        else { displayHint(); }
    });

    /* Question 2 */
    $('#').click(function() {
        if (checkAnswer(2)) { scrollTo(); }
        else { displayHint(); }
    });

    /* Question 3 */
    $('#').click(function() {
        if (checkAnswer(3)) { scrollTo(); }
        else { displayHint(); }
    });

    /* Question 4 */
    $('#').click(function() {
        if (checkAnswer(4)) { scrollTo(); }
        else { displayHint(); }
    });
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
