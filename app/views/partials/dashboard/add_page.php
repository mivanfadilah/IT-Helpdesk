<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card card-body bg-primary animated fadeIn page-content">
                        <form id="dashboard-add_page-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="<?php print_link("dashboard/add_page?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class=""> </div>
                                    <div class="">
                                        <div class="">
                                            <textarea placeholder="Apa yang Anda Pikirkan ?" id="ctrl-status"  rows="6" name="status" class=" form-control"><?php  echo $this->set_field_value('status',""); ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class=""> </div>
                                    <div class="col-sm-2">
                                        <div class="">
                                            <div class="dropzone " input="#ctrl-foto" fieldname="foto"    data-multiple="false" dropmsg="Foto"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="10" maximum="1">
                                                <input name="foto" id="ctrl-foto" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('foto',""); ?>" type="text"  />
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="dropzone " input="#ctrl-file" fieldname="file"    data-multiple="false" dropmsg="File"    btntext="Browse" extensions=".docx,.doc,.xls,.xlsx,.xml,.csv,.pdf,.xps" filesize="20" maximum="1">
                                                <input name="file" id="ctrl-file" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('file',""); ?>" type="text"  />
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">  
                                                <div class="dropzone " input="#ctrl-video" fieldname="video"    data-multiple="false"   dropmsg="Video"    btntext="Browse" extensions=".mp3,.mp4,.wav,.avi,.mpg,.mpeg" filesize="30" maximum="4">
                                                    <input name="video" id="ctrl-video" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('video',""); ?>" type="text"  />
                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                    </div>
                                                </div>                   
                                                <div class="container"
                                                    <div class="form-group form-submit-btn-holder text-center mt-3">
                                                    <div class="form-ajax-status"></div>
                                                    <button class="btn btn-info" type="submit">
                                                        Update
                                                        <i class="material-icons">send</i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
