
let agamescreen;
let dpi;
let ctx;
let boardpen;
let dunkchart;
let charttics;
//audiot

let audioplaying = false;
var yourturn = document.getElementById("yourturn"); 
yourturn.loop = false;
var waitingfor = document.getElementById("waitingfor"); 
waitingfor.loop = false;
var hatethemost = document.getElementById("hatethemost"); 
hatethemost.loop = false;

let throwsoundplayed = false;
var throwsound = document.getElementById("throwsound"); 
throwsound.loop = false;

let splashsoundplayed = false;
var splashsound = document.getElementById("splashsound"); 
hatethemost.loop = false;


let mycolors = ["#ff0000", "#ff8000", "#ffff00", "#80ff00", "#00ff00", "#00ff80", "#00ffff", "#0080ff", "#0000ff", "#8000ff", "#ff00ff", "#ff0080"];

let moonride;
let options = false;

//graphics
let background;
let boothback;
let boothfront;
let ball;
let trees;
let usflag;
let pickcandidate;
let trumpbutton;
let desantisbutton;
let scottbutton;
let selectbutton;
let statbutton;
let moonridebutton;
let gobutton;
let go2button;
let mosthated;
let plane;
let target;
let seatstand;
let throwertest;
let thrower;
let greenstar;
let gx;
let gy;
let gwidth;
let gheight;
let spacethrow;
let sstart;
let membersonly;
let optionsbtn;
let spbutton;


let stats = [];

let splash;
let dunkee;
let hit = false;
let thrown = false;
let timecount = 0;
let leftPressed = false;
let rightPressed = false;
let mode = "select";
let candidatelist = ["Trump", "Desantis", "Scott","Pence", "Haley", "Christie","Ramaswamy", "Suarez", "Hutchinson","Elder", "Johnson", "Binkley"];
let candidates = [];
let whoselected = "Trump";
window.onload = init;

function keyDownHandler(event) {
        if ((event.key === "Left" || event.key === "ArrowLeft") && thrown == false) {
          leftPressed = true;
        } else if ((event.key === "Right" || event.key === "ArrowRight") && thrown == false) {
          rightPressed = true;
        } else if ((event.code === "Space" ||      
      event.keyCode == 32) && thrown == false) {
          //spacePressed = true;
          thrown = true;
           ball.x = thrower.x;
           ball.y = thrower.y;
        } else if ((event.code === "KeyR" ||      
      event.keyCode == 82)) {
           //window.cancelAnimationFrame(startGame);
          /*
          mode ="";
          score = 0;
          resetInvaders();
          gameover = false;
*/
 
          if (thrown==true){
          gamereset();
          }
        } else if ((event.code === "KeyS" ||      
      event.keyCode == 83)) {
          
          /*
          mode ="";
          score = 0;
          resetInvaders();
          gameover = false;
*/
          
          if (thrown==true){
          gamereset();
          }
        } 






      }


function keyUpHandler(event) {
        if (event.key === "Left" || event.key === "ArrowLeft") {
          leftPressed = false;
        } else if (event.key === "Right" || event.key === "ArrowRight") {
          rightPressed = false;
        }

       if (event.code === "Space" || event.keyCode == 32) {
         // spacePressed = false;
        }
}

function keyDownHandler2(event) {

      if (event.key === "KeyS" || event.keyCode == 83) {
options = false;
      document.addEventListener("keydown", keyDownHandler);
      document.addEventListener("keyup", keyUpHandler); 
      window.cancelAnimationFrame(startGame);
     // window.cancelAnimationFrame(gameLoop);
     // window.requestAnimationFrame(gameLoop);
}
}


function showGame()
{
boardpen.save();
timecount += 1;
boardpen.clearRect(0,0,agamescreen.width,agamescreen.height);
boardpen.drawImage(background, 0,0,agamescreen.width,agamescreen.height);
boardpen.drawImage(trees,0,0,agamescreen.width,agamescreen.height);


plane.fly();
plane.drawPlane();


boardpen.drawImage(usflag,agamescreen.width/2 - agamescreen.width/8, agamescreen.height/12,agamescreen.width/4, agamescreen.width/4*2);

boardpen.drawImage(target, agamescreen.width/2 + agamescreen.width/8, agamescreen.height/25 + agamescreen.width/4,agamescreen.width/4, agamescreen.width/4);
boardpen.drawImage(seatstand, agamescreen.width/3, agamescreen.height/3,agamescreen.width/3, agamescreen.width/3);


boardpen.drawImage(boothback,agamescreen.width/2 - agamescreen.width/6, agamescreen.height/2,agamescreen.width/3, agamescreen.width/3); 




/*
boardpen.drawImage(trump, agamescreen.width/3, agamescreen.height/6, agamescreen.width/3, agamescreen.width/3);
*/

if (timecount%500 == 0){

let whatsaid = Math.floor(Math.random() * 4) + 1;

switch(whatsaid) {
  case 1:
    // code block
    hatethemost.play();
    break;
  case 2:
    // code block
    waitingfor.play();
    break;
  case 3:
    yourturn.play();

  default:
    // code block
}


}



if (thrown == true){
if (timecount%10 == 0)
{
    thrower.throwBall();
    if (thrower.throwposition == 4)
    {
        thrower.img.src = thrower.throwArray[4];

     }
}

if (thrower.throwposition == 4)
{

      
        ball.fall();
       ball.drawBall();

}

}



//dunkee.drawDunkee();
if (hit == true){
throwsound.pause();
throwsound.currentTime = 0;
dunkee.fall();
splash.splashing = true;


}
dunkee.drawDunkee();


if (splash.splashing == true && dunkee.y > agamescreen.height/3)
{
     
	if (timecount%5 == 0)
	{    splash.splashUp();
		
	}
splash.drawSplash();
}



boardpen.drawImage(boothfront,agamescreen.width/2 - agamescreen.width/6, agamescreen.height/2,agamescreen.width/3, agamescreen.width/3); 

/*
boardpen.drawImage(throwertest, agamescreen.width/2 + agamescreen.width/8 + agamescreen.width/8, agamescreen.height/4, agamescreen.height*3/8, agamescreen.height*3/4);
*/

//ball.drawBall();
if (leftPressed == true)
{thrower.moveLeft();}
if (rightPressed == true)
{thrower.moveRight();}
thrower.drawThrower();

boardpen.drawImage(sstart, agamescreen.width* 0.05, agamescreen.height*3/5, agamescreen.width/8, agamescreen.width/8);

boardpen.drawImage(spacethrow, agamescreen.width/6, agamescreen.height*3/5, agamescreen.width/6, agamescreen.width/6);
boardpen.drawImage(optionsbtn, agamescreen.width*0.5, agamescreen.height - agamescreen.width/6, agamescreen.width/6, agamescreen.width/6);


selectbutton.drawbutton();
statbutton.drawbutton();
moonridebutton.drawbutton();
spbutton.drawbutton();
boardpen.restore();


}


function showMoonRide()
{
  boardpen.clearRect(0,0,agamescreen.width,agamescreen.height);
  boardpen.fillStyle = "black";
  boardpen.fillRect(0,0,agamescreen.width,agamescreen.height);
    moonride.drawScene();
    moonride.moveSky();
    
    boardpen.drawImage(go2button.img, go2button.x, go2button.y, go2button.width, go2button.height);
  
}

function showSelect()
{
  
  boardpen.save();
  boardpen.clearRect(0,0,agamescreen.width,agamescreen.height);

boardpen.fillStyle = "pink";
boardpen.fillRect(0, 0, agamescreen.width, agamescreen.height);

  boardpen.drawImage(usflag,agamescreen.width*4.5/7 , agamescreen.height/25,agamescreen.width/4, agamescreen.width/4*2);
boardpen.drawImage(pickcandidate, 0,0, agamescreen.width, agamescreen.height/8);

// draw candidate buttons
/*
boardpen.drawImage(trumpbutton, agamescreen.width/20, agamescreen.height/8, agamescreen.height/8, agamescreen.height/8);

boardpen.drawImage(desantisbutton, agamescreen.width/20*2 + agamescreen.height/8, agamescreen.height/8, agamescreen.height/8, agamescreen.height/8);

boardpen.drawImage(scottbutton, agamescreen.width/20*3 + agamescreen.height/8*2, agamescreen.height/8, agamescreen.height/8, agamescreen.height/8);
*/


for (let c=0; c < candidates.length; c++)
{
    candidates[c].drawCandidate();

}


boardpen.drawImage(greenstar,gx,gy,gwidth,gheight);
boardpen.font= agamescreen.height/16 +   "px Comic Sans MS";
boardpen.fillStyle = "red";
boardpen.textAlign = "center";
boardpen.fillText(whoselected + " Selected", agamescreen.width/2, agamescreen.height*.8);

boardpen.drawImage(gobutton.img, gobutton.x, gobutton.y, gobutton.width, gobutton.height);

boardpen.restore();
}

function showStats2()
{
    boardpen.clearRect(0,0,agamescreen.width,agamescreen.height);
boardpen.fillStyle = "#CCCCCC";
boardpen.fillRect(0, 0, agamescreen.width, agamescreen.height);
  stats = [];
  for (let i = 0; i < candidates.length; i++)
  {
    
    stats.push(candidates[i].dunks);
    
  }
  
   dunkchart = new Chart2("gamescreen", "2024 GOP Dunk Statistics", "Candidates", "Dunks", stats);
   
   dunkchart.drawChart();
  
  
}


function showStatsNew()
{
//alert ('screen size: '+ agamescreen.clientWidth + " " + agamescreen.clientHeight);
      boardpen.clearRect(0,0,agamescreen.clientWidth,agamescreen.clientHeight);
boardpen.fillStyle = "#CCCCCC";
boardpen.fillRect(0, 0, agamescreen.clientWidth, agamescreen.clientHeight);


  boardpen.drawImage(usflag,agamescreen.clientWidth*4.5/7 , agamescreen.clientHeight/25,agamescreen.clientWidth/4, agamescreen.clientWidth/4*2);
boardpen.drawImage(mosthated, 0,0, agamescreen.clientWidth, agamescreen.clientHeight/8);
let whatigot = 0;
for (let c = 0; c < candidates.length; c++){
  if (candidates[c].dunks > whatigot){
    whatigot = candidates[c].dunks;
  }
}

whatigot = whatigot + agamescreen.clientWidth/25;
//alert ('this is what i got: '+ whatigot);
//alert('what i got' + whatigot);
      let spacer = agamescreen.clientWidth/30;
      
    // alert('width: ' +agamescreen.clientWidth + ' height: '+ agamescreen.clientHeight);
     //alert('width: ' +agamescreen.style.width + ' height: '+ agamescreen.style.height);
    //  alert('width: ' +agamescreen.clientWidth + ' height: '+ agamescreen.clientHeight);
      
      let graphymax = agamescreen.clientHeight * 0.85 - agamescreen.clientHeight * 0.2;
      let maxlength = agamescreen.clientHeight * 0.85 - agamescreen.clientHeight/6;
      //alert ('graphymax: '+ graphymax);
      let graphscaler = 1;
      
      
         //if(this.maxvalue > this.maxlength){this.scalevalue = this.maxlength/this.maxvalue;}
         //alert('what i got: '+ whatigot);
         //alert('maxlength: '+ maxlength);
         
          if(whatigot > maxlength){graphscaler = whatigot /  100000;}
       //graphscaler = graphymax/whatigot * 5;
        
        graphscaler = 3;
     
      //alert (graphscaler);
      for (let c=0; c < candidates.length; c++)
      {
        //  let whatstat = Math.floor(Math.random() * agamescreen.clientHeight *0.6) + 1;
          boardpen.fillStyle= mycolors[c];
          boardpen.fillRect(c*spacer + agamescreen.clientWidth*.1 + c*spacer, agamescreen.clientHeight*0.85 - candidates[c].dunks*graphscaler, agamescreen.clientWidth/25, candidates[c].dunks*graphscaler);
          
          
           //boardpen.fillRect(c*spacer+ agamescreen.clientWidth*0.15,agamescreen.clientHeight*0.85 - candidates[c].dunks*graphscaler, agamescreen.clientWidth/30,candidates[c].dunks * graphscaler );

          boardpen.drawImage(candidates[c].img, c*spacer + agamescreen.clientWidth*.1 + c*spacer, agamescreen.clientHeight*0.85 - candidates[c].dunks*graphscaler - agamescreen.clientWidth/24, agamescreen.clientWidth/25, agamescreen.clientWidth/25);


       }

        for (let ca = 0; ca < candidatelist.length; ca++){
                let x = ca*spacer + agamescreen.clientWidth*.1 + ca*spacer;
                let y = agamescreen.clientHeight-10;
                 boardpen.font = "10px Comic Sans MS";

/*
boardpen.fillStyle = "red";
//boardpen.rotate(-45*Math.PI/180);
boardpen.fillText(candidatelist[ca], ca*spacer + agamescreen.clientWidth*.05 + ca*spacer, agamescreen.clientHeight*0.92);

//boardpen.rotate(0*Math.PI/180);
*/


boardpen.fillStyle = "white";
   boardpen.fillRect(agamescreen.clientWidth * 0.05, agamescreen.clientHeight*0.2, 10, agamescreen.clientHeight * 0.85 - agamescreen.clientHeight * 0.2);

boardpen.fillRect(agamescreen.clientWidth * 0.05, agamescreen.clientHeight * 0.85, agamescreen.clientWidth * 0.9, 10);


boardpen.save();

boardpen.fillStyle = 'black';
boardpen.translate(x, y*0.93);
boardpen.rotate(-Math.PI / 4);

boardpen.textAlign = 'center';
boardpen.fillText(candidatelist[ca], 0, agamescreen.clientHeight*0.0005 );

boardpen.restore();

boardpen.fillStyle = 'red';
boardpen.fillRect(x, y, 2, 2);


}
       
boardpen.drawImage(go2button.img, go2button.x, go2button.y, go2button.width, go2button.height);



}

function showStats()
{
//alert ('screen size: '+ agamescreen.width + " " + agamescreen.height);

boardpen.save();


      boardpen.clearRect(0,0,agamescreen.width,agamescreen.height);
boardpen.fillStyle = "#CCCCCC";
boardpen.fillRect(0, 0, agamescreen.width, agamescreen.height);
boardpen.font= agamescreen.width/2 +   "px Comic Sans MS";

  boardpen.drawImage(usflag,agamescreen.width*4.5/7 , agamescreen.height/25,agamescreen.width/4, agamescreen.width/4*2);
boardpen.drawImage(mosthated, 0,0, agamescreen.width, agamescreen.height/8);
let whatigot = 0;
for (let c = 0; c < candidates.length; c++){
  if (parseInt(candidates[c].dunks) > parseInt(whatigot)){
    whatigot = parseInt(candidates[c].dunks);
   
  }
}

whatigot = whatigot + agamescreen.width/25;
//alert ('this is what i got: '+ whatigot);
//alert('what i got' + whatigot);
      let spacer = agamescreen.width/30;
      
 //    alert('width: ' +agamescreen.width + 'height: '+ agamescreen.height);
   //   alert('width: ' +agamescreen.style.width + 'height: '+ agamescreen.style.height);
   //   alert('width: ' +agamescreen.clientWidth + 'height: '+ agamescreen.clientHeight);
      
      let graphymax = agamescreen.height * 0.85 - agamescreen.height * 0.2;
      let maxlength = agamescreen.height * 0.85 - agamescreen.height/6;
      //alert ('graphymax: '+ graphymax);
      let graphscaler = 1;
      
      
         //if(this.maxvalue > this.maxlength){this.scalevalue = this.maxlength/this.maxvalue;}
         //alert('what i got: '+ whatigot);
         //alert('maxlength: '+ maxlength);
       //  alert('what i got: '+whatigot);
         //alert('maxlength: ' + maxlength);
          if(whatigot > maxlength){graphscaler =  maxlength/whatigot;}
       //graphscaler = graphymax/whatigot * 5;
        
       // graphscaler = 0.5;
     
      //alert (graphscaler);
      for (let c=0; c < candidates.length; c++)
      {
        //  let whatstat = Math.floor(Math.random() * agamescreen.height *0.6) + 1;
          boardpen.fillStyle= mycolors[c];
          boardpen.fillRect(c*spacer + agamescreen.width*.1 + c*spacer, agamescreen.height*0.85 - candidates[c].dunks*graphscaler, agamescreen.width/25, candidates[c].dunks*graphscaler);
          
          
           //boardpen.fillRect(c*spacer+ agamescreen.width*0.15,agamescreen.height*0.85 - candidates[c].dunks*graphscaler, agamescreen.width/30,candidates[c].dunks * graphscaler );

          boardpen.drawImage(candidates[c].img, c*spacer + agamescreen.width*.1 + c*spacer, agamescreen.height*0.85 - candidates[c].dunks*graphscaler - agamescreen.width/24, agamescreen.width/25, agamescreen.width/25);


       }

        for (let ca = 0; ca < candidatelist.length; ca++){
                let x = ca*spacer + agamescreen.width*.1 + ca*spacer;
                let y = agamescreen.height-10;
                 //boardpen.font = "30px Comic Sans MS";
                 
                 boardpen.font= agamescreen.height/55 +   "px Comic Sans MS";

/*
boardpen.fillStyle = "red";
//boardpen.rotate(-45*Math.PI/180);
boardpen.fillText(candidatelist[ca], ca*spacer + agamescreen.width*.05 + ca*spacer, agamescreen.height*0.92);

//boardpen.rotate(0*Math.PI/180);
*/


boardpen.fillStyle = "white";
   boardpen.fillRect(agamescreen.width * 0.09, agamescreen.height * 0.85 - maxlength, 10, maxlength );

boardpen.fillRect(agamescreen.width * 0.09, agamescreen.height * 0.85, agamescreen.width * 0.9, 10);


////////////////////////////// Chart tics

 charttics = [];
           charttics.push[0];
//alert('max value is: ' + this.maxvalue);
for (let t=0; t <  (candidates.length); t++)
{
   charttics.push(t* whatigot/12);
 
}
//alert(this.charttics);
//alert(charttics[0]);
boardpen.fillStyle = "black";

let myfontsize = agamescreen.height/40;
            for (let t=0; t< candidates.length; t++)
            {boardpen.fillText(parseInt(charttics[t]), agamescreen.width*0.020, agamescreen.height*0.875 - myfontsize/2 - t*maxlength/12);
//alert(charttics[0]);
boardpen.fillStyle = "white";
//draw tics
boardpen.fillRect(agamescreen.width * 0.08, agamescreen.height*0.851 + myfontsize/2 - t*maxlength/12 - myfontsize/2, agamescreen.width/100, agamescreen.width/300);
boardpen.fillStyle = "black";
}


boardpen.fillStyle = "white";
//draw top tic
boardpen.fillRect(agamescreen.width * 0.08, agamescreen.height*0.851 + myfontsize/2 - candidates.length*maxlength/12 - myfontsize/2, agamescreen.width/100, agamescreen.width/300);

boardpen.fillStyle = "black";

//draw top value
charttics.push(parseInt((charttics.length)* whatigot/12));
boardpen.fillText(parseInt(charttics[charttics.length-1]), agamescreen.width*0.020, agamescreen.height*0.875 - myfontsize/2 - candidates.length*maxlength/12);









//////////////////////////////





boardpen.save();

boardpen.fillStyle = 'black';
boardpen.translate(x, y*0.93);
boardpen.rotate(-Math.PI / 4);

boardpen.textAlign = 'center';
boardpen.fillText(candidatelist[ca], 0, agamescreen.height*0.0005 );

boardpen.restore();

boardpen.fillStyle = 'red';
//boardpen.fillRect(x, y, 2, 2);

boardpen.save();

boardpen.fillStyle = "red";
boardpen.textAlign = "center";
boardpen.fillText("Candidates", agamescreen.width/2, agamescreen.height * 0.99);
boardpen.translate(-agamescreen.width*0.06,agamescreen.height);
boardpen.rotate(-90 * (Math.PI / 180));
boardpen.fillText("Dunks", agamescreen.height/2, agamescreen.height * 0.1);

boardpen.restore();


}
 
boardpen.drawImage(go2button.img, go2button.x, go2button.y, go2button.width, go2button.height);





}




function startGame()
{

if (mode == "game"){
showGame();
window.requestAnimationFrame(startGame);
}

if (mode == "select")
{
showSelect();

window.requestAnimationFrame(startGame);
}

if (mode == "stats"){
  showStats();
  window.requestAnimationFrame(startGame);
}


if (mode == "moonride"){
  showMoonRide();
  window.requestAnimationFrame(startGame);
}

if (mode == "sp"){
  window.location.href = "../index.php";
  
}


}



function gamereset()
{

//agamescreen.width/3, agamescreen.height/6


thrown = false;
hit = false;
dunkee.reset();
ball.reset();
thrower.reset();
splash.reset();
timecount = 0;
splashsoundplayed = false;
splashsound.pause();
splashsound.currentTime = 0;
throwsound.pause();
throwsoundplayed = false;
throwsound.currentTime = 0;

}



function getMousePos(mcanvas, evt) {
  var rect = mcanvas.getBoundingClientRect();
  //alert('hello');
/*
  return {
    x: evt.clientX - rect.left,
    y: evt.clientY - rect.top
  };
*/
/*
  let myx = evt.clientX - rect.left;
  let myy = evt.clientY - rect.top;
*/



  let myx = (evt.clientX - rect.left) / (rect.right - rect.left) * mcanvas.width;
  let myy = (evt.clientY - rect.top) / (rect.bottom - rect.top) * mcanvas.height;

/*
 alert(myx + ", " + myy);
alert(evt.clientX);
alert(rect.left);
alert(window.innerWidth);
alert(agamescreen.width);
alert(agamescreen.height);
*/


if (mode == "select"){
  gwidth = agamescreen.width/40;
  gheight = gwidth;
    gx = myx - gwidth/2;
  gy = myy - gheight/2;




for (let c=0; c < candidates.length; c++)
{

   candidates[c].checkClick(myx, myy);
}


gobutton.checkClick(myx,myy);


}
else if (mode == "game")
{
  //alert('yo');
  if (myx > agamescreen.width/2 )  {
      
         if (thrown == false){
          options = false;
      
          //window.cancelAnimationFrame(startGame);
          
            thrown = true;
           ball.x = thrower.x;
           ball.y = thrower.y;
        }
        else{
          gamereset();
        }
      
    }
 
    
    
    
    else
    {
   selectbutton.checkClick(myx, myy);
    statbutton.checkClick(myx, myy);
    spbutton.checkClick(myx,myy);
    
 
    moonridebutton.checkClick(myx,myy);
    
    /*
    boardpen.drawImage(target, agamescreen.width/2 + agamescreen.width/8, agamescreen.height/25 + agamescreen.width/4,agamescreen.width/4, agamescreen.width/4);
    
    
    
    (myx > agamescreen.width/2 + agamescreen.width/8 && myx < (agamescreen.width/2 + agamescreen.width/8 + agamescreen.width/4) && myy > agamescreen.height/25 + agamescreen.width/4 && myy <  agamescreen.height/25 + agamescreen.width/4 + agamescreen.width/4
    
    */
    
    //Check for click on target
    
    

   gamereset();
    }
}

else if (mode == "stats")
{
  //alert(mode);
    go2button.checkClick(myx,myy);
    gamereset();
}

else if (mode == "moonride")
{
  //alert(mode);
    go2button.checkClick(myx,myy);
    gamereset();
}


}



function init ()
{


//alert('sorry '+sname);
// listen for start

document.addEventListener("keydown", keyDownHandler2);

     agamescreen = document.getElementById("gamescreen");

agamescreen.addEventListener('click', function(e) { getMousePos(agamescreen,e); }, false);
/*
     style = {
    height() {
      return +getComputedStyle(agamescreen).getPropertyValue('height');
    },
    width() {
      return +getComputedStyle(agamescreen).getPropertyValue('width');
    }
  }
*/

  style = {
    height() {
      return +getComputedStyle(agamescreen).getPropertyValue('height').slice(0,-2);
    },
    width() {
      return +getComputedStyle(agamescreen).getPropertyValue('width').slice(0,-2);
    }
  }
 
agamescreen.style.width = agamescreen.clientWidth + "px";
agamescreen.style.height = agamescreen.clientWidth*3/4 + "px";
agamescreen.width = agamescreen.clientWidth + "px";
agamescreen.height = agamescreen.clientWidth*3/4 + "px";


background = new Image();
background.src = "background.png";

boothback = new Image();
boothback.src = "boothback.png";

boothfront = new Image();
boothfront.src = "boothfront.png";


pickcandidate = new Image();
pickcandidate.src = "pickcandidate.png";


spacethrow = new Image();
spacethrow.src = "spacethrow.png";

sstart = new Image();
sstart.src = "sstart.png";

trees= new Image();
trees.src = "trees.png";

usflag = new Image();
usflag.src = "usflag.png";

let planewidth = parseInt(agamescreen.clientWidth)/6;
plane = new Plane(parseInt(agamescreen.clientWidth)*4 + planewidth, 0, planewidth, planewidth/1.5);
//plane = new Plane(agamescreen.width, 300, planewidth, planewidth/2);

seatstand = new Image();
seatstand.src = "seatstand.png";

target = new Image();
target.src = "target.png";

throwertest = new Image();
throwertest.src = "thrower.png";

thrower = new Thrower(agamescreen.width/2 + agamescreen.width/8 + agamescreen.width/8, agamescreen.height/4);


mosthated = new Image();
mosthated.src = "mosthated.png";

greenstar = new Image();
greenstar.src = "greenstar.png";
  gx = 0;
  gy = 0;
  gwidth = 6;
  gheight = 6;
  
  
  
 moonride = new MoonRide(); 

  

gobutton = new CButton("go", agamescreen.width/2 - agamescreen.width/12, agamescreen.height - agamescreen.height*0.15,agamescreen.width/6, (agamescreen.width/6)/2, "game");

go2button = new CButton("go2", agamescreen.width*0.88, agamescreen.height - agamescreen.height*0.13,agamescreen.height/8, (agamescreen.height/16), "game");

selectbutton = new CButton("select", agamescreen.width/16, agamescreen.height - agamescreen.height*0.15,agamescreen.height/8, (agamescreen.height/16), "select");

statbutton = new CButton("stat", 2* agamescreen.width/16 + agamescreen.height/8, agamescreen.height - agamescreen.height*0.15,agamescreen.height/8, (agamescreen.height/16), "stats");

moonridebutton = new CButton("moonride", 2* agamescreen.width/16 + agamescreen.height/8, agamescreen.height - agamescreen.height*0.075,agamescreen.height/8, (agamescreen.height/16), "moonride");

optionsbtn= new Image();
optionsbtn.src = "options.png";


spbutton = new CButton("sp", agamescreen.width/16, agamescreen.height - agamescreen.height*0.075,agamescreen.height/8, (agamescreen.height/16), "sp");

/*
trumpbutton = new Image();
trumpbutton.src = "trumpbutton.png";

desantisbutton = new Image();
desantisbutton.src = "desantisbutton.png";

scottbutton = new Image();
scottbutton.src = "scottbutton.png";
*/
/*
boardpen.drawImage(trumpbutton, agamescreen.width/20, agamescreen.height/8, agamescreen.height/8, agamescreen.height/8);

boardpen.drawImage(desantisbutton, agamescreen.width/20*2 + agamescreen.height/8, agamescreen.height/8, agamescreen.height/8, agamescreen.height/8);

boardpen.drawImage(scottbutton, agamescreen.width/20*3 + agamescreen.height/8*2, agamescreen.height/8, agamescreen.height/8, agamescreen.height/8);
*/



let candidaterow = 1;
let candidatecol = 1;
for (let mycandidate = 0; mycandidate < candidatelist.length; mycandidate ++)
{
    let acandidate = new Candidate(candidatelist[mycandidate], agamescreen.width/40 * (candidatecol-1) + (candidatecol * agamescreen.height/8), (agamescreen.height/8 * candidaterow)  + (  (agamescreen.height/16) * (candidaterow - 1)) );

if (candidatecol % 4 == 0)
{candidaterow += 1; candidatecol = 0;}

candidates.push(acandidate);
candidatecol += 1;
}


splash = new Splash(agamescreen.width/2 - agamescreen.width/6, agamescreen.height/2);


ball = new Ball(agamescreen.width/2 + agamescreen.width/8 + agamescreen.width/8, agamescreen.height/4);


//boardpen.drawImage(trump, agamescreen.width/3, agamescreen.height/6, agamescreen.width/3, agamescreen.width/3);
dunkee = new Dunkee(whoselected,agamescreen.width/3, agamescreen.height/6);

       dpi = window.devicePixelRatio;
//set the correct attributes for a crystal clear image!
     //this.dpi = window.devicePixelRatio;

  agamescreen.setAttribute('width', style.width() * dpi);
  agamescreen.setAttribute('height', style.height() * dpi);

mycanvas = document.getElementById("gamescreen");
ctx = mycanvas.getContext("2d");
let myfontheight = agamescreen.height/30;
ctx.font = myfontheight.toString() +"px Arial";






boardpen = agamescreen.getContext("2d");
boardpen.imageSmoothingEnabled = false;

//Get Stats
for (let c=0; c < candidates.length; c++)
      {
          let whatstat = Math.floor(Math.random() * agamescreen.height *0.6) + 1;
          stats[c] = whatstat;
       }

startGame();
}


function playThrowSound()
{

   if (throwsoundplayed == false)
   { throwsoundplayed = true;  thowsound.play(); }
}

function playSplashSound()
{

   if (splashsoundplayed == false)
    { splashsoundplayed = true; splashsound.play();}
}

function updateData (){

			
			
			const xhttp = new XMLHttpRequest();
     
  xhttp.onload = function() {
   // alert (this.responseText);
  }
  xhttp.open("POST", "test2.php",true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //alert(whoselected);
  xhttp.send("cdunked="+whoselected);
      }
   
   
   function loadData2(){
     
     
   }
      
function loadData (){

			
console.log('here i am');	
			let xhttp2 = new XMLHttpRequest();
console.log('ya ok...');
  xhttp2.onload = function() {
  // alert(this.responseText);
   /*
   xhr.onreadystatechange = () => {
    if (xhr.readyState === 4) {
      callback(xhr.response);
    }
  };
   */
   
   let candidateobj = JSON.parse(this.responseText);
  // alert ('object length: '+ candidateobj.length);
   for (let i =0; i < candidateobj.length; i++)
   {
     for (let j = 0; j < candidates.length; j++)
     {
        if (candidates[j].name == candidateobj[i].LastName){
           
         //  alert('about to set dunks');
           
           candidates[j].dunks = candidateobj[i].dunks;
          
        }
       
     }
     
   }
   
  //alert(this.responseText);
   
  }
  

  
  
  xhttp2.open("POST", "loadStats.php" , true);
xhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp2.send();
  
  
  console.log('made it ya');

  
      }
      
      
      
function gameLoop()
{
showGame();

window.requestAnimationFrame(gameLoop);

}