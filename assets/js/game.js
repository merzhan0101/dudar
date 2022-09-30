var cvs = document.getElementById('canvas');
var ctx = cvs.getContext("2d");//вид игры, будет на 2д

//download images
var bird = new Image();
var bg = new Image();
var fg = new Image();
var pipeUp = new Image();
var pipeBottom = new Image();

bird.src = "/assets/img/bird.png";
bg.src = "/assets/img/bg.png";
fg.src = "/assets/img/fg.png";
pipeUp.src = "/assets/img/pipeUp.png";
pipeBottom.src = "/assets/img/pipeBottom.png";

//звуковые файлы
var fly = new Audio;
var score_audio = new Audio();

fly.src = "/assets/audio/fly.mp3";
score_audio.src = "/assets/audio/score.mp3";

var gap = 90;//px между Up and Bottom, отступ

//При нажатии на какую либо кнопку
document.addEventListener("keydown", moveUp);

//подпрыгивание птицы
function moveUp(){
    yPos -= 25;
    fly.play();//play audio fly
}

//Создание блоков
var pipe = [];

pipe[0] = {
    x : cvs.width,
    y : 0
}

var score = 0;
//position bird
var xPos = 10;
var yPos = 150;
var grav = 1.5;//gravitation

//рисование на канвасе
function draw(){
    ctx.drawImage(bg, 0, 0);//задний фон

    //рисование блоков с пом цикла
    for(var i = 0; i < pipe.length; i++){
        ctx.drawImage(pipeUp, pipe[i].x, pipe[i].y);
        ctx.drawImage(pipeBottom, pipe[i].x, pipe[i].y + pipeUp.height + gap);
        
        //чтоб блоки передвигались
        pipe[i].x--;

        //добавление новых блоков(труб)
        if(pipe[i].x == 125){
            pipe.push({
                x: cvs.width,
                y: Math.floor(Math.random() * pipeUp.height) - pipeUp.height
            });
        }
        
        //при столкновении либо падении
        if(xPos + bird.width >= pipe[i].x && xPos <= pipe[i].x + pipeUp.width && (yPos <= pipe[i].y + pipeUp.height + gap) || yPos + bird.height >= cvs.height - fg.height){
            location.reload(); //Reboot in page
        }

        //счетчик баллов за прохождение
        if(pipe[i].x == 5){
            score++;
            score_audio.play();
        }
    }

    ctx.drawImage(fg, 0, cvs.height - fg.height);//низ игры
    ctx.drawImage(bird, xPos, yPos);//bird, x, y

    yPos += grav;

    //счетчик поинтов
    ctx.fillStyle = "#000";
    ctx.font = "24px Verdana";
    ctx.fillText("Счет: " + score, 10, cvs.height - 20); 

    requestAnimationFrame(draw);
}

pipeBottom.onload = draw; //при загрузке посл картинки, вып-ся эта команда