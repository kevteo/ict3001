const ans1_1 = "1";
const ans1_2 = "1";
const ans1_3 = "1";
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
            var input1_1 = $('#input1_1').val();
            var input1_2 = $('#input1_2').val();
            var input1_3 = $('#input1_3').val();

            if (checkAnswer('1_1', input1_1) && checkAnswer('1_2', input1_2) && checkAnswer('1_3', input1_3)) { correctAnswer(); }
            else { showHint(hint1); }
        });
    
        /* Question 2 */
        $('#button2').click(function() {
            input = $('#input2').val();
            if (checkAnswer('2', input)) { correctAnswer(); }
            else { showHint(hint2); }
        });
    
        /* Question 3 */
        $('#button3').click(function() {
            input = $('#input3').val();
            if (checkAnswer('3', input)) { correctAnswer(); }
            else { showHint(hint3); }
        });
    
        /* Question 4 */
        $('#button4').click(function() {
            input = $('#input4').val();
            if (checkAnswer('4', input)) { correctAnswer(); }
            else { showHint(hint4); }
        });
        
        
        $("a").click(function() {
            clearAlert();
        });

        $("#discordLink").click(function() {
            window.location = "https://discord.gg/EMmvQVY";
        });
    });
}



function checkAnswer(questionNumber, answer) {
    switch (questionNumber) {
        case '1_1':
        return (answer==ans1_1);

        case '1_2':
        return (answer==ans1_2);

        case '1_3':
        return (answer==ans1_3);

        case '2':
        return (answer==ans2);

        case '3':
        return (answer==ans3);

        case '4':
        return (answer==ans4);
    }
}


function correctAnswer() {
    clearAlert();
    $(".question").append("<div class='alert'><p>You are correct!</p></div>");
}

function showHint(target) {
    clearAlert();
    $(".question").append("<div class='alert' style='background-color:#f44336'><p>Wrong :(</p></div>");
}

function clearAlert() {
    var objectArray = $('.question div:last-child');
    for (var i=0; i < objectArray.length; i++) {
        if (objectArray[i].className == 'alert') { 
            objectArray[i].remove();
        }
    } 
}

function clearVisitDiscord() {
    $('#visitDiscord').css('display', 'none');
}