	
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="audio.js"></script>
		
        <audio id="myAudio" src="music.mp3" preload="auto"></audio>
        <audio id="myAudio1" src="music2.mp3" preload="auto"></audio>
        <audio id="myAudio2" src="music3.mp3" preload="auto"></audio>
        <p id="demo"></p>
		<script>
		
        
        function imageManipulate() {
            var t = new Date();
            var h = t.getHours();
            var original = ["foto2.jpg", "foto3.jpg","foto4.jpg","foto5.jpg"];
            var images = ["12am.gif","1am.gif","2am.jpg","3am.jpg","4am.jpg","5am.gif","6am.jpg","7am.gif","8am.gif","9am.jpg","10am.jpg","11am.jpg" ];
            if (h == 24 || h == 12){
                image0.src = images[0];
                image11.src = original[3];
            }else if (h == 1 || h == 13) {
                image1.src = images[1];
                image0.src = original[3];
            }else if (h == 2 || h == 14) {
                image2.src = images[2];
                image1.src = original[1];
            }else if (h == 3 || h == 15) {
                image3.src = images[3];
                image2.src = original[2];
            }else if (h == 4 || h == 16) {
                image4.src = images[4];
                image3.src = original[3];
            }else if (h == 5 || h == 17) {
                image5.src = images[5];
                image4.src = original[0];
            }else if (h == 6 || h == 18) {
                image6.src = images[6];
                image5.src = original[1];
            }else if (h == 7 || h == 19) {
                image7.src = images[7];
                image6.src = original[2];
            }else if (h == 8 || h == 20) {
                image8.src = images[8];
                image7.src = original[3];
            }else if (h == 9 || h == 21) {
                image9.src = images[9];
                image8.src = original[0];
            }else if (h == 10 || h == 22) {
                image10.src = images[10];
                image9.src = original[1];
            }else if (h == 11 || h == 23) {
                image11.src = images[11];
                image10.src = original[2];
            }
                
            }
            setInterval(imageManipulate, 6000);    

            var myAudio = document.getElementById("myAudio");
            var myAudio1 = document.getElementById("myAudio1");
            var myAudio2 = document.getElementById("myAudio2");
            function togglePlay() {
                if (images[0]==="12am.gif" ||images[8]==="8am.gif" ||images[4]==="4am.jpg") {
                    return myAudio.paused ? myAudio.play() : myAudio.pause();
                }else if (images[1]==="1am.gif" ||images[5]==="5am.gif" ||images[9]==="9am.jpg") {
                     return myAudio1.paused ? myAudio1.play() : myAudio1.pause();
                }else{
                     return myAudio2.paused ? myAudio2.play() : myAudio2.pause();
                }
            }
            
    </script>
	</body>
</div>
</html>