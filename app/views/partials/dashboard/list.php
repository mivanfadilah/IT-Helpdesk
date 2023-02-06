<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="grid" data-page-url="<?php print_link($current_page); ?>">
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 comp-grid">
                    <h2 ><marquee><b>SELAMAT DATANG DI APLIKASI WEB IT HELPDESK SINEMART INDONESIA</b></marquee></h2>
                    <div class=" my-1 reset-grids">
                        <?php  
                        $this->render_page("dashboard/add_page"); 
                        ?>
                    </div>
                    <?php $this :: display_page_errors(); ?>
                    <div  class="my-1 animated fadeIn page-content">
                        <div id="dashboard-list-records">
                            <?php
                            if(!empty($records)){
                            ?>
                            <div id="page-report-body">
                                <div class="row text-justify page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <!--record-->
                                    <?php
                                    $counter = 0;
                                    foreach($records as $data){
                                    $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                    $counter++;
                                    ?>
                                    <div class="col-md-12">
                                        <div class="card card-header bg-light p-1 mb-1 my-1">
                                            <div class="mb-2">   <?php echo $data['nama']; ?></div>
                                            <div class="mb-2">   <?php echo $data['status']; ?></div>
                                            <div class="mb-2">  <?php Html :: page_img($data['foto'],500,500,4); ?></div>
                                            <div class="mb-2">  <?php Html :: page_link_file($data['file']); ?></div>
                                            <div class="mb-2">  <?php Html :: page_link_file($data['video']); ?></div>
                                            <div class="td-btn">
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("dashboard/view/$rec_id"); ?>">
                                                    <i class="material-icons">visibility</i> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    }
                                    ?>
                                    <!--endrecord-->
                                </div>
                                <div class="row text-justify search-data" id="search-data-<?php echo $page_element_id; ?>"></div>
                                <div>
                                </div>
                            </div>
                            <?php
                            if($show_footer == true){
                            ?>
                            <div class=" border-top mt-2">
                                <div class="row justify-content-center">    
                                    <div class="col-md-auto">   
                                    </div>
                                    <div class="col">   
                                        <?php
                                        if($show_pagination == true){
                                        $pager = new Pagination($total_records, $record_count);
                                        $pager->route = $this->route;
                                        $pager->show_page_count = true;
                                        $pager->show_record_count = true;
                                        $pager->show_page_limit =true;
                                        $pager->limit_count = $this->limit_count;
                                        $pager->show_page_number_list = true;
                                        $pager->pager_link_range=5;
                                        $pager->render();
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            }
                            else{
                            ?>
                            <div class="text-muted  animated bounce p-3">
                                <h4><i class="material-icons">block</i> No Record Found</h4>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 comp-grid">
                    <div class="card card-body bg-light  my-1">
                        <?php 
                        $chartdata = $comp_model->barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5brantingbh5centerh4();
                        ?>
                        <div>
                            <h4><div>
                                <h4><div class="card-header bg-primary text-white my-1">
                                    <center><h5><b>RANTING</b></h5>
                                    </center></h4></h4>
                                    <small class="text-muted"></small>
                                </div>
                                <hr />
                                <canvas id="barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5brantingbh5centerh4"></canvas>
                                <script>
                                    $(function (){
                                    var chartData = {
                                    labels : <?php echo json_encode($chartdata['labels']); ?>,
                                    datasets : [
                                    {
                                    label: 'RANTING',
                                    backgroundColor:'rgba(255 , 0 , 0, 0.5)',
                                    borderColor:'rgba(0 , 255 , 64, 0.7)',
                                    type:'',
                                    borderWidth:1,
                                    data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                                    }
                                    ]
                                    }
                                    var ctx = document.getElementById('barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5brantingbh5centerh4');
                                    var chart = new Chart(ctx, {
                                    type:'bar',
                                    data: chartData,
                                    options: {
                                    scaleStartValue: 0,
                                    responsive: true,
                                    scales: {
                                    xAxes: [{
                                    ticks:{display: true},
                                    gridLines:{display: true},
                                    categoryPercentage: 1.0,
                                    barPercentage: 0.8,
                                    scaleLabel: {
                                    display: true,
                                    labelString: "JUDUL"
                                    },
                                    }],
                                    yAxes: [{
                                    ticks: {
                                    beginAtZero: true,
                                    display: true
                                    },
                                    scaleLabel: {
                                    display: true,
                                    labelString: "BULAN"
                                    }
                                    }]
                                    },
                                    }
                                    ,
                                    })});
                                </script>
                            </div>
                            <div class="card card-body bg-light my-1 ">
                                <?php 
                                $chartdata = $comp_model->barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5bjadwalulangtahunbh5centerh4();
                                ?>
                                <div>
                                    <h4><div>
                                        <h4><div class="card-header bg-primary text-white my-1">
                                            <center><h5><b>JADWAL ULANG TAHUN</b></h5>
                                            </center></h4></h4>
                                            <small class="text-muted"></small>
                                        </div>
                                        <hr />
                                        <canvas id="barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5bjadwalulangtahunbh5centerh4"></canvas>
                                        <script>
                                            $(function (){
                                            var chartData = {
                                            labels : <?php echo json_encode($chartdata['labels']); ?>,
                                            datasets : [
                                            {
                                            label: 'JADWAL ULANG TAHUN',
                                            backgroundColor:'rgba(0 , 255 , 64, 0.5)',
                                            borderColor:'rgba(255 , 0 , 0, 0.7)',
                                            type:'',
                                            borderWidth:1,
                                            data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                                            }
                                            ]
                                            }
                                            var ctx = document.getElementById('barchart_divh4divclasscardheaderbgprimarytextwhitemy1centerh5bjadwalulangtahunbh5centerh4');
                                            var chart = new Chart(ctx, {
                                            type:'bar',
                                            data: chartData,
                                            options: {
                                            scaleStartValue: 0,
                                            responsive: true,
                                            scales: {
                                            xAxes: [{
                                            ticks:{display: true},
                                            gridLines:{display: true},
                                            categoryPercentage: 1.0,
                                            barPercentage: 0.8,
                                            scaleLabel: {
                                            display: true,
                                            labelString: "NAMA KARYAWAN"
                                            },
                                            }],
                                            yAxes: [{
                                            ticks: {
                                            beginAtZero: true,
                                            display: true
                                            },
                                            scaleLabel: {
                                            display: true,
                                            labelString: "BULAN"
                                            }
                                            }]
                                            },
                                            }
                                            ,
                                            })});
                                        </script>
                                    </div>
                                    <?php $rec_count = $comp_model->getcount_user();  ?>
                                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("user/") ?>">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="material-icons ">account_circle</i>
                                            </div>
                                            <div class="col-10">
                                                <div class="flex-column justify-content align-center">
                                                    <div class="title">User</div>
                                                    <small class=""></small>
                                                </div>
                                            </div>
                                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                        </div>
                                    </a>
                                    <?php $rec_count = $comp_model->getcount_inventory();  ?>
                                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("inventory/") ?>">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="material-icons ">shopping_cart</i>
                                            </div>
                                            <div class="col-10">
                                                <div class="flex-column justify-content align-center">
                                                    <div class="title">Inventory</div>
                                                    <small class=""></small>
                                                </div>
                                            </div>
                                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                        </div>
                                    </a>
                                    <?php $rec_count = $comp_model->getcount_rekapranting();  ?>
                                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("rekap_ranting/") ?>">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="material-icons ">multiline_chart</i>
                                            </div>
                                            <div class="col-10">
                                                <div class="flex-column justify-content align-center">
                                                    <div class="title">Rekap Ranting</div>
                                                    <small class=""></small>
                                                </div>
                                            </div>
                                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                        </div>
                                    </a>
                                    <div class=""> <html>
                                        <head>
                                            <title></title>
                                        </head>
                                        <center>
                                            <body>
                                                <HEAD>
                                                    <div class="card card-header bg-white my-1">
                                                        <style type="text/css">
                                                            <!--
                                                            span.label {color:black;width:30;height:16;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
                                                            span.c1 {cursor:hand;color:black;width:30;height:16;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
                                                            span.c2 {cursor:hand;color:red;width:30;height:16;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
                                                            span.c3 {cursor:hand;color:#b0b0b0;width:30;height:16;text-align:center;margin-top:0;background:#ffF;font:bold 12px Arial}
                                                            -->
                                                        </style>
                                                        <html>
                                                            <body>
                                                                <?php
                                                                date_default_timezone_set("Asia/jakarta");
                                                                ?>
                                                                <center>
                                                                    <b><h2>
                                                                        <div class="text-dark my-1">
                                                                        <span id="jam" style="font-size:24"></span></b></p>
                                                                        <script type="text/javascript">
                                                                            window.onload = function() { jam(); }
                                                                            function jam() {
                                                                            var e = document.getElementById('jam'),
                                                                            d = new Date(), h, m, s;
                                                                            h = d.getHours();
                                                                            m = set(d.getMinutes());
                                                                            s = set(d.getSeconds());
                                                                            e.innerHTML = h +':'+ m +':'+ s;
                                                                            setTimeout('jam()', 1000);
                                                                            }
                                                                            function set(e) {
                                                                            e = e < 10 ? '0'+ e : e;
                                                                            return e;
                                                                            }
                                                                        </script>
                                                                        <script type="text/javascript">
                                                                            <!-- This script and many more are available free online at -->
                                                                            <!-- The JavaScript Source!! http://javascript.internet.com -->
                                                                            <!-- Begin
                                                                            function maxDays(mm, yyyy){
                                                                            var mDay;
                                                                            if((mm == 3) || (mm == 5) || (mm == 8) || (mm == 10)){
                                                                            mDay = 30;
                                                                            }
                                                                            else{
                                                                            mDay = 31
                                                                            if(mm == 1){
                                                                            if (yyyy/4 - parseInt(yyyy/4) != 0){
                                                                            mDay = 28
                                                                            }
                                                                            else{
                                                                            mDay = 29
                                                                            }
                                                                            }
                                                                            }
                                                                            return mDay;
                                                                            }
                                                                            function changeBg(id){
                                                                            if (eval(id).style.backgroundColor != "yellow"){
                                                                            eval(id).style.backgroundColor = "yellow"
                                                                            }
                                                                            else{
                                                                            eval(id).style.backgroundColor = "#ffffff"
                                                                            }
                                                                            }
                                                                            function writeCalendar(){
                                                                            var now = new Date
                                                                            var dd = now.getDate()
                                                                            var mm = now.getMonth()
                                                                            var dow = now.getDay()
                                                                            var yyyy = now.getFullYear()
                                                                            var arrM = new Array("January","February","March","April","May","June","July","August","September","October","November","December")
                                                                            var arrY = new Array()
                                                                            for (ii=0;ii<=4;ii++){
                                                                            arrY[ii] = yyyy - 2 + ii
                                                                            }
                                                                            var arrD = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat")
                                                                            var text = ""
                                                                            text = "<form name=calForm>"
                                                                                text += "<table border=1>"
                                                                                    text += "<tr><td>"
                                                                                        text += "<table width=100%><tr>"
                                                                                            text += "<td align=left>"
                                                                                                text += "<select name=selMonth onChange='changeCal()'>"
                                                                                                    for (ii=0;ii<=11;ii++){
                                                                                                    if (ii==mm){
                                                                                                    text += "<option value= " + ii + " Selected>" + arrM[ii] + "</option>"
                                                                                                    }
                                                                                                    else{
                                                                                                    text += "<option value= " + ii + ">" + arrM[ii] + "</option>"
                                                                                                    }
                                                                                                    }
                                                                                                text += "</select>"
                                                                                            text += "</td>"
                                                                                            text += "<td align=right>"
                                                                                                text += "<select name=selYear onChange='changeCal()'>"
                                                                                                    for (ii=0;ii<=4;ii++){
                                                                                                    if (ii==2){
                                                                                                    text += "<option value= " + arrY[ii] + " Selected>" + arrY[ii] + "</option>"
                                                                                                    }
                                                                                                    else{
                                                                                                    text += "<option value= " + arrY[ii] + ">" + arrY[ii] + "</option>"
                                                                                                    }
                                                                                                    }
                                                                                                text += "</select>"
                                                                                            text += "</td>"
                                                                                        text += "</tr></table>"
                                                                                    text += "</td></tr>"
                                                                                    text += "<tr><td>"
                                                                                        text += "<table border=1>"
                                                                                            text += "<tr>"
                                                                                                for (ii=0;ii<=6;ii++){
                                                                                                text += "<td align=center><span class=label>" + arrD[ii] + "</span></td>"
                                                                                                }
                                                                                            text += "</tr>"
                                                                                            aa = 0
                                                                                            for (kk=0;kk<=5;kk++){
                                                                                            text += "<tr>"
                                                                                                for (ii=0;ii<=6;ii++){
                                                                                                text += "<td align=center><span id=sp" + aa + " onClick='changeBg(this.id)'>1</span></td>"
                                                                                                aa += 1
                                                                                                }
                                                                                            text += "</tr>"
                                                                                            }
                                                                                        text += "</table>"
                                                                                    text += "</td></tr>"
                                                                                text += "</table>"
                                                                            text += "</form>"
                                                                            document.write(text)
                                                                            changeCal()
                                                                            }
                                                                            function changeCal(){
                                                                            var now = new Date
                                                                            var dd = now.getDate()
                                                                            var mm = now.getMonth()
                                                                            var dow = now.getDay()
                                                                            var yyyy = now.getFullYear()
                                                                            var currM = parseInt(document.calForm.selMonth.value)
                                                                            var prevM
                                                                            if (currM!=0){
                                                                            prevM = currM - 1
                                                                            }
                                                                            else{
                                                                            prevM = 11
                                                                            }
                                                                            var currY = parseInt(document.calForm.selYear.value)
                                                                            var mmyyyy = new Date()
                                                                            mmyyyy.setFullYear(currY)
                                                                            mmyyyy.setMonth(currM)
                                                                            mmyyyy.setDate(1)
                                                                            var day1 = mmyyyy.getDay()
                                                                            if (day1 == 0){
                                                                            day1 = 7
                                                                            }
                                                                            var arrN = new Array(41)
                                                                            var aa
                                                                            for (ii=0;ii<day1;ii++){
                                                                            arrN[ii] = maxDays((prevM),currY) - day1 + ii + 1
                                                                            }
                                                                            aa = 1
                                                                            for (ii=day1;ii<=day1+maxDays(currM,currY)-1;ii++){
                                                                            arrN[ii] = aa
                                                                            aa += 1
                                                                            }
                                                                            aa = 1
                                                                            for (ii=day1+maxDays(currM,currY);ii<=41;ii++){
                                                                            arrN[ii] = aa
                                                                            aa += 1
                                                                            }
                                                                            for (ii=0;ii<=41;ii++){
                                                                            eval("sp"+ii).style.backgroundColor = "#FFFFFF"
                                                                            }
                                                                            var dCount = 0
                                                                            for (ii=0;ii<=41;ii++){
                                                                            if (((ii<7)&&(arrN[ii]>20))||((ii>27)&&(arrN[ii]<20))){
                                                                            eval("sp"+ii).innerHTML = arrN[ii]
                                                                            eval("sp"+ii).className = "c3"
                                                                            }
                                                                            else{
                                                                            eval("sp"+ii).innerHTML = arrN[ii]
                                                                            if ((dCount==0)||(dCount==6)){
                                                                            eval("sp"+ii).className = "c2"
                                                                            }
                                                                            else{
                                                                            eval("sp"+ii).className = "c1"
                                                                            }
                                                                            if ((arrN[ii]==dd)&&(mm==currM)&&(yyyy==currY)){
                                                                            eval("sp"+ii).style.backgroundColor="#90EE90"
                                                                            }
                                                                            }
                                                                            dCount += 1
                                                                            if (dCount>6){
                                                                            dCount=0
                                                                            }
                                                                            }
                                                                            }
                                                                            //  End -->
                                                                        </script>
                                                                    </HEAD>
                                                                </h2>
                                                            </b>
                                                        </center>
                                                    </body>
                                                </html>
                                                <!-- STEP TWO: Copy this code into the BODY of your HTML document  -->
                                                <BODY>
                                                    <script type="text/javascript">writeCalendar()</script>
                                                    <!-- Script Size:  5.13 KB -->
                                                </center>
                                            </body>
                                        </html>
                                        <div class="">
                                        </style>
                                        </head></div><div class="">
                                        <div class=" card card-body my-1">
                                            <div>
                                                <h4><div class="card card-header bg-primary text-white my-1">
                                                    <center><h5><b>SINEMART INDONESIA</b></h5>
                                                    </center></h4>
                                                    <small class="text-muted"></small>
                                                </div>
                                                <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5933742806224!2d106.76634435029369!3d-6.18513699550027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f72047235b27%3A0xbdf147ca868ff909!2sSinemart%20Indonesia!5e0!3m2!1sid!2sid!4v1673337340764!5m2!1sid!2sid" width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
                                                <justify><h6> Komplek Ruko Plaza Kedoya Elok Blok DE 19-20 Jl. Panjang - Kedoya
                                                Jakarta Barat - 11520</h6>
                                                </div><div class=""><!DOCTYPE html>
                                                <html>
                                                    <head>
                                                        <meta name="viewport" content="width=device-width, initial-scale=1">
                                                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                                                <style>
                                                                    .fa {
                                                                    padding: 5px;
                                                                    font-size: 30px;
                                                                    width: 40px;
                                                                    text-align: center;
                                                                    text-decoration: none;
                                                                    margin: 5px 2px;
                                                                    border-radius: 40%;
                                                                    }
                                                                    .fa:hover {
                                                                    opacity: 0.7;
                                                                    }
                                                                    .fa-rss {
                                                                    background: #ff6600;
                                                                    color: white;
                                                                    }
                                                                    .fa-facebook {
                                                                    background: #3B5998;
                                                                    color: white;
                                                                    }
                                                                    .fa-instagram {
                                                                    background: #125688;
                                                                    color: white;
                                                                    }
                                                                    .fa-twitter {
                                                                    background: #55ACEE;
                                                                    color: white;
                                                                    }
                                                                    .fa-youtube {
                                                                    background: #bb0000;
                                                                    color: white;
                                                                    }
                                                                    .fa-tumblr {
                                                                    background: #2c4762;
                                                                    color: white;
                                                                    }
                                                                    .fa-linkedin {
                                                                    background: #007bb5;
                                                                    color: white;
                                                                    }
                                                                </style>
                                                            </head>
                                                            <body>
                                                                <div class=" card card-body my-1">
                                                                    <div>
                                                                        <h4><div class="card card-header bg-primary text-white my-2">
                                                                            <center><h5><b>SOSIAL MEDIA</b></h5>
                                                                            </center></h4>
                                                                            <small class="text-muted"></small>
                                                                        </div>
                                                                        <!-- Add font awesome icons -->
                                                                        <center>
                                                                            <a  class="fa fa-rss" href="<?php print_link("https://sinemart.com/") ?>">
                                                                            </a>
                                                                            <a  class="fa fa-facebook" href="<?php print_link("https://www.facebook.com/SinemartOfficial") ?>">
                                                                            </a>
                                                                            <a  class="fa fa-instagram" href="<?php print_link("https://www.instagram.com/sinemart_ph") ?>">
                                                                            </a>
                                                                            <a  class="fa fa-twitter" href="<?php print_link("https://twitter.com/sinemart_ph") ?>">
                                                                            </a>
                                                                            <a  class="fa fa-youtube" href="<?php print_link("https://www.youtube.com/@sinemartpictures") ?>">
                                                                            </a>
                                                                            <a  class="fa fa-tumblr" href="<?php print_link("https://www.tiktok.com/@sinemart_") ?>">
                                                                            </a>
                                                                            <a  class="fa fa-linkedin" href="<?php print_link("https://www.linkedin.com/company/sinemart-ph") ?>">
                                                                            </a>
                                                                        </center>
                                                                    </body>
                                                                </html> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
