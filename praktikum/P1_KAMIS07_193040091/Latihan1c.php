<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .lingkaran{
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            border: 1px solid black;
            border-radius:50%;
            background: salmon;
            }

        .lingkaran2{
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            border: 1px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
            }

        .lingkaran2b{
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            border: 1px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
            margin-left:10px;
            }

        .lingkaran3{
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            border: 1px solid black;
            border-radius:50%;
            background: salmon;
            margin-top: 10px;
            }

        .lingkaran3b{
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            border: 1px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
            }

        .lingkaran3c{
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            border: 1px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
            margin-left:10px;
            }

        .lingkaran3d{
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            border: 1px solid black;
            border-radius:50%;
            background: salmon;
            float: left;
            margin-top: 10px;
            margin-left:10px;
            }
    </style>
</head>
<body>
        <?php $h1 = "A"; ?>
        <div class="container">
            <div class="lingkaran"><?php echo $h1; ?></div>
        </div>
        <?php $h2 = "B"; ?>
            <div class="container">
               <div class="lingkaran2"><?php echo $h2; ?></div>
               </div>
            <?php $h3 = "B" ?>
            <div class="container">
                <div class="lingkaran2b"><?php echo $h3; ?></div>
                </div>
            <?php $h4 = ""; ?>
            <div class="container">
                <div class="lingkaran3"><?php echo $h4; ?></div>
                </div>
                <?php $h5 = "C"; ?>
            <div class="container">
                <div class="lingkaran3b"><?php echo $h5; ?></div>
                </div>
                <?php $h6 = "C"; ?>
            <div class="container">
                <div class="lingkaran3c"><?php echo $h6; ?></div>
                </div>
                <?php $h7 = "C"; ?>
            <div class="container">
                <div class="lingkaran3d"><?php echo $h7; ?></div>
                </div>    

</body>
</html>