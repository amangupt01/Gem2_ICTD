<!DOCTYPE html>
<html>
<head>
	<title>List of Districts</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="library/material_design_table.js"></script>
<link rel="stylesheet" type="text/css" href="library/material_design_table.css">

<script src="https://d3js.org/d3.v4.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="scripts/css/nv.d3.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="scripts/css/interlocks.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js" charset="utf-8"></script>
<script src="scripts/js/nv.d3.js"></script>
<script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>
<style type="text/css">
	body {
	    /*font-family: 'Open Sans', 'serif';*/
	    /*font-size: 22px;*/
	}
	#navID ul li ul {
		max-height: 300px;
		font-family: 'Montserrat', 'serif';
		font-size: 14px;
		z-index: 10000;
		/* you can change as you need it */
		/* to get scroll */
		/*background: blue;*/
		color: #05386b !important;
		background: #b8ffcb;
		text-align: center;

	}

	#navID ul li ul li a:hover {
		z-index: 10000;
		/* you can change as you need it */
		/* to get scroll */
		/*background: blue;*/
		font-family: 'Montserrat', 'serif';
		font-size: 14px;
		background: #5cdb95;

		color: #05386b !important;
		text-align: center;
		letter-spacing: 0.5px;

	}

	#navID ul li a {

		font-family: 'Montserrat', 'serif';
		font-size: 14px;
		/* you can change as you need it */
		/* to get scroll */
		/*background: blue;*/
		color: #05386b !important;
	}
	/*#navID ul li ul{*/
		/*max-height:300px; you can change as you need it */
		/*overflow:auto; to get scroll */
	/*}*/
	#hist { 
		height: 300px;
		width: 450px;
		margin: auto;
	}
	#map { 
		height: 500px;
		width: 500px;
	 }
	 #main-table {
		margin: auto;
	 }
	.info {
		padding: 6px 8px;
		font: 14px/16px Arial, Helvetica, sans-serif;
		background: white;
		background: rgba(255,255,255,0.8);
		box-shadow: 0 0 15px rgba(0,0,0,0.2);
		border-radius: 5px;
	}
	.info h4 {
		margin: 0 0 5px;
		color: #777;
	}
	.info h6 {
		margin: 0 0 2px;
		color: #777;
	}
	.faqHeader {
		font-size: 27px;
		margin: 20px;
	}
	h1 {
		margin: 15px auto;
		text-align: center;
	}
	h4 {
		margin: 10px auto;
		text-align: center;
	}

	.one {
		width: 100%;
		height: 180px;
		color: #05386b !important;
		background: #4FA543 !important;
	}

	.two {
		background: #4FA543 !important;
		width: 100%;
		height: 70px;
		color: #05386b !important;
	}

	.panel-heading [data-toggle="collapse"]:after {
		font-family: 'Glyphicons Halflings';
		content: "\e072"; /*glyphicon glyphicon-chevron-righe072" "play" icon */
		float: right;
		color: #F58723;
		font-size: 18px;
		line-height: 22px;
		/* rotate "play" icon from > (right arrow) to down arrow */
		-webkit-transform: rotate(-90deg);
		-moz-transform: rotate(-90deg);
		-ms-transform: rotate(-90deg);
		-o-transform: rotate(-90deg);
		transform: rotate(-90deg);
	}

	.panel-heading [data-toggle="collapse"].collapsed:after {
		/* rotate "play" icon from > (right arrow) to ^ (up arrow) */
		-webkit-transform: rotate(90deg);
		-moz-transform: rotate(90deg);
		-ms-transform: rotate(90deg);
		-o-transform: rotate(90deg);
		transform: rotate(90deg);
		color: #454444;
	}
</style>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script>
	$(function () {
		$("#header").load("header.html");
		$("#footer").load("footer.html");
	});
</script>

<body>
	<div id="header"></div>
<section class="w3-container w3-center" style="max-width:2000px">
</section> 

<!-- Navigation -->
<nav class="navbar navbar-inverse header" id="navID">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hypothesis 1<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="hypo-1-bf.html">BF</a></li>
					<li><a href="hypo-1-fc.html">FC</a></li>
					<li><a href="hypo-1-chh.html">CHH</a></li>
					<li><a href="hypo-1-msl.html">MSL</a></li>
					<li><a href="hypo-1-msw.html">MSW</a></li>
					<li><a href="hypo-1-asset.html">ASSET</a></li>
				</ul>
			</li>
			<li><a href="hypo-2.html">Hypothesis 2</a></li>
			<li><a href="hypo-3.html">Hypothesis 3</a></li>
			<li><a href="hypo-4.html">Hypothesis 4</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hypothesis 5<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="hypo-5-bf.html">BF</a></li>
					<li><a href="hypo-5-fc.html">FC</a></li>
					<li><a href="hypo-5-chh.html">CHH</a></li>
					<li><a href="hypo-5-msl.html">MSL</a></li>
					<li><a href="hypo-5-msw.html">MSW</a></li>
					<li><a href="hypo-5-asset.html">ASSET</a></li>
				</ul>
			</li>
			<li><a href="hypo-6.html">Hypothesis 6</a></li>
			<li><a href="list-of-districts.php">List of Districts</a></li>
			<!-- <li><a href="future-pred.html">Satellite-Based Prediction</a></li> -->
			</li>
		</ul>
	</div>
</nav> 

<h1 style="text-align: center;color: #05386b !important;">List of All Districts</h1>
<center>
<i><h3 style="text-align: center;color: #555555 !important;">Click on a district to know more about it
</h3></i>
</center>
<center></center>

<center>
	<div class="table-responsive-vertical shadow-z-1" id="demo1">
		<table id="table" class="table table-hover table-mc-red">
			<thead>
				<tr>
					<th title="Field #1">Census Code</th>
					<th title="Field #2">State</th>
					<th title="Field #3">District</th>
				</tr>
			</thead>
			<tr>
				<td>1</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=1">Kupwara</a></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=2">Badgam</a></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=3">Leh</a></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=4">Kargil</a></td>
			</tr>
			<tr>
				<td>5</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=5">Punch</a></td>
			</tr>
			<tr>
				<td>6</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=6">Rajauri</a></td>
			</tr>
			<tr>
				<td>7</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=7">Kathua</a></td>
			</tr>
			<tr>
				<td>8</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=8">Baramula</a></td>
			</tr>
			<tr>
				<td>10</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=10">Srinagar</a></td>
			</tr>
			<tr>
				<td>12</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=12">Pulwama</a></td>
			</tr>
			<tr>
				<td>14</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=14">Anantnag</a></td>
			</tr>
			<tr>
				<td>16</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=16">Doda</a></td>
			</tr>
			<tr>
				<td>19</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=19">Udhampur</a></td>
			</tr>
			<tr>
				<td>21</td>
				<td>Jammu & Kashmir</td>
				<td><a href="main-district-page.php?censuscode=21">Jammu</a></td>
			</tr>
			<tr>
				<td>23</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=23">Chamba</a></td>
			</tr>
			<tr>
				<td>24</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=24">Kangra</a></td>
			</tr>
			<tr>
				<td>25</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=25">Lahul & Spiti</a></td>
			</tr>
			<tr>
				<td>26</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=26">Kullu</a></td>
			</tr>
			<tr>
				<td>27</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=27">Mandi</a></td>
			</tr>
			<tr>
				<td>28</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=28">Hamirpur</a></td>
			</tr>
			<tr>
				<td>29</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=29">Una</a></td>
			</tr>
			<tr>
				<td>30</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=30">Bilaspur</a></td>
			</tr>
			<tr>
				<td>31</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=31">Solan</a></td>
			</tr>
			<tr>
				<td>32</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=32">Sirmaur</a></td>
			</tr>
			<tr>
				<td>33</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=33">Shimla</a></td>
			</tr>
			<tr>
				<td>34</td>
				<td>Himachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=34">Kinnaur</a></td>
			</tr>
			<tr>
				<td>35</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=35">Gurdaspur</a></td>
			</tr>
			<tr>
				<td>36</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=36">Kapurthala</a></td>
			</tr>
			<tr>
				<td>37</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=37">Jalandhar</a></td>
			</tr>
			<tr>
				<td>38</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=38">Hoshiarpur</a></td>
			</tr>
			<tr>
				<td>39</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=39">Nawanshahr </a></td>
			</tr>
			<tr>
				<td>40</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=40">Fatehgarh Sahib</a></td>
			</tr>
			<tr>
				<td>41</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=41">Ludhiana</a></td>
			</tr>
			<tr>
				<td>42</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=42">Moga</a></td>
			</tr>
			<tr>
				<td>43</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=43">Firozpur</a></td>
			</tr>
			<tr>
				<td>44</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=44">Muktsar</a></td>
			</tr>
			<tr>
				<td>45</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=45">Faridkot</a></td>
			</tr>
			<tr>
				<td>46</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=46">Bathinda</a></td>
			</tr>
			<tr>
				<td>47</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=47">Mansa</a></td>
			</tr>
			<tr>
				<td>48</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=48">Patiala</a></td>
			</tr>
			<tr>
				<td>49</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=49">Amritsar</a></td>
			</tr>
			<tr>
				<td>51</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=51">Rupnagar</a></td>
			</tr>
			<tr>
				<td>53</td>
				<td>Punjab</td>
				<td><a href="main-district-page.php?censuscode=53">Sangrur</a></td>
			</tr>
			<tr>
				<td>55</td>
				<td>Chandigarh</td>
				<td><a href="main-district-page.php?censuscode=55">Chandigarh</a></td>
			</tr>
			<tr>
				<td>56</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=56">Uttarkashi</a></td>
			</tr>
			<tr>
				<td>57</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=57">Chamoli</a></td>
			</tr>
			<tr>
				<td>58</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=58">Rudraprayag</a></td>
			</tr>
			<tr>
				<td>59</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=59">Tehri Garhwal</a></td>
			</tr>
			<tr>
				<td>60</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=60">Dehradun</a></td>
			</tr>
			<tr>
				<td>61</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=61">Garhwal</a></td>
			</tr>
			<tr>
				<td>62</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=62">Pithoragarh</a></td>
			</tr>
			<tr>
				<td>63</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=63">Bageshwar</a></td>
			</tr>
			<tr>
				<td>64</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=64">Almora</a></td>
			</tr>
			<tr>
				<td>65</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=65">Champawat</a></td>
			</tr>
			<tr>
				<td>66</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=66">Nainital</a></td>
			</tr>
			<tr>
				<td>67</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=67">Udham Singh Nagar</a></td>
			</tr>
			<tr>
				<td>68</td>
				<td>Uttarakhand</td>
				<td><a href="main-district-page.php?censuscode=68">Hardwar</a></td>
			</tr>
			<tr>
				<td>69</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=69">Panchkula</a></td>
			</tr>
			<tr>
				<td>70</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=70">Ambala</a></td>
			</tr>
			<tr>
				<td>71</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=71">Yamunanagar</a></td>
			</tr>
			<tr>
				<td>72</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=72">Kurukshetra</a></td>
			</tr>
			<tr>
				<td>73</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=73">Kaithal</a></td>
			</tr>
			<tr>
				<td>74</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=74">Karnal</a></td>
			</tr>
			<tr>
				<td>75</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=75">Panipat</a></td>
			</tr>
			<tr>
				<td>76</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=76">Sonipat</a></td>
			</tr>
			<tr>
				<td>77</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=77">Jind</a></td>
			</tr>
			<tr>
				<td>78</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=78">Fatehabad</a></td>
			</tr>
			<tr>
				<td>79</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=79">Sirsa</a></td>
			</tr>
			<tr>
				<td>80</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=80">Hisar</a></td>
			</tr>
			<tr>
				<td>81</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=81">Bhiwani</a></td>
			</tr>
			<tr>
				<td>82</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=82">Rohtak</a></td>
			</tr>
			<tr>
				<td>83</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=83">Jhajjar</a></td>
			</tr>
			<tr>
				<td>84</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=84">Mahendragarh</a></td>
			</tr>
			<tr>
				<td>85</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=85">Rewari</a></td>
			</tr>
			<tr>
				<td>86</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=86">Gurgaon</a></td>
			</tr>
			<tr>
				<td>88</td>
				<td>Haryana</td>
				<td><a href="main-district-page.php?censuscode=88">Faridabad</a></td>
			</tr>
			<tr>
				<td>90</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=90">North West </a></td>
			</tr>
			<tr>
				<td>91</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=91">North</a></td>
			</tr>
			<tr>
				<td>92</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=92">North East</a></td>
			</tr>
			<tr>
				<td>93</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=93">East</a></td>
			</tr>
			<tr>
				<td>94</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=94">New Delhi</a></td>
			</tr>
			<tr>
				<td>95</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=95">Central</a></td>
			</tr>
			<tr>
				<td>96</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=96">West</a></td>
			</tr>
			<tr>
				<td>97</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=97">South West</a></td>
			</tr>
			<tr>
				<td>98</td>
				<td>Nct Of Delhi</td>
				<td><a href="main-district-page.php?censuscode=98">South</a></td>
			</tr>
			<tr>
				<td>99</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=99">Ganganagar</a></td>
			</tr>
			<tr>
				<td>100</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=100">Hanumangarh</a></td>
			</tr>
			<tr>
				<td>101</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=101">Bikaner</a></td>
			</tr>
			<tr>
				<td>102</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=102">Churu</a></td>
			</tr>
			<tr>
				<td>103</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=103">Jhunjhunun</a></td>
			</tr>
			<tr>
				<td>104</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=104">Alwar</a></td>
			</tr>
			<tr>
				<td>105</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=105">Bharatpur</a></td>
			</tr>
			<tr>
				<td>106</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=106">Dhaulpur</a></td>
			</tr>
			<tr>
				<td>107</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=107">Karauli</a></td>
			</tr>
			<tr>
				<td>108</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=108">Sawai Madhopur</a></td>
			</tr>
			<tr>
				<td>109</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=109">Dausa</a></td>
			</tr>
			<tr>
				<td>110</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=110">Jaipur</a></td>
			</tr>
			<tr>
				<td>111</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=111">Sikar</a></td>
			</tr>
			<tr>
				<td>112</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=112">Nagaur</a></td>
			</tr>
			<tr>
				<td>113</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=113">Jodhpur</a></td>
			</tr>
			<tr>
				<td>114</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=114">Jaisalmer</a></td>
			</tr>
			<tr>
				<td>115</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=115">Barmer</a></td>
			</tr>
			<tr>
				<td>116</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=116">Jalor</a></td>
			</tr>
			<tr>
				<td>117</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=117">Sirohi</a></td>
			</tr>
			<tr>
				<td>118</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=118">Pali</a></td>
			</tr>
			<tr>
				<td>119</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=119">Ajmer</a></td>
			</tr>
			<tr>
				<td>120</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=120">Tonk</a></td>
			</tr>
			<tr>
				<td>121</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=121">Bundi</a></td>
			</tr>
			<tr>
				<td>122</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=122">Bhilwara</a></td>
			</tr>
			<tr>
				<td>123</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=123">Rajsamand</a></td>
			</tr>
			<tr>
				<td>124</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=124">Dungarpur</a></td>
			</tr>
			<tr>
				<td>125</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=125">Banswara</a></td>
			</tr>
			<tr>
				<td>126</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=126">Chittaurgarh</a></td>
			</tr>
			<tr>
				<td>127</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=127">Kota</a></td>
			</tr>
			<tr>
				<td>128</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=128">Baran</a></td>
			</tr>
			<tr>
				<td>129</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=129">Jhalawar</a></td>
			</tr>
			<tr>
				<td>130</td>
				<td>Rajasthan</td>
				<td><a href="main-district-page.php?censuscode=130">Udaipur</a></td>
			</tr>
			<tr>
				<td>132</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=132">Saharanpur</a></td>
			</tr>
			<tr>
				<td>133</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=133">Muzaffarnagar</a></td>
			</tr>
			<tr>
				<td>134</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=134">Bijnor</a></td>
			</tr>
			<tr>
				<td>135</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=135">Moradabad</a></td>
			</tr>
			<tr>
				<td>136</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=136">Rampur</a></td>
			</tr>
			<tr>
				<td>137</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=137">Jyotiba Phule Nagar</a></td>
			</tr>
			<tr>
				<td>138</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=138">Meerut</a></td>
			</tr>
			<tr>
				<td>139</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=139">Baghpat</a></td>
			</tr>
			<tr>
				<td>140</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=140">Ghaziabad</a></td>
			</tr>
			<tr>
				<td>141</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=141">Gautam Buddha Nagar</a></td>
			</tr>
			<tr>
				<td>142</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=142">Bulandshahar </a></td>
			</tr>
			<tr>
				<td>143</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=143">Aligarh</a></td>
			</tr>
			<tr>
				<td>144</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=144">Hathras </a></td>
			</tr>
			<tr>
				<td>145</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=145">Mathura</a></td>
			</tr>
			<tr>
				<td>146</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=146">Agra</a></td>
			</tr>
			<tr>
				<td>147</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=147">Firozabad</a></td>
			</tr>
			<tr>
				<td>148</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=148">Mainpuri</a></td>
			</tr>
			<tr>
				<td>149</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=149">Budaun</a></td>
			</tr>
			<tr>
				<td>150</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=150">Bareilly</a></td>
			</tr>
			<tr>
				<td>151</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=151">Pilibhit</a></td>
			</tr>
			<tr>
				<td>152</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=152">Shahjahanpur</a></td>
			</tr>
			<tr>
				<td>153</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=153">Kheri</a></td>
			</tr>
			<tr>
				<td>154</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=154">Sitapur</a></td>
			</tr>
			<tr>
				<td>155</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=155">Hardoi</a></td>
			</tr>
			<tr>
				<td>156</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=156">Unnao</a></td>
			</tr>
			<tr>
				<td>157</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=157">Lucknow</a></td>
			</tr>
			<tr>
				<td>158</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=158">Rae Bareli</a></td>
			</tr>
			<tr>
				<td>159</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=159">Farrukhabad</a></td>
			</tr>
			<tr>
				<td>160</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=160">Kannauj</a></td>
			</tr>
			<tr>
				<td>161</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=161">Etawah</a></td>
			</tr>
			<tr>
				<td>162</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=162">Auraiya</a></td>
			</tr>
			<tr>
				<td>163</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=163">Kanpur Dehat</a></td>
			</tr>
			<tr>
				<td>164</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=164">Kanpur Nagar</a></td>
			</tr>
			<tr>
				<td>165</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=165">Jalaun </a></td>
			</tr>
			<tr>
				<td>166</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=166">Jhansi</a></td>
			</tr>
			<tr>
				<td>167</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=167">Lalitpur</a></td>
			</tr>
			<tr>
				<td>168</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=168">Hamirpur</a></td>
			</tr>
			<tr>
				<td>169</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=169">Mahoba</a></td>
			</tr>
			<tr>
				<td>170</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=170">Banda</a></td>
			</tr>
			<tr>
				<td>171</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=171">Chitrakoot</a></td>
			</tr>
			<tr>
				<td>172</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=172">Fatehpur</a></td>
			</tr>
			<tr>
				<td>173</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=173">Pratapgarh</a></td>
			</tr>
			<tr>
				<td>174</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=174">Kaushambi</a></td>
			</tr>
			<tr>
				<td>175</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=175">Allahabad </a></td>
			</tr>
			<tr>
				<td>176</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=176">Barabanki</a></td>
			</tr>
			<tr>
				<td>177</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=177">Faizabad</a></td>
			</tr>
			<tr>
				<td>178</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=178">Ambedkar Nagar</a></td>
			</tr>
			<tr>
				<td>179</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=179">Sultanpur</a></td>
			</tr>
			<tr>
				<td>180</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=180">Bahraich</a></td>
			</tr>
			<tr>
				<td>181</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=181">Shrawasti</a></td>
			</tr>
			<tr>
				<td>182</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=182">Balrampur</a></td>
			</tr>
			<tr>
				<td>183</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=183">Gonda</a></td>
			</tr>
			<tr>
				<td>184</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=184">Siddharthnagar</a></td>
			</tr>
			<tr>
				<td>185</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=185">Basti</a></td>
			</tr>
			<tr>
				<td>186</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=186">Sant Kabir Nagar</a></td>
			</tr>
			<tr>
				<td>187</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=187">Mahrajganj</a></td>
			</tr>
			<tr>
				<td>188</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=188">Gorakhpur</a></td>
			</tr>
			<tr>
				<td>189</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=189">Kushinagar</a></td>
			</tr>
			<tr>
				<td>190</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=190">Deoria</a></td>
			</tr>
			<tr>
				<td>191</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=191">Azamgarh</a></td>
			</tr>
			<tr>
				<td>192</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=192">Mau</a></td>
			</tr>
			<tr>
				<td>193</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=193">Ballia</a></td>
			</tr>
			<tr>
				<td>194</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=194">Jaunpur</a></td>
			</tr>
			<tr>
				<td>195</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=195">Ghazipur</a></td>
			</tr>
			<tr>
				<td>196</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=196">Chandauli</a></td>
			</tr>
			<tr>
				<td>197</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=197">Varanasi</a></td>
			</tr>
			<tr>
				<td>198</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=198">Sant Ravidas Nagar Bhadohi</a></td>
			</tr>
			<tr>
				<td>199</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=199">Mirzapur</a></td>
			</tr>
			<tr>
				<td>200</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=200">Sonbhadra</a></td>
			</tr>
			<tr>
				<td>201</td>
				<td>Uttar Pradesh</td>
				<td><a href="main-district-page.php?censuscode=201">Etah</a></td>
			</tr>
			<tr>
				<td>203</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=203">Pashchim Champaran</a></td>
			</tr>
			<tr>
				<td>204</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=204">Purba Champaran</a></td>
			</tr>
			<tr>
				<td>205</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=205">Sheohar</a></td>
			</tr>
			<tr>
				<td>206</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=206">Sitamarhi</a></td>
			</tr>
			<tr>
				<td>207</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=207">Madhubani</a></td>
			</tr>
			<tr>
				<td>208</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=208">Supaul</a></td>
			</tr>
			<tr>
				<td>209</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=209">Araria</a></td>
			</tr>
			<tr>
				<td>210</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=210">Kishanganj</a></td>
			</tr>
			<tr>
				<td>211</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=211">Purnia</a></td>
			</tr>
			<tr>
				<td>212</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=212">Katihar</a></td>
			</tr>
			<tr>
				<td>213</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=213">Madhepura</a></td>
			</tr>
			<tr>
				<td>214</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=214">Saharsa</a></td>
			</tr>
			<tr>
				<td>215</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=215">Darbhanga</a></td>
			</tr>
			<tr>
				<td>216</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=216">Muzaffarpur</a></td>
			</tr>
			<tr>
				<td>217</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=217">Gopalganj</a></td>
			</tr>
			<tr>
				<td>218</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=218">Siwan</a></td>
			</tr>
			<tr>
				<td>219</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=219">Saran</a></td>
			</tr>
			<tr>
				<td>220</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=220">Vaishali</a></td>
			</tr>
			<tr>
				<td>221</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=221">Samastipur</a></td>
			</tr>
			<tr>
				<td>222</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=222">Begusarai</a></td>
			</tr>
			<tr>
				<td>223</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=223">Khagaria</a></td>
			</tr>
			<tr>
				<td>224</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=224">Bhagalpur</a></td>
			</tr>
			<tr>
				<td>225</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=225">Banka</a></td>
			</tr>
			<tr>
				<td>226</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=226">Munger</a></td>
			</tr>
			<tr>
				<td>227</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=227">Lakhisarai</a></td>
			</tr>
			<tr>
				<td>228</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=228">Sheikhpura</a></td>
			</tr>
			<tr>
				<td>229</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=229">Nalanda</a></td>
			</tr>
			<tr>
				<td>230</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=230">Patna</a></td>
			</tr>
			<tr>
				<td>231</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=231">Bhojpur</a></td>
			</tr>
			<tr>
				<td>232</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=232">Buxar</a></td>
			</tr>
			<tr>
				<td>233</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=233">Kaimur</a></td>
			</tr>
			<tr>
				<td>234</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=234">Rohtas</a></td>
			</tr>
			<tr>
				<td>235</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=235">Aurangabad</a></td>
			</tr>
			<tr>
				<td>236</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=236">Gaya</a></td>
			</tr>
			<tr>
				<td>237</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=237">Nawada</a></td>
			</tr>
			<tr>
				<td>238</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=238">Jamui</a></td>
			</tr>
			<tr>
				<td>239</td>
				<td>Bihar</td>
				<td><a href="main-district-page.php?censuscode=239">Jehanabad </a></td>
			</tr>
			<tr>
				<td>241</td>
				<td>Sikkim</td>
				<td><a href="main-district-page.php?censuscode=241">North </a></td>
			</tr>
			<tr>
				<td>242</td>
				<td>Sikkim</td>
				<td><a href="main-district-page.php?censuscode=242">West</a></td>
			</tr>
			<tr>
				<td>243</td>
				<td>Sikkim</td>
				<td><a href="main-district-page.php?censuscode=243">South</a></td>
			</tr>
			<tr>
				<td>244</td>
				<td>Sikkim</td>
				<td><a href="main-district-page.php?censuscode=244">East</a></td>
			</tr>
			<tr>
				<td>245</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=245">Tawang</a></td>
			</tr>
			<tr>
				<td>246</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=246">West Kameng</a></td>
			</tr>
			<tr>
				<td>247</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=247">East Kameng</a></td>
			</tr>
			<tr>
				<td>248</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=248">Papum Pare</a></td>
			</tr>
			<tr>
				<td>249</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=249">Upper Subansiri</a></td>
			</tr>
			<tr>
				<td>250</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=250">West Siang</a></td>
			</tr>
			<tr>
				<td>251</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=251">East Siang</a></td>
			</tr>
			<tr>
				<td>252</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=252">Upper Siang</a></td>
			</tr>
			<tr>
				<td>253</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=253">Changlang</a></td>
			</tr>
			<tr>
				<td>254</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=254">Tirap</a></td>
			</tr>
			<tr>
				<td>255</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=255">Lower Subansiri</a></td>
			</tr>
			<tr>
				<td>257</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=257">Dibang Valley</a></td>
			</tr>
			<tr>
				<td>259</td>
				<td>Arunachal Pradesh</td>
				<td><a href="main-district-page.php?censuscode=259">Lohit</a></td>
			</tr>
			<tr>
				<td>261</td>
				<td>Nagaland</td>
				<td><a href="main-district-page.php?censuscode=261">Mon</a></td>
			</tr>
			<tr>
				<td>262</td>
				<td>Nagaland</td>
				<td><a href="main-district-page.php?censuscode=262">Mokokchung</a></td>
			</tr>
			<tr>
				<td>263</td>
				<td>Nagaland</td>
				<td><a href="main-district-page.php?censuscode=263">Zunheboto</a></td>
			</tr>
			<tr>
				<td>264</td>
				<td>Nagaland</td>
				<td><a href="main-district-page.php?censuscode=264">Wokha</a></td>
			</tr>
			<tr>
				<td>265</td>
				<td>Nagaland</td>
				<td><a href="main-district-page.php?censuscode=265">Dimapur</a></td>
			</tr>
			<tr>
				<td>266</td>
				<td>Nagaland</td>
				<td><a href="main-district-page.php?censuscode=266">Phek</a></td>
			</tr>
			<tr>
				<td>267</td>
				<td>Nagaland</td>
				<td><a href="main-district-page.php?censuscode=267">Tuensang</a></td>
			</tr>
			<tr>
				<td>270</td>
				<td>Nagaland</td>
				<td><a href="main-district-page.php?censuscode=270">Kohima</a></td>
			</tr>
			<tr>
				<td>272</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=272">Senapati</a></td>
			</tr>
			<tr>
				<td>273</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=273">Tamenglong</a></td>
			</tr>
			<tr>
				<td>274</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=274">Churachandpur</a></td>
			</tr>
			<tr>
				<td>275</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=275">Bishnupur</a></td>
			</tr>
			<tr>
				<td>276</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=276">Thoubal</a></td>
			</tr>
			<tr>
				<td>277</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=277">Imphal West</a></td>
			</tr>
			<tr>
				<td>278</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=278">Imphal East</a></td>
			</tr>
			<tr>
				<td>279</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=279">Ukhrul</a></td>
			</tr>
			<tr>
				<td>280</td>
				<td>Manipur</td>
				<td><a href="main-district-page.php?censuscode=280">Chandel</a></td>
			</tr>
			<tr>
				<td>281</td>
				<td>Mizoram</td>
				<td><a href="main-district-page.php?censuscode=281">Mamit</a></td>
			</tr>
			<tr>
				<td>282</td>
				<td>Mizoram</td>
				<td><a href="main-district-page.php?censuscode=282">Kolasib</a></td>
			</tr>
			<tr>
				<td>283</td>
				<td>Mizoram</td>
				<td><a href="main-district-page.php?censuscode=283">Aizawl</a></td>
			</tr>
			<tr>
				<td>284</td>
				<td>Mizoram</td>
				<td><a href="main-district-page.php?censuscode=284">Champhai</a></td>
			</tr>
			<tr>
				<td>285</td>
				<td>Mizoram</td>
				<td><a href="main-district-page.php?censuscode=285">Serchhip</a></td>
			</tr>
			<tr>
				<td>286</td>
				<td>Mizoram</td>
				<td><a href="main-district-page.php?censuscode=286">Lunglei</a></td>
			</tr>
			<tr>
				<td>287</td>
				<td>Mizoram</td>
				<td><a href="main-district-page.php?censuscode=287">Lawngtlai</a></td>
			</tr>
			<tr>
				<td>288</td>
				<td>Mizoram</td>
				<td><a href="main-district-page.php?censuscode=288">Saiha</a></td>
			</tr>
			<tr>
				<td>289</td>
				<td>Tripura</td>
				<td><a href="main-district-page.php?censuscode=289">West Tripura </a></td>
			</tr>
			<tr>
				<td>290</td>
				<td>Tripura</td>
				<td><a href="main-district-page.php?censuscode=290">South Tripura </a></td>
			</tr>
			<tr>
				<td>291</td>
				<td>Tripura</td>
				<td><a href="main-district-page.php?censuscode=291">Dhalai</a></td>
			</tr>
			<tr>
				<td>292</td>
				<td>Tripura</td>
				<td><a href="main-district-page.php?censuscode=292">North Tripura </a></td>
			</tr>
			<tr>
				<td>293</td>
				<td>Meghalaya</td>
				<td><a href="main-district-page.php?censuscode=293">West Garo Hills</a></td>
			</tr>
			<tr>
				<td>294</td>
				<td>Meghalaya</td>
				<td><a href="main-district-page.php?censuscode=294">East Garo Hills</a></td>
			</tr>
			<tr>
				<td>295</td>
				<td>Meghalaya</td>
				<td><a href="main-district-page.php?censuscode=295">South Garo Hills</a></td>
			</tr>
			<tr>
				<td>296</td>
				<td>Meghalaya</td>
				<td><a href="main-district-page.php?censuscode=296">West Khasi Hills</a></td>
			</tr>
			<tr>
				<td>297</td>
				<td>Meghalaya</td>
				<td><a href="main-district-page.php?censuscode=297">Ri Bhoi</a></td>
			</tr>
			<tr>
				<td>298</td>
				<td>Meghalaya</td>
				<td><a href="main-district-page.php?censuscode=298">East Khasi Hills</a></td>
			</tr>
			<tr>
				<td>299</td>
				<td>Meghalaya</td>
				<td><a href="main-district-page.php?censuscode=299">Jaintia Hills</a></td>
			</tr>
			<tr>
				<td>300</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=300">Kokrajhar</a></td>
			</tr>
			<tr>
				<td>301</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=301">Dhubri</a></td>
			</tr>
			<tr>
				<td>302</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=302">Goalpara</a></td>
			</tr>
			<tr>
				<td>303</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=303">Barpeta</a></td>
			</tr>
			<tr>
				<td>304</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=304">Marigaon</a></td>
			</tr>
			<tr>
				<td>305</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=305">Nagaon</a></td>
			</tr>
			<tr>
				<td>306</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=306">Sonitpur</a></td>
			</tr>
			<tr>
				<td>307</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=307">Lakhimpur</a></td>
			</tr>
			<tr>
				<td>308</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=308">Dhemaji</a></td>
			</tr>
			<tr>
				<td>309</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=309">Tinsukia</a></td>
			</tr>
			<tr>
				<td>310</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=310">Dibrugarh</a></td>
			</tr>
			<tr>
				<td>311</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=311">Sibsagar</a></td>
			</tr>
			<tr>
				<td>312</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=312">Jorhat</a></td>
			</tr>
			<tr>
				<td>313</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=313">Golaghat</a></td>
			</tr>
			<tr>
				<td>314</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=314">Karbi Anglong</a></td>
			</tr>
			<tr>
				<td>315</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=315">North Cachar Hills</a></td>
			</tr>
			<tr>
				<td>316</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=316">Cachar</a></td>
			</tr>
			<tr>
				<td>317</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=317">Karimganj</a></td>
			</tr>
			<tr>
				<td>318</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=318">Hailakandi</a></td>
			</tr>
			<tr>
				<td>319</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=319">Bongaigaon</a></td>
			</tr>
			<tr>
				<td>321</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=321">Kamrup</a></td>
			</tr>
			<tr>
				<td>323</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=323">Nalbari</a></td>
			</tr>
			<tr>
				<td>325</td>
				<td>Assam</td>
				<td><a href="main-district-page.php?censuscode=325">Darrang</a></td>
			</tr>
			<tr>
				<td>327</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=327">Darjiling </a></td>
			</tr>
			<tr>
				<td>328</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=328">Jalpaiguri </a></td>
			</tr>
			<tr>
				<td>329</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=329">Koch Bihar </a></td>
			</tr>
			<tr>
				<td>330</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=330">Uttar Dinajpur</a></td>
			</tr>
			<tr>
				<td>331</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=331">Dakshin Dinajpur</a></td>
			</tr>
			<tr>
				<td>332</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=332">Maldah </a></td>
			</tr>
			<tr>
				<td>333</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=333">Murshidabad </a></td>
			</tr>
			<tr>
				<td>334</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=334">Birbhum</a></td>
			</tr>
			<tr>
				<td>335</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=335">Barddhaman </a></td>
			</tr>
			<tr>
				<td>336</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=336">Nadia </a></td>
			</tr>
			<tr>
				<td>337</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=337">North Twenty Four Parganas</a></td>
			</tr>
			<tr>
				<td>338</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=338">Hugli </a></td>
			</tr>
			<tr>
				<td>339</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=339">Bankura </a></td>
			</tr>
			<tr>
				<td>340</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=340">Puruliya</a></td>
			</tr>
			<tr>
				<td>341</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=341">Haora </a></td>
			</tr>
			<tr>
				<td>342</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=342">Kolkata</a></td>
			</tr>
			<tr>
				<td>343</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=343">South  Twenty Four Parganas</a></td>
			</tr>
			<tr>
				<td>344</td>
				<td>West Bengal</td>
				<td><a href="main-district-page.php?censuscode=344">Medinipur </a></td>
			</tr>
			<tr>
				<td>346</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=346">Garhwa</a></td>
			</tr>
			<tr>
				<td>347</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=347">Chatra</a></td>
			</tr>
			<tr>
				<td>348</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=348">Kodarma</a></td>
			</tr>
			<tr>
				<td>349</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=349">Giridih</a></td>
			</tr>
			<tr>
				<td>350</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=350">Deoghar</a></td>
			</tr>
			<tr>
				<td>351</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=351">Godda</a></td>
			</tr>
			<tr>
				<td>352</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=352">Sahibganj</a></td>
			</tr>
			<tr>
				<td>353</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=353">Pakaur</a></td>
			</tr>
			<tr>
				<td>354</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=354">Dhanbad</a></td>
			</tr>
			<tr>
				<td>355</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=355">Bokaro</a></td>
			</tr>
			<tr>
				<td>356</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=356">Lohardaga</a></td>
			</tr>
			<tr>
				<td>357</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=357">Purbi Singhbhum</a></td>
			</tr>
			<tr>
				<td>358</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=358">Palamu</a></td>
			</tr>
			<tr>
				<td>360</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=360">Hazaribagh</a></td>
			</tr>
			<tr>
				<td>362</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=362">Dumka</a></td>
			</tr>
			<tr>
				<td>364</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=364">Ranchi</a></td>
			</tr>
			<tr>
				<td>366</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=366">Gumla</a></td>
			</tr>
			<tr>
				<td>368</td>
				<td>Jharkhand</td>
				<td><a href="main-district-page.php?censuscode=368">Pashchimi Singhbhum</a></td>
			</tr>
			<tr>
				<td>370</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=370">Bargarh</a></td>
			</tr>
			<tr>
				<td>371</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=371">Jharsuguda</a></td>
			</tr>
			<tr>
				<td>372</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=372">Sambalpur</a></td>
			</tr>
			<tr>
				<td>373</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=373">Debagarh</a></td>
			</tr>
			<tr>
				<td>374</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=374">Sundargarh</a></td>
			</tr>
			<tr>
				<td>375</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=375">Kendujhar</a></td>
			</tr>
			<tr>
				<td>376</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=376">Mayurbhanj</a></td>
			</tr>
			<tr>
				<td>377</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=377">Baleshwar</a></td>
			</tr>
			<tr>
				<td>378</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=378">Bhadrak</a></td>
			</tr>
			<tr>
				<td>379</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=379">Kendrapara</a></td>
			</tr>
			<tr>
				<td>380</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=380">Jagatsinghapur</a></td>
			</tr>
			<tr>
				<td>381</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=381">Cuttack</a></td>
			</tr>
			<tr>
				<td>382</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=382">Jajapur</a></td>
			</tr>
			<tr>
				<td>383</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=383">Dhenkanal</a></td>
			</tr>
			<tr>
				<td>384</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=384">Anugul</a></td>
			</tr>
			<tr>
				<td>385</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=385">Nayagarh</a></td>
			</tr>
			<tr>
				<td>386</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=386">Khordha</a></td>
			</tr>
			<tr>
				<td>387</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=387">Puri</a></td>
			</tr>
			<tr>
				<td>388</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=388">Ganjam</a></td>
			</tr>
			<tr>
				<td>389</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=389">Gajapati</a></td>
			</tr>
			<tr>
				<td>390</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=390">Kandhamal</a></td>
			</tr>
			<tr>
				<td>391</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=391">Baudh</a></td>
			</tr>
			<tr>
				<td>392</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=392">Sonapur</a></td>
			</tr>
			<tr>
				<td>393</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=393">Balangir</a></td>
			</tr>
			<tr>
				<td>394</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=394">Nuapada</a></td>
			</tr>
			<tr>
				<td>395</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=395">Kalahandi</a></td>
			</tr>
			<tr>
				<td>396</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=396">Rayagada</a></td>
			</tr>
			<tr>
				<td>397</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=397">Nabarangapur</a></td>
			</tr>
			<tr>
				<td>398</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=398">Koraput</a></td>
			</tr>
			<tr>
				<td>399</td>
				<td>Odisha</td>
				<td><a href="main-district-page.php?censuscode=399">Malkangiri</a></td>
			</tr>
			<tr>
				<td>400</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=400">Koriya</a></td>
			</tr>
			<tr>
				<td>401</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=401">Surguja</a></td>
			</tr>
			<tr>
				<td>402</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=402">Jashpur</a></td>
			</tr>
			<tr>
				<td>403</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=403">Raigarh</a></td>
			</tr>
			<tr>
				<td>404</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=404">Korba</a></td>
			</tr>
			<tr>
				<td>405</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=405">Janjgir - Champa</a></td>
			</tr>
			<tr>
				<td>406</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=406">Bilaspur</a></td>
			</tr>
			<tr>
				<td>407</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=407">Kawardha</a></td>
			</tr>
			<tr>
				<td>408</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=408">Rajnandgaon</a></td>
			</tr>
			<tr>
				<td>409</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=409">Durg</a></td>
			</tr>
			<tr>
				<td>410</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=410">Raipur</a></td>
			</tr>
			<tr>
				<td>411</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=411">Mahasamund</a></td>
			</tr>
			<tr>
				<td>412</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=412">Dhamtari</a></td>
			</tr>
			<tr>
				<td>413</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=413">Kanker</a></td>
			</tr>
			<tr>
				<td>414</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=414">Bastar</a></td>
			</tr>
			<tr>
				<td>416</td>
				<td>Chhattisgarh</td>
				<td><a href="main-district-page.php?censuscode=416">Dantewada</a></td>
			</tr>
			<tr>
				<td>418</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=418">Sheopur</a></td>
			</tr>
			<tr>
				<td>419</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=419">Morena</a></td>
			</tr>
			<tr>
				<td>420</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=420">Bhind</a></td>
			</tr>
			<tr>
				<td>421</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=421">Gwalior</a></td>
			</tr>
			<tr>
				<td>422</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=422">Datia</a></td>
			</tr>
			<tr>
				<td>423</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=423">Shivpuri</a></td>
			</tr>
			<tr>
				<td>424</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=424">Tikamgarh</a></td>
			</tr>
			<tr>
				<td>425</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=425">Chhatarpur</a></td>
			</tr>
			<tr>
				<td>426</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=426">Panna</a></td>
			</tr>
			<tr>
				<td>427</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=427">Sagar</a></td>
			</tr>
			<tr>
				<td>428</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=428">Damoh</a></td>
			</tr>
			<tr>
				<td>429</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=429">Satna</a></td>
			</tr>
			<tr>
				<td>430</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=430">Rewa</a></td>
			</tr>
			<tr>
				<td>431</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=431">Umaria</a></td>
			</tr>
			<tr>
				<td>432</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=432">Neemuch</a></td>
			</tr>
			<tr>
				<td>433</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=433">Mandsaur</a></td>
			</tr>
			<tr>
				<td>434</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=434">Ratlam</a></td>
			</tr>
			<tr>
				<td>435</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=435">Ujjain</a></td>
			</tr>
			<tr>
				<td>436</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=436">Shajapur</a></td>
			</tr>
			<tr>
				<td>437</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=437">Dewas</a></td>
			</tr>
			<tr>
				<td>438</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=438">Dhar</a></td>
			</tr>
			<tr>
				<td>439</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=439">Indore</a></td>
			</tr>
			<tr>
				<td>440</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=440">West Nimar</a></td>
			</tr>
			<tr>
				<td>441</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=441">Barwani</a></td>
			</tr>
			<tr>
				<td>442</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=442">Rajgarh</a></td>
			</tr>
			<tr>
				<td>443</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=443">Vidisha</a></td>
			</tr>
			<tr>
				<td>444</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=444">Bhopal</a></td>
			</tr>
			<tr>
				<td>445</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=445">Sehore</a></td>
			</tr>
			<tr>
				<td>446</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=446">Raisen</a></td>
			</tr>
			<tr>
				<td>447</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=447">Betul</a></td>
			</tr>
			<tr>
				<td>448</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=448">Harda</a></td>
			</tr>
			<tr>
				<td>449</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=449">Hoshangabad</a></td>
			</tr>
			<tr>
				<td>450</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=450">Katni</a></td>
			</tr>
			<tr>
				<td>451</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=451">Jabalpur</a></td>
			</tr>
			<tr>
				<td>452</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=452">Narsimhapur</a></td>
			</tr>
			<tr>
				<td>453</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=453">Dindori</a></td>
			</tr>
			<tr>
				<td>454</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=454">Mandla</a></td>
			</tr>
			<tr>
				<td>455</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=455">Chhindwara</a></td>
			</tr>
			<tr>
				<td>456</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=456">Seoni</a></td>
			</tr>
			<tr>
				<td>457</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=457">Balaghat</a></td>
			</tr>
			<tr>
				<td>458</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=458">Guna</a></td>
			</tr>
			<tr>
				<td>460</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=460">Shahdol</a></td>
			</tr>
			<tr>
				<td>462</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=462">Sidhi</a></td>
			</tr>
			<tr>
				<td>464</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=464">Jhabua</a></td>
			</tr>
			<tr>
				<td>466</td>
				<td>Madhya Pradesh</td>
				<td><a href="main-district-page.php?censuscode=466">East Nimar</a></td>
			</tr>
			<tr>
				<td>468</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=468">Kachchh</a></td>
			</tr>
			<tr>
				<td>469</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=469">Banas Kantha</a></td>
			</tr>
			<tr>
				<td>470</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=470">Patan</a></td>
			</tr>
			<tr>
				<td>471</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=471">Mahesana</a></td>
			</tr>
			<tr>
				<td>472</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=472">Sabar Kantha</a></td>
			</tr>
			<tr>
				<td>473</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=473">Gandhinagar</a></td>
			</tr>
			<tr>
				<td>474</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=474">Ahmadabad</a></td>
			</tr>
			<tr>
				<td>475</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=475">Surendranagar</a></td>
			</tr>
			<tr>
				<td>476</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=476">Rajkot</a></td>
			</tr>
			<tr>
				<td>477</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=477">Jamnagar</a></td>
			</tr>
			<tr>
				<td>478</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=478">Porbandar</a></td>
			</tr>
			<tr>
				<td>479</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=479">Junagadh</a></td>
			</tr>
			<tr>
				<td>480</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=480">Amreli</a></td>
			</tr>
			<tr>
				<td>481</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=481">Bhavnagar</a></td>
			</tr>
			<tr>
				<td>482</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=482">Anand</a></td>
			</tr>
			<tr>
				<td>483</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=483">Kheda</a></td>
			</tr>
			<tr>
				<td>484</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=484">Panch Mahals</a></td>
			</tr>
			<tr>
				<td>485</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=485">Dohad</a></td>
			</tr>
			<tr>
				<td>486</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=486">Vadodara</a></td>
			</tr>
			<tr>
				<td>487</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=487">Narmada</a></td>
			</tr>
			<tr>
				<td>488</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=488">Bharuch</a></td>
			</tr>
			<tr>
				<td>489</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=489">The Dangs</a></td>
			</tr>
			<tr>
				<td>490</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=490">Navsari</a></td>
			</tr>
			<tr>
				<td>491</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=491">Valsad</a></td>
			</tr>
			<tr>
				<td>492</td>
				<td>Gujarat</td>
				<td><a href="main-district-page.php?censuscode=492">Surat</a></td>
			</tr>
			<tr>
				<td>494</td>
				<td>Daman & Diu</td>
				<td><a href="main-district-page.php?censuscode=494">Diu</a></td>
			</tr>
			<tr>
				<td>495</td>
				<td>Daman & Diu</td>
				<td><a href="main-district-page.php?censuscode=495">Daman</a></td>
			</tr>
			<tr>
				<td>496</td>
				<td>Dadra & Nagar Haveli</td>
				<td><a href="main-district-page.php?censuscode=496">Dadra & Nagar Haveli</a></td>
			</tr>
			<tr>
				<td>497</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=497">Nandurbar</a></td>
			</tr>
			<tr>
				<td>498</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=498">Dhule</a></td>
			</tr>
			<tr>
				<td>499</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=499">Jalgaon</a></td>
			</tr>
			<tr>
				<td>500</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=500">Buldana</a></td>
			</tr>
			<tr>
				<td>501</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=501">Akola</a></td>
			</tr>
			<tr>
				<td>502</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=502">Washim</a></td>
			</tr>
			<tr>
				<td>503</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=503">Amravati</a></td>
			</tr>
			<tr>
				<td>504</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=504">Wardha</a></td>
			</tr>
			<tr>
				<td>505</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=505">Nagpur</a></td>
			</tr>
			<tr>
				<td>506</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=506">Bhandara</a></td>
			</tr>
			<tr>
				<td>507</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=507">Gondiya</a></td>
			</tr>
			<tr>
				<td>508</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=508">Gadchiroli</a></td>
			</tr>
			<tr>
				<td>509</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=509">Chandrapur</a></td>
			</tr>
			<tr>
				<td>510</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=510">Yavatmal</a></td>
			</tr>
			<tr>
				<td>511</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=511">Nanded</a></td>
			</tr>
			<tr>
				<td>512</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=512">Hingoli</a></td>
			</tr>
			<tr>
				<td>513</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=513">Parbhani</a></td>
			</tr>
			<tr>
				<td>514</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=514">Jalna</a></td>
			</tr>
			<tr>
				<td>515</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=515">Aurangabad</a></td>
			</tr>
			<tr>
				<td>516</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=516">Nasik</a></td>
			</tr>
			<tr>
				<td>517</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=517">Thane</a></td>
			</tr>
			<tr>
				<td>518</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=518">Mumbai Suburban</a></td>
			</tr>
			<tr>
				<td>519</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=519">Mumbai City</a></td>
			</tr>
			<tr>
				<td>520</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=520">Raigarh</a></td>
			</tr>
			<tr>
				<td>521</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=521">Pune</a></td>
			</tr>
			<tr>
				<td>522</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=522">Ahmadnagar</a></td>
			</tr>
			<tr>
				<td>523</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=523">Bid</a></td>
			</tr>
			<tr>
				<td>524</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=524">Latur</a></td>
			</tr>
			<tr>
				<td>525</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=525">Osmanabad</a></td>
			</tr>
			<tr>
				<td>526</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=526">Solapur</a></td>
			</tr>
			<tr>
				<td>527</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=527">Satara</a></td>
			</tr>
			<tr>
				<td>528</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=528">Ratnagiri</a></td>
			</tr>
			<tr>
				<td>529</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=529">Sindhudurg</a></td>
			</tr>
			<tr>
				<td>530</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=530">Kolhapur</a></td>
			</tr>
			<tr>
				<td>531</td>
				<td>Maharashtra</td>
				<td><a href="main-district-page.php?censuscode=531">Sangli</a></td>
			</tr>
			<tr>
				<td>532</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=532">Adilabad</a></td>
			</tr>
			<tr>
				<td>533</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=533">Nizamabad</a></td>
			</tr>
			<tr>
				<td>534</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=534">Karimnagar</a></td>
			</tr>
			<tr>
				<td>535</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=535">Medak</a></td>
			</tr>
			<tr>
				<td>536</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=536">Hyderabad</a></td>
			</tr>
			<tr>
				<td>537</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=537">Rangareddi</a></td>
			</tr>
			<tr>
				<td>538</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=538">Mahbubnagar</a></td>
			</tr>
			<tr>
				<td>539</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=539">Nalgonda</a></td>
			</tr>
			<tr>
				<td>540</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=540">Warangal</a></td>
			</tr>
			<tr>
				<td>541</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=541">Khammam</a></td>
			</tr>
			<tr>
				<td>542</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=542">Srikakulam</a></td>
			</tr>
			<tr>
				<td>543</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=543">Vizianagaram</a></td>
			</tr>
			<tr>
				<td>544</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=544">Visakhapatnam</a></td>
			</tr>
			<tr>
				<td>545</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=545">East Godavari</a></td>
			</tr>
			<tr>
				<td>546</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=546">West Godavari</a></td>
			</tr>
			<tr>
				<td>547</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=547">Krishna</a></td>
			</tr>
			<tr>
				<td>548</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=548">Guntur</a></td>
			</tr>
			<tr>
				<td>549</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=549">Prakasam</a></td>
			</tr>
			<tr>
				<td>550</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=550">Nellore</a></td>
			</tr>
			<tr>
				<td>551</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=551">Cuddapah</a></td>
			</tr>
			<tr>
				<td>552</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=552">Kurnool</a></td>
			</tr>
			<tr>
				<td>553</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=553">Anantapur</a></td>
			</tr>
			<tr>
				<td>554</td>
				<td>Andhra Pradesh</td>
				<td><a href="main-district-page.php?censuscode=554">Chittoor</a></td>
			</tr>
			<tr>
				<td>555</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=555">Belgaum</a></td>
			</tr>
			<tr>
				<td>556</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=556">Bagalkot</a></td>
			</tr>
			<tr>
				<td>557</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=557">Bijapur</a></td>
			</tr>
			<tr>
				<td>558</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=558">Bidar</a></td>
			</tr>
			<tr>
				<td>559</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=559">Raichur</a></td>
			</tr>
			<tr>
				<td>560</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=560">Koppal </a></td>
			</tr>
			<tr>
				<td>561</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=561">Gadag</a></td>
			</tr>
			<tr>
				<td>562</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=562">Dharwad</a></td>
			</tr>
			<tr>
				<td>563</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=563">Uttara Kannada</a></td>
			</tr>
			<tr>
				<td>564</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=564">Haveri</a></td>
			</tr>
			<tr>
				<td>565</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=565">Bellary</a></td>
			</tr>
			<tr>
				<td>566</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=566">Chitradurga</a></td>
			</tr>
			<tr>
				<td>567</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=567">Davanagere </a></td>
			</tr>
			<tr>
				<td>568</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=568">Shimoga</a></td>
			</tr>
			<tr>
				<td>569</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=569">Udupi</a></td>
			</tr>
			<tr>
				<td>570</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=570">Chikmagalur</a></td>
			</tr>
			<tr>
				<td>571</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=571">Tumkur</a></td>
			</tr>
			<tr>
				<td>572</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=572">Bangalore</a></td>
			</tr>
			<tr>
				<td>573</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=573">Mandya</a></td>
			</tr>
			<tr>
				<td>574</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=574">Hassan</a></td>
			</tr>
			<tr>
				<td>575</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=575">Dakshina Kannada</a></td>
			</tr>
			<tr>
				<td>576</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=576">Kodagu</a></td>
			</tr>
			<tr>
				<td>577</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=577">Mysore</a></td>
			</tr>
			<tr>
				<td>578</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=578">Chamarajanagar</a></td>
			</tr>
			<tr>
				<td>579</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=579">Gulbarga</a></td>
			</tr>
			<tr>
				<td>581</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=581">Kolar</a></td>
			</tr>
			<tr>
				<td>583</td>
				<td>Karnataka</td>
				<td><a href="main-district-page.php?censuscode=583">Bangalore Rural</a></td>
			</tr>
			<tr>
				<td>585</td>
				<td>Goa</td>
				<td><a href="main-district-page.php?censuscode=585">North Goa </a></td>
			</tr>
			<tr>
				<td>586</td>
				<td>Goa</td>
				<td><a href="main-district-page.php?censuscode=586">South Goa</a></td>
			</tr>
			<tr>
				<td>587</td>
				<td>Lakshadweep</td>
				<td><a href="main-district-page.php?censuscode=587">Lakshadweep</a></td>
			</tr>
			<tr>
				<td>588</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=588">Kasaragod</a></td>
			</tr>
			<tr>
				<td>589</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=589">Kannur</a></td>
			</tr>
			<tr>
				<td>590</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=590">Wayanad</a></td>
			</tr>
			<tr>
				<td>591</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=591">Kozhikode</a></td>
			</tr>
			<tr>
				<td>592</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=592">Malappuram</a></td>
			</tr>
			<tr>
				<td>593</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=593">Palakkad</a></td>
			</tr>
			<tr>
				<td>594</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=594">Thrissur</a></td>
			</tr>
			<tr>
				<td>595</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=595">Ernakulam</a></td>
			</tr>
			<tr>
				<td>596</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=596">Idukki</a></td>
			</tr>
			<tr>
				<td>597</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=597">Kottayam</a></td>
			</tr>
			<tr>
				<td>598</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=598">Alappuzha</a></td>
			</tr>
			<tr>
				<td>599</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=599">Pathanamthitta</a></td>
			</tr>
			<tr>
				<td>600</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=600">Kollam</a></td>
			</tr>
			<tr>
				<td>601</td>
				<td>Kerala</td>
				<td><a href="main-district-page.php?censuscode=601">Thiruvananthapuram</a></td>
			</tr>
			<tr>
				<td>602</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=602">Thiruvallur</a></td>
			</tr>
			<tr>
				<td>603</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=603">Chennai</a></td>
			</tr>
			<tr>
				<td>604</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=604">Kancheepuram</a></td>
			</tr>
			<tr>
				<td>605</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=605">Vellore</a></td>
			</tr>
			<tr>
				<td>606</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=606">Tiruvannamalai</a></td>
			</tr>
			<tr>
				<td>607</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=607">Viluppuram</a></td>
			</tr>
			<tr>
				<td>608</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=608">Salem</a></td>
			</tr>
			<tr>
				<td>609</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=609">Namakkal</a></td>
			</tr>
			<tr>
				<td>610</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=610">Erode</a></td>
			</tr>
			<tr>
				<td>611</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=611">The Nilgiris</a></td>
			</tr>
			<tr>
				<td>612</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=612">Dindigul</a></td>
			</tr>
			<tr>
				<td>613</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=613">Karur</a></td>
			</tr>
			<tr>
				<td>614</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=614">Tiruchirappalli</a></td>
			</tr>
			<tr>
				<td>615</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=615">Perambalur</a></td>
			</tr>
			<tr>
				<td>616</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=616">Ariyalur</a></td>
			</tr>
			<tr>
				<td>617</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=617">Cuddalore</a></td>
			</tr>
			<tr>
				<td>618</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=618">Nagapattinam</a></td>
			</tr>
			<tr>
				<td>619</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=619">Thiruvarur</a></td>
			</tr>
			<tr>
				<td>620</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=620">Thanjavur</a></td>
			</tr>
			<tr>
				<td>621</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=621">Pudukkottai</a></td>
			</tr>
			<tr>
				<td>622</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=622">Sivaganga</a></td>
			</tr>
			<tr>
				<td>623</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=623">Madurai</a></td>
			</tr>
			<tr>
				<td>624</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=624">Theni</a></td>
			</tr>
			<tr>
				<td>625</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=625">Virudhunagar</a></td>
			</tr>
			<tr>
				<td>626</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=626">Ramanathapuram</a></td>
			</tr>
			<tr>
				<td>627</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=627">Thoothukkudi</a></td>
			</tr>
			<tr>
				<td>628</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=628">Tirunelveli </a></td>
			</tr>
			<tr>
				<td>629</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=629">Kanniyakumari</a></td>
			</tr>
			<tr>
				<td>630</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=630">Dharmapuri</a></td>
			</tr>
			<tr>
				<td>632</td>
				<td>Tamil Nadu</td>
				<td><a href="main-district-page.php?censuscode=632">Coimbatore</a></td>
			</tr>
			<tr>
				<td>634</td>
				<td>Puducherry</td>
				<td><a href="main-district-page.php?censuscode=634">Yanam</a></td>
			</tr>
			<tr>
				<td>635</td>
				<td>Puducherry</td>
				<td><a href="main-district-page.php?censuscode=635">Pondicherry</a></td>
			</tr>
			<tr>
				<td>636</td>
				<td>Puducherry</td>
				<td><a href="main-district-page.php?censuscode=636">Mahe</a></td>
			</tr>
			<tr>
				<td>637</td>
				<td>Puducherry</td>
				<td><a href="main-district-page.php?censuscode=637">Karaikal</a></td>
			</tr>
			<tr>
				<td>638</td>
				<td>Andaman & Nicobar Islands</td>
				<td><a href="main-district-page.php?censuscode=638">Nicobars</a></td>
			</tr>
			<tr>
				<td>639</td>
				<td>Andaman & Nicobar Islands</td>
				<td><a href="main-district-page.php?censuscode=639">Andamans</a></td>
			</tr>
		</table>
	</div>
</center>
<div id="footer"></div>
</body>
</html>