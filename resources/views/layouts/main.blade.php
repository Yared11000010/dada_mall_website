<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css">

    <title>Document</title>
       <style>
        .outerDiv {
          width: 1000px;
          display: flex;
          flex-direction: row;
        }

        .innerDiv {
          width: 200px;
          height: 200px;
          background-color: grey;
          margin: 10px;
        }
        body{
          margin: 0%;
          padding: 0%;
          background-color:rgb(251, 251, 255);

        }
      .btn{
        padding: 7px 20px;
        color:white;
        background-color: rgb(118,78,190);
        -webkit-box-shadow: 1px 0px 16px -3px rgba(168,37,168,1);
        -moz-box-shadow: 1px 0px 16px -3px rgba(168,37,168,1);
        box-shadow: 1px 0px 16px -3px rgba(168,37,168,1);
      }
      #logo{

        background-color: rgb(90, 22, 85);
        -webkit-box-shadow: 1px 0px 16px -3px rgba(168,37,168,1);
        -moz-box-shadow: 1px 0px 16px -3px rgba(168,37,168,1);
        box-shadow: 1px 0px 16px -3px rgba(168,37,168,1);
      }
        .divider {
            position: relative;
            border: none;
            height: 2px;
            background-color: #00A79D; /* Replace with your desired color */
            animation: slide 2s ease-in-out infinite;
        }

        @keyframes slide {
            0%, 100% {
                width: 0;
            }
            50% {
                width: 10%;
            }
        }
 .banner-image-container {
        height: 300px; /* Adjust the desired height here */
        overflow: hidden;
    }

    .banner-image-container img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .text-gray {
            color: #888; /* Replace with your desired color */
            text-decoration: none;
        }

        .text-gray:hover {
            color: #333; /* Change color for hover state if desired */
        }
        a{
          text-decoration: none;
        }
    </style>
</head>
<body>
</body>

@include('layouts.header')

@yield('dashboard')

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
