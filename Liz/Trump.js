class Trump {

  constructor(){

     let rcanvas = document.getElementById("gamescreen");


      this.lastx = 0;

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
     this.hit = false;

     this.acanvas = rcanvas;
    this.ctx = this.acanvas.getContext('2d');

     this.rwidth = rcanvas.width; 
     this.rheight = rcanvas.height;
     this.x = Math.floor(Math.random() * (this.rwidth - 0 + 1)) + 0;
     this.x = 0;
     this.y = rcanvas.height - rcanvas.height/5;
     this.maxspeed = -8;
     this.minspeed = -1;
     this.direction = 1;
     this.speed = (Math.random() * (this.maxspeed - this.minspeed + 1)) + this.minspeed;
     this.myTrump = new Image();
     this.myTrump.src = "trumpcarright.png";

     this.ssize = rcanvas.height/5;
     this.width=2*this.ssize*8/10;
     this.height=this.ssize*8/10;

     

  }


   drawTrump()
   {
    let somecanvas = document.getElementById("gamescreen");
     let ctx = somecanvas.getContext('2d');
    //  this.x -= (Math.random() * (this.maxspeed - this.minspeed + 1)) + this.minspeed;

//this.x += 3*this.direction;

this.lastx = this.x;

//Update trump position with mouse;
if (this.acanvas.x && this.acanvas.y) {
      //  this.x = this.acanvas.x;
        
         
    }


//Update trump position with keyboard
    this.acanvas.speedX = 0;


if(myTrump.hit == false){
  
    if (this.acanvas.key && this.acanvas.key == 38) {this.y -= 10; this.direction = -1;}
    if (this.acanvas.key && this.acanvas.key == 40) {this.y += 10; this.direction = 1;}
   
  
}



if(this.x > this.lastx)
{

   this.myTrump.src = "trumpcarright.png";
}

if(this.x < this.lastx)
{

   this.myTrump.src = "trumpcarleft.png";
}

if (this.x > somecanvas.width - 2*this.ssize)
{
  /*this.direction = -1;*/
this.x = somecanvas.width - 2*this.ssize;
this.myTrump.src = "trumpcarleft.png";
}

if (this.x < 1)
{
/*
   this.direction = 1;*/
this.x = 0;
    this.myTrump.src = "trumpcarright.png";

}
if (this.y < somecanvas.height/5)
{
   this.y = somecanvas.height/5;

}
if (this.y > somecanvas.height - this.height)
{
   this.y = somecanvas.height- this.height;

}

      ctx.imageSmoothingEnabled = false;
ctx.drawImage(this.myTrump, this.x, this.y, 2*this.ssize*8/10,this.ssize*8/10);

    }




}
