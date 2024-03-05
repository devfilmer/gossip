class MoonRide
{
	constructor(){
		this.groundsky = new Image();
		this.groundsky.src = "MoonRide\\groundsky.png";
		this.groundskyx = 0;
		this.groundskyy = 0;
		
		
		
		this.starsky1 = new Image();
		this.starsky1.src = "MoonRide\\starsky1.png";
		this.starsky1x = 0;
		this.starsky1y = 0;
		
		this.starsky2 = new Image();
		this.starsky2.src = "MoonRide\\starsky2.png";
		this.starsky2x = 0;
		this.starsky2y = - 1*agamescreen.widthh;
		
		this.starsky3 = new Image();
		this.starsky3.src = "MoonRide\\starsky3.png";
		this.starsky3x = 0;
		this.starsky3y = - 2*agamescreen.width;
		
		this.rocket = new Image();
		this.rocket.src = "MoonRide\\rocket.png";
		this.rocket.width = 2*agamescreen.width/4;
		this.rocket.height = this.rocket.width;
		this.rocketx = agamescreen.width/2 - agamescreen.width/4;
		this.rockety = agamescreen.height/6;

		this.flying = true;
		this.landing = false;
		this.landed = false;
		
		this.speed = 1;
	}
	
	launch()
	{
		
		
	}
	
	moveRocket()
	{
		
		
	}
	
	moveSky()
	{
		this.groundskyy += this.speed;
		this.starsky1y += this.speed;
		this.starsky2y += this.speed;
		this.starsky3y += this.speed;
		
		if(this.starsky1y > agamescreen.height)
		{
			this.starsky1y = -0.98*agamescreen.height;
		}
		if(this.starsky2y > agamescreen.height)
		{
			this.starsky2y = -0.98*agamescreen.height;
		}
		if(this.starsky3y > agamescreen.height)
		{
			this.starsky3y = -0.98*agamescreen.height;
		}
		
	}
	
	land()
	{
		
		
		
	}
	
	drawScene()
	{
		
		boardpen.drawImage(this.starsky1,this.starsky1x, this.starsky1y, agamescreen.width, agamescreen.height);
		if (this.groundskyy < agamescreen.height){
		boardpen.drawImage(this.groundsky,this.groundskyx,this.groundskyy,agamescreen.width,agamescreen.height);}
		
		boardpen.drawImage(this.starsky2, this.starsky2x, this.starsky2y, agamescreen.width, agamescreen.height);
		boardpen.drawImage(this.starsky3, this.starsky3x, this.starsky3y, agamescreen.width, agamescreen.height);
		boardpen.drawImage(this.rocket, this.rocketx, this.rockety, this.rocket.width, this.rocket.height);
		dunkee.y = agamescreen.height/3;
		dunkee.drawDunkee();
		this.speed += 0.5;
		if (this.speed > 10)
		{this.speed = 20;}

		
	}
	drawScene2()
	{
		//speeding towards moon
		
		
	}
	
	drawScene3()
	{
		//drop off and speeding towards landing site
		
	}
	
	drawScene4()
	{
		
		//marooned on moon
		//show return button
		
	}
	
	reset()
	{

		this.groundskyx = 0;
		this.groundskyy = 0;


		this.starsky1x = 0;
		this.starsky1y = 0;
		

		this.starsky2x = 0;
		this.starsky2y = - 1*agamescreen.widthh;
		

		this.starsky3x = 0;
		this.starsky3y = - 2*agamescreen.width;
		

		this.rocket.width = 2*agamescreen.width/4;
		this.rocket.height = this.rocket.width;
		this.rocketx = agamescreen.width/2 - agamescreen.width/4;
		this.rockety = agamescreen.height/6;

		this.flying = true;
		this.landing = false;
		this.landed = false;
		
		this.speed = 1;		
		
	}
	
	
}