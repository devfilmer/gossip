class Splash {

    constructor(ix, iy) {


       this.img;
       this.img = new Image();

       this.splashArray = ["splash/splash1.png","splash/splash2.png","splash/splash3.png","splash/splash4.png","splash/splash5.png","splash/splash6.png","splash/splash7.png","splash/splash8.png","splash/splash9.png", "splash/splash10.png", "splash/splash11.png", "splash/splash12.png", "splash/splash13.png"];
        this.img.src = this.splashArray[0];
        this.splashposition = 0;

 
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
        



        this.x = agamescreen.width/2 - agamescreen.width/6;
        this.y = agamescreen.height/3 -5;
        this.splashing = false;





        this.width = agamescreen.width/3;
        this.height = agamescreen.width/3;
        

        
        
    }
    
    reset()
    {

        this.splashing = false;
    
        this.img.src = this.splashArray[0];
        this.splashposition = 0;

    }

    drawSplash()
    {
      let mypen = boardpen;
       mypen.drawImage(this.img, this.x, this.y, this.width, this.height);
    }

    splashUp()
    {
        this.splashposition  += 1;
        this.img.src = this.splashArray[this.splashposition];
        if (this.splashposition > this.splashArray.length - 2)
         { this.splashposition = this.splashArray.length - 2;}
          

     }


}