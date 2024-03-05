class Dunkee {

    constructor(who, ix, iy) {


       this.img;
       if (who == "Trump")
       {this.img = new Image();
        this.img.src = "trump.png";

       }
       if (who == "Desantis")
       {this.img = new Image();
        this.img.src = "desantis.png";

       }
	   if (who == "Scott")
       {this.img = new Image();
        this.img.src = "scott.png";

       }
		if (who == "Haley")
      {this.img = new Image;
        this.img.src = "haley.png";
      }
 		if (who == "Pence")
		{ this.img = new Image();
			this.img.src = "pence.png";}
	  if(who == "Christie")
		{this.img = new Image();
			this.img.src = "christie.png";}
if (who == "Ramaswamy")
{this.img = new Image();
this.img.src = "ramaswamy.png";}

if (who == "Suarez")
{this.img = new Image();
this.img.src = "suarez.png";}
if (who == "Hutchinson")
{

  this.img = new Image();
   this.img.src = "hutchinson.png";
}

if (who == "Elder")
{this.img = new Image();
this.img.src = "elder.png";}

if (who == "Johnson")
{this.img = new Image();
this.img.src = "johnson.png";}

if (who == "Binkley")
{ this.img = new Image();
this.img.src = "binkley.png";}



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
        this.x = agamescreen.width/3;
        this.y = agamescreen.height/6;
        this.dunked = false;
        this.flipped = false;
        this.width = this.canvas.width/3;
        this.height = this.width;
        
        

       
        
        
    }
    drawDunkee()
    {
      let mypen = boardpen;
       mypen.drawImage(this.img, this.x, this.y, agamescreen.width/3, agamescreen.width/3);
    }

    fall()
    {
        if (this.dunked == false){
        this.y = this.y + this.speed * (this.canvas.height/50);
}


         if (this.y > (agamescreen.height/2.2) && this.dunked == false)
          {

              this.dunked = true;
              playSplashSound();
             //splashsound.pause;
             //splashsound.currentTime = 0;
          }
     }


      reset()
      {
          this.x = agamescreen.width/3;
        this.y = agamescreen.height/6;
         this.dunked = false;
      }

}