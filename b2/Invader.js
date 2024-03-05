class Invader {


	constructor(invaderType,ix,iy){
         //this.img = document.getElementById("invader1");

         if (invaderType == 1){

         }
         this.img = document.getElementById("invader"+invaderType);
         this.img2 = document.getElementById("invader"+invaderType+"a"); 
         this.facing = "right";
         this.currentImage = this.img;
        let rcanvas = agamescreen;
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



       this.canvas = rcanvas;


        this.speed = 1;
        this.x = ix;
        this.y = iy;
        this.alive = true;
        this.flipped = false;
        this.width = this.canvas.width/20;
        this.height = this.width;
        
        //Crazy move
        this.maxX = this.canvas.width - this.width;
        this.maxY = this.canvas.height - this.height;
        this.duration = 4; // seconds
        this.gridSize = this.canvas.width/5; // pixels
         this.start = null;
        this.stretchFactor;
        this.crazy = false;

        }


resizeInvaderCanvas()
{

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



       this.canvas = rcanvas;


}
resizeInvaderCanvas2(){

this.canvas = agamescreen;


/*
var canvaswidth = this.canvas.getBoundingClientRect().width;
var canvasheight = this.canvas.getBoundingClientRect().height;
this.canvas.style.height = canvasheight;
this.canvas.style.width = canvaswidth;
*/
}

        drawInvader(){

         //this.resizeInvaderCanvas2();
	//this.resizeInvaderCanvas();
         let mypen = agamescreen.getContext("2d");
  
      
         mypen.imageSmoothingEnabled = false;
         if (this.alive == true){
         mypen.drawImage(this.currentImage,this.x,this.y,agamescreen.width/20,agamescreen.width/20);
          }
        }

        move(){
  
         this.x = this.x + this.speed * (agamescreen.width/20)/4;
         if (this.y > (agamescreen.height - this.height*1.5) && this.alive == true)
          {

              gameover = true;
              //super.testonce();
             
          }
         
       }

       crazymove(timestamp)
  {
   this.crazy = true;
    let progress;
    let x;
    let y;
    if(this.start === null) {
      this.start = timestamp;
      this.stretchFactor = 1 + (Math.random() * 3);
    }

    progress = (timestamp - this.start) / this.duration / 100; // percent

    x = this.stretchFactor * Math.sin(progress * 2 * Math.PI); // x = ƒ(t)
    y = Math.cos(progress * 2 * Math.PI); // y = ƒ(t)

    this.x = this.maxX/2 + (this.gridSize * x) ;
    this.y = this.maxY/2 + (this.gridSize * y) ;
console.log(this.x);
    if(progress >= 1) this.start = null; // reset to start position
   // requestAnimationFrame(step);
  }



       swapImage(){

          if (this.facing == "right")
          {
             this.currentImage = this.img2;
             this.facing = "left";

          }
          else
          {
              this.currentImage = this.img;
              this.facing = "right";
           }
       }



}