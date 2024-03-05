class Thrower {

    constructor(ix, iy) {


       this.img;
       this.img = new Image();
       this.membersonly = new Image();
       this.membersonly.src = "throwermember.png";

       this.throwArray = ["throwanimation/thrower1.png","throwanimation/thrower2.png","throwanimation/thrower3.png","throwanimation/thrower4.png","throwanimation/thrower5.png"];
        this.img.src = this.throwArray[0];
        this.throwposition = 0;

 
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


        this.speed = 1;
        
        this.x = this.canvas.width/2 + this.canvas.width/8 + this.canvas.width/8;
        this.y = this.canvas.height/4;
        this.onTarget = false;
        this.flipped = false;




        this.width = this.canvas.height *3/8;
        this.height = this.canvas.height*3/4;
        

        
        
    }
    moveRight()
    {
       this.x += 3;
       if (this.x > this.canvas.width - this.width/2)
       {this.x = this.canvas.width - this.width/2;}

    }
    moveLeft()
    {

       this.x -= 3;
       if (this.x < this.canvas.width * 3/4 - this.width/2)
       { this.x = this.canvas.width *3/4 - this.width/2;}
    }
    reset()
    {
       // this.x = agamescreen.width/2 + agamescreen.width/8 + agamescreen.width/8;
       // this.y = agamescreen.height/4;
        this.throwing = false;
    
        this.img.src = this.throwArray[0];
       
        this.throwposition = 0;

    }

    drawThrower()
    {
      let mypen = boardpen;
      if(options == false){
       mypen.drawImage(this.img, this.x, this.y, this.width, this.height);
        }
        else
        {
           mypen.drawImage(this.membersonly, this.x, this.y, this.width, this.height);
        }
    }
    

    throwBall()
    {
        this.throwposition  += 1;
        this.img.src = this.throwArray[this.throwposition];
        if (this.throwposition > 3)
         { this.throwposition = 4; throwsound.play();}
          

     }


}