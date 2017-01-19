<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Employee Page</title>
    <style>
      .inline-block {
        display: inline-block;
      }
      .flex {
        display: flex;
      }
      .column {
        flex-direction: column;
      }
      .fat {
        padding: 0.5em;
      }
      .bar {
        background: lightgrey;
        border: 1px solid black;
        border-radius: 25px 25px;
      }
      .spaced {
        margin-bottom: 0.25em;
      }
      .right-pad {
        padding-right: 0.50em;
      }
      .grey-text {
        color: grey;
      }
      .wide {
        width: 30vw;
      }
      .center-justified {
        justify-content: center;
      }
      .bordered {
        border: 1px solid lightgrey;
        padding: 2em;
      }
    </style>
  </head>
  <body>
    <button id="button">Test</button>
    <div id="employees" class="text-center">
    @foreach($employees as $employee)

      <div class="flex center-justified">
        <div class="wide bordered">
          <div id="name" class="col-md-4">{{$employee->name}}</div>
          <div class="col-md-2"></div>
          <div id="email" class="col-md-4 grey-text">{{$employee->email}}</div>
        </div>
      </div>
      <br>
    @endforeach
    <ul class="pagination">{{$employees->links()}}</ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
