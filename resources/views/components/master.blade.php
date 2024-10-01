@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('storage/css/home.css')}}">
    <title>Atlasmachine | {{$title}}</title>
    <link rel="icon" href="{{asset('storage/icon.png')}}" type="image/x-icon">
    <style>
        /* code css header */
        .header1{
            width: 100%;
            height: 45px;
            background-color: #2A4451;
            display: flex;
            justify-content: space-between;
        }
        .header1 div:nth-child(1){
            margin-left: 70px;
        }
        .header1 div:nth-child(2){
            margin-right: 30px;
        }
        .header1 div{
            display: flex;
        }
        span{
            display: flex;
        }
        .header1 p{
            color: #fff;
            margin: 12px 30px 0 5px;
            font-size: 13px;
        }
        .header1 svg{
            color: #C6CAD1;
            margin-top: 14px;
            font-size: 13px;
        }
        .icon_header svg{
            margin-right: 30px;
            font-size: 13px;
        }
        .logo_nav{
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 75px;
            box-shadow: 0 2px 5px rgba(1,1,1,5%);
            z-index: 999;
            background: rgba( 255, 255, 255, 0.65 );
            backdrop-filter: blur( 9.5px );
            -webkit-backdrop-filter: blur( 9.5px );
        }
        .logo{
            height: 150px;
            margin-left: 20px;
            margin-top: -40px;
        } 
        menu a{
            text-decoration: none;
            margin-left: 30px;
            font-size:17px ;
            font-family: Arial, Helvetica, sans-serif;
            color: #2A4451;
        } 
        nav{
            width: 100%;
            margin-right: 30px;
            margin-top: 12px;
            display: flex;
            justify-content: space-between;
            margin-left: -40px;
        }
        .sing_up{
            background-color: #2A4451;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: 600;
            color: #fff;
            margin-right: 15px;
        }
        nav a:hover {
            color: #C6CAD1;
        }
        .sing_up:hover{
            color:  #fff;
        }
        .pos_icon{
            margin-top: 18px;
            margin-right: 20px;
            color: rgb(35, 53, 78);
            display: none;
        }
        .footer_div{
            width: 90%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .div_logout{
            display: flex;
            margin-top: -10px;
        }
        .div_logout button{
            background-color: #2A4451;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: 600;
            color: #fff;
            margin-right: 15px;
            border: none;
        }
        .div_logout div{
            border-radius: 50%;
            height: 45px;
            width:45px ;
        }
        .pos_img img{
            border-radius: 50%;
            height: 100%;
            width:100% ;
            margin-left: -30px;
        }



        /* profile company */
        .section_profile_com{
            display: flex;
            background-color: #F5F5F5;
        }
        .detail_company{
            width: 30%;
        }
        .button_slot{
            width: 70%;
        }
        .button_com{
            width: 96%;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(1,1,1,5%);
            padding: 20px 40px;
            border-radius: 10px;
            margin-top: 40px;
            margin-bottom: 30px;
            
        }
        .slot_com{
            width: 96%;
        }
        .info_company{
            width: 80%;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(1,1,1,5%);
            padding: 20px 40px;
            border-radius: 10px;
            margin-top: 40px;
            margin-bottom: 30px;
        }
        .info_company a:first-child{
            float: right;
            color: #545a60;
        }
        .info_company div{
            border-radius: 50%;
            width: 140px;   
            height: 140px;
            margin-top: 50px;
            margin-bottom: 12px;
        }
        .info_company div img{
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }
        .info_company h5{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            text-align: center;
        }
        .info_company h6{
            color: #2A4451;
            text-align: center;
            margin-bottom: 30px;
        }
        .info_company label{
            font-family: Arial, Helvetica, sans-serif;
            font-size: small;
        }
        .info_company p{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
        }

        .info_company button{
            width: 100%;
            padding: 10px;
            color: #fff;
            background-color: #9EAAB5;
            border-radius: 5px;
            border: none;
            margin-top: 25px;
        }
        .info_company button:hover{
            background-color:#9299a0 ;
        }
        .button_com{
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 5px 25px rgba(1, 1, 1, 5%);
            margin-bottom: 30px;
        }
        .button_com h6{
            font-weight: 700;
        }
        .button_com p{
            font-size: 14px;
            margin-bottom: 30px;
        }
        .button_com button{
            width: 150px;
        }


        /* machines */
        .card-container {
            width: 280px;
            height: 280px;
            position: relative;
            border-radius: 10px;
            display: flex;
            margin-bottom:40px;
            margin-right: 22px;
        }

            .card-container::before {
                content: "";
                z-index: -1;
                position: absolute;
                inset: 0;
                background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100% );
                transform: translate3d(0, 0, 0) scale(0.95);
                filter: blur(20px);
            }

            .card {
                width: 100%;
                height: 100%;
                border-radius: inherit;
                overflow: hidden;
            }

            .card .img-content {
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: scale 0.6s, rotate 0.6s, filter 1s; 
            }
            .card .img-content img{
                width: 90%;
                height: 90%;
            }

            
            .card .content {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 10px;
                color: #e8e8e8;
                padding: 20px 24px;
                border-radius: 5px;
                opacity: 0;
                transform: translateY(50px);
                background-color: #9EAAB5;
                transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
            }

            .card .content .heading {
                font-size: 32px;
                font-weight: 700;
            }

            .card:hover .content {
                opacity: 1;
                transform: translateY(0);
            }

            .card:hover .img-content {
                scale: 2.5;
                rotate: 30deg;
                filter: blur(7px);
            }

            .active-link {
                background-color: #343a40; /* Dark background color */
                color: #fff; /* Text color */
                border: none; /* Remove border */
            }

            .contrat_form{
                width: 65%;
                padding: 15px;
                background-color: #fff;
                box-shadow: 0 5px 25px rgba(1, 1, 1, 5%);
                margin-bottom: 30px;
            }

            .contrat_form button{
                width: 100%;
                padding: 10px;
                color: #fff;
                background-color: #2A4451;
                border: none;
                border-radius: 10px;
                margin-top: 15px;
            }


            .about_section1{
                background-color: #F5F5F5;
                display: flex;
                flex-wrap: wrap;
                width: 100%;
            }
            .about_image{
                width: 35%;
            }
            .about_text{
                width: 55%;
                margin-top: 40px;
            }

            .about_section1 h1{
                color: #2A4451;
                font-size: 75px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
            }
            .icon_about{
                display: flex;
                margin-top: 50px;
            }
            .icon_about svg{
                margin-left: 30px;
                margin-top: -3px;
            }
            .about_section2{
                background-color: #F5F5F5;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                width: 100%;
                padding: 60px;
            }
            .about_section2 svg{
                border: 1px solid black;
                padding: 10px;
                margin-bottom: 20px;
            }
            .Services {
                background-color: #fff;
                width: 380px;
                padding: 50px;
                height: 480px;
            }
            .Services h3{
                color: #f49d0c;
                margin-bottom: 10px;
            }
            .Services p{
                color: gray;
            }
            .Values {
                background-color: #fff;
                width: 380px;
                padding: 50px;
            }
            .Values h3{
                color: #337287;
                margin-bottom: 10px;
            }
            .Values p{
                color: gray;
            }
            .Mission {
                background-color: #dbeff2;
                width: 380px;
                padding: 50px;
                height: 450px;
            }
            .Mission h3{
                color: black;
                margin-bottom: 10px;
            }
            .Mission p{
                color: rgb(92, 91, 91);
            }


            .Services:hover {
                background-color: #dbeff2;
            }
            .Values:hover {
                background-color: #dbeff2;
            }

            .Services:hover h3 {
                color: black;
            }
            .Values:hover h3 {
                color: black;
            }
            .Services:hover p{
                color: rgb(92, 91, 91);
            }
            .Values:hover p{
                color: rgb(92, 91, 91);
            }



        /* media */

        @media (max-width: 940px){
            header{
                box-shadow: none;
            }
            nav{
                position: fixed;
                top: 62px;
                left: 0;
                background-color: #fff;
                height: 260px;
                width: 100%;
                margin-left: 0;
                display: none;
               text-align: center;
               
            }
            a{
                display: block;
                margin-bottom: 10px;
                margin-left: 0;
                margin-right: 40px;
            }
            .pos_icon{
                display: block;
            }
            .active{
                display: block;
            }
        }



        
        
    </style>
</head>
<body>
    <div>
        <header>
            @include('page_fixed.header')
        </header>
        <div>
            {{$slot}}
        </div>
        <footer>
            @include('page_fixed.footer')
        </footer>
    </div>
</body>
</html>