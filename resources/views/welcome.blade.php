<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Currency Converter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            body {
                padding: 20px 15%;
            }
            form header {
                margin: 0 0 20px 0;
            }
            form header div {
                font-size: 90%;
                color: #999;
            }
            form header h2 {
                margin: 0 0 5px 0;
            }
            form > div {
                clear: both;
                overflow: hidden;
                padding: 1px;
                margin: 0 0 10px 0;
            }
            form > div > fieldset > div > div {
                margin: 0 0 5px 0;
            }
            form > div > label,
            legend {
                width: 25%;
                float: left;
                padding-right: 10px;
            }
            form > div > div,
            form > div > fieldset > div {
                width: 75%;
                float: right;
            }
            form > div > fieldset label {
                font-size: 90%;
            }
            fieldset {
                border: 0;
                padding: 0;
            }

            input[type=text],
            input[type=email],
            input[type=url],
            input[type=password],
            textarea {
                width: 100%;
                border-top: 1px solid #ccc;
                border-left: 1px solid #ccc;
                border-right: 1px solid #eee;
                border-bottom: 1px solid #eee;
            }
            input[type=text],
            input[type=email],
            input[type=url],
            input[type=password] {
                width: 50%;
            }
            input[type=text]:focus,
            input[type=email]:focus,
            input[type=url]:focus,
            input[type=password]:focus,
            textarea:focus {
                outline: 0;
                border-color: #4697e4;
            }

            @media (max-width: 600px) {
                form > div {
                    margin: 0 0 15px 0;
                }
                form > div > label,
                legend {
                    width: 100%;
                    float: none;
                    margin: 0 0 5px 0;
                }
                form > div > div,
                form > div > fieldset > div {
                    width: 100%;
                    float: none;
                }
                input[type=text],
                input[type=email],
                input[type=url],
                input[type=password],
                textarea,
                select {
                    width: 100%;
                }
            }
            @media (min-width: 1200px) {
                form > div > label,
                legend {
                    text-align: right;
                }
            }

            .button {
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
    <div>
        <form action="#">
            <header>
                <h2>Currency Converter</h2>
                <div>
                    This is a simple currency converter app that makes use of the public
                    <a href="http://fixer.io/">fixer.io</a> api to make conversions between different
                    currencies.
                </div>
            </header>
            <div>
                <label class="desc" id="title106" for="Field106">
                    Base Currency
                </label>
                <div>
                    <select id="Field106" name="Field106" class="field select medium" tabindex="11">
                        @foreach($currencies as $currency)
                            <option value="{{ $currency }}" {{ $currency === (isset($base) ? $base : "USD") ? "selected" : "" }}>{{ $currency }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <label class="desc" id="title106" for="Field106">
                    Target Currency
                </label>
                <div>
                    <select id="Field106" name="Field106" class="field select medium" tabindex="11">
                        @foreach($currencies as $currency)
                            <option value="{{ $currency }}" {{ $currency === (isset($target) ? $target : "EUR") ? "selected" : "" }}>{{ $currency }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <div>
                    <input id="saveForm" name="saveForm" type="submit" value="Convert" class="button">
                </div>
            </div>
        </form>
        <div>
            <label class="desc" id="title4" for="Field4">
                Result
            </label>
            <div>
                <textarea id="Field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
            </div>
        </div>
    </div>
</body>
</html>
