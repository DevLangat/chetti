<?php
//   session_start();  
?>
<!DOCTYPE html>

<html>
  <head>
     <title>Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      }
      p.top-info {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #1c87c9; 
      }
     .banner {
      position: relative;
      height: 170px;     
      display: flex;
      color: #1c87c9;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(24, 81, 240, 0.6); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #1c87c9;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #1c87c9;
      color: #1c87c9;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #1c87c9;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: auto;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #1c87c9;
      font-size: 16px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #1e6fa0;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item, .position-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item .item, .position-item .item {
      width: calc(50% - 8px);
      }
      .contact-item input, .position-item input {
      width: calc(100% - 12px);
      }
      .position-item select {
      width: 100%;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      
      <form action="/">
        <div class="banner">
        
          <h1>Application Form</h1>
        </div>
        <label> 
        <p class="top-info">Thank you for your interest in Learning with us. Please check below for available courses that meet your criteria and send your application by filling out the Application Form.</p>
        <div class="item">
          <p>Name<span class="required"></span></p>
          <div class="name-item">
            <input type="text" name="name"   placeholder="First" required/>
            <input type="text" name="name"   placeholder="Last" required/>
          </div>
        </div>
        <div class="contact-item">
          <div class="item">
            <p>Email<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
          <div class="item">
            <p>Phone<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
        </div>
        <div class="position-item">
          <div class="item">
            <p>What Course are you applying for?<span class="required">*</span></p>
            <select required>
              <option value="1">ICT</option>
              <option value="2">Marketing</option>
              <option value="3">Engeneering</option>
              <option value="4">Plumbering</option>
              <option value="5">Finance</option>
            </select>
          </div>
          <div class="item">
            <p>Available start date<span class="required">*</span></p>
            <input type="date" name="bdate" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
        </div>
        <div class="position-item">
        <div class="item">
            <div class="question ">
                <p>Gender<span class="required">*</span></p>
                <div class="question-answer">
                  
                    <input type="radio" value="none" id="radio_1" name="status" required/>
                    <label for="radio_1" class="radio"><span>Male</span></label>
               
                    <input type="radio" value="none" id="radio_2" name="status" required/>
                    <label for="radio_2" class="radio"><span>Female</span></label>
               
                    <input type="radio" value="none" id="radio_3" name="status" required/>
                    <label for="radio_3" class="radio"><span>Other</span></label>
                  </div>
                  
                
              </div>
              
        </div>

        </div>
       
        <div class="position-item">
            <div class="item">
                <p>County<span class="required">*</span></p>
                <select required>
                	<option value="baringo">Baringo</option>
	<option value="bomet">Bomet</option>
	<option value="bungoma">Bungoma</option>
	<option value="busia">Busia</option>
	<option value="elgeyo marakwet">Elgeyo Marakwet</option>
	<option value="embu">Embu</option>
	<option value="garissa">Garissa</option>
	<option value="homa bay">Homa Bay</option>
	<option value="isiolo">Isiolo</option>
	<option value="kajiado">Kajiado</option>
	<option value="kakamega">Kakamega</option>
	<option value="kericho">Kericho</option>
	<option value="kiambu">Kiambu</option>
	<option value="kilifi">Kilifi</option>
	<option value="kirinyaga">Kirinyaga</option>
	<option value="kisii">Kisii</option>
	<option value="kisumu">Kisumu</option>
	<option value="kitui">Kitui</option>
	<option value="kwale">Kwale</option>
	<option value="laikipia">Laikipia</option>
	<option value="lamu">Lamu</option>
	<option value="machakos">Machakos</option>
	<option value="makueni">Makueni</option>
	<option value="mandera">Mandera</option>
	<option value="meru">Meru</option>
	<option value="migori">Migori</option>
	<option value="marsabit">Marsabit</option>
	<option value="mombasa">Mombasa</option>
	<option value="muranga">Muranga</option>
	<option value="nairobi">Nairobi</option>
	<option value="nakuru">Nakuru</option>
	<option value="nandi">Nandi</option>
	<option value="narok">Narok</option>
	<option value="nyamira">Nyamira</option>
	<option value="nyandarua">Nyandarua</option>
	<option value="nyeri">Nyeri</option>
	<option value="samburu">Samburu</option>
	<option value="siaya">Siaya</option>
	<option value="taita taveta">Taita Taveta</option>
	<option value="tana river">Tana River</option>
	<option value="tharaka nithi">Tharaka Nithi</option>
	<option value="trans nzoia">Trans Nzoia</option>
	<option value="turkana">Turkana</option>
	<option value="uasin gishu">Uasin Gishu</option>
	<option value="vihiga">Vihiga</option>
	<option value="wajir">Wajir</option>
	<option value="pokot">West Pokot</option>
                </select>
              </div>
              <div class="item">
                <p>Location<span class="required">*</span></p>
                <div class="name-item">
                  <input type="text" name="location" placeholder="Location" required/>
                 
                </div>
              </div>
             
        </div>
        <div class="position-item">
            <div class="item">
                <p>Address<span class="required">*</span></p>
                <div class="name-item">
                  <input type="text" name="address" placeholder="Address" required/>
                 
                </div>
              </div>
            
            <div class="item">
              <p>Submit your Result Slip by attaching a file:</p>
              
      <input type="file" name="file" accept="file/*">
            </div>
        </div>   
        <div class="position-item">
          <div class="item">
            <p>Submit your ID/Birth Certificate by attaching a file:</p>
            
    <input type="file" name="file" accept="file/*">
          </div>
          <div class="item">
            <p>Submit your Bank Slip by attaching a file:</p>
            
    <input type="file" name="file" accept="file/*">
          </div>
        </div>         
        
        <div class="btn-block">
          <button type="submit" href="/">Apply</button>
        </div>
      </form>
    </div>
  </body>
</html>