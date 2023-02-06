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
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class=" animated fadeIn page-content">
                        <!DOCTYPE html>
                        <html>
                            <head>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <style>
                                        * {box-sizing: border-box}
                                        /* Set height of body and the document to 100% */
                                        body, html {
                                        height: 100%;
                                        margin: 0;
                                        font-family: Arial;
                                        }
                                        /* Style tab links */
                                        .tablink {
                                        background-color: light;
                                        color: black;
                                        float: left;
                                        border: none;
                                        outline: none;
                                        cursor: pointer;
                                        padding: 14px 16px;
                                        font-size: 15px;
                                        width: 25%;
                                        }
                                        .tablink:hover {
                                        background-color: ;
                                        }
                                        /* Style the tab content (and add height:100% for full page content) */
                                        .tabcontent {
                                        color: white;
                                        display: none;
                                        padding: 100px 20px;
                                        height: 100%;
                                        }
                                        #bh {background-color: #D9230F;}
                                        #bh1 {background-color: #D9230F;}
                                        #db {background-color: #D9230F;}
                                        #day {background-color: #D9230F;}
                                        #day1 {background-color: #D9230F;}
                                        #rm{background-color: #D9230F;}
                                        #tr{background-color: #D9230F;}
                                        #ivan{background-color: #D9230F;}
                                    </style>
                                </head>
                                <body>
                                    <p></p>
                                    <div  class="bg-light p-3 mb-3">
                                        <h4 ><u><b>TUTORIAL</b></u></h4>
                                        <p></p>
                                        <button class="tablink" onclick="openPage('bh', this, 'white')"id="defaultOpen">BH - Tutorial Pimpinan Produksi Approval</button>
                                        <button class="tablink" onclick="openPage('bh1', this, 'white')">BH -Tutorial Produser Pelaksana Approval</button>
                                        <button class="tablink" onclick="openPage('db', this, 'white')">DB Talent-Tutorial Ubah Password</button>
                                        <button class="tablink" onclick="openPage('day', this, 'white')">Tutorial - Time Off (Full Day)</button>
                                        <button class="tablink" onclick="openPage('day1', this, 'white')">Tutorial - Time Off (Half Day)</button>
                                        <button class="tablink" onclick="openPage('rm', this, 'white')">Tutorial Penggunaan Proyektor</button>
                                        <button class="tablink" onclick="openPage('tr', this, 'white')">Tutorial Reimburse</button>
                                        <button class="tablink" onclick="openPage('ivan', this, 'white')">Kosong</button>
                                        <div id="bh" class="tabcontent">
                                            <p></p>
                                            <center><h2 id="h-Biaya Harian - Tutorial Pimpinan Produksi Approval"><span id="Biaya Harian - Tutorial Pimpinan Produksi Approval">Biaya Harian - Tutorial Pimpinan Produksi Approval</span></h2>
                                                <p>  Berikut adalah tutorial untuk Pimpinan Produksi approve Laporan Biaya Harian yang diinput oleh Unit Keuangan :</p>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/1.jpg" width="500" height="780" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/2.jpg" width="500" height="800" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/3.jpg" width="500" height="800" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/4.jpg" width="500" height="800" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/5.jpg" width="500" height="800" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/6.jpg" width="500" height="800" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/7.jpg" width="500" height="800" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/8.jpg" width="500" height="800" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/>
                                                <p></p>
                                            <img src="images/Biaya Harian - Tutorial Pimpinan Produksi Approval/9.jpg" width="500" height="800" alt="Biaya Harian - Tutorial Pimpinan Produksi Approval"/></center>
                                            <p></p>
                                        </div>
                                        <div id="bh1" class="tabcontent">
                                            <p></p>
                                            <center><h2 id="h-Biaya Harian - Tutorial Produser Pelaksana Approval"><span id="Biaya Harian - Tutorial Produser Pelaksana Approval">Biaya Harian - Tutorial Produser Pelaksana Approval</span></h2>
                                                <p> Berikut adalah tutorial untuk Produser Pelaksana approve Laporan Biaya Harian yang diinput oleh Unit Keuangan :</p>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Produser Pelaksana Approval/1.jpg" width="800" height="500" alt="Biaya Harian - Tutorial Produser Pelaksana Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Produser Pelaksana Approval/2.jpg" width="800" height="500" alt="Biaya Harian - Tutorial Produser Pelaksana Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Produser Pelaksana Approval/3.jpg" width="800" height="500" alt="Biaya Harian - Tutorial Produser Pelaksana Approval"/>
                                                <p></p>
                                                <img src="images/Biaya Harian - Tutorial Produser Pelaksana Approval/4.jpg" width="800" height="500" alt="Biaya Harian - Tutorial Produser Pelaksana Approval"/>
                                                <p></p>
                                            </div>
                                            <div id="db" class="tabcontent">
                                                <p></p>
                                                <center><h2 id="h-DB Talent - Tutorial Ubah Password"><span id="DB Talent - Tutorial Ubah Password">DB Talent - Tutorial Ubah Password</span></h2>
                                                    <p>  Berikut ini adalah tutorial untuk merubah password di aplikasi DB Talent :</p>
                                                    <p></p>
                                                    <img src="images/DB Talent - Tutorial Ubah Password/1.jpg" width="800" height="500" alt="DB Talent - Tutorial Ubah Password"/>
                                                    <p></p>
                                                    <img src="images/DB Talent - Tutorial Ubah Password/2.jpg" width="800" height="500" alt="DB Talent - Tutorial Ubah Password"/>
                                                    <p></p>
                                                    <img src="images/DB Talent - Tutorial Ubah Password/3.jpg" width="800" height="500" alt="DB Talent - Tutorial Ubah Password"/>
                                                    <p></p>
                                                    <img src="images/DB Talent - Tutorial Ubah Password/4.jpg" width="800" height="500" alt="DB Talent - Tutorial Ubah Password"/>
                                                    <p></p>
                                                </div>
                                                <div id="day" class="tabcontent">
                                                    <p></p>
                                                    <center><h2 id="h-Tutorial - Time Off (Full Day)"><span id="Tutorial - Time Off (Full Day)">Tutorial - Time Off (Full Day)</span></h2>
                                                        <p>  Berikut adalah tutorial untuk mengajukan Time Off / Cuti (Full Day) menggunakan Talenta - Mobile :</p>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/1.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/1.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/2.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/3.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <<img src="images/Tutorial - Time Off (Full Day)/4.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/5.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/6.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/7.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/8.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/9.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/10.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/11.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                        <img src="images/Tutorial - Time Off (Full Day)/12.jpg" width="500" height="780" alt="Tutorial - Time Off (Full Day)"/>
                                                        <p></p>
                                                    </div>
                                                    <div id="day1" class="tabcontent">
                                                        <p></p>
                                                        <center><h2 id="h-Tutorial - Time Off (Half Day)"><span id="Tutorial - Time Off (Half Day)">Tutorial - Time Off (Half Day)</span></h2>
                                                            <p>  Berikut adalah tutorial untuk mengajukan Time Off / Cuti (Half Day) menggunakan Talenta - Mobile :</p>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/1.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/2.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/3.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/4.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/5.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/6.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/7.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/8.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/9.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/10.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/11.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/12.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/13.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/14.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                            <img src="images/Tutorial - Time Off (Half Day)/15.jpg" width="500" height="780" alt="Tutorial - Time Off (Half Day)"/>
                                                            <p></p>
                                                        </div>
                                                        <div id="rm" class="tabcontent">
                                                            <p></p>
                                                            <center><h2 id="h-Tutorial Penggunaan Proyektor Ruang Meeting"><span id="Tutorial Penggunaan Proyektor Ruang Meeting">Tutorial Penggunaan Proyektor Ruang Meeting</span></h2>
                                                                <p> Berikut ini adalah List Tutorial penggunaan peralatan IT :</p>
                                                                <p></p>
                                                                <img src="images/Tutorial Penggunaan Proyektor Ruang Meeting/a.png" width="500" height="780" alt="Tutorial Penggunaan Proyektor Ruang Meeting"/>
                                                                <p></p>
                                                                <img src="images/Tutorial Penggunaan Proyektor Ruang Meeting/b.png" width="500" height="780" alt="Tutorial Penggunaan Proyektor Ruang Meeting"/>
                                                                <p></p>
                                                            </div>
                                                            <div id="tr" class="tabcontent">
                                                                <p></p>
                                                                <center><h2 id="h-Tutorial Reimburse"><span id="Tutorial Reimburse">Tutorial Reimburse</span></h2>
                                                                    <p> Berikut adalah tutorial untuk mengajukan reimburse rawat jalan menggunakan Talenta - Mobile :</p>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/1.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/2.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/3.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/4.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/5.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/6.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/7.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/8.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/9.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/10.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/11.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                    <img src="images/Tutorial Reimburse/12.jpg" width="500" height="780" alt="Tutorial Reimburse"/>
                                                                    <p></p>
                                                                </div>
                                                                <script>
                                                                    function openPage(pageName,elmnt,color) {
                                                                    var i, tabcontent, tablinks;
                                                                    tabcontent = document.getElementsByClassName("tabcontent");
                                                                    for (i = 0; i < tabcontent.length; i++) {
                                                                    tabcontent[i].style.display = "none";
                                                                    }
                                                                    tablinks = document.getElementsByClassName("tablink");
                                                                    for (i = 0; i < tablinks.length; i++) {
                                                                    tablinks[i].style.backgroundColor = "";
                                                                    }
                                                                    document.getElementById(pageName).style.display = "block";
                                                                    elmnt.style.backgroundColor = color;
                                                                    }
                                                                    // Get the element with id="defaultOpen" and click on it
                                                                    document.getElementById("defaultOpen").click();
                                                                </script>
                                                            </body>
                                                        </html> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
