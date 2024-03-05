class Barricade {


	constructor(ix,iy){
        

         
         this.img = new Image();
         this.img.src = "barricade1.png";
        
 
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


        this.speed = 5;
        this.x = ix;
        this.y = iy;
        this.alive = true;
        

        }
        drawBarricade(){

         //let mycanvas = document.getElementById("gamescreen");
         let mypen = this.canvas.getContext("2d");
         mypen.imageSmoothingEnabled = false;
         mypen.drawImage(this.img,this.x,this.y,this.canvas.width/20*2,this.canvas.width/20);
        }



}