<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Murunda Hospital</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> --}}
    <img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(public_path('web/images/murundalogo.jpg'))) }}" alt="murunda hospital" height="300" width="300">
    
</head>

<body class="ml-5" style="margin-left: 50px;">
    <div class="row">
        <div class="col-md-6 p-5">
            <h4><strong>Tel:</strong>+250 788 50 16 58 </h4>
            <h4><strong>Email:</strong>murundahospital@gmail.com</h4>
            <div class="container mt-5">
                <h2 class="text-center mb-3">Authorized {{ $service->request_type }}</h2>
    
            </div>
            <p>
               <strong>Delivered to:</strong>  {{ $service->user->prefix  }} {{ $service->user->name }}
                
            </p>
            <p><strong>Email: </strong>{{ $service->user->email }}</p>
            <p><strong>Phone: </strong>{{ $service->user->phone }}</p>
            <p> <strong>Rank or Function:</strong>  {{ $service->user->title }}</p>
            <p><strong>Department: </strong>{{ $service->user->department->title }}</p>
            @if ($service->request_type=="Mission Order")
                
                <p><strong>Destination:</strong>{{ $service->destination }}</p>
                <p><strong>Place and date of departure:</strong>{{ $service->d_place }}</p>
                <p><strong>Means of transport: </strong>{{ $service->m_transport }}</p>
                <p><strong>Daily travel expenses: </strong>{{ $service->daily_amount }}</p>
                <p><strong>Total amount:</strong>{{ $service->total_amount }}</p>
            @endif
            <p><strong>Reason or results:</strong>{{ $service->results }}</p>
            <p><strong>Date of return:</strong>{{ $service->return_date }}</p>
            <p><strong>Planned duration (Number of hours or days): </strong>{{ $service->days }} Days</p>
            <p><strong>From date:</strong>{{ $service->start_date }}</p>
            <p><strong>Date of return:</strong>{{ $service->return_date }}</p><br><br><br>
            <p><strong>Requester Signature:</strong><br><img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(public_path('image/signatures/'.$service->user->signature))) }}" alt="murunda hospital" height="100" width="200"></p>
            <p><strong>Requested at:</strong>{{ $service->created_at }}</p>
            <p>
                Who will do your work in your absence? <br><strong>{{ $service->successor }}</strong> 
            </p>
            <h3>{{ $service->comments->count() }} Comments for this request</h3>
            <p>
                @foreach ($service->comments as $comment)
                @if ($comment->user->user_role=="admin" || $comment->user->user_role=="hr")
                <p><strong>{{ $comment->user->prefix }} {{ $comment->user->name }} {{ $comment->comment_type }}</strong> this request</p> 
                @if ($comment->comment_type=="Approved")
                    <p>
                        {{-- <img src="{{ asset('/image/signatures/{{ $comment->user->signature }}') }}" alt="signature" width="100px" height="50px"> --}}
                        {{-- <img src="{{ asset('image/signatures/' . $comment->user->signature) }}" /> --}}
                        <img src="data:image/jpg;base64,{{ base64_encode(file_get_contents(public_path('image/signatures/'.$comment->user->signature))) }}" alt="murunda hospital" height="100" width="200">
                    </p>
                @endif
                @endif
                @endforeach
                
            </p>
            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary" href="/services">Back</a>&emsp;
                <a class="btn btn-primary" href="{{ route('download',$service->id) }}" target="blank">Export to PDF</a>
            </div>

            
            <div id="sign" style="display: none">
                <img src="/image/signatures/{{ auth()->user()->signature }}" alt="signature">
                <p>Approved and digitally signed by {{ auth()->user()->title }} {{ auth()->user()->name }}</p>
            </div>
        </div>
    </div>
    

    <br>

    {{-- @if(auth()->user()->user_role=="admin")
        <button onclick="yesnoCheck(this);">Approve an sign</button>
    @endif --}}

    {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}

    <script>
        function yesnoCheck(that) {
            var x = document.getElementById("sign");
            if (x.style.display === "none") {
                alert("You signed this file! to cancel this action click the button again");
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
      </script>
</body>

</html>