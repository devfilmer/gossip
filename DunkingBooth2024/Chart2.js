class Chart2 {

      constructor(chartid,chartheader,chartxlabel, chartylabel, chartvalues) {


      // alert ('ok');

        this.chartheader = chartheader;
        this.chartxlabel = chartxlabel;
        this.chartylabel = chartylabel;
        this.chartvalues = chartvalues;
        this.charttics = [];
   
        this.chart = document.getElementById(chartid);

        this.width = this.chart.width * window.devicePixelRatio;
        this.height = this.chart.height * window.devicePixelRatio;
         this.myfontsize = this.height/40;
        this.pen = boardpen;
        this.pen.imageSmoothingEnabled = false;
        this.spacer = this.width/15;
        this.maxlength = this.height * 0.85 - this.height/6;
        this.maxvalue = 0;
        this.scalevalue = 1;

      this.colors = ['#335566','#332277', '#663216', '#447731', '#557524', '#488822', '#329825', '#883422', '#442266', '#557511', '#634822', '#410025'];
 /*
*/

        }

        drawChart() {

//alert ('ok');
this.maxlength = this.height * 0.85 - this.height/6;
//alert('max lenght: '+ this.maxlength);
this.maxvalue = 0;

            for (let j = 0; j < this.chartvalues.length; j++)
            {if (this.chartvalues[j] > this.maxvalue){ this.maxvalue = this.chartvalues[j];}
        if(this.maxvalue > this.maxlength){this.scalevalue = this.maxlength/this.maxvalue;}
}

            for (let i=0; i< this.chartvalues.length; i++)
                {this.pen.fillStyle = this.colors[i];
              this.pen.fillRect(i*this.spacer+ this.width*0.15,this.height*0.85 - this.chartvalues[i]*this.scalevalue, this.width/30,this.chartvalues[i] * this.scalevalue );}

            this.pen.font = this.myfontsize + "px Arial";
            this.pen.fillStyle = "white";
            this.charttics = [];
            this.charttics.push[0];
//alert('max value is: ' + this.maxvalue);
for (let t=0; t < this.chartvalues.length; t++)
{
   this.charttics.push(parseInt((t+1)* this.maxvalue/12));
 
}
//alert(this.charttics);
            for (let t=0; t< this.chartvalues.length; t++)
            {this.pen.fillText(this.charttics[t], this.width*0.07, this.height*0.85 + this.myfontsize/2 - t*this.maxlength/12);
//draw tics
this.pen.fillRect(this.width*0.13, this.height*0.85 + this.myfontsize/2 - t*this.maxlength/12 - this.myfontsize/2, this.width/100, this.width/300);}

//draw top tic
this.pen.fillRect(this.width*0.13, this.height*0.85 + this.myfontsize/2 - this.chartvalues.length*this.maxlength/12 - this.myfontsize/2, this.width/100, this.width/300);

//draw top value
this.charttics.push(parseInt((this.chartvalues.length)* this.maxvalue/12));
this.pen.fillText(this.charttics[this.chartvalues.length], this.width * 0.06, this.height*0.85 + this.myfontsize/2 - this.chartvalues.length*this.maxlength/12);

//draw white lines
this.pen.fillRect(this.width*0.14, this.height*0.85 - this.maxlength, this.width/300, this.maxlength);
this.pen.fillRect(this.width*0.14, this.height*0.85, this.width*0.8, this.width/300);

//draw Labels
this.myfontsize = this.height/30;
this.pen.font = this.myfontsize + "px Arial";
this.pen.textAlign = "center";
this.pen.fillText(this.chartheader, this.width/2, this.height * 0.03);
this.pen.fillText(this.chartxlabel, this.width/2, this.height * 0.99);
// Rotates the canvas 90 degrees
this.pen.translate(-this.width*0.04,this.height);
this.pen.rotate(-90 * (Math.PI / 180));
this.pen.fillText(this.chartylabel, this.height/2, this.height * 0.1);
 

        }





}