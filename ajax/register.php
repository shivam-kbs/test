<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ajax Save to DB example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <form action="" method="POST" role="form">
      <legend>Registration</legend>
    
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Input field">
      </div>

      <div class="form-group">
        <label for="">Job</label>
        <input type="text" name="job" class="form-control" id="job" placeholder="Input field">
      </div>        
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
      $(document).ready(function(){
        $('button').click(function(e){
          e.preventDefault();
          var name  = $('#name').val();
          var job  = $('#job').val();
          $.post('ajax.php', {username : name, userjob : job}, function(res, s){
            if(s === 'success')
            {
              if(res.success == true)
              {
                return alert('Data inserted !!');
              }
              return alert('ERROR');
            }
          }, 'json');
        });
      });
    </script>
</body>
</html>