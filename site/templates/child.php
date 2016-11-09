<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">

  <?php if($page->text()->isNotEmpty()) { ?>
    <section class="t-site t-blog u-clearfix">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
      <?php snippet('features') ?>
    </section>
  <?php } ?>

  <?php snippet('examples') ?>

  <?php snippet('partners') ?>

  <?php snippet('timeline') ?>

  <?php snippet('team') ?>

</main>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Agree', 0.35],
          ['Somewhat agree', 0.16],
          ['Neither agree nor disagree', 0.11],
          ['Somewhat disagree', 0.03],
          ['Strongly agree', 0.35]
        ]);
        // Set chart options
        var options = {
          title:'Chart 1: Student responses to: “Studying the case online with multimedia elements was better than reading a printed version.”',
          titleTextStyle: {color: '#3b3f4e', italic: true, bold: false, fontSize: 14},
          width:350,
          height:300,
          colors: ['#93bed0','#E6C64C','#ae8059','#9179E0','#68bf70'],
          backgroundColor: 'transparent',
          fontName: 'tenso',
          legend: {textStyle: {color: '#3b3f4e'}, alignment: 'center'},
          tooltip: {textStyle: {color: '#3b3f4e'}, showColorCode: true, text: 'percentage'},
          chartArea:{left:10,top:50,width:'95%',height:'95%'},
          pieSliceText: 'label',
          pieSliceTextStyle: {color: '#fffffe'}
        };
        // Instantiate and draw chart 1, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart1'));
        chart.draw(data, options);
        // Create the data table for chart 2.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Agree', 0.38],
          ['Somewhat agree', 0.05],
          ['Neither agree nor disagree', 0.03],
          ['Somewhat disagree', 0.05],
          ['Strongly agree', 0.49]
        ]);
        // Set chart options
        var options = {
          title: 'Chart 2: Student responses to: “The process engaged me more in my class than usual.”',
          titleTextStyle: {color: '#3b3f4e', italic: true, bold: false, fontSize: 14},
          width:350,
          height:300,
          colors: ['#93bed0','#E6C64C','#ae8059','#9179E0','#68bf70'],
          backgroundColor: 'transparent',
          fontName: 'tenso',
          legend: {textStyle: {color: '#3b3f4e'}, alignment: 'center'},
          tooltip: {textStyle: {color: '#3b3f4e'}, showColorCode: true, text: 'percentage'},
          chartArea:{left:10,top:40,width:'100%',height:'100%'},
          pieSliceText: 'label',
          pieSliceTextStyle: {color: '#fffffe'}
        }
        // Instantiate and draw chart 2, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart2'));
        chart.draw(data, options);
        // Create the data table for chart 3.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Completely satisfied', 0.25],
          ['Somewhat satisfied', 0.17],
          ['Neither satisfied nor dissatisfied', 0.03],
          ['Somewhat dissatisfied', 0.03],
          ['Mostly satisfied', 0.53]
        ]);
        // Set chart options
        var options = {
          title: 'Chart 3: Student responses to: “How would you express your overall satisfaction with this case?”',
          titleTextStyle: {color: '#3b3f4e', italic: true, bold: false, fontSize: 14},
          width:350,
          height:300,
          colors: ['#93bed0','#E6C64C','#ae8059','#9179E0','#68bf70'],
          backgroundColor: 'transparent',
          fontName: 'tenso',
          legend: {textStyle: {color: '#3b3f4e'}, alignment: 'center'},
          tooltip: {textStyle: {color: '#3b3f4e'}, showColorCode: true, text: 'percentage'},
          chartArea:{left:10,top:40,width:'100%',height:'100%'},
          pieSliceText: 'label',
          pieSliceTextStyle: {color: '#fffffe'}
        }
        // Instantiate and draw chart 3, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart3'));
        chart.draw(data, options);
      }
    </script>
<?php snippet('footer') ?>
