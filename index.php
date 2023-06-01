<!DOCTYPE html>
<html>

<head>
    <title>Get Device Location</title>
    <!-- <input type="text" id="longitude" />
    <input type="text" id="latitude" /> -->



</head>

<body>
    <button id="click">Get Location</button>


    <script>

    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#click').click(function () {
                getLocation()

                function getLocation() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);
                    } else {
                        alert("Geolocation is not supported by this browser.");
                    }
                }

                function showPosition(position) {
                    let latitude = position.coords.latitude;
                    let longitude = position.coords.longitude;
                    
                    $.ajax({
                        type: 'POST',
                        url: 'checkLongitudeAndLatitude.php',
                        data: {
                            longitude: longitude,
                            latitude: latitude
                        },
                        success: function (response) {
                          if(response=="outrange")
                          {
                            alert('You cant register for the lecture');
                          }else{
                            alert('Register now');
                          }
                        }
                    });
                    // console.log(longitude)
                }
               
            });
            // 
        });
    </script>
</body>

</html>




<!-- department_location  -->
<!-- -->


<!-- current loction -->
<!-- $departLong=32.5825197; -->
<!-- $departLatit= 0.3475964; -->