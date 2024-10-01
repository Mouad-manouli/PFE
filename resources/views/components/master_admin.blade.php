@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('storage/icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Atlasmachine | {{$title}}</title>
    <style>
         header{
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
        a{
            text-decoration: none;
            margin-left: 30px;
            font-size:17px ;
            font-family: Arial, Helvetica, sans-serif;
            color: gray;
        }
        nav{
            width: 100%;
            margin-right: 30px;
            margin-top: 12px;
            display: flex;
            justify-content: space-between;
            margin-left: -40px;
        }
        .logo_nav{
            display: flex;
            justify-content: space-between;
        }
        .logout{
            background-color: rgba(221, 226, 228, 0.705);
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: 600;
        }
        nav a:hover {
            color: rgb(230, 196, 145);
        }
        .logout:hover{
            background-color: rgba(209, 213, 214, 0.705);
            color:  gray;
        }
        /* create/update */
        body{
            background-color: #F5F5F5;
        }
        h4{
            color:  rgb(230, 85, 32);
        }
        .container{
            background-color: white;
            padding: 10px;
            border-radius: 5px;
        }

        input[id="exampleInputEmail1"]{
            border-top: none;
            border-right: none;
            border-left: none;
            width: 100%;
            border-color: rgb(157, 156, 156);
        }
        input[id="exampleInputEmail1"]:focus{
            outline: none;
            border-color: #1888E8;
        }
        .image{
            border: 1px #1888E8 solid;
            border-top: none;
            border-left: none;
            border-bottom: none;
        }
        #pr_emp{
            border-radius: 100px;
        }
        /*Employe/show.blade.php */
        th{
            text-decoration: underline;
            color: rgb(112, 128, 144);
            font-style: italic;
        }
        /*show */
        .nom_entr{
            margin-top: 30px;
            margin-bottom: 25px;
            color: rgb(230, 85, 32) ;
        }
        .desc_entr{
            width: 60%;
            margin-bottom: 30px;
        }
        #cards_entr{
            display: flex;
            width: 100%;
        }
        .info_entr{
            background-color: #fff;
            width: 25%;
            height: 470px;
            padding: 20px;
            position: sticky;
            box-shadow: 0 5px 25px rgba(1, 1, 1, 15%);
            border-radius: 20px;
        }
        .info_matr{
            width: 70%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .info_entr > p{
            margin-top: -15px;
        }
        h5{
            margin-bottom: 15px;
        }
        .machine{
            width: 49%;
            box-shadow: 0 5px 25px rgba(1, 1, 1, 15%);
            background-color: #fff;
            padding: 30px;
            margin-bottom: 20px;
            border-radius: 20px;
        }
        .machine img{
            width: 100%;
            height: 230px;
            margin-bottom: 10px;
        }
        .machine button{
            float: right;
        }
        .add_machine{
            margin-left: 700px;
        }
    </style>
</head>
<body>
    <header>
        @include('page_fixed_admin.header')
    </header>
    <section>
        {{$slot}}
    </section>
</body>
</html>
