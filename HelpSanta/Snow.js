class Snow {


     constructor() {
     //let rcanvas = document.getElementById("gamescreen");
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
this.acanvas = rcanvas;
this.pen = rcanvas.getContext('2d');
     this.x = Math.floor(Math.random() * rcanvas.width*.9)+ 0;
     //this.y = -2*(Math.floor(Math.random() * rcanvas.height*.9)+ 0); 
     this.y = - rcanvas.height*.3;
   
     this.img = document.getElementById('flake');
     this.direction = Math.floor(Math.random() * 5)+ 1;
    // this.width = rcanvas.width *.1;
     this.width = (Math.random() * rcanvas.width*.05)+ rcanvas.width *.03;
    // this.height = rcanvas.width *.1;
     this.height = this.width;
     this.timer;
     this.caught=false;
     this.drift = false;
     
     //console.log("snow created");
}

   drawFlake(i,j)
   {

      this.pen.drawImage(this.img,i,j,this.width,this.height);
   //   console.log(this.x);

   }
  
  moveFlake()
  {
    
     this.y += (this.direction + difficulty);
   
    //this.drawFlake();
     if (this.y > this.acanvas.height*.75)
     {this.drift = true;
      if (mydrifty < -1*0.9*rcanvas.height)
      { }else{mydrifty-= 25;}

  }
     
     

  } 

  startMoveFlake()
  {

   // this.timer = setInterval(this.moveFlake(), 100);
//console.log("go");

  }

detectCollision()
    {
       let rect = rcanvas.getBoundingClientRect();
       let realx = this.x/rcanvas.width * rect.width;
       let realy = this.y/rcanvas.height * rect.height;
       
       if (currentx > realx && currentx < realx + this.width && currenty > realy && currenty < realy+this.height)
       {
          if (this.caught == false && gameover == false){
          this.caught = true;

          //alert("caught");
          score += 1;
           if (score % 7 == 1 && score > 1)
            {
              //alert('increase difficulty');
               difficulty += 1;
               if (difficulty > 5)
               {

                   difficulty = 5;
               }
            }
          }
          
        }

    }

detectCollision2(x,y)
    {
       
       if (this.x < x && this.x + this.width > x && this.y < y && this.y+this.height >y)
       {
          if (this.caught == false){
          this.caught = true;

          //alert("caught");
          score += 1;
          }
          
        }

    }



}