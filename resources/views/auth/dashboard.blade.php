@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">



            	<h3>

<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
  <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
  <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
</svg>   

Lottery Game Dashboard</h3></div>


            <div class="card-body">
                @if ($message = Session::get('success'))

                <div  id="successAlert" class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
   {{ $message }}
</div>

                @else

				  <div id="successAlert" class="alert alert-dismissible alert-success">
				  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
				   You are logged in!
				</div>


                @endif        
                
                
                
                    <button id="timerBtn" class="btn btn-dark">


						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
						  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
						  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
						</svg>


                    Lottery time (3 mins)</button>

                  <hr>


 

    
    
    
		<div class="container">




			    <div class="row">
			 
				
 
				    
				    <div class="col-md-8 ">



				</div>
				
				    <div class="col-md-4">
				</div>
				
							
 
			    </div>
			</div>
			
			
			<br>
			<div class="container">
			    <div class="row">
			 
				
				    @foreach($colors as $index=> $color)
				    
				    <div class="col-md-4 text-center">
				    <!-- Content for the second column --><button style="background-color: {{ $color }};" class="lottery-button lbtn btn btn-light" data-color="{{$colorNames[$index]}}">Start {{$colorNames[$index]}} Lottery</button>
							<br><br>
				</div>
				
							
						    @endforeach
			    </div>
			</div>



			<div id="usrButtonsContainer" class="text-center">

 				<button type="button m-2" class="btn btn-outline-dark">1</button>
 				<button type="button m-2" class="btn btn-outline-dark">2</button>
 				<button type="button m-2" class="btn btn-outline-dark">3</button>
 				<button type="button m-2" class="btn btn-outline-dark">4</button>
 				<button type="button m-2" class="btn btn-outline-dark">5</button>
 				<button type="button m-2" class="btn btn-outline-dark">6</button>
 				<button type="button m-2" class="btn btn-outline-dark">7</button>
 				<button type="button m-2" class="btn btn-outline-dark">8</button>
 				<button type="button m-2" class="btn btn-outline-dark">9</button>
 

 

			</div>




		<hr>


		<div class="card">
  <h5 class="card-header bss">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
							  <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
							</svg>

  Results</h5>
  <div class="card-body">
  
		    <div id="result">
	        </div>

		        <div id="buttonsContainer" class="text-center"></div>


    </div>
</div>



		    

		        
	

			    <script>
				 function  showBtnLot(dc,dn) {
				 dn= dn-1;
				    let colors = ["#33ff57", "#7F00FF", "#ff5733"];
				    const buttonsContainer = document.getElementById("buttonsContainer");

				    // Generate 10 buttons with numbers from 1 to 10
				    buttonsContainer.innerHTML = "";
				    for (let i = 1; i <= 10; i++) {
					const button = document.createElement("button");
					button.classList.add("btn");
					button.classList.add("m-2"); 
 					button.textContent = i;
					buttonsContainer.appendChild(button);
				    }

				    // Change button colors  
				    const randomColor = dc;
				    buttonsContainer.querySelectorAll(".btn").forEach(function (button) {
					//button.style.backgroundColor = randomColor;									   
					 
				    });

				    // Select a random button and disable others
				    const buttons = Array.from(buttonsContainer.querySelectorAll(".btn"));
				    const randomIndex = dn;
				    const selectedButton = buttons[randomIndex];

				    buttons.forEach(function (button) {
					if (button === selectedButton) {
					    button.classList.add("selected");
					} else {
					    button.classList.add("disabled");
					    button.disabled = true;
					}
				    });
				} 
			  
	 
			 function startTimer(durationInSeconds) {
			    const timerBtn = document.getElementById('timerBtn');
			    timerBtn.setAttribute('disabled', 'true'); // Disable the button during the countdown

			    let timer = durationInSeconds;
			    let minutes, seconds;

			    const updateTimer = () => {
				minutes = parseInt(timer / 60, 10);
				seconds = parseInt(timer % 60, 10);

				minutes = minutes < 10 ? '0' + minutes : minutes;
				seconds = seconds < 10 ? '0' + seconds : seconds;
				var svgIcon = `
				  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
				    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
				    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
				  </svg>
				`;

				var timerText = 'Lottery Time :' + minutes + ':' + seconds;
				timerBtn.innerHTML = svgIcon + timerText;

				if (--timer < 0) {
				    timerBtn.innerHTML = 'Lottery Time :' + '03:00';
				    timerBtn.removeAttribute('disabled');
				    clearInterval(intervalId);
				}
			    };

			    updateTimer(); // Run once immediately
			    const intervalId = setInterval(updateTimer, 1000);
			}
			
			document.querySelectorAll('.lottery-button').forEach(function(button) {
			    button.addEventListener('click', function() {
			    
								  
								this.style.borderBottom = '3px solid red'; 

								      $('.my-div').css('border-bottom', '3px solid red');

  

				 // Get all buttons with the btn-light class
				const lightButtons = document.querySelectorAll('.btn-light');

				// Disable each button
				lightButtons.forEach(button => {
					    button.disabled = true;
				});


								    
			    	startTimer(180);
				const color = this.getAttribute('data-color');
				const resultDiv = document.getElementById('result');
				resultDiv.innerHTML = `You selected ${color} lottery...`;


					setTimeout(function() {
					    // Make a POST request to get the lottery result
					    fetch('/lottery/start', {
						method: 'POST',
						headers: {
						    'Content-Type': 'application/json',
						    'X-CSRF-TOKEN': '{{ csrf_token() }}', //   set the CSRF token
						},
						body: JSON.stringify({}),
					    })
					    .then(response => response.json())
					    .then(data => {
					    	  
							lightButtons.forEach(button => {
								    button.disabled = false;
							});
										  			  let colorsNs = ["Green", "Violet", "Red"];	
							var cc=data.colorN;
							let c2=colorsNs[cc];
							

						showBtnLot(data.color,data.number);

						resultDiv.innerHTML = `
						  <div class="alert text-center alert-dismissible alert-primary">
						    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

							<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
							  <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
							</svg>



						    <p><h4> Color = ${c2}</h4></p>
						    <p><h4> Number = ${data.number}</h4></p>

						  </div>
						 
						`;						

//this.style.borderBottom = '0px solid black'; 

					    })
					    .catch(error => {
						resultDiv.innerHTML = 'An error occurred while fetching the result.';
					    });
					}, 3000); // 3000 milliseconds (3 seconds)
        
        
			    });
			});



		       $(document).ready(function() {
		            // Show the alert
		            $('#successAlert').fadeIn();

		            // Set a timeout to hide the alert after 3 seconds
		            setTimeout(function() {
		                $('#successAlert').fadeOut();
		            }, 3000);
		        });

		    </script>
		    
    
            
            </div>
        </div>
    </div>    
</div>
    
@endsection
