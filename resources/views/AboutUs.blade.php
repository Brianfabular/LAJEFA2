@extends('layouts.base')
@section('content')
<center><h1 style="font-family:Playfair Display;font-weight:bold;margin-top:55px; font-size:100px;">About Us</h1></center> 
<div class="container" >
   
      <div class="acontent">
        <img src="assets/images/img/company.png" style="background-color:black;width:480px;height:430px;margin-top:10px;border:solid #008080; box-shadow: 5px 10px #b2d8d8;">
      <div class="atext"> 
        
        <center><h5 style="font-family:Playfair Display;font-weight:bold;font-size:25px;text-transform:capitalize;letter-spacing:2px;margin-top: 20px;">Lajefa Trading Inc.</h5></center>
        <p style="font-family:Playfair Display; font-size: 18px; line-height: 2; color: #333;";>LA JEFA TRADING INC. is a sister company of BDRS REALTY MANAGEMENT SERVICES CO. which has its own identity. Because of the good service of the mother company La Jefa Trading Inc. was formed to cater the needs of the common Filipino to provide a unique service and product without compromising its value.The company gives affordability of services and products that promotes camaraderie between both parties (seller and buyer) along with its middle men. The company geared towards individual success that can provide holistic measures for health insurance, mobilization and accommodation.</p>
        </div>
      </div>
</div>
<br>
<div class="container" style="background-color: #b3b3b3; ">
  <div class="container" style="text-align:center;">  
    <div class="container" >
      <div class="atext"> 
        <h1 style="font-family:Playfair Display;font-weight:bold;margin-top:5px;">MISSION</h1> 
        <p>Our mission is to assist the needs of our clients with integrity. Making them comfortable in dealing their investment with us and to promote good service for them.</p>
      </div>
    </div>       
    <div class="container" >
      <div class="atext"> 
        <h1 style="font-family:Playfair Display;font-weight:bold;margin-top:5px;">VISION</h1> 
        <p>Our vision is to grow together with our partner agents, brokers and consultants that we will have one dream of helping towards individual success and provide the necessities for health insurance, mobilizations and lifestyle living.</p>
      </div>
    </div>
  </div>
</div>
 <div class="container" >
  <div class="atext1"> 
    <center><h1 style="font-family:Playfair Display;font-weight:bold;">VALUES</h1> 
    <p style="text-align:justify;">Commitment to give the best environment where our partners, suppliers, lenders andeven customers will feel comfortable in dealing with business with us. Transparency is our way of life in dealing with business relations within the organization where there is self-reliance within us. The Company will strive hard to control both cost and operations. Sustainability of profit margins on selling products. Openness between employees to promote camaraderiewhile maintaining the status quo of individual responsibility and continued programs to enhance their skills in helping build the growth of the business and the company itself. The Company aims to provide affordable products and services within reached by common Filipinos, giving them the needs they want available at their doorsteps, diversification of services to unserved localities and give more employment to those who are in need.</p>
  </div></center>
 </div>

            <center><h1 style="font-family:Playfair Display;font-weight:bold;margin-top:15px;font-size:73px; ">Executives</h1></center>
            

<div class="flex-cont" >

    <div class="flex-container">
        <div class="container">
        <img src="assets/images/img/b1.png" style="background-color: black; width:350px; border:solid #008080;box-shadow: 5px 10px #b2d8d8; ">
        </div>
    </div>
    <div class="flex-container">
      <div class="container" >
        <div class="atext"> 
          <h1 style="font-family:Playfair Display;font-weight:bold;margin-top:15px;font-size: 40px;">President</h1>
          <h5 style="font-family:Playfair Display;font-weight:bold;font-size:50px;text-transform:capitalize;letter-spacing:2px;">Jerome Barbanida</h5>
          <p style="font-family:Playfair Display;line-height: 2;">The founder who has a good heart towards individuality and believes all is well when there is cooperation.Excellence in his previous job, he made a remarkable experience in TRADE AND INDUSTRIES, WORLD LOGISTICS AND REALESTATE.</p>
       
        </div>
      </div>      
    </div>
</div>
<div class="flex-cont" >

    <div class="flex-container">
        <div class="container">
        <img src="assets/images/img/b2.png" style="background-color: black; width:350px; border:solid #008080;box-shadow: 5px 10px #b2d8d8; ">
        </div>
    </div>
    <div class="flex-container">
      <div class="container" >
        <div class="atext"> 
          <h1 style="font-family:Playfair Display;font-weight:bold;margin-top:15px;font-size: 40px;">Chairman</h1>
          <h5 style="font-family:Playfair Display;font-weight:bold;font-size:50px;text-transform:capitalize;letter-spacing:1px;">Novellyn G. Quiambao</h5>
            <p style="font-family:Playfair Display;line-height: 2;";>A lady with a humble beginnings and shares benevolence towards those in need.An outstanding performer from a previous job
              in Telecommunications where in customer service is a top priority.Excellence top awardee nationwide in successive terms in Realestate.The co-founder with a big heart.
            </p>
        </div>
      </div>      
    </div>
</div>



<style>
  .container {
  width: 80%;
  margin: auto;
  overflow: hidden;
  background-color: none;
  margin-top: 50px;
          display: flex;
          margin-bottom: 50px;
}
.atext {
          width: 550px;
          max-width: 100%;
          padding: 0 10px;
          color: #333;
        }
.acontent {
  width: 1280px;
  max-width: 95%;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-around;
}
.flex-cont{
  width: 100%;
  height: auto;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  background:none;
}
.flex-container {
  width: 600px;
  height: 500px;
  background:none;
  color: #fff;
  border-radius: 20px;
  margin:10px;
  display: flex;
  justify-content: center;
  flex-direction: column;
    flex-wrap: wrap;
}
.flex-container-a {
  
  width: 350px;
  height: 200px;
  background: none;
  color:blue;
  border-radius: 20px;
  margin:10px;
}
.flex-container-b {
  width: 350px;
  height: 50px;
  background:red;
  color:black;
  border-radius: 20px;
  margin:10px;
  justify-content: center;
}

.flex-container-c {
  width: 350px;
  height: 350px;
  background:none;
  color:black;
  border-radius: 20px;
  margin:10px;
 
}



</style>
@endsection