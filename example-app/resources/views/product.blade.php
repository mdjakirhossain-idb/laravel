<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-warning"> 
                    <tr> 
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                    </tr>

                    @foreach( $products as $product)
                            <tr> 
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->address}}</td>
                                <td>{{$product->contact}}</td>
                            </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>