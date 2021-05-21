<!DOCTYPE html>
<?php
$event = $_GET['event'];
$eventn = $_GET['eventn'];
if (!empty($event)) {
} else {
    header("Location:../Entities/POLITICALECONOMY.htm");
}?>
<html lang="en">

<head>
    <title>Political Economy Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="politicalcss.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <style>
        body {
            font-family: 'Montserrat', 'serif';
            font-size: 14px;
            overflow: auto;
            color: #555555;
            letter-spacing: 0.15px;
            line-height: 1.5;
        }

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('../Images/page-loader.gif') 50% 50% no-repeat rgb(249, 249, 249);
        }
    </style>

    <link rel="stylesheet" type="text/css" href="style.min.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <script>
        $(function () {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js" charset="utf-8"></script>
    <script src="../scripts/js/nv.d3.js"></script>
</head>

<body>
    <div class="loader"></div>
    <script type="text/javascript">
        $(window).load(function () {
            $(".loader").fadeOut("slow");
        })
    </script>
    <div id="header"></div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 text-center list"><a href="#AspectCoverage" style="text-decoration:none;">Aspect
                    Coverage</a></div>
            <div class="col-sm-4 text-center list"><a href="#EntityAspectCoverage" style="text-decoration:none;">Entity
                    Coverage</a></div>
            <div class="col-sm-4 text-center list"><a href="#SentimentCoverage" style="text-decoration:none;">Entity
                    Sentiment</a></div>
        </div>
    </div>
    <div data-spy="scroll" data-target="#list" data-offset="50" class="CC"><br>
        <h1 style="text-align:center;color: #05386b !important;">
            Political Economy behind <?php echo $eventn;?>
        </h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <p
                        style="margin-inline-end: 4%;margin-inline-start: 4%;padding: 2.5px 2.5px 2.5px 2.5px; margin-block-start:2%;">
                        <?php include('../text data/Political/' . $event . '/text.txt');?></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid" id="AspectCoverage">
            <div class="row">
                <div class="col-sm-12 text-left">
                <h2 style="text-align: center;">Aspect Coverage behind <?php echo $eventn;?></h2>
                <p
                        style="text-align:left ;margin-inline-end: 4%;margin-inline-start: 4%;padding: 2.5px 2.5px 2.5px 2.5px; margin-block-start:2%;">
                        <?php include('../text data/Political/' . $event . '/text3.txt');?> </p>
                    
                    <div id="chartdivone" style="height: 480px;"></div>
                    <p
                        style="text-align:left ;margin-inline-end: 4%;margin-inline-start: 4%;padding: 2.5px 2.5px 2.5px 2.5px; margin-block-start:2%;">
                        <?php include('../text data/Political/' . $event . '/text4.txt');?> </p>
                    <script>
                        // Themes begin
                        am4core.useTheme(am4themes_animated);
                        // Themes end

                        var chart = am4core.create("chartdivone", am4charts.XYChart);
                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in




                        // Set up data source
                        chart.dataSource.url =
                            "../csv data/Political Economy/<?php echo $_GET['event']; ?>/np_coverage.csv";
                        chart.dataSource.parser = new am4core.CSVParser();
                        chart.dataSource.parser.options.useColumnNames = true;


                        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.renderer.grid.template.location = 0;
                        categoryAxis.dataFields.category = "tag";
                        categoryAxis.renderer.labels.template.rotation = -90;
                        var label = categoryAxis.renderer.labels.template;
                        label.truncate = true;
                        label.maxWidth = 200;
                        categoryAxis.renderer.minGridDistance = 0.1;
                        // label.maxheight = 50;
                        label.tooltipText = "{category}";
                        //   categoryAxis.renderer.minLabelPosition = 0.5;
                        //    categoryAxis.renderer.maxLabelPosition = 0.95;

                        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                        //   valueAxis.min = 0;
                        //   valueAxis.max = 0.5;
                        //
                        categoryAxis.renderer.minGridDistance = 0.1;

                        var series = chart.series.push(new am4charts.ColumnSeries());
                        series.dataFields.categoryX = "tag";
                        series.dataFields.valueY = "value";
                        series.name = "Values";
                        series.columns.template.tooltipY = 0;
                        // series.columns.template.tooltipText = "{category}";
                        series.columns.template.tooltipText = "{tag}:{valueY.value}";
                        series.columns.template.strokeOpacity = 0;

                        chart.scrollbarX = new am4core.Scrollbar();
                        chart.scrollbarY = new am4core.Scrollbar();

                        // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
                    </script>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid" id="EntityAspectCoverage">

            <div class="row">

                <div class="col-sm-12 text-left" style="text-align:right;">
                    <h2 style="text-align: center;">Which entities are most vocal on the policies in mass media?</h2>
<p style="text-align:left ;margin-inline-end: 4%;margin-inline-start: 4%;padding: 2.5px 2.5px 2.5px 2.5px; margin-block-start:2%;">By ‘entities’, we refer to people like politicians, business persons (directors or managers of companies), judiciary members, IAS officers, social activists, etc. that are covered by mass media with respect to a policy. Two of the important aspects of understanding the political economy around policies are: (a) which entities are the most vocal on policy issues in mass media, and (b) how do these entities speak on the policies. We try to answer these two research questions in this page. </p>

                    <div id="chartdiv" style="height: 480px;"></div>
                    <p
                        style="text-align:left ;margin-inline-end: 4%;margin-inline-start: 4%;padding: 2.5px 2.5px 2.5px 2.5px; margin-block-start:2%;">
                        <?php include('../text data/Political/' . $event . '/text1.txt');?> </p>
                    <!-- <button id="myBtn" class="btn btn-success myBtn">Read more</button>
    -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">

                                <span class="close">&times;</span>
                            </div>
                            <div class="modal-body">

                            </div>
                        </div>

                    </div>
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the button that opens the modal
                        var btn = document.getElementById("myBtn");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks the button, open the modal 
                        btn.onclick = function () {
                            modal.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>


                    <script>
                        // Themes begin
                        am4core.useTheme(am4themes_animated);
                        // Themes end

                        var chart = am4core.create("chartdiv", am4charts.XYChart);
                        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in




                        // Set up data source
                        chart.dataSource.url =
                            "../csv data/Political Economy/<?php echo $_GET['event']; ?>/EntityCoverage/GraphData.csv";
                        chart.dataSource.parser = new am4core.CSVParser();
                        chart.dataSource.parser.options.useColumnNames = true;


                        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                        categoryAxis.renderer.grid.template.location = 0;
                        categoryAxis.dataFields.category = "tag";
                        categoryAxis.renderer.labels.template.rotation = -90;
                        var label = categoryAxis.renderer.labels.template;
                        label.truncate = true;
                        label.maxWidth = 200;
                        categoryAxis.renderer.minGridDistance = 0.1;
                        // label.maxheight = 50;
                        label.tooltipText = "{category}";
                        //   categoryAxis.renderer.minLabelPosition = 0.5;
                        //    categoryAxis.renderer.maxLabelPosition = 0.95;

                        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                        //   valueAxis.min = 0;
                        //   valueAxis.max = 0.5;
                        //
                        categoryAxis.renderer.minGridDistance = 0.1;

                        var series = chart.series.push(new am4charts.ColumnSeries());
                        series.dataFields.categoryX = "tag";
                        series.dataFields.valueY = "value";
                        series.name = "Values";
                        series.columns.template.tooltipY = 0;
                        // series.columns.template.tooltipText = "{category}";
                        series.columns.template.tooltipText = "{tag}:{valueY.value}";
                        series.columns.template.strokeOpacity = 0;

                        chart.scrollbarX = new am4core.Scrollbar();
                        chart.scrollbarY = new am4core.Scrollbar();

                        // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
                    </script>

                </div>

                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4 style="text-align:center;"></h4>
                        <p
                            style="margin-inline-end: 4%;margin-inline-start: 4%;padding: 2.5px 2.5px 2.5px 2.5px; margin-block-start:2%;">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid" id="SentimentCoverage">
            <div class="row">

                <div class="col-sm-12 text-left" style="text-align:right;">
                    <h2 style="text-align: center;">How do the entities speak on the policies in mass media ?</h2>



                    <div id="chartdiv1"
                        style="width: 98%;margin-inline-start: 1%;margin-inline-end: 1%; height: 480px;"></div>
                    <p
                        style="text-align:left ;margin-inline-end: 4%;margin-inline-start: 4%;padding: 2.5px 2.5px 2.5px 2.5px; margin-block-start:2%;">
                        <?php include('../text data/Political/' . $event . '/text2.txt');?> </p>
                    <!--<button id="myBtn2" class="btn btn-success myBtn">Read more</button>
    -->
                </div>
                <div id="myModal2" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                        </div>
                        <div class="modal-body">

                        </div>
                    </div>

                </div>
                <script>
                    // Get the modal
                    var modal2 = document.getElementById("myModal2");

                    // Get the button that opens the modal
                    var btn2 = document.getElementById("myBtn2");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[1];

                    // When the user clicks the button, open the modal 
                    btn2.onclick = function () {
                        modal2.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function () {
                        modal2.style.display = "none";
                    }
                </script>
                <script>
                    // Themes begin
                    am4core.useTheme(am4themes_animated);
                    // Themes end

                    var chart = am4core.create("chartdiv1", am4charts.XYChart);
                    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in




                    // Set up data source
                    chart.dataSource.url =
                        "../csv data/Political Economy/<?php echo $_GET['event']; ?>/EntitySentiment/GraphData.csv";
                    chart.dataSource.parser = new am4core.CSVParser();
                    chart.dataSource.parser.options.useColumnNames = true;


                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.renderer.grid.template.location = 0;
                    categoryAxis.dataFields.category = "tag";
                    categoryAxis.renderer.labels.template.rotation = -90;
                    var label = categoryAxis.renderer.labels.template;
                    label.truncate = true;
                    label.maxWidth = 200;
                    categoryAxis.renderer.minGridDistance = 0.1;
                    // label.maxheight = 50;
                    label.tooltipText = "{category}";
                    //   categoryAxis.renderer.minLabelPosition = 0.5;
                    //    categoryAxis.renderer.maxLabelPosition = 0.95;

                    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                    //   valueAxis.min = 0;
                    //   valueAxis.max = 0.5;
                    //
                    categoryAxis.renderer.minGridDistance = 0.1;

                    var series = chart.series.push(new am4charts.ColumnSeries());
                    series.dataFields.categoryX = "tag";
                    series.dataFields.valueY = "value";
                    series.name = "Sentiment";
                    series.columns.template.tooltipY = 0;
                    // series.columns.template.tooltipText = "{category}";
                    series.columns.template.tooltipText = "{tag}:{valueY.value}";
                    series.columns.template.strokeOpacity = 0;
                    series.columns.template.fill = am4core.color("#5a5");
                    series.columns.template.adapter.add("fill", function (fill, target) {
                        if (target.dataItem && (target.dataItem.valueY < 0)) {
                            return am4core.color("#ED7B84");
                        } else {
                            return fill;
                        }
                    });


                    chart.scrollbarX = new am4core.Scrollbar();
                    chart.scrollbarY = new am4core.Scrollbar();

                    // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
                </script>

            </div>

            <div class="row">
                <div class="col-sm-12 text-left">
                    <h4 style="text-align:center;"></h4>
                    <p
                        style="margin-inline-end: 4%;margin-inline-start: 4%;padding: 2.5px 2.5px 2.5px 2.5px; margin-block-start:2%;">

                    </p>
                </div>
            </div>
        </div>
    </div>




    </div>


    <div id="footer"></div>
</body>

</html>