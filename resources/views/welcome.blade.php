@extends('layouts.app')
@section('content')
    <div class='welcome-div py-3'>


        <div class="container">

            <div class="mt-5">
                <h1 class="title-wel">Babbo Natale arriver&agrave; tra: </h1>
            </div>

            <div>
                <div id="countdown" class="d-flex justify-content-center mt-5 text-white">

                    <div id="days"></div>
                    &ensp;
                    <div id="hours"></div>
                    &ensp;
                    <div id="minutes"></div>
                    &ensp;
                    <div id="seconds"></div>
                </div>
                <div class="text-center mb-5 mt-5">
                    <a href="{{ route('presents.create') }}">
                        <button class=" button-form mt-4 mb-4">Scrivi una letterina</button>
                    </a>

                </div>
            </div>
        </div>
        <audio autoplay src={{ URL::asset('../sound/Wham_-_Last_Christmas_Official_Video.mp3') }}></audio>
    </div>
    <script>
        function calculateChristmasCountdown() {

            //Get today's date.
            var now = new Date();

            //Get the current month. Add a +1 because
            //getMonth starts at 0 for January.
            var currentMonth = (now.getMonth() + 1);

            //Get the current day of the month.
            var currentDay = now.getDate();

            //Work out the year that the next Christmas
            //day will occur on.
            var nextChristmasYear = now.getFullYear();
            if (currentMonth == 12 && currentDay > 25) {
                //This year's Christmas Day has already passed.
                nextChristmasYear = nextChristmasYear + 1;
            }

            var nextChristmasDate = nextChristmasYear + '-12-25T00:00:00.000Z';
            var christmasDay = new Date(nextChristmasDate);

            //Get the difference in seconds between the two days.
            var diffSeconds = Math.floor((christmasDay.getTime() - now.getTime()) / 1000);

            var days = 0;
            var hours = 0;
            var minutes = 0;
            var seconds = 0;

            //Don't calculate the time left if it is Christmas day.
            if (currentMonth != 12 || (currentMonth == 12 && currentDay != 25)) {
                //Convert these seconds into days, hours, minutes, seconds.
                days = Math.floor(diffSeconds / (3600 * 24));
                diffSeconds -= days * 3600 * 24;
                hours = Math.floor(diffSeconds / 3600);
                diffSeconds -= hours * 3600;
                minutes = Math.floor(diffSeconds / 60);
                diffSeconds -= minutes * 60;
                seconds = diffSeconds;
            }

            //Add our counts to their corresponding HTML elements.
            document.getElementById('days').innerHTML = '<h2 class="timer">' + days + '   &ensp; Giorni   &ensp;  </h2>';
            document.getElementById('hours').innerHTML = '<h2 class="timer">' + hours + '   &ensp; Ore  &ensp; </h2>';
            document.getElementById('minutes').innerHTML = '<h2 class="timer">' + minutes + '   &ensp;Minuti   &ensp;</h2>';
            document.getElementById('seconds').innerHTML = '<h2 class="timer">' + seconds +
                '   &ensp; Secondi  &ensp; </h2>';

            //Recursive call after 1 second using setTimeout
            setTimeout(calculateChristmasCountdown, 1000);
        }

        calculateChristmasCountdown();
    </script>
@endsection
