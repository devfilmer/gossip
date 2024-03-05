class Ship {


	constructor(ix,iy){
         //this.img = document.getElementById("invader1");

         
         this.img = new Image();
         this.img.src = "ship.png";
        
 
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


        this.speed = 7;
        this.x = ix;
        this.y = iy;
        this.alive = true;
        this.width = this.canvas.width/20;
        

        }
        drawShip(){

         //let mycanvas = document.getElementById("gamescreen");
         let mypen = this.canvas.getContext("2d");
         mypen.imageSmoothingEnabled = false;
         mypen.drawImage(this.img,this.x,this.y,this.canvas.width/20,this.canvas.width/20);
        }



}