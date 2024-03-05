class CButton
{

   constructor (buttonname, x, y, w, h, newmode)
   {

      this.name = buttonname;
      this.x = x;
      this.y = y;
      this.p = document.getElementById("myAudio"); 
      this.width = w;
      this.height = h;

      this.maxx = this.x + this.width;
      this.maxy = this.y + this.height;

      this.selected = false;
      this.img = new Image();
      this.img.src = this.name + "button" + ".png";
      this.mode = newmode;
   }


playAudio() { 
       this.p.play(); 
    } 

    pauseAudio() { 
      this.p.pause(); 
    } 

   checkClick (mx, my)
   {
     //Home Button
     if (this.mode == "sp"){
       
       if (mx > this.x && mx < this.maxx && my > this.y && my < this.maxy) {
       window.location.href = "../index.php";}
     }
   
      if (mode == "select"){
      if (mx > this.x && mx < this.maxx && my > this.y && my < this.maxy) {


         //this.playAudio; audioplaying = true;

         dunkee.img.src = whoselected + ".png";
         mode = this.mode;

if(audioplaying == false){
  var xaud = document.getElementById("myAudio"); 
//document.getElementById("myAudio").loop = true;
xaud.loop = true;
  xaud.play();
         audioplaying = true;
}
        
let whatsaid = Math.floor(Math.random() * 4) + 1;

switch(whatsaid) {
  case 1:
    // code block
    hatethemost.play();
    break;
  case 2:
    // code block
    waitingfor.play();
    break;
  case 3:
    yourturn.play();

  default:
    // code block
}

     }

     }

     if (mode == "game")
     	{
			if (mx > this.x && mx < this.maxx && my > this.y && my < this.maxy) {

        // alert('show me');  
          if(sname ==="" && this.mode !== "select"){
            options = false;
           // alert('show me again: '+this.mode);
            //This is where the new mode needs to be.... Set it to a sales pitch
            if(this.mode == "stats" || this.mode == "moonride"){
             options = true;
             
          // alert('yeah1');
            }
            
            this.mode = "game";
            mode ="game";        
            
            
              }
              
      
          else{
            
         mode = this.mode;
         if (this.mode == "stats"){
       
           loadData();
         }
         
                 }
     	}
        

      }
      
      /*
      ////Home button
      if (mode == "game")
     	{
         alert('i got to: '+ this.name);
         if (mx > this.x && mx < this.maxx && my > this.y && my < this.maxy){
           alert('yes im here');
           alert(this.name);
            // window.location.href = "../index.php";
         }
      
       }
       */
       
       
       
      /////Moonride button
      
      if (mode == "game")
     	{
			if (mx > this.x && mx < this.maxx && my > this.y && my < this.maxy) {
     
         if(sname === ""){
           //alert('tell me');
          // alert(this.mode);
           if(this.mode == "stats" || this.mode == "moonride"){
           
            
          //alert('yeah2');
            }
         }
            
            mode = "game";
          
         //alert('i am here again');
         mode = this.mode;
         //alert('my mode is: '+ mode);
         if (this.mode == "moonride"){
            options = false;
            
           //loadData();
         }
         
            
      
     	}
        

      }
      
      if (mode == "stats" || mode =="moonride")
     	{
			if (mx > this.x && mx < this.maxx && my > this.y && my < this.maxy) {

       //alert ('ya');
         if (mode == "moonride"){updateData();}
         mode = this.mode;
         
         moonride.reset();
         if (this.mode == "game"){
          //loadData();
         
         }
        
          
     	}
        

      }

      
   }

    drawbutton()
    {

       boardpen.drawImage(this.img, this.x, this.y, this.width,this.height);
    }

    



}