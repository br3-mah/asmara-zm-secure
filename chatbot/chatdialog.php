
 <input type="checkbox" id="click">
    <label for="click">
    <i class="fas fa-comment-dots"></i>
      <i class="fas fa-times"></i>
    </label>
    <div class="wrapper">
      <div class="head-text">
Asmara hotel chat support</div>
<div class="chat-box">

<div class="chat_area">


</div>
<div class="selection_area">
<button class="chat_button" id="greet">greet</button>
<button class="chat_button" id="contact">contact us</button>
<button class="chat_button" id="about">about us</button>
<button class="chat_button" id="location">location</button>

</div>
      
        

        <div class="desc-text" id="heading_text">
Please fill out the form below to start chatting with the next available agent.</div>

        
<form id="chat_form" method="post" action="chat.php">
          <div class="field" id="nameContainer">
            <input type="text" name="username" id="name" placeholder="Your Name" required>
          </div>
<div class="field" id="emailContainer">
            <input type="email" name="email" id="email" placeholder="Email Address" required>
          </div>

          <div class="chatbot_loader" id="chat_loader">
          <div class="bot_loader"></div>
        
    
        </div>
         

          

         
<div class="field" id="sendContainer">
            <button id="start-chat" name="submit" type="submit">Start Chat</button>
          </div>
</form>
</div>
</div>

<style>
  
  .chatbot_loader {
  overflow:hidden;
  width:100% ;
  z-index:3000 ;
  height: 300px ;
  display:none ;
  justify-content:center ;
  align-items:center ;
}
.bot_loader {
	border: 8px solid rgb(184, 176, 176); /* Light grey */
	border-top: 8px solid #EC801E ; /* Asmara Orange */
  border-radius: 50%;
	width: 50px ;
  height: 50px;
  z-index:3000 ;
  animation: spin 2s linear infinite;
  
  }
  /*h2 #loadText{
    display: none;
    margin-left: 15px;
    text-align: center;
  }*/

  @keyframes spin {
	0% { transform: rotate(0deg);  }
	100% { transform: rotate(360deg); }
  }
  </style>