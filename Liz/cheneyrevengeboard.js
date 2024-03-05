"use strict";
let canvas;
let context;
let score;
let road1;
let lane1;
lane1 = false;
let lane2;
lane2 = false;
let lane3;
lane3 = false;
let lane4;
lane4 = false;
let myLiz;
let myTrump;
myTrump = new Trump();
myLiz = new Liz();
let bombArray = [];

road1 = new Road();
let road2;
road2 = new Road();

window.onload = init;
adSetUp();


function startGame()
{

score = 0;
lane1 = false;

lane2 = false;

lane3 = false;

lane4 = false;


myTrump = new Trump();
myTrump.hit = false;
myLiz = new Liz();
bombArray = [];

road1 = new Road();

road2 = new Road();

  road2.x = canvas.width;

   window.requestAnimationFrame(gameLoop);
}

function init()
{


   canvas = document.getElementById("gamescreen");
   canvas.style.width = canvas.getBoundingClientRect().width;

   context = canvas.getContext('2d');
   score = 0;


    canvas.addEventListener('mousemove', function (e) {
            canvas.x = 2*e.pageX;
            canvas.y = e.pageY;
        })

    window.addEventListener('keydown', function(e) {

         canvas.key = e.keyCode;
     
    });

    window.addEventListener('keyup', function(e) {
         canvas.key = false;
    });





//Make the road2 at west of screen
 




  var img = document.getElementById("bigliz2");
  context.drawImage(img, canvas.width/2-img.width/2, canvas.height/2-img.height/2);


  var xaud = document.getElementById("myAudio"); 
//document.getElementById("myAudio").loop = true;
xaud.loop = true;
  xaud.play();

}


function showEndGame()
{

      context.clearRect(0,0, canvas.width, canvas.height);
   context.fillStyle = "black";
context.fillRect(0,0,canvas.width,canvas.height);





     var aTrump = document.getElementById("abomb");
     //aTrump.src = "trumpcarright.png";

     aTrump.ssize = canvas.height/5;
     context.drawImage(aTrump, canvas.width/2 - aTrump.width/2, canvas.height/2-aTrump.height/2, 2*aTrump.ssize,aTrump.ssize);

context.font = "150px Arial";
context.fillStyle ="white";
context.fillText("Game Over!", canvas.width/3, canvas.height/10);



context.font = "150px Arial";
context.fillStyle ="white";

context.fillText("Score: " + score.toString(), canvas.width/2.7, canvas.height/4);


     var aPlay = document.getElementById("playbtn");


     aPlay.ssize = canvas.height/5;
     context.drawImage(aPlay, canvas.width/2 - aTrump.width/2, canvas.height/2+
aTrump.height/2, 2*aPlay.ssize,aPlay.ssize);

      if (canvas.key && canvas.key == 32) {window.cancelAnimationFrame(showEndGame);startGame();}
      else { 
       window.requestAnimationFrame(showEndGame);

      }

}


function showNewGame()
{

      context.clearRect(0,0, canvas.width, canvas.height);
   context.fillStyle = "black";
context.fillRect(0,0,canvas.width,canvas.height);





     var aTrump = document.getElementById("abomb");
     //aTrump.src = "trumpcarright.png";

     aTrump.ssize = canvas.height/5;
     context.drawImage(aTrump, canvas.width/2 - aTrump.width/2, canvas.height/2-aTrump.height/2, 2*aTrump.ssize,aTrump.ssize);

context.font = canvas.height/12 + "px Arial";
context.fillStyle ="white";
context.fillText("Let's Get To The White House", canvas.width/10, canvas.height/10, canvas.width*8/10);

/*
context.font = "150px Arial";
context.fillStyle ="white";

context.fillText("Score: " + score.toString(), canvas.width/2.7, canvas.height/5);
*/

     var aPlay = document.getElementById("playbtn");


     aPlay.ssize = canvas.height/5;
     context.drawImage(aPlay, canvas.width/2 - aTrump.width/2, canvas.height/2+
aTrump.height/2, 2*aPlay.ssize,aPlay.ssize);

      if (canvas.key && canvas.key == 32) {window.cancelAnimationFrame(showNewGame);startGame();}
      else { 
       window.requestAnimationFrame(showNewGame);

      }

}



function adSetUp()
{
     adConfig({
      sound: 'off',
    });

  
adBreak({
        type: 'preroll',  // ad shows at start of next level
        name: 'restart-game',
        beforeAd: () => {  },  // You may also want to mute the game's sound.
        afterAd: () => {  },    // resume the game flow.
        adBreakDone: () => { showNewGame();  },  // Always called (if provided) even if an ad didn't show
      });
}

function fixDpi() {
//create a style object that returns width and height
  let style = {
    height() {
      return +getComputedStyle(canvas).getPropertyValue('height').slice(0,-2);
    },
    width() {
      return +getComputedStyle(canvas).getPropertyValue('width').slice(0,-2);
    }
  }
//set the correct attributes for a crystal clear image!
     let dpi = window.devicePixelRatio;
let rcanvas = document.getElementById("gamescreen");
  rcanvas.setAttribute('width', style.width() * dpi);
  rcanvas.setAttribute('height', style.height() * dpi);



}


function gameLoop(timeStamp){
resizeCanvas();
  fixDpi();


   draw();

   
   if (myTrump.hit == false){
   window.requestAnimationFrame(gameLoop);
   }
   if (myTrump.hit == true)
   {

window.cancelAnimationFrame(gameLoop);
 
  adConfig({
      sound: 'off',
    });

adBreak({
        type: 'next',  // ad shows at start of next level
        name: 'restartgame2',
        beforeAd: () => {  },  // You may also want to mute the game's sound.
        afterAd: () => { },    // resume the game flow.
        adBreakDone: () => { showEndGame(); },  // Always called (if provided) even if an ad didn't show
      });

showEndGame();


   }

}

function draw(){

   
 //  resizeCanvas();
   context.clearRect(0,0, canvas.width, canvas.height);
   context.fillStyle = "green";
   context.fillRect(0,0,canvas.width,canvas.height/5);
  document.getElementById('gamescreen').style.cursor = "none";



  myLiz.drawLiz();
  road1.drawRoad();
  road2.drawRoad();
  myTrump.drawTrump();

  for (let x=0; x<bombArray.length; x++)
   {
      bombArray[x].drawBomb();

   }

  for (let x=0; x<bombArray.length; x++)
   {
      if(bombArray[x].busted == true)
      {   bombArray.splice(x,1);
          break;
      } 

   }

    //Update Score
   

context.font = "120px Arial";
context.fillStyle ="white";
context.fillText(score.toString(), 200, 100);

if(myTrump.hit == true){
context.font = "150px Arial";
context.fillStyle ="white";
context.fillText("Game Over!", canvas.width/2, 130);

}

}



function resizeCanvas(){

var mycanvas = document.getElementById("gamescreen");
var canvaswidth = mycanvas.getBoundingClientRect().width;
var canvasheight = mycanvas.getBoundingClientRect().height;
mycanvas.style.height = canvasheight;


}