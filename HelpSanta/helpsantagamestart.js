"use strict";

let pen;
let rcanvas;
let mysnowback;
let myInterval;
let snowcountseconds;
let myhouse = document.getElementById('house');
let mysnow = document.getElementById('snow');
let myplayAgain = new Image();
myplayAgain.src = "wreath.png";

let mypickleReturn = new Image();
mypickleReturn.src = "picklereturnhome.png";

let myDonate = new Image();
myDonate.src = "donatestart.png";

let mydrifty = 0;
let mysanta = document.getElementById('santa');
let snowArray = [];
let newSnowArray =[];
let gameover = false;
let currentx;
let currenty;
let score = 0;
let difficulty = 0;

//Go Full Screen
// Get the canvas element form the page
var canvas = document.getElementById('gamescreen');
 
function fullscreen(){
           var el = document.getElementById('gamescreen');
 
           if(el.webkitRequestFullScreen) {
               el.webkitRequestFullScreen();
           }
          else {
             el.mozRequestFullScreen();
          }   
  
}
 
canvas.addEventListener("click",fullscreen)
canvas.addEventListener("touchstart", fullscreen);





window.onload=function(){
rcanvas = document.getElementById("gamescreen");
     //fixDpi();

     let style = {
    height() {
      return +getComputedStyle(rcanvas).getPropertyValue('height').slice(0,-2);
    },
    width() {
      return +getComputedStyle(rcanvas).getPropertyValue('width').slice(0,-2);
    }
  }

   
//set the correct attributes for a crystal clear image!
   let dpi = window.devicePixelRatio;

  rcanvas.setAttribute('width', style.width() * dpi);
  rcanvas.setAttribute('height', style.height() * dpi);


pen = rcanvas.getContext("2d");
pen.imageSmoothingEnabled = false;

//myhouse = document.getElementById('house');
//mysnow = document.getElementById('snow');
//mysanta = document.getElementById('santa');

pen.imageSmoothingEnabled = false;


//create snow



pen.drawImage(myhouse,0,0,rcanvas.width,rcanvas.height);


pen.drawImage(mysanta,rcanvas.width*1/5,rcanvas.height/2.7,rcanvas.width/4,rcanvas.width/4);

  pen.drawImage(mysnow,0,mydrifty,rcanvas.width,rcanvas.height*2);







rcanvas.addEventListener("mousedown", function(e){

    if (gameover == false){
         
     }
getCursorPosition(rcanvas, e);


 });

rcanvas.addEventListener("touchstart", function(e){

    if (gameover == false){
    getCursorPosition(rcanvas, e);
     
     }
   
});



 window.requestAnimationFrame(gameLoop);

//alert("well well well");



 myInterval = setInterval(makeSnow, 1000);
/*
for (let s = 0; s < 30; s++)
{
     makeSnow();

}
*/

//Go Full Screen


//fullScreen();


}

function resetGame()
{

  pen.drawImage(myhouse,0,0,rcanvas.width,rcanvas.height);


pen.drawImage(mysanta,rcanvas.width*1/5,rcanvas.height/2.7,rcanvas.width/4,rcanvas.width/4);

  pen.drawImage(mysnow,0,mydrifty,rcanvas.width,rcanvas.height*2);

mydrifty = 0;

snowArray = [];
newSnowArray =[];
gameover = false;

score = 0;
difficulty = 0;

myInterval = setInterval(makeSnow, 1000);


}
function startDonate()
{
  gameover = true;
 // alert('donate');
}
function returnHome()
{

    window.location.href = "http://www.spoiledpickle.com";
}


function changeTimeLeft()
{
   //Update Time Left
  // myTime -= 1;

  
   

    

}
function makeSnow()
{
   var aflake = new Snow();
     snowArray.push(aflake);
  
 //  aflake.startMoveFlake();

}

function showGameOver()
{

    pen.font = "120px Arial";
    pen.fillStyle ="white";
    pen.fillText("Game Over", rcanvas.width/2.7, rcanvas.height/10);
   // reelIn();
    gameover = true;
    pen.drawImage(myplayAgain, rcanvas.width/2 - rcanvas.width/12,rcanvas.height/2, rcanvas.width/6,rcanvas.width/6);


pen.drawImage(mypickleReturn, rcanvas.width/5 - rcanvas.width/12,rcanvas.height/2, rcanvas.width/6,rcanvas.width/6);

pen.drawImage(myDonate, rcanvas.width*4/5 - rcanvas.width/12,rcanvas.height/2, rcanvas.width/6,rcanvas.width/6); 

}


function gameLoop(timeStamp){
//resizeCanvas();
  //fixDpi();


   draw();
window.requestAnimationFrame(gameLoop);
   /*
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
*/


}


function getTransformedPoint(x, y) {
  const transform = pen.getTransform();
  let transformedX = x - transform.e;
  if (transformedX > rcanvas.width){transformedX = rcanvas.width;}
  const transformedY = y - transform.f;
  return { x: transformedX, y: transformedY };
}

function getCursorPosition(canvas, event) {

    let rect = canvas.getBoundingClientRect()
    let x = event.clientX - rect.left;
    let y = event.clientY - rect.top;

    console.log('ya');

   const transformedCursorPosition = getTransformedPoint(x, y);
    currentx = x;
    currenty = y;

     

    console.log("x: " + currentx + " y: " + currenty);
//alert("x: " + currentx + " y: " + currenty);

if (gameover == false){
for (let f=0; f < snowArray.length; f++)
{
   snowArray[f].detectCollision(currentx,currenty);    
}

}

if (gameover == true)
{
    //check for game reset
//alert("game over");
    let rect = rcanvas.getBoundingClientRect();
       let resetx = (rcanvas.width/2-rcanvas.width/12)/rcanvas.width * rect.width;
       let resety = (rcanvas.height/2)/rcanvas.height * rect.height;
       
       if (currentx > resetx && currentx < resetx + rcanvas.width/6 && currenty > resety && currenty < resety+rcanvas.width/6)
       {
        //  alert('reset');
                  resetGame();
       }


    
    //check for back to Spoiled Pickle
let returnhomex = (rcanvas.width/5-rcanvas.width/12)/rcanvas.width * rect.width;
       let returnhomey = (rcanvas.height/2)/rcanvas.height * rect.height;


if (currentx > returnhomex && currentx < returnhomex + rcanvas.width/6 && currenty > returnhomey && currenty < returnhomey+rcanvas.width/6)
       {
          // alert('home');
          returnHome();
       }





    //check for donation
let donatex = (rcanvas.width*4/5-rcanvas.width/12)/rcanvas.width * rect.width;
       let donatey = (rcanvas.height/2)/rcanvas.height * rect.height;


if (currentx > donatex && currentx < donatex + rcanvas.width/6 && currenty > donatey && currenty < donatey+rcanvas.width/6)
       {
         gameover = true;
          //startDonate();
        // alert('donate');
         window.location.href = "https://www.paypal.com/donate/?hosted_button_id=X955R6SACFHA6";
       }


}


 }



function increaseDifficulty()
{

   //alert ('un huh');
}

function draw(){

   
 //  resizeCanvas();
   pen.clearRect(0,0, rcanvas.width, rcanvas.height);

//  pen.fillRect(0,0,rcanvas.width,rcanvas.height/5);
 // document.getElementById('gamescreen').style.cursor = "none";


//Draw All
pen.drawImage(myhouse,0,0,rcanvas.width,rcanvas.height);
 

pen.drawImage(mysanta,rcanvas.width*1/5,rcanvas.height/2.7,rcanvas.width/4,rcanvas.width/4);

  pen.drawImage(mysnow,0,mydrifty,rcanvas.width,rcanvas.height*2);
//console.log('what');


for (let f=0; f < snowArray.length; f++)
{
    snowArray[f].moveFlake();
    snowArray[f].detectCollision();
   
   snowArray[f].drawFlake(snowArray[f].x,snowArray[f].y);
 
}
 // console.log('ja');


newSnowArray = [];

for (let f=0; f < snowArray.length; f++)
{
    if (snowArray[f].drift == false)
    {
       
      newSnowArray.push(snowArray[f]);
     
    } 
    else{


     }
    
}

snowArray = newSnowArray;

newSnowArray = [];

for (let f=0; f < snowArray.length; f++)
{
    if (snowArray[f].caught == false)
    {

      newSnowArray.push(snowArray[f]);
    } 
    else{

         
     }
    
}




snowArray = newSnowArray;

//console.log("Snow Array Size " + snowArray.length);

//console.log("Snow Drift At " + mydrifty);
//console.log("Canvas Size: " + rcanvas.height);


if (mydrifty < -1*0.9*rcanvas.height)
{
   clearInterval(myInterval);
   
   gameover = true;
   showGameOver();

}



    //Update Score
   

pen.font = "120px Arial";
pen.fillStyle ="white";
pen.fillText(score.toString(), 200, 100);


currentx = -100;
currenty = -100;

}

