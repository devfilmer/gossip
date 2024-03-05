class Ball {

    constructor(ix, iy) {


       this.img;
       this.img = new Image();
        this.img.src = "ball.png";
        this.img.style.visibility = "hidden";
  
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
        this.x = ix;
   
        this.y = iy;
        this.onTarget = false;
        this.flipped = false;
        this.width = this.canvas.width/20;
        this.height = this.width;
        
        

       
        
        
    }
    reset()
    {
        this.x = agamescreen.width/2 + agamescreen.width/8 + agamescreen.width/8;
        this.y = agamescreen.height/4;
        this.onTarget = false;
        this.speed = 1;

    }
    drawBall()
    {
      let mypen = boardpen;

       
       mypen.drawImage(this.img, this.x, this.y, this.width, this.height);
    }

    fall()
    {
        if (this.onTarget == false){
        this.y = this.y + this.speed * (this.canvas.height/300);
        this.x -= 0.5;
        if (this.y > this.canvas.height*0.8)
        {this.y = this.canvas.height*0.8; this.x += 0.5}
        }


         if (this.y > (this.canvas.height/2) && this.x > (this.canvas.width*3/4 - this.width*3/4) && this.x < (this.canvas.width*3/4 - this.width/4) && this.y < (this.canvas.height/2 + this.height/3) && this.onTarget == false)
          {

              this.onTarget = true;
              hit = true;
             // playSplashSound();
             updateData();
          }
     }
     
      
	

		

        
      }

