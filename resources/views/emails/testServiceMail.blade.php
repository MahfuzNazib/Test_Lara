<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins";
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #ecf0f3;
        }

        .wrapper,
        .wrapper .img-area,
        .social-icons a {
            background: #ecf0f3;
            box-shadow: -3px -3px 7px #ffffff, 3px 3px 5px #ceced1;
        }

        .wrapper {
            position: relative;
            width: 350px;
            padding: 30px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            margin: 15px;
        }

        .wrapper .img-area {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .img-area .inner-area {
            height: calc(100% - 25px);
            width: calc(100% - 25px);
            border-radius: 50%;
        }

        .inner-area img {
            height: 100%;
            width: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .wrapper .name {
            font-size: 23px;
            font-weight: 500;
            color: #31344b;
            margin: 10px 0 5px 0;
        }

        .wrapper .career {
            color: #44476a;
            font-weight: 450;
            font-size: 16px;
        }

        .wrapper .flow {
            color: #44476a;
            font-weight: 450;
            font-size: 16px;
            margin: 10px 0 5px 0;
        }

        .wrapper .about {
            background: #ecf0f3;
            box-shadow: -3px -3px 7px #ffffff, 3px 3px 5px #ceced1;
        }

        .wrapper .about {
            position: relative;
            width: 150px;
            border: none;
            outline: none;
            padding: 5px;
            color: #31344b;
            font-size: 13px;
            font-weight: 450;
            border-radius: 5px;
            cursor: pointer;
            z-index: 4;
            margin: 10px 0 15px 0;
        }

        .wrapper .flow {
            background: #ecf0f3;
            box-shadow: -3px -3px 7px #ffffff, 3px 3px 5px #ceced1;
        }

        .wrapper .flow {
            position: relative;
            width: 150px;
            border: none;
            outline: none;
            padding: 5px;
            color: #31344b;
            font-size: 13px;
            font-weight: 450;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            z-index: 4;
            margin: 15px 0 15px 0;
        }

        .wrapper .horizon {
            width: 330px;
            height: 2px;
            border-width: 0;
            background-color: #e4e4e4;
            margin: 10px 0 5px 0;
        }

        .wrapper .info {
            color: #44476a;
            font-size: 14px;
            font-weight: 500;
            color: #31344b;
            text-align: left;
        }

        .wrapper .social-icons {
            text-align: center;
        }

        .social-icons a {
            position: relative;
            height: 35px;
            width: 35px;
            margin: 0 3;
            margin-top: 5;
            display: inline-flex;
            text-decoration: none;
            border-radius: 50%;
        }

        .social-icons a:hover::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            border-radius: 50%;
            background: #ecf0f3;
            box-shadow: inset -3px -3px 7px #ffffff, inset 3px 3px 5px #ceced1;
        }

        .social-icons a i {
            position: relative;
            z-index: 3;
            text-align: center;
            width: 100%;
            height: 100%;
            line-height: 35px;
        }

        .social-icons a.fb i {
            color: #4267b2;
        }

        .social-icons a.messenger i {
            color: #006aff;
        }

        .social-icons a.insta i {
            color: #dd2a7b;
        }

        .social-icons a.telegram i {
            color: #229ed9;
        }

        .social-icons a.email i {
            color: #34a853;
        }

    </style>
</head>

<body>
    <html lang="en">

    <body>
        <div class="wrapper">
            <div class="img-area">
                <div class="inner-area">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                        alt="twitter" />
                </div>
            </div>
            <div class="name">Paypal Mail Testing</div>
            <div class="career">Mailtrap.io</div>
            <hr class="horizon" />
            <button class="about">About User</button>
            <div class="info">
                <p>Name: {{ $test_service->name }}</p>
                <p></p>
                <p></p>
                <p>Email: {{ $test_service->email }}</p>
                <p>Amount (USD) : {{ $test_service->amount }}</p>
            </div>
            <p class="flow">Follow Me</p>
        </div>
    </body>

    </html>
</body>

</html>
