class Liz {

  constructor(){

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
     this.y = rcanvas.height/10;
     this.maxspeed = -8;
     this.minspeed = -1;
     this.direction = 1;
     this.speed = (Math.random() * (this.maxspeed - this.minspeed + 1)) + this.minspeed;
     this.myLiz = new Image();
     this.myLiz.src = "lizright.png";

     this.ssize = rcanvas.height/5;

     this.framecount = 0;

  }


   drawLiz()
   {

     this.framecount += 1;
    let somecanvas = document.getElementById("gamescreen");
     let ctx = somecanvas.getContext('2d');
    //  this.x -= (Math.random() * (this.maxspeed - this.minspeed + 1)) + this.minspeed;


//Decide if you are changing direction
if (this.framecount % 30 == 0)
{
  let pick = Math.floor(Math.random() * 3);
  if (pick == 2 && myTrump.hit == false)
  {
     this.direction *= -1;
     if (this.direction == 1)
     {
         this.myLiz.src = "lizright.png";
      }

     else
     {

        this.myLiz.src = "lizleft.png";
     }

   }

}



if(myTrump.hit == false){
this.x += 9*this.direction;
}
if (this.x > somecanvas.width - this.ssize)
{
  this.direction = -1;
this.myLiz.src = "lizleft.png";
}
if (this.x < 0)
{
   this.direction = 1;
    this.myLiz.src = "lizright.png";

}

      ctx.imageSmoothingEnabled = false;
ctx.drawImage(this.myLiz, this.x, this.y, this.ssize/2,this.ssize/2);


//Decide if you are dropping bomb
if (this.framecount % 22 == 0)
{
  let pick = Math.floor(Math.random() * 5);
  if (pick == 1 && (lane1 == false || lane2 == false || lane3 == false || lane4 == false) && myTrump.hit == false)
  {
     let b = new Bomb();
    // b.startDrop();
     bombArray.push(b);
   }

}





    }




}
