<div id="page-wrapper" style = "padding: 20px">
	<div class="row">
		<div class="col-lg-12">
	        <h3 class="page-header text-asbestos">Dashboard</h3>
	    </div>
	</div>

	<!--
	1) Setup Information - Display only under the following conditions:
	- Smartwatch has not been setup and linked with the user account.
	- Patient is not linked with the account data.

	<div class="row">
    	<div class="col-lg-12"><div class="jumbotron">
	        <h1>Welcome!</h1>
	        <p>You are almost with completing the setup process! Just a few more things to setup and you're all good to go!</p>
			<br />
	        <p><a class="btn btn-primary btn-lg" role="button">Continue</a></p>
    	</div></div>
    </div>


	2) If a tracking session is active, show a static map - without the path markings of the patient.
	- Just show a marker with where the patient is located.
	- How long he has traveled
	- How far he has walked out of the house

	3) If a tracking session is not active, show just a generic welcome with quick access links to some of the most commonly used features.
	- Something like quick links essentially so that users can quickly go to where they need to.
</div>
	-->


<br/>
<div class = "row">
	<div class = "panel panel-default">
		<span style = "padding: 15px">
			<span class = "glyphicon glyphicon-stats"></span>
			<div class = "panel-heading" style = 'display: inline'>Wandering Incidents</div>
		 </span>

		<div class = "panel-body">

			<div class = "col-lg-12">
				<div id = "incidentChart" style = "height: 300px; padding: 20px">
				</div>
			</div>
			</div>
	</div>
</div>
<br />


<div class = "row">
	<div class = "col-md-4">
		<div class = "panel  panel-primary text-center panel-eycandy">
			<div class = "panel-body asbestos">
				<i class = "fa fa-bar-chart-o fa-3x"></i>
				<h3>30</h3>
			</div>
			<div class = "panel-footer">
				<span class = "panel-eyecandy-title">
					Site Visits This Month
				</span>
			</div>

		</div>
	</div>
		<div class = "col-md-4">
		<div class = "panel  panel-primary text-center panel-eycandy">
			<div class = "panel-body theme-color">
				<i class = "fa fa-users fa-3x"></i>
				<h3>15</h3>
			</div>
			<div class = "panel-footer">
				<span class = "panel-eyecandy-title">
					Check-Ins With Patient This Month
				</span>
			</div>

		</div>
	</div>
		<div class = "col-md-4">
		<div class = "panel  panel-primary text-center panel-eycandy">
			<div class = "panel-body asbestos">
				<i class = "fa fa-location-arrow fa-3x"></i>
				<h3>Market</h3> <!-- Get from db -->
			</div>
			<div class = "panel-footer">
				<span class = "panel-eyecandy-title">
					Current Patient Destination
				</span>
			</div>

		</div>
	</div>
</div>

<div class = "row">
	<div class = "col-lg-12">
		<div class = "panel panel-default">
			<div class = "panel-heading">
				<i class = "fa fa-clock-o fa-fw"></i> Timeline
				
			</div>
			
			<div class = "panel-body">
				<ul class = "timeline">
					<li>
						<div class = "timeline-panel">
							<div class = "timeline-heading">
								<h4 class = "timeline-heading">Patient Left House</h4>
								<p>
									<small class = "muted">5:20 AM</small>
								</p>
							</div>
							<div class = "timeline-body">
								Patient walked to  <a href = "accountSettings#locations">Park.</a>  <!-- Walked and park would be changeable -->
							</div>
						</div>
					</li>
					<li class = "timeline-inverted">
						
						<div class = "timeline-panel">
							
							<div class = "timeline-heading">
								<h4 class = "timeline-heading">Patient Arrived at House</h4>
								<p>
									<small class = "muted">7:00 AM</small>
								</p>
							</div>
							<div class = "timeline-body">
								Patient came back from <a href = "accountSettings#locations">Park.</a>  <!-- Park would be changeable -->
							</div>
						</div>
					</li>
					<li>
						<div class = "timeline-panel">
							<div class = "timeline-heading">
								<h4 class = "timeline-heading">Patient Left House</h4>
								<p>
									<small class = "muted">3:00</small>
								</p>
							</div>
							<div class = "timeline-body">
								Patient drove to  <a href = "accountSettings#locations">Market.</a>  <!-- Drove and Market would be changeable -->
							</div>
						</div>
					</li>										
				</ul>
				
			</div>
		</div>
	</div>
</div>

</div>



</div>

<script type = "text/javascript">
	new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'incidentChart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
   	{ year: '2011', value: 20},
    { year: '2012', value: 17 },
    { year: '2013', value: 12 },
    { year: '2014', value: 4 },
    { year: '2015', value: 1 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Incidents']
});
</script>

<script>
Morris.Donut({
  element: 'frequentPlaces',
  data: [
    {label: "Park", value: '70'},
    {label: "In-Store Sales", value: '20'},
    {label: "Mail-Order Sales", value: '10'}
  ]
});

</script>
	