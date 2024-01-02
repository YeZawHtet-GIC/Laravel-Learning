<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing1</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #333;
            color: gold;
        }
        .left{
            position:absolute;
            top: 50%;
            left:30%;
        }
        .right{
            position:absolute;
            top: 50%;
            right:30%;
        }
        .top{
            position:absolute;
            top:10%;
        }
        .bottom{
            position:absolute;
            bottom:0;
        }
        .circle{
            width: 100px;
            height:100px;
            border-radius:50%;
            border:10px solid red;
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <h1>Hello World</h1>
    <h1 class="left">Left</h1>
    <h1 class="right">Right</h1>
    <h1 class="top">Top</h1>
    <h1 class="bottom">Bottom</h1>
    
    <div class="circle2"><div class="circle"></div></div>
</body>

</html>