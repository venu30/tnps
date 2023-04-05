<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- script -->
        <script src="https://code.jquery.com/jquery-3.5.0.js"  crossorigin="anonymous"></script>
        {{-- <script src="js/rating.js"></script> --}}

       

        <!-- Styles -->
        <style>
            
        
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                    <div class="feedback">

                        <h2> How do you satisfy from our service?  </h2>
                      <div class="rating">
                        <input type="radio" name="star" id="rating-10" value="10">
                        <label for="rating-10"></label>
                        <input type="radio" name="star" id="rating-9" value="9">
                        <label for="rating-9"></label>
                        <input type="radio" name="star" id="rating-8" value="8">
                        <label for="rating-8"></label>
                        <input type="radio" name="star" id="rating-7" value="7">
                        <label for="rating-7"></label>
                        <input type="radio" name="star" id="rating-6" value="6">
                        <label for="rating-6"></label>
                        <input type="radio" name="star" id="rating-5" value="5">
                        <label for="rating-5"></label>
                        <input type="radio" name="star" id="rating-4" value="4">
                        <label for="rating-4"></label>
                        <input type="radio" name="star" id="rating-3" value="3">
                        <label for="rating-3"></label>
                        <input type="radio" name="star" id="rating-2" value="2">
                        <label for="rating-2"></label>
                        <input type="radio" name="star" id="rating-1" value="1">
                        <label for="rating-1"></label>


                        <div class="emoji-wrapper">
                          <div class="emoji">
                            <img src="{{url('/images/emoji/Grayscale-01.png')}}" alt="Image" class="rating-0" width="35%"/>
                            <img src="{{url('/images/emoji/5-01.png')}}" alt="Image" class="rating-1" width="30%"/>
                            <img src="{{url('/images/emoji/10-01.png')}}" alt="Image" class="rating-2" width="35%"/>
                            <img src="{{url('/images/emoji/12-01.png')}}" alt="Image" class="rating-3" width="35%"/>
                            <img src="{{url('/images/emoji/11-01.png')}}" alt="Image" class="rating-4" width="35%"/>
                            <img src="{{url('/images/emoji/1-01.png')}}" alt="Image" class="rating-5" width="35%"/>
                            <img src="{{url('/images/emoji/3-01.png')}}" alt="Image" class="rating-6" width="35%"/>
                            <img src="{{url('/images/emoji/2-01.png')}}" alt="Image" class="rating-7" width="35%"/>
                            <img src="{{url('/images/emoji/6-01.png')}}" alt="Image" class="rating-8" width="35%"/>
                            <img src="{{url('/images/emoji/8-01.png')}}" alt="Image" class="rating-9" width="35%"/>
                            <img src="{{url('/images/emoji/7-01.png')}}" alt="Image" class="rating-10" width="40%"/>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>


                <div class="container">
                    <div class="feedback">

                        <h2> second question </h2>
                        <div class="rating1">
                        <input type="radio" name="star1" id="rating-20" value="10">
                        <label for="rating-20"></label>
                        <input type="radio" name="star1" id="rating-19" value="9">
                        <label for="rating-19"></label>
                        <input type="radio" name="star1" id="rating-18" value="8">
                        <label for="rating-18"></label>
                        <input type="radio" name="star1" id="rating-17" value="7">
                        <label for="rating-17"></label>
                        <input type="radio" name="star1" id="rating-16" value="6">
                        <label for="rating-16"></label>
                        <input type="radio" name="star1" id="rating-15" value="5">
                        <label for="rating-15"></label>
                        <input type="radio" name="star1" id="rating-14" value="4">
                        <label for="rating-14"></label>
                        <input type="radio" name="star1" id="rating-13" value="3">
                        <label for="rating-13"></label>
                        <input type="radio" name="star1" id="rating-12" value="2">
                        <label for="rating-12"></label>
                        <input type="radio" name="star1" id="rating-11" value="1">
                        <label for="rating-11"></label>


                        <div class="emoji-wrapper">
                          <div class="emoji">
                            <img src="{{url('/images/emoji/Grayscale-01.png')}}" alt="Image" class="rating-0" width="35%"/>
                            <img src="{{url('/images/emoji/5-01.png')}}" alt="Image" class="rating-11" width="30%"/>
                            <img src="{{url('/images/emoji/10-01.png')}}" alt="Image" class="rating-12" width="35%"/>
                            <img src="{{url('/images/emoji/12-01.png')}}" alt="Image" class="rating-13" width="35%"/>
                            <img src="{{url('/images/emoji/11-01.png')}}" alt="Image" class="rating-14" width="35%"/>
                            <img src="{{url('/images/emoji/1-01.png')}}" alt="Image" class="rating-15" width="35%"/>
                            <img src="{{url('/images/emoji/3-01.png')}}" alt="Image" class="rating-16" width="35%"/>
                            <img src="{{url('/images/emoji/2-01.png')}}" alt="Image" class="rating-17" width="35%"/>
                            <img src="{{url('/images/emoji/6-01.png')}}" alt="Image" class="rating-18" width="35%"/>
                            <img src="{{url('/images/emoji/8-01.png')}}" alt="Image" class="rating-19" width="35%"/>
                            <img src="{{url('/images/emoji/7-01.png')}}" alt="Image" class="rating-20" width="40%"/>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                
                
      
            </div>
        </div>
    </body>
</html>


<script>
    $('input[name=star]').click(function(){ // Whenever a radiobox is clicked, the following code would be executed
        var selectedValue = $('input[name=star]:checked').val(); // get the selected radio box's value
        console.log("question1=" + selectedValue);
    });

    $('input[name=star1]').click(function(){ // Whenever a radiobox is clicked, the following code would be executed
        var selectedValue = $('input[name=star1]:checked').val(); // get the selected radio box's value
        console.log("question2=" + selectedValue);
    });

</script>