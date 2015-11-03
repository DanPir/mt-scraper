<!DOCTYPE html>
<html>
    <head>
        <title>Money Transfer Scraper</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

		<!-- BOOTSTRAP -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
		<!-- /BOOTSTRAP -->
	
	</head>
    
    <body>
		<div class="container">
		
		        <div class="row">
		            <div class="col-sm-8">
		
		                <h3 class="page-header">Money Transfer Scraper</h3>
		                <form role="form" action="/scraper" method="POST">
		                    <div class="form-group float-label-control">
		                        <label for="">Sending Amount</label>
		                        <input id="txtAmount" type="number" class="form-control" placeholder="0">
		                    </div>
		                    <div class="form-group float-label-control">
		                        <label for="">Receiving Country</label>
		                        <input id="txtCountry" type="text" class="form-control" placeholder="Germany">
		                    </div>
		                    <div class="form-group float-label-control">
		                        <label for="">Receiving Currency</label>
		                        <input id="txtCurrency" type="text" class="form-control" placeholder="EUR">
		                    </div>
		                     <div class="text-center">
		    	        	    <button id="btnScrape" type="submit" class="btn btn-primary text-uppercase">SCRAPE</button>
		                     </div>
		                </form>
		
		            </div>
		        </div>
		</div>
    </body>
</html>
