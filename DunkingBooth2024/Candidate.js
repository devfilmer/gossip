class Candidate
{

   constructor (candidatename, x, y)
   {

      this.name = candidatename;
      this.x = x;
      this.y = y;
      this.dunks = 0;
      this.width = agamescreen.height/8;
      this.height = agamescreen.height/8;

      this.maxx = this.x + this.width;
      this.maxy = this.y + this.height;

      this.selected = false;
      this.img = new Image();
      this.img.src = this.name + "button" + ".png";
   }

   checkClick (mx, my)
   {

        // loop through list of candidates and unselect everyone
        for (let c=0; c < candidates.length; c++)
        {
           candidates[c].selected = false;

        }




      if (mx > this.x && mx < this.maxx && my > this.y && my < this.maxy) {



         this.selected = true;
         whoselected = this.name;
     }


   }

    drawCandidate()
    {

       boardpen.drawImage(this.img, this.x, this.y, this.width,this.height);
    }




}