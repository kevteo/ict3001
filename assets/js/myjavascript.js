const ans1_1 = "1";
const ans1_2 = "1";
const ans1_3 = "1";
const ans2 = "2";
const ans3 = "0.0013";
const ans4 = "4";

const hint1 = "1asdas";
const hint2 = "Using the t-statistic value and degree of freedom, refer to T-distribution table to find the probability where the table column represents the df and the table values represents t-statistic.";
const hint3 = ["./images/hint3_1", "./images/hint3_2"];
const hint4 = "444hahah";


function init() {
    $(document).ready(function() {
        setInputs();
        initVisitDiscord();
        
        var input;

        /* Question 1 */
        $('#button1').click(function() {
            var input1_1 = $('#input1_1').val();
            var input1_2 = $('#input1_2').val();
            var input1_3 = $('#input1_3').val();
            localStorage.setItem("question1_1", input1_1);
            localStorage.setItem("question1_2", input1_2);
            localStorage.setItem("question1_3", input1_3);

            if (checkAnswer('1_1', input1_1) && checkAnswer('1_2', input1_2) && checkAnswer('1_3', input1_3)) { correctAnswer(); }
            else { wrongAnswer(hint1); }
        });
    
        /* Question 2 */
        $('#button2').click(function() {
            input = $('#input2').val();
            localStorage.setItem("question2", input);

            if (checkAnswer('2', input)) { correctAnswer(); }
            else { wrongAnswer(hint2); }
        });
    
        /* Question 3 */
        $('#button3').click(function() {
            input = $('#input3').val();
            localStorage.setItem("question3", input);

            if (checkAnswer('3', input)) { correctAnswer(); }
            else { wrongAnswer(hint3); }
        });
    
        /* Question 4 */
        $('#button4').click(function() {
            input = $('#input4').val();
            localStorage.setItem("question4", input);

            if (checkAnswer('4', input)) { correctAnswer(); }
            else { wrongAnswer(hint4); }
        });
        
        
        $("a").click(function() {
            clearAlert();
        });

        $("#discordLink").click(function() {
            win = window.open('https://discord.gg/EMmvQVY', '_blank');
            win.focus();
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

function wrongAnswer(hint) {
    clearAlert();
    $(".question").append("<div class='alert' style='background-color:#f44336'><p>Wrong :(</p></div>");
    if (hint instanceof Array) {
        $(".question").append("<div class='alert' id='hint'><span><img src='./images/hint3_1.png' width='20%' height='20%'><img src='./images/hint3_2.png' width='50%' height='50%'></span></div>");
    } else {
        $(".question").append("<div class='alert' id='hint'><p>Hint: " + hint + "</p></div>");
    }
}

function clearAlert() {
    var objectArray = $('.question div');
    for (var i=0; i < objectArray.length; i++) {
        if (objectArray[i].className == 'alert') { 
            objectArray[i].remove();
        }
    } 
}


function setInputs() {
    $('#input1_1').val(localStorage.getItem("question1_1"));
    $('#input1_2').val(localStorage.getItem("question1_2"));
    $('#input1_3').val(localStorage.getItem("question1_3"));
    $('#input2').val(localStorage.getItem("question2"));
    $('#input3').val(localStorage.getItem("question3"));
    $('#input4').val(localStorage.getItem("question4"));
}

function initVisitDiscord() {
    if (window.location.href.split('#')[1] == '') {
        //$('#visitDiscord').delay(1000).fadeIn(400);
        $('#visitDiscord').css('display', 'block');
    }
    
    $(window).bind('hashchange', function() {
        console.log("aaa");
        if (window.location.href.split('#')[1] == '') {
            $('#visitDiscord').delay(1000).fadeIn(400);
            //$('#visitDiscord').css('display', 'block');
        } else {
            $('#visitDiscord').css('display', 'none');
        }
    });

    $(document).keyup(function(e) {
        if (e.key === "Escape") {
            $('#visitDiscord').delay(1000).fadeIn(400);
       }
   });
}