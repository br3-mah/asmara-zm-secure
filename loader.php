 <div class="black" id="loader">
    <div class="loader"></div>
    </div>
    
<style>
.black {
	background:black ;
  width:100vw ;
  z-index:3000  ;
  height: 100vh ;
  overflow:hidden ;
	position: fixed ;
	top:0 ;
  bottom:0 ;
  display:flex ;
  justify-content:center ;
  align-items:center ;
}
.loader {
	border: 10px solid #FFFFFF; /* Light grey */
	border-top: 10px solid #EC801E ; /* Asmara orange */
  border-radius: 50%;
	width: 80px ;
  height: 80px;
  z-index:3000 ;
  animation: spin 2s linear infinite;
  
  }
  
  @keyframes spin {
	0% { transform: rotate(0deg);  }
	100% { transform: rotate(360deg); }
  }

  
  
  
</style>