@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Atlasmachine | {{$title}}</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        section{
            display: flex;
            background-color: rgb(246,246,254);
        }
        .menu{
            width:18%;
            height: 620px;
            background-color:#fff;
            position: fixed;
            border-radius: 0 30px 30px 0;
        }
        .content{
            width: 82%;
            margin-bottom: 30px;
            background-color: rgb(246,246,254);
            margin-left: 18%;
        }
        .header{
            width: 100%;
            height: 75px;
            display: flex;
            justify-content: space-between;
            z-index: 999;
        }
        .slot{
            width: 100%;
        }
        .logo{
            height: 120px;
            margin-top: -22px;
        }
        .menu div{
            margin-left: 30px;
            margin-bottom:15px;
        }
        .menu a{
            margin-left: 30px;
            text-decoration: none;
            color: rgb(156, 155, 155);
            font-weight: 500;
            font-size: large;
        }

        .menu svg{
            color: rgb(156, 155, 155);
            margin-top: -5px;
        }
        .active1 a,.active2 a{
            color: black;
        }
        .active1 svg{
            color: brown;
        }
        .active2 svg{
            color: rgb(26, 129, 141);
        }
        .header strong{
            font-size: 21px;
            position: relative;
            top: 25px;
            
        }
        .menu_header a{
            font-size: 20px;
            text-decoration: none;
            color:gray;
        }
        .menu_header button{
            border-radius: 5px;
            border: none;
            font-size: 17px;
            padding:5px 17px;
            background-color: rgb(229,236,252);
            color: #568aff;
            margin-right: 30px;
            margin-left: 30px;
            margin-top: 4px;
        }
        .prof{
            background-color: #fff;
            width: 41px;
            height: 41px;
            border-radius: 50%;
        }
        .menu_header{
            position: relative;
            top: 18px;
        }
        .logout a{
            font-size: 18px;
        }
        .logout{
            margin-top: 9px;
        }
        .logout svg{
            margin-right: 5px;
            margin-top: -4px;
            color:gray;
        }

        /* content */
        .button_div{
            width: 100%;
            height: 200px;
            border-radius: 15px;
            display: flex;
            background-color: #eefcfd;
            padding-left: 40px;
            margin-top: 20px;
        }
        .input_div{
            display: flex;
            margin-bottom: 20px;
        }
        .button_div img{
            height: 100%;
            margin-left: 60px;
        }
        h5{
            margin-top: 20px;
            margin-bottom: 20px;
            color: rgb(233, 135, 26);
        } 
        label{
            margin-bottom: 5px;
            font-weight: 600;
        }
        .input_div div:first-child button{
            width: 200px;
            border-radius: 8px;
            background-color: rgb(86,87,188);
            color: #fff;
            padding: 8px 0;
            border: none;
            margin-right: 20px;
        }
        .input_div div:first-child button svg{
            margin-left: 10px;
            margin-top: -4px;
        }
        form{
            display: flex;
        }
        [name="search"]{
            width: 300px;
            padding: 8px;
        }
        .input_div div:last-child button{
           width: 150px;
           padding: 8px;
           border-radius: 10px;
           border: none;
           margin-top: 5px;
           margin-left: 20px;
           background-color: #01579B;
           color: #fff;
        }
        .table_div{
            width: 100%;
            margin-top: 30px;
        }
        table{
            width: 100%;
            text-align: center;
        }
        thead{
            background-color: #fff;
        }
        tfoot{
            background-color: #fff;
        }
        tr{
            box-shadow: 0 2px 5px rgba(1,1,1,5%);
            height: 60px;
        }
        tbody{
            height: 25px;
        }
        
        
        
    </style>
</head>
<body>
    <section>
        <div class="menu" >
            <img src="{{asset('storage/logo1.png')}}" alt="logo" class="logo " />
            <div class="{{ request()->is('list_company') ? 'active1' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                    <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
                </svg>
                <a href="{{route('list_company')}}">Company </a>
            </div>
            <div class="{{request()->is('list_employee') ? 'active2' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                </svg>
                <a href="{{route('list_employee')}}" >Employee</a>
            </div>
        </div>
        <div class="content">
            <div style="width: 90%;" class="mx-auto">
                <div class="header">
                    <div>
                        <strong>{{$title}}</strong>
                    </div>
                    <div style="display: flex;" class="menu_header">
                        <div class="logout">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                            </svg>
                            <a href="/login">Logout</a>
                        </div>
                        <a href="/{{trim($title)}}/create">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
                                </svg>
                                Create {{$title}}
                            </button>
                        </a>
                        <div class="prof"></div>
                    </div>
                </div>
                <div class="slot">
                    {{$slot}}
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>