<!DOCTYPE html>
<html lang="en">
<head>
  <title>Message Send Twilio  Sms Gatway</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Send Message In Twilio Sms Gatway </h2>
  <form action="{{url('MessageSend')}}" method="post">
    @csrf 
    <div class="form-group">
      <label for="Number">Mobile Number:</label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter Number" name="mobile">
      @error('mobile')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea class="form-control" rows="5" id="message" name="message"></textarea>
       @error('message')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
</div>

</body>
</html>
