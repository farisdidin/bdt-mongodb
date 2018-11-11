<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta http-equiv="Content-Language" content="en" />
      <meta name="msapplication-TileColor" content="#2d89ef">
      <meta name="theme-color" content="#4188c9">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="HandheldFriendly" content="True">
      <meta name="MobileOptimized" content="320">
      <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
      <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
      <!-- Generated: 2018-04-16 09:29:05 +0200 -->
      <title>CRUD MongoDB</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
  <script src="{{asset('assets/js/require.min.js')}}"></script>
      <script>
        requirejs.config({
            baseUrl: '.'
        });
      </script>
      <!-- Dashboard Core -->
      <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet" />
      <script src="{{asset('assets/js/dashboard.js')}}"></script>
      <!-- c3.js Charts Plugin -->
      <link href="{{asset('assets/plugins/charts-c3/plugin.css')}}" rel="stylesheet" />
      <script src="{{asset('assets/plugins/charts-c3/plugin.js')}}"></script>
      <!-- Google Maps Plugin -->
      <link href="{{asset('assets/plugins/maps-google/plugin.css')}}" rel="stylesheet" />
      <script src="{{asset('assets/plugins/maps-google/plugin.js')}}"></script>
      <!-- Input Mask Plugin -->
      <script src="{{asset('assets/plugins/input-mask/plugin.js')}}"></script>
  </head>
  <body>
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
                <form class="card" action="{{action('PersonController@update',$id)}}" method="post">
                    @csrf
                    <div class="card-body p-6">
                      <div class="card-title">Create new account</div>
                      <div class="form-group">
                        <label class="form-label">Name</label>
                      <input type="text" class="form-control" value="{{$person->name}}" name="name">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Email address</label>
                      <input type="email" class="form-control" value="{{$person->email}}" name="email">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Gender</label>
                        <div class="selectgroup w-100">
                          <label class="selectgroup-item">
                            <input type="radio" name="gender" value="Male" class="selectgroup-input" <?php if ($person->gender == 'Male') echo 'checked="checked"'; ?> >
                            <span class="selectgroup-button">Male</span>
                          </label>
                          <label class="selectgroup-item">
                            <input type="radio" name="gender" value="Female" class="selectgroup-input" <?php if ($person->gender == 'Female') echo 'checked="checked"'; ?> >
                            <span class="selectgroup-button">Female</span>
                          </label>
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">City</label>
                      <input type="text" class="form-control" value="{{$person->city}}" name="city">
                      </div>
                      
                      <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                      </div>
                    </div>
                  </form>
            </div>
          </div>
          
       </div>
        
      </div>
    </div>
  </body>
</html>