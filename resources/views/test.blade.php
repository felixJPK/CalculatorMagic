<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator Fun</title>
        <!-- Fonts -->
        <style>
            .red{
                color:red;
            }
            .green{
                color:green;
            }
        </style>
        

    </head>
    <body>
        <form action="{{route('calculate')}}" method = "post">

            @csrf
            <input id="number1" type = "text" name="number1" placeholder="Enter number 1"><br><br>
            <input id = "operator" type = "text" name="operator" placeholder="Enter operator"><br><br>
            <input id="number2"type = "text" name="number2" placeholder="Enter number 2"><br><br>
            <button id="calculate" type = "submit">Calculate</button>
        
        </form>
        <br>
        <br>
        <div>
            <label>Result:</label>
            <span id="result">
            </span>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.js" type = "text/javascript"></script>
        {{-- <script src="{{asset('js/post.js')}}" type = "text/javascript"></script> --}}
        <script>
            $(document).ready(function () {
                console.log("oke");//jqready

                $('#calculate').click(function (e) { 
                    e.preventDefault();
                    const number1 = $('#number1').val();
                    const operator = $('#operator').val();
                    const number2 = $('#number2').val();
                    console.log(number1);
                    console.log(number2);
                    console.log(operator);

                    var data = {
                        '_token': "{{ csrf_token() }}",
                        number1,
                        number2,
                        operator
                    };

                    $.ajax({
                        type: "POST",
                        url: "{{ route('calculate') }}",
                        data: data,
                        dataType: "json",
                        success: function (response) {
                            console.log(response)
                            if(response.status===true){
                                $('#result').removeClass("red");
                                $('#result').html(response.result); 
                                $('#result').addClass("green"); 
                            }else{
                                $('#result').removeClass("green");
                                $('#result').html(response.message);
                                $('#result').addClass("red");

                            }
                            // $('#result').html(response.result)
                        }
                    });
                    
                });

            });

        </script>
        
    </body>

</html>

