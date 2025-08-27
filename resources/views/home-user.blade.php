<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

<div class="container mt-5">
    <h4 class="mb-4">Contact Form</h4>
    <style>
.input-error{
    border:1px solid red;
    color:red;
}
</style> 
    <form action="userform" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" id="name"  value="{{old('name')}}" 
            class="form-control {{$errors->first('name')?'input-error':''}}" placeholder="Enter your name">
            <span style="color:red;">@error('name'){{$message}}@enderror</span>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" name="email" id="email" class="form-control {{$errors->first('email')?'input-error':''}}" value="{{old('email')}}" placeholder="Enter your email">
            <span style="color:red;">@error('email'){{$message}}@enderror</span>
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label ">Contact Number</label>
            <input type="text" name="contact" id="contact" class="form-control {{$errors->first('contact')? 'input-error':''}}" value="{{old('contact')}}"  placeholder="Enter your phone number">
            <span style="color:red">@error('contact'){{$message}}@enderror</span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
