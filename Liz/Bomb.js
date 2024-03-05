class Bomb {

  constructor(){

       //Bomb class for liz revenge 2


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
     this.bombmade = false;
     this.rwidth = rcanvas.width; 
     this.rheight = rcanvas.height;
     this.x = Math.floor(Math.random() * (this.rwidth - 0 + 1)) + 0;
     this.x = rcanvas.width*1.2;
      this.car = Math.floor(Math.random() * (3 - 0 + 0)) + 0;
     this.lane = 0;
//this.x = 0
     this.y = rcanvas.height/10;
     this.y = Math.floor(Math.random() * ((this.rheight-myTrump.height) - (this.rheight/5) + 1)) + (this.rheight/5);

     this.y = Math.floor(Math.random() * ((4) - (0) + 0)) + (0);

     if(this.y == 0 && lane1 == false)
     {
         this.y = rcanvas.height/5;
         lane1 = true;
         this.bombmade = true;
         this.lane=1;
      }

        else if(this.y == 1 && lane2 == false)
     {
         this.y = rcanvas.height*2/5;
         lane2 = true;
         this.bombmade = true;
         this.lane = 2;
      }

          else if(this.y == 2 && lane3 == false)
     {
          this.y = rcanvas.height*3/5;
           lane3 = true;
           this.bombmade = true;
           this.lane=3;
      }

        else if(this.y == 3 && lane4 == false)
     {
         this.y = rcanvas.height*4/5;
         lane4 = true;
          this.bombmade = true;
           this.lane = 4;
      }

     if(this.bombmade == false)
     {

        if(lane1 == false)
        {
		this.y = rcanvas.height/5;
         lane1 = true;
         this.bombmade = true;
         this.lane=1;
        }
        else if (lane2== false)
        {
		this.y = rcanvas.height*2/5;
         lane2 = true;
         this.bombmade = true;
         this.lane=2;
        }
        else if (lane3 == false)
        {

		this.y = rcanvas.height*3/5;
           lane3 = true;
           this.bombmade = true;
            this.lane=3;
        }
        else
        {

		this.y = rcanvas.height*4/5;
         lane4 = true;
          this.bombmade = true;
           this.lane= 4;

        }

     }

     this.maxspeed = -15;
     this.minspeed = -5;
     this.direction = -1;
     this.speed = (Math.random() * (this.maxspeed - this.minspeed + 1)) + this.minspeed;

      this.speed = -20;
     this.myBomb =  new Image();
     this.myBomb = document.getElementById("abomb");

     if (this.car == 0)
     {

        this.myBomb = document.getElementById("car1");
     }
if (this.car == 1)
     {

        this.myBomb = document.getElementById("car2");
     }
if (this.car == 2)
     {

        this.myBomb = document.getElementById("car3");
     }
     this.ssize = rcanvas.height/5;
     this.width = this.ssize*2;
     this.height = this.ssize;
     this.framecount = 0;
       this.busted = false;
     this.myInterval = null;
    // this.startBomb();

  }



 startBomb(){
//console.log('ok');
  this.myInterval = setInterval(this.drawBomb, 1000);
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
/*
     if (this.lane == 1)
     {lane1 = false;}
if (this.lane == 2)
     {lane2 = false;}
if (this.lane == 3)
     {lane3 = false;}
if (this.lane == 4)
     {lane4 = false;}
     
*/


     if(this.busted == false){
this.busted = true;
myTrump.hit = true;
console.log('hit');
     return true;}
     else{return false;}
    }
}


   drawBomb()
   {

     this.framecount += 1;
    let somecanvas = document.getElementById("gamescreen");
     let ctx = somecanvas.getContext('2d');
      //this.x += (Math.random() * (this.maxspeed - this.minspeed + 1)) + this.minspeed;

if(myTrump.hit == false){
this.x += this.speed;
}


//this.y += 12*this.direction;
let collision = this.checkCollision();
if(collision == true)
{
   this.myBomb.style.opacity = "0.3";
}
if (this.x < -this.width)
{
score += 1;
this.busted = true;
     if (this.lane == 1)
     {lane1 = false;}
if (this.lane == 2)
     {lane2 = false;}
if (this.lane == 3)
     {lane3 = false;}
if (this.lane == 4)
     {lane4 = false;}
   clearInterval(this.myInterval);
}
else{
      ctx.imageSmoothingEnabled = false;
ctx.drawImage(this.myBomb, this.x, this.y, this.width*8/10,this.height*8/10);}

    }





}
