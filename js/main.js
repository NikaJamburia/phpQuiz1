let correctCount = 0;
let name = new URLSearchParams(window.location.search).get('username');
console.log(name);

function getAnswer(event) {
    var correctness = event.target.getAttribute('correct');
    var questionId = event.target.name;
    console.log(correctness);

    if(correctness == 1) {
        alert("Correct answer!");
        correctCount++;
        document.getElementById('correctCountDisplay').innerHTML = correctCount;
    }
    else {
        alert("Wrong answer!");
    }

}

document.getElementById('submit').addEventListener('click', function() {
    xhr = new XMLHttpRequest();
    xhr.open('POST', '../scripts/saveScore.php', true);
    xhr.header
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    params = "username="+name+"&score="+correctCount;

    xhr.onload = function(){
        if(this.status == 200){
            alert("Score saved!");
            window.location.replace("../index.php");
        }
    }

    xhr.send(params);
})