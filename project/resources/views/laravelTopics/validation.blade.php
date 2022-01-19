

<div class="container"><br><br>
<h1>Form with Validation</h1>
    <!-- {{$errors}}
    @if($errors->any())
    @foreach($errors->all as $err)
    <li>{{$err}}</li>
    @endforeach
    @endif -->
    <form action="save" method="POST">
        @csrf
        <input type="text" name="username" > <br><br>
        <span style="color:red">@error('username'){{$message}}@enderror</span><br>
        <input type="password" name="password" > <br><br>  
        <button type="submit">Submit</button>
        
    </form>

</div>
<div class="container">
<form action="upload-file" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>upload your File</h1>
        <input type="file" name="file">
        <button type="submit">Upload File</button>
</div>
