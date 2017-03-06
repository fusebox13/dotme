<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">



        <style>

        </style>
    </head>
    <body>
      <nav id="nav" class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <li class="hidden-xs"><a class="btn btn-lg btn-info">Activate now</a></li>
              <li><a type="button" class="activate-button btn btn btn-info">Activate now</a></li>
            </button>
            <a class="navbar-brand" href=""><img id="brand" src="{{asset('/images/strydelogo.png')}}"></img></a>
          </div>

          <ul class="hidden-xs nav navbar-nav navbar-right">
            <li>
                <p class="navbar-btn">
                    <a type="button" class=" activate-button btn btn-lg btn-info">Activate Now</a>
                </p>
            </li>
          </ul>

        </div>
      </nav>

      <div id="pane-1" class="container-fluid" style="height: 100%; width: 100%">
        <div class="container pt-5-em">
          <div class="row">
            <div class="col-md-12" style="padding-left: 0">
              <div class="col-md-offset-0 col-sm-offset-0 col-xs-12 col-md-3 col-sm-4 col-lg-3" style="padding-left: 0">
              <span style="display: block; text-align: center" class="savings-text">Save up to $9600 for every employee you hire</span>
            </div>
            </div>
          </div>
          <div id="pane-1-row-1" class="row" style="height: 100%">
            <div id="form-box" style="border: 1px solid #5bc0de; background: rgba(91,192,222,0.5); color: white; border-radius: 5px" class="col-md-offset-0 col-sm-offset-0 col-xs-12 col-md-3 col-sm-4 col-lg-3 ">


              <form class="form-horizontal">

                <div class="form-group">
                  <label for="employees">How many employees do you hire annually?</label>
                  <input id="employee-input" type="input" class="form-control" name="employees">
                </div>

                <div class="form-group">
      						<label for="ddlIndustry">Select your industry:</label>
                  <select id="industry-select" class="form-control" name="Industry">
                    <option value="" disabled selected>Select your Industry</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Auto Dealership">Auto Dealership</option>
                    <option value="Grocery Store">Grocery Store</option>
                    <option value="Funeral Home">Funeral Home</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Hotel">Hotel</option>
                    <option value="AEC">AEC</option>
                    <option value="Accounting/CPA">Accounting/CPA</option>
                    <option value="Software/IT">Software/IT</option>
                    <option value="Medical">Medical</option>
                    <option value="Commercial Contractor">Commercial Contractor</option>
                    <option value="CREI">CREI</option>
                    <option value="Other">Other</option>
                    <option value="BioTech/BioMed">BioTech/BioMed</option>
                    <option value="Strategic Partnership">Strategic Partnership</option>
                  </select>
                </div>

              </form>
            </div>
          </div>
        </div>
    </div>

    <a name="pane2">
    <div id="pane-2" class="container-fluid" style="height: 100%; background: white">
      <div class="container" style="height: 100%">
      <div class="row" style="height: 50%; display: flex; align-items: center">
        <div class="col-md-12">
          <div class="pb-1-em col-md-6">
            <div class="savings-text"><span class="text-orange">$2,400 on Average For Every Employee You </span><span class="text-blue">Hire</span></div>
          </div>

          <div class="col-md-6">
            <div class="savings-bar-container"><div class="savings-bar"><span id="hire-savings" class="savings">$100.00</span><img class="chevron" src="{{asset('/images/stryde-chevron.png')}}"></img></div></div>
          </div>
        </div>
      </div>
      <div class="row" style="height: 50%; display: flex; align-items: center">
        <div class="col-md-12">
          <div class="pb-1-em col-md-6">
            <div class="savings-text"><span class="text-orange">$3,600 on Average For Every Employee You </span><span class="text-blue">Have</span></div>
          </div>

          <div class="col-md-6">
            <div class="savings-bar-container"></div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div id="pane-3" class="container-fluid" style="height: 100%">

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
            integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
