class Plane
{
     constructor (ix,iy,w,h)
     {
         
        this.x = ix;
        this.y = iy;
        this.width = 2*w;
        this.height = 2*h;
        this.speed = 4;
        this.img = new Image();
        this.img.src = "buffetbarnstormer.png";
        this.messages = ["Press 'S' To Reset Dunking Booth", "Press Space Bar To Throw", "Press Arrows To Move Player", "Dunk Who You Want To Drop Out"];
        this.currentmessage = 0;
        this.messagex = this.x + this.width*1.2;
        this.messagey = this.y + this.height/10;
     }
     

     changeMessage()
    {
      this.currentmessage += 1;
      
      if (this.currentmessage > this.messages.length - 1){this.currentmessage = 0;}

    }


     fly()
     {

         this.x -= this.speed;
         this.messagex = this.x + this.width*1.2;
  
         if (this.x < -7*this.width)
         {this.x = agamescreen.clientWidth + 2*this.width; this.changeMessage();}
          
         

     }
     

    drawMessage()
    {
       let fontsize = this.height/2;
       boardpen.font =  fontsize + "px Comic Sans MS";
       boardpen.fillStyle = "white";
       let bannerwidth = parseInt(fontsize) * this.messages[this.currentmessage].length * 1.2;
       boardpen.fillRect((this.x + this.width), this.y+5, bannerwidth/2, this.height);
       boardpen.fillStyle = "black";
       boardpen.fillText(this.messages[this.currentmessage], this.messagex, this.messagey+fontsize);
    }



     drawPlane()
     {
        boardpen.drawImage(this.img, this.x, this.y, this.width, this.height);

    this.drawMessage();

      }

    


}