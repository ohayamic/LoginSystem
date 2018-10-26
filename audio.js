            /* Add audio to the images */
var images = ["12am.gif", "1am.gif", "2am.jpg", "3am.jpg", "4am.jpg", "5am.gif", "6am.jpg", "7am.gif", "8am.gif", "9am.jpg", "10am.jpg", "11am.jpg"];
            
            var myAudio = document.getElementById("myAudio");
            var myAudio1 = document.getElementById("myAudio1");
            var myAudio2 = document.getElementById("myAudio2");

            function togglePlay() {
                for (let i = 0; i < images.length; i++) {
                    if (images.indexOf == 11 || images[i] == 2 || images[i] == 5 || images[i]==8) {
                        return myAudio.paused ? myAudio.play() : myAudio.pause();
                    }else if(i==12 || i==3 || i==6 || i==10) {
                        return myAudio1.paused ? myAudio1.play() : myAudio1.pause();
                    }else if(i==1 || i==4 || i==7 || i==11) {
                        return myAudio2.paused ? myAudio2.play() : myAudio2.pause();
                    }else{
                        return myAudio.paused ? myAudio.play() : myAudio.pause();
                    }
                }
            }