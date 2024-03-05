class Road {

  constructor(){

       //Road class for liz revenge 2


          let rcanvas = document.getElementById("gamescreen");
     //fixDpi();

     let style = {
    height() {
      return +getComputedStyle(rcanvas).getPropertyValue('height').slice(0,-2);
    },
    width() {
      return +getComputedStyle(rcanvas).getPropertyValue('width').slice(0,-2);
    }
  }

       this.dpi = window.devicePixelRatio;
//set the correct attributes for a crystal clear image!
     this.dpi = window.devicePixelRatio;

  rcanvas.setAttribute('width', style.width() * this.dpi);
  rcanvas.setAttribute('height', style.height() * this.dpi);


     this.acanvas = document.getElementById("gamescreen");
    this.ctx = this.acanvas.getContext('2d');

     this.rwidth = rcanvas.width; 
     this.rheight = rcanvas.height;
     this.x = Math.floor(Math.random() * (this.rwidth - 0 + 1)) + 0;
     this.x = 0;
//this.x = 0
     this.y = rcanvas.height/5;
     //this.y = Math.floor(Math.random() * ((this.rheight-myTrump.height) - (this.rheight/5) + 1)) + (this.rheight/5);
     this.maxspeed = -15;
     this.minspeed = -5;
     this.direction = -1;
     this.speed = 10;
     this.myRoad =  new Image();
     this.myRoad = document.getElementById("theroad");
     this.ssize = rcanvas.height/5;
     this.width = rcanvas.width+2;
     this.height = rcanvas.height*4/5;
     this.framecount = 0;
       this.busted = false;
     this.myInterval = null;
    // this.startRoad();

  }



 startRoad(){
//console.log('ok');
  this.myInterval = setInterval(this.drawRoad, 1000);
}
     
 

checkCollision()
{

  if (this.x >= myTrump.x+myTrump.width || this.y >= myTrump.y+myTrump.height || 
    this.x+this.width <= myTrump.x || this.y+this.height <= myTrump.y)
   {
    // no overlap
      return false;
   }
   else
   {
    // overlap
     if(this.busted == false){
this.busted = true;
score += 1;
console.log('hit');
     return true;}
     else{return false;}
    }
}


   drawRoad()
   {

     this.framecount += 1;
    let somecanvas = document.getElementById("gamescreen");
     let ctx = somecanvas.getContext('2d');
      //this.x += (Math.random() * (this.maxspeed - this.minspeed + 1)) + this.minspeed;

if(myTrump.hit == false){
this.x -= this.speed;

}

//this.y += 12*this.direction;


let collision = false;
if(collision == true)
{
   this.myRoad.style.opacity = "0.3";
}
if (this.x <= -somecanvas.width)
{
   
   //clearInterval(this.myInterval);

   this.x = somecanvas.width;
   ctx.imageSmoothingEnabled = false;
ctx.drawImage(this.myRoad, this.x, this.y, this.width,this.height);
}
else{
      ctx.imageSmoothingEnabled = false;
ctx.drawImage(this.myRoad, this.x, this.y, this.width,this.height);}

    }





}
