let agamescreen;
let dpi;
let style;
let boardpen;
let myscorepane;
let ship;
let buildings;
let invaderArray;
let barricadeArray;
let mothership;
let timecount;
let shift;
let bullet;
let difficulty = 60;
let score = 0;
let mycanvas;
let ctx;
let invadersdead = 0;
let gameoverpic;
let gameover = false;
let motherstart;
let context1;
let context2;
let oscillatorAudioNode;
let oscillatorAudioNode2;
let endAudio;
let audiostarted = false;
let gamestarted = false;
let presss;
let splashup = true;
let mode = "splash";
let audio1;
let audio2;
let audio3;
let audio4;
// Keyboard controls
let leftPressed = false;
let rightPressed = false;
let spacePressed = false;
let checkedHigh = false;
let myhighscores;
let gameovercounter = 0;
let winner = false;

let gocheck = false;
let person;
let precheck = false;
let gameoverset = false;

window.onload = init;
function resizeCanvas2() {
  var mycanvas = document.getElementById("gamescreen");

  var canvaswidth = mycanvas.getBoundingClientRect().width;
  var canvasheight = mycanvas.getBoundingClientRect().height;
  mycanvas.style.height = canvasheight;
}

function resizeCanvas() {
  gamebox.style.width = window.innerHeight * 0.95 + "px";
  gamebox.style.height = window.innerHeight * 0.95 + "px";

  // gamebox.style.width = window.innerWidth + "px";
  //gamebox.style.height = window.innerHeight + "px";

  agamescreen = document.getElementById("gamescreen");

  // agamescreen.style.width = window.innerHeight*0.95;
  // agamescreen.style.height = window.innerHeight*0.95;
  agamescreen.width = window.innerHeight * 0.95;
  agamescreen.height = window.innerHeight * 0.95;
  //console.log(gamebox.style.width);
  //console.log(agamescreen.width);

  style = {
    height() {
      return +getComputedStyle(agamescreen)
        .getPropertyValue("height")
        .slice(0, -2);
    },
    width() {
      return +getComputedStyle(agamescreen)
        .getPropertyValue("width")
        .slice(0, -2);
    },
  };

  dpi = window.devicePixelRatio;
  //set the correct attributes for a crystal clear image!
  //this.dpi = window.devicePixelRatio;

  agamescreen.setAttribute("width", style.width() * dpi);
  agamescreen.setAttribute("height", style.height() * dpi);

  //agamescreen.width = window.innerWidth;
  //agamescreen.height = window.innerHeight;
}

function pauseScratch() {
  audio1.pause();
}

function playScratch() {
  // x.play();
  audio1.play();
  audio1.play();
  //audio1.play();
  //pauseScratch();
}

function playScratch() {
  context1 = new AudioContext();
  // let oscillatorAudioNode;
  // allow the user to play sound
  context1.resume();
  if (oscillatorAudioNode) oscillatorAudioNode.stop();
  // create an oscillator node
  oscillatorAudioNode = context1.createOscillator();
  // connect it to the destination
  oscillatorAudioNode.connect(context1.destination);
  // start the oscillator
  oscillatorAudioNode.start();
  oscillatorAudioNode.stop(0.01);
}

function playMotherBuzz() {
  audio2.play();
}

function stopMotherBuzz() {
  audio2.pause();
}

function playEnemyWalk() {
  context2 = new AudioContext();

  // allow the user to play sound
  context2.resume();
  if (oscillatorAudioNode2) oscillatorAudioNode2.stop();
  // create an oscillator node
  oscillatorAudioNode2 = context2.createOscillator();
  // connect it to the destination
  oscillatorAudioNode2.connect(context2.destination);
  // start the oscillator
  oscillatorAudioNode2.start();

  oscillatorAudioNode2.frequency.setValueAtTime(
    Math.pow(2, (timecount % difficulty) / 60),
    context2.currentTime
  );
}

function stopEnemyWalk() {
  oscillatorAudioNode2.stop();
}

function startAudio() {
  audiostarted = true;
  playScratch();
}

function startGame() {
  //draw backdrop
  boardpen.clearRect(0, 0, agamescreen.width, agamescreen.height);
  boardpen.globalAlpha = 0.5;
  boardpen.drawImage(buildings, 0, 0, agamescreen.width, agamescreen.height);
  boardpen.globalAlpha = 1.0;

  //draw score pane
  boardpen.drawImage(
    myscorepane,
    agamescreen.width * 0.65,
    0,
    (4 * agamescreen.height) / 20,
    agamescreen.height / 20
  );

  boardpen.drawImage(
    presss,
    agamescreen.width / 3,
    agamescreen.height / 3,
    agamescreen.width / 3,
    agamescreen.width / 6
  );

  //draw ship
  ship.drawShip();
  window.requestAnimationFrame(startGame);
}

function startGame2() {
  //draw backdrop
  boardpen.clearRect(0, 0, agamescreen.width, agamescreen.height);
  boardpen.globalAlpha = 0.5;
  boardpen.drawImage(buildings, 0, 0, agamescreen.width, agamescreen.height);
  boardpen.globalAlpha = 1.0;

  //draw score pane
  boardpen.drawImage(
    myscorepane,
    agamescreen.width * 0.65,
    0,
    (4 * agamescreen.height) / 20,
    agamescreen.height / 20
  );

  boardpen.drawImage(
    presss,
    agamescreen.width / 3,
    agamescreen.height / 3,
    agamescreen.width / 3,
    agamescreen.width / 6
  );

  //draw ship
  ship.drawShip();
  //window.requestAnimationFrame(startGame);
}

function keyDownHandler(event) {
  if (event.key === "Left" || event.key === "ArrowLeft") {
    leftPressed = true;
  } else if (event.key === "Right" || event.key === "ArrowRight") {
    rightPressed = true;
  } else if (event.code === "Space" || event.keyCode == 32) {
    spacePressed = true;
  } else if (
    (event.code === "KeyR" || event.keyCode == 82) &&
    gameover == true
  ) {
    //window.cancelAnimationFrame(startGame);

    mode = "";
    score = 0;
    resetInvaders();
    gameover = false;
    gameoverset = false;
    checkedHigh = false;
    gocheck = false;
    winner = false;
    precheck = false;
  } else if (
    (event.code === "KeyS" || event.keyCode == 83) &&
    gameover == true
  ) {
    //window.cancelAnimationFrame(startGame);

    mode = "";
    score = 0;
    resetInvaders();
    gameover = false;
    gameoverset = false;
    checkedHigh = false;
    gocheck = false;
    winner = false;
    precheck = false;
  }
}

function keyDownHandler2(event) {
  if ((event.key === "KeyS" || event.keyCode == 83) && gamestarted == false) {
    gamestarted = true;
    score = 0;
    startAudio();

    // document.removeEventListener("keydown", keyDownHandler2, true);
    document.addEventListener("keydown", keyDownHandler);
    document.addEventListener("keyup", keyUpHandler);
    splashup = false;
    mode = "";
    showGameScreen();
  }
}

function keyUpHandler(event) {
  if (event.key === "Left" || event.key === "ArrowLeft") {
    leftPressed = false;
  } else if (event.key === "Right" || event.key === "ArrowRight") {
    rightPressed = false;
  }

  if (event.code === "Space" || event.keyCode == 32) {
    spacePressed = false;
  }
}

function movePlayer() {
  /*
        if (leftPressed && playerX > 0) {
          playerX -= playerSpeed;
        } else if (rightPressed && playerX + playerWidth < agamescreen.width) {
          playerX += playerSpeed;
        }
*/
  if (leftPressed && ship.x > 0) {
    ship.x -= ship.speed;
  } else if (rightPressed && ship.x + ship.width < agamescreen.width) {
    ship.x += ship.speed;
  }
}

function moveBullet() {
  if (bullet.fired === true) {
    bullet.y -= bullet.speed * 2;
    if (bullet.y < 0) {
      bullet.fired = false;
    }
  }
}

function fireBullet() {
  if (spacePressed == true && bullet.fired === false) {
    bullet.x = ship.x + bullet.width;
    bullet.y = ship.y;
    bullet.fired = true;
    startAudio();
  }
}

function invaderStatus() {
  if (invadersdead == invaderArray.length) {
    resetInvaders();
  }
}

function checkCollision() {
  for (let i = 0; i < invaderArray.length; i++) {
    if (invaderArray[i].alive === true && bullet.fired == true) {
      if (
        bullet.x > invaderArray[i].x &&
        bullet.x < invaderArray[i].x + invaderArray[i].width &&
        bullet.y > invaderArray[i].y &&
        bullet.y < invaderArray[i].y + invaderArray[i].height
      ) {
        bullet.fired = false;
        invaderArray[i].alive = false;
        score += 5;
        audio3.play();
        audio3.pause();

        invadersdead += 1;

        if (difficulty > 2) {
          difficulty -= 2;
        }
      }
    }
  }

  if (mothership.alive === true && bullet.fired == true) {
    if (
      bullet.x > mothership.x &&
      bullet.x < mothership.x + mothership.width &&
      bullet.y > mothership.y &&
      bullet.y < mothership.y + mothership.height
    ) {
      bullet.fired = false;
      mothership.alive = false;
      score += 100;
      playScratch();
      pauseScratch();
      stopMotherBuzz();
    }
  }
}

function showScore() {
  let myscorepanex = agamescreen.width * 0.65 + (4 * agamescreen.height) / 20;
  let myscorepaney = agamescreen.height / 25;

  //mycanvas = document.getElementById("gamescreen");
  //ctx = mycanvas.getContext("2d");
  let myfontheight = agamescreen.height / 25;
  ctx.font = myfontheight.toString() + "px Arial";

  ctx.fillStyle = "red";
  ctx.fillText(score.toString(), myscorepanex, myscorepaney);
}

function showHighScoresPane() {
  let highscorey = agamescreen.height / 25;
  let myhsfontheight = agamescreen.height / 25;
  let highscorex = agamescreen.width * 0.5 - 2.5 * myhsfontheight;
  ctx.font = myhsfontheight.toString() + "px Arial";
  ctx.fillStyle = "red";
  //alert('i got here h');
  ctx.fillText(
    "High Scores",
    highscorex - 0.5 * myhsfontheight,
    highscorey + 3 * myhsfontheight
  );
  for (let r in myhighscores) {
    //alert('i got here');
    ctx.fillText(
      myhighscores[r].initials + ": " + myhighscores[r].score,
      highscorex,
      6 * highscorey + r * myhsfontheight
    );
    //ctx.fillText("jjj", highscorex, highscorey + r * myhsfontheight);
  }

  ctx.fillText(
    "Press 'S' to Play",
    highscorex - 1.5 * myhsfontheight,
    6 * highscorey + 12 * myhsfontheight
  );
}

function getInitials() {
  person = prompt("Please enter your initials", "AAA");

  if (person != null && person != "" && person.length < 4) {
    gocheck = true;
  } else {
    gocheck = false;
  }
}

function testonce() {
  // alert('once');
}

function preCheckHigh() {
  const pxhttp = new XMLHttpRequest();
  //alert('showmen');
  pxhttp.onload = function () {
    //alert ("precheck for high score");
    if (checkedHigh == false) {
      //alert('you are a winner');
      myhighscores = JSON.parse(this.responseText);

      for (let r in myhighscores) {
        if (score > myhighscores[r].score) {
          winner = true;
          break;
        }
      }
      if (winner == true && precheck == false) {
        precheck = true;
        alert("winner");
        checkForHighScore();
        checkedHigh = true;
      }

      gameoverset = true;
      //window.requestAnimationFrame(gameLoop);
    } else {
      myhighscores = JSON.parse(this.responseText);
      precheck = true;
      checkedHigh = true;
      gameoverset = true;
      //window.requestAnimationFrame(gameLoop);
      //window.requestAnimationFrame(gameLoop);
      /*alert('you are a loser');*/
    }
    //window.requestAnimationFrame(gameLoop);
  };

  pxhttp.open("POST", "precheckscore.php", true);
  pxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //alert(whoselected);
  //getInitials();
  gocheck = true;
  if (gocheck == true) {
    //alert('prechecking');
    pxhttp.send("playerscore=" + score);
  }
}

function checkForHighScore() {
  const xhttp = new XMLHttpRequest();

  xhttp.onload = function () {
    // alert ("yesehhh");
    myhighscores = JSON.parse(this.responseText);
    //alert(myhighscores[0].initials);
    //window.requestAnimationFrame(gameLoop);
  };
  xhttp.open("POST", "checkscore.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //alert(whoselected);

  getInitials();
  alert("You Made The Top 10!");

  if (person.length == 2) {
    person = person + "_";
  }

  if (person.length == 1) {
    person = person + "__";
  }

  xhttp.send(
    "playerscore=" + score + "&" + "playerinitials=" + person.toUpperCase()
  );
}

function showGameOver() {
  timecount = 0;
  boardpen.clearRect(0, 0, agamescreen.width, agamescreen.height);

  //draw backdrop

  boardpen.globalAlpha = 0.5;
  boardpen.drawImage(buildings, 0, 0, agamescreen.width, agamescreen.height);
  boardpen.globalAlpha = 1.0;

  //draw score pane
  boardpen.drawImage(myscorepane, agamescreen.width * 0.65, 0);
  showScore();

  boardpen.drawImage(
    gameoverpic,
    agamescreen.width * 0.25,
    agamescreen.height * 0.25,
    agamescreen.width * 0.5,
    agamescreen.height / 2
  );
}

function init() {
  loadAudio();

  // Event listeners for keyboard controls

  document.addEventListener("keydown", keyDownHandler2);

  //Draw Board

  timecount = 0;
  shift = false;

  let gamebox = document.getElementById("gamebox");
  resizeCanvas();

  /*
     agamescreen = document.getElementById("gamescreen");
     //alert(agamescreen.clientWidth);
  // agamescreen.width = agamescreen.clientWidth;
     //agamescreen.style.height = agamescreen.clientHeight*0.5;
   // alert(agamescreen.clientWidth);
  //   let currentheight = agamescreen.clientWidth*.65;
     // alert ("hello");
 //agamescreen.height = agamescreen.clientHeight*0.8;
     // alert ("hello2");
   // agamescreen.style.height = currentheight.toString() +"px";
   // alert ("hello3");
     style = {
    height() {
      return +getComputedStyle(agamescreen).getPropertyValue('height').slice(0,-2);
    },
    width() {
      return +getComputedStyle(agamescreen).getPropertyValue('width').slice(0,-2);
    }
  }





       dpi = window.devicePixelRatio;
//set the correct attributes for a crystal clear image!
     //this.dpi = window.devicePixelRatio;

  agamescreen.setAttribute('width', style.width() * dpi);
  agamescreen.setAttribute('height', style.height() * dpi);
*/

  //press s to start image
  presss = new Image();
  presss.src = "presstostart.png";

  mycanvas = document.getElementById("gamescreen");
  mycanvas.width = window.innerWidth;
  mycanvas.height = window.innerHeight;
  ctx = mycanvas.getContext("2d");
  let myfontheight = agamescreen.height / 30;
  ctx.font = myfontheight.toString() + "px Arial";

  boardpen = agamescreen.getContext("2d");
  boardpen.imageSmoothingEnabled = false;

  myscorepane = new Image();
  myscorepane.src = "scorepane.png";

  mothership = new MotherShip(0, agamescreen.width / 20);
  mothership.src = "invader6.png";

  ship = new Ship(
    agamescreen.width / 3,
    agamescreen.height - agamescreen.width / 20
  );

  buildings = new Image();
  buildings.src = "buildings.png";

  bullet = new Bullet(ship.x, ship.y);

  invaderArray = [];
  for (j = 1; j < 6; j++) {
    for (i = 0; i < 10; i++) {
      let aninvader = new Invader(
        j,
        ((i * agamescreen.width) / 20) * 1.3,
        agamescreen.width / 10 + ((j * agamescreen.width) / 20) * 1.3
      );
      invaderArray.push(aninvader);
    }
  }

  barricadeArray = [];
  for (b = 1; b < 5; b++) {
    let abarricade = new Barricade(
      (b * agamescreen.width) / 5,
      agamescreen.height - agamescreen.width / 7
    );
    barricadeArray.push(abarricade);
  }

  gameoverpic = new Image();
  gameoverpic.src = "gameover.png";

  //setTimeout(showGameScreen, 5000);
  //showGameScreen();
  startGame();
}

function loadAudio() {
  // ARP - Define and load audio elements and make available globally
  //audio1 = document.getElementById("scratch");
  audio1 = new Audio("scratch.mp3");
  audio1.playbackRate = 0.5;
  audio1.load();

  //audio2 = document.getElementById("motherbuzz");
  audio2 = new Audio("mothershipbuzz.mp3");
  audio2.playbackRate = 0.5;
  audio2.load(); //ARP - Load audio Here

  audio3 = new Audio("effect3.mp3");
  audio3.playbackRate = 0.5;
  audio3.load(); //ARP - Load Audio Here

  audio4 = new Audio("effect4.mp3");
  audio4.playbackRate = 0.5;
  audio4.volume = 0.1;
  audio4.load(); //ARP - Load Audio Here
}

function setMotherStart() {
  motherstart = Math.floor(Math.random() * (900 - 700 + 1)) + 700;

  let wheremotherstarts = Math.floor(Math.random() * (100 - 2 + 1)) + 2;
  if (wheremotherstarts > 50) {
    mothership.setMotherShip("right");
  } else {
    mothership.setMotherShip("left");
  }
}

function showGameScreen() {
  /*
//stopEnemyWalk();
audio1.pause();


//draw backdrop

boardpen.globalAlpha = 0.5;
boardpen.drawImage(buildings,0,0,agamescreen.width,agamescreen.height);
boardpen.globalAlpha = 1.0;


//draw score pane
boardpen.drawImage(myscorepane,agamescreen.width*.65,0,4*agamescreen.height/20,agamescreen.height/20);

//draw mothership
mothership.drawMotherShip();
setMotherStart();

//draw ship
ship.drawShip();


//draw barricades
for (i=0; i < barricadeArray.length; i++)
{

barricadeArray[i].drawBarricade();

}



//draw invaders
for(i=0; i < invaderArray.length; i++){
invaderArray[i].drawInvader();
}

*/
  window.requestAnimationFrame(gameLoop);
}

function gameReset() {
  score = 0;
  timecount = 0;
  invaderArray = [];
  for (j = 1; j < 6; j++) {
    for (i = 0; i < 10; i++) {
      let aninvader = new Invader(
        j,
        ((i * agamescreen.width) / 20) * 1.3,
        agamescreen.width / 10 + ((j * agamescreen.width) / 20) * 1.3
      );
      invaderArray.push(aninvader);
    }
  }
  invadersdead = 0;
  difficulty = 60;
  setMotherStart();
  mothership.alive = false;

  init();
}

function resetInvaders() {
  timecount = 0;
  invaderArray = [];
  for (j = 1; j < 6; j++) {
    for (i = 0; i < 10; i++) {
      let aninvader = new Invader(
        j,
        ((i * agamescreen.width) / 20) * 1.3,
        agamescreen.width / 10 + ((j * agamescreen.width) / 20) * 1.3
      );
      invaderArray.push(aninvader);
    }
  }
  invadersdead = 0;
  difficulty = 50;
  setMotherStart();
  mothership.alive = false;
}

function gameLoop() {
  resizeCanvas();
  if (gameover == false) {
    if (shift == true) {
      //window.cancelAnimationFrame(gameLoop);
      shiftInvaders();
      shift = false;
      //window.requestAnimationFrame(gameLoop);
    }

    timecount += 1;
    boardpen.clearRect(0, 0, agamescreen.width, agamescreen.height);

    //draw backdrop

    boardpen.globalAlpha = 0.5;
    boardpen.drawImage(buildings, 0, 0, agamescreen.width, agamescreen.height);
    boardpen.globalAlpha = 1.0;

    //draw score pane
    boardpen.drawImage(myscorepane, agamescreen.width * 0.65, 0);
    showScore();

    //draw mothership

    if (timecount == motherstart) {
      mothership.alive = true;
      playMotherBuzz();
    }
    if (mothership.alive == true) {
      mothership.move();
      mothership.drawMotherShip();
    }

    //move ship
    movePlayer();
    //draw ship
    ship.drawShip();

    if (bullet.fired == true) {
      moveBullet();
      bullet.drawBullet();
      //console.log("got a bullet");
    }

    //draw barricades
    for (i = 0; i < barricadeArray.length; i++) {
      barricadeArray[i].drawBarricade();
    }

    if (timecount % difficulty == 0) {
        audio4.play();
        audio4.pause();

      if (audiostarted == true) {
        //startAudio();
      }
    }

    //move and draw invaders
    for (i = 0; i < invaderArray.length; i++) {
      if (timecount % difficulty == 0) {
        //invaderArray[i].resizeInvaderCanvas();
        invaderArray[i].move();
        invaderArray[i].swapImage();
        //shift on right code
        if (
          (invaderArray[i].x > agamescreen.width - invaderArray[i].width ||
            invaderArray[i].x < 0) &&
          invaderArray[i].alive == true &&
          invaderArray[i].crazy == false
        ) {
          shift = true;
        }
      }

      invaderArray[i].drawInvader();

      //draw bullet
      fireBullet();

      checkCollision();
      invaderStatus();
    }
    //invaderArray[3].crazymove(timecount);
    //   invaderArray[13].crazymove(timecount);
    //invaderArray[23].crazymove(timecount);

    window.cancelAnimationFrame(gameLoop);
    window.requestAnimationFrame(gameLoop);
  } else {
    // window.cancelAnimationFrame(gameLoop);
    //window.cancelAnimationFrame(startGame);
    audio2.pause();

    gameovercounter += 1;
    if (gameovercounter > 720) {
      gameovercounter = 0;
    }

    if (gameovercounter > 360) {
      showHighScoresPane();
    } else {
      showGameOver();
    }
    //showGameOver();

    if (checkedHigh == false) {
      window.cancelAnimationFrame(gameLoop);
      if (gameoverset == false || precheck == false) {
        //alert('yo');
        preCheckHigh();
        //gameoverset = true;
      }
      /*
checkForHighScore();
checkedHigh = true;
window.requestAnimationFrame(gameLoop);
*/
      window.requestAnimationFrame(gameLoop);
    } else {
      //window.cancelAnimationFrame(gameLoop);
      window.requestAnimationFrame(gameLoop);
    }
    //setTimeout(window.requestAnimationFrame(gameLoop), 5000);
  }
}

function shiftInvaders() {
  for (i = 0; i < invaderArray.length; i++) {
    invaderArray[i].y += agamescreen.width / 20;
    invaderArray[i].speed *= -1;
  }

  function drawPlayer() {
    ctx.beginPath();
    ctx.rect(playerX, playerY, playerWidth, playerHeight);
    ctx.fillStyle = "#00ff00";
    ctx.fill();
    ctx.closePath();
  }
}
