<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products List</title>
    <style>

        body{
            font-family: sans-serif;
        }

        h1{
            margin: auto;
            width: 100%;
            text-align: center;
        }

        .page-box{
            display: block;
            padding: 80px 10%;
        }

        .table{
            width: 100%;
            box-shadow: rgba(0,0,0,0.16) 0 3px 6px;
            border-radius: 10px;
            overflow: hidden;
        }

        .head_row{
            background: #0072BC;
            color: #fff;
        }

        .head_th{
            padding: 10px 5px;
        }

        .body_td{
            padding: 10px 5px;
            text-align: center;
        }

        .body_row:nth-child(odd){
            background: rgb(235, 235, 235);
        }

        .page-box h2{
            margin-top: 60px;
        }

        .page-box > img{
            width: 200px;
            display: block;
            margin: auto;
            margin-bottom: 13px;
        }

        .print-btn{
            background: #0072BC;
            color: #fff;
            position: fixed;
            top: 50px;
            right: 33px;
            padding: 26px 25px;
            border-radius: 55px;
            border: none;
            cursor: pointer;
            width: 81px;
            height: 81px;
            box-shadow: rgba(0,0,0,0.16) 0 3px 6px;
        }
    </style>
    <script>
    //function print
        function printDiv(divName) {
            document.getElementById("printbut").style.visibility = "hidden";
            var printContents = document.getElementById(divName).innerHTML;
            
            var originalContents = document.body.innerHTML;
    
            document.body.innerHTML = printContents;
    
            window.print();
    
            document.body.innerHTML = originalContents;
            document.getElementById("printbut").style.visibility = "visible";
        }
    </script>
</head>

<body>

    <button id="printbut" class="print-btn" onclick="printDiv('allprod')">Print<br>Page</button>
    
    <div id="allprod" class="page-box">
        <img width="100" src="/img/logo.png" alt="">
            <h1>Products List</h1>
        <!-- Start Category -->
        @foreach($categories as $cat)
        <h2>{{$cat->name}}</h2>
        <table cellspacing="0" cellpadding="0" class="table">
            <thead>
                <tr class="head_row">
                    <th class="head_th">Code</th>
                    <th class="head_th">Name</th>
                    <th class="head_th">Description</th>
                    <th class="head_th">Brand</th>
                </tr>
            </thead>

            <tbody>
                <!-- Start Row -->
                @foreach($products as $product)
                @if($product->category_id == $cat->id)
                <tr class="body_row">
                    <td class="body_td">{{$product->code}}</td>
                    <td class="body_td">{{$product->name}}</td>
                    <td class="body_td">{{$product->description}}</td>
                    <td class="body_td">{{$product->brand->name}}</td>
                </tr>
                <!-- End Row -->
                @endif

                @endforeach
               
            </tbody>
        </table>
        <!-- End Category -->

        @endforeach

    </div>
</body>

</html>