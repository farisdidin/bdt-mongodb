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
    <div class="container">
      <div class="page-header">
        <br />
        @if (\Session::has('success'))
          <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
          </div><br />
        @endif
      </div>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter" >
              <thead>
                  <th>Name</th>
                  <th>Email Address</th>
                  <th>City</th>
                  <th>Gender</th>
                  <th></th>
                  <th></th>
              </thead>
              <tbody>
                @foreach ($persons as $person)
                  <tr>
                  <td>{{$person->name}}</td>  
                      <td>{{$person->email}}</td>  
                      <td>{{$person->city}}</td>  
                      <td>{{$person->gender}}</td>
                      <td>
                        <a class="icon" href="{{action('PersonController@edit', $person->id)}}">
                            <i class="fe fe-edit"></i>
                          </a>
                      </td>
                      
                    <td class="w-1"><a href="{{action('PersonController@destroy', $person->id)}}" class="icon"><i class="fe fe-trash"></i></a></td>
                  </tr>  
                @endforeach
              </tbody>
            </table>
  
          </div>
          <div class="card-footer">
            <div class="card-options">
            <a href="{{url('addPerson')}}" class="btn btn-primary btn-sm">Add Person</a>
          </div>
          </div>
        </div>
      </div>

    </div>


    {{-- <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Email Address</th>
        <th>City</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($persons as $person)
      <tr>
        <td>{{$person->name}}</td>
        <td>{{$person->email}}</td>
        <td>{{$person->city}}</td>
        <td><a href="{{action('PersonController@edit', $person->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PersonController@destroy', $person->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div> --}}
  </body>
</html> 