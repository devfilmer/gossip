class MotherShip {


	constructor(ix,iy){
        

         
         this.img = document.getElementById("invader6");
        
 
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


        this.speed = 0.1;
        this.x = 0;
        this.y = this.canvas.width/20;
        this.alive = false;
        this.width = this.canvas.width/20*1.5;
        this.height = this.canvas.width/20;

        }
	  setMotherShip(startpos)
        {
           if (startpos == "left")
           {
               this.x = -this.width/2;
                this.y = 0;
                this.speed = 0.3;
            }
           else {

               this.x = this.canvas.width + this.width/2;
                this.y = 0;
               this.speed = -0.3;
            }

        }


        drawMotherShip(){

         //let mycanvas = document.getElementById("gamescreen");
         let mypen = this.canvas.getContext("2d");
         mypen.imageSmoothingEnabled = false;
         mypen.drawImage(this.img,this.x,this.y,this.canvas.width/20*1.5,this.canvas.width/20);
        }
        move(){
  
         this.x = this.x + this.speed * (this.canvas.width/100);
         if (this.x > this.width + this.canvas.width || this.x < -2*this.width)
          {

              this.alive = false;
              stopMotherBuzz();
          }
         
       }


}