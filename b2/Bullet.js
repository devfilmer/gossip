class Bullet {

	constructor (ix,iy) {

         this.img = document.getElementById("bullet1");
        
 
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

        this.width = (this.canvas.width/20)/3;
        this.height = this.width;
        this.speed = 20;
        this.x = ix*2;
        this.y = iy + this.y;
        this.alive = true;
        
        this.fired = false;


        }
        
        drawBullet()
        {

         let mypen = this.canvas.getContext("2d");

      
         mypen.imageSmoothingEnabled = false;
         mypen.drawImage(this.img,this.x,this.y,this.width,this.height);


	}

        moveBullet()
        {

           this.y = this.y - this.speed * (this.canvas.width/20)/4;
        }
  
        killBullet()
        {


        }




}