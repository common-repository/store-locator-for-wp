<!-- Container -->
<div class="asl-p-cont asl-new-bg">
    <div class="hide">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="i-plus" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <title><?php echo __('Add', 'store-locator-for-wp') ?></title>
                <path d="M16 2 L16 30 M2 16 L30 16" />
            </symbol>
            <symbol id="i-trash" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <title><?php echo __('Trash', 'store-locator-for-wp') ?></title>
                <path d="M28 6 L6 6 8 30 24 30 26 6 4 6 M16 12 L16 24 M21 12 L20 24 M11 12 L12 24 M12 6 L13 2 19 2 20 6" />
            </symbol>
            <symbol id="i-edit" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <title><?php echo __('Edit', 'store-locator-for-wp') ?></title>
                <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" />
            </symbol>
            <svg id="i-alert" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <title><?php echo __('Warning', 'store-locator-for-wp') ?></title>
                <path d="M16 3 L30 29 2 29 Z M16 11 L16 19 M16 23 L16 25" />
            </svg>
        </svg>
    </div>
    <div class="container">
        <div class="row asl-inner-cont">
            <div class="col-md-12">
                <div class="card p-0 mb-4">
                    <h3 class="card-title"><?php echo __('Manage Categories', 'store-locator-for-wp') ?></h3>
                    <div class="card-body">            
                        <?php if (!is_writable(EVDPL_PLUGIN_PATH . 'public/icon')): ?>
                            <h3  class="alert alert-danger" style="font-size: 14px"><?php echo EVDPL_PLUGIN_PATH . 'public/icon' ?> <= <?php echo __('Directory is not writable, Category Image Upload will Fail, Make directory writable.', 'store-locator-for-wp') ?></h3>  
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-12 ralign" style="margin-bottom: 15px">
                                <button type="button" id="btn-asl-delete-all" class="btn btn-danger mrg-r-10"><i><svg width="13" height="13"><use xlink:href="#i-trash"></use></svg></i><?php echo __('Delete Selected', 'store-locator-for-wp') ?></button>
                                <button type="button" id="btn-asl-new-c" class="btn btn-primary mrg-r-10"><i><svg width="13" height="13"><use xlink:href="#i-plus"></use></svg></i><?php echo __('New Category', 'store-locator-for-wp') ?></button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="tbl_categories" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th><input type="text" class="form-control sml" data-id="id"  disabled="disabled" style="opacity: 0" placeholder="<?php echo __('Search ID', 'store-locator-for-wp') ?>"  /></th>
                                        <th align="center"><input type="text" class="form-control" data-id="id"  placeholder="<?php echo __('Search ID', 'store-locator-for-wp') ?>"  /></th>
                                        <th align="center"><input type="text" class="form-control" data-id="category_name"  placeholder="<?php echo __('Search Name', 'store-locator-for-wp') ?>"  /></th>
                                        <th align="center"><input type="text" class="form-control" data-id="is_active"  placeholder="<?php echo __('Active', 'store-locator-for-wp') ?>"  /></th>
                                        <th align="center">&nbsp;</th>
                                        <th align="center">&nbsp;</th>
                                        <th align="center">&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th align="center"><a class="select-all"><?php echo __('Select All', 'store-locator-for-wp') ?></a></th>
                                        <th align="center"><?php echo __('Category ID', 'store-locator-for-wp') ?></th>
                                        <th align="center"><?php echo __('Name', 'store-locator-for-wp') ?></th>
                                        <th align="center"><?php echo __('Active', 'store-locator-for-wp') ?></th>
                                        <th align="center"><?php echo __('Icon', 'store-locator-for-wp') ?></th>
                                        <th align="center"><?php echo __('Created On', 'store-locator-for-wp') ?></th>
                                        <th align="center"><?php echo __('Action', 'store-locator-for-wp') ?>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="dump-message asl-dumper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Alert -->
    <div class="smodal fade" id="asl-update-modal" role="dialog">
        <div class="smodal-dialog" role="document">
            <div class="smodal-content">
                <form id="frm-updatecategory" name="frm-updatecategory">
                    <div class="smodal-header">
                        <h5 class="smodal-title"><?php echo __('Update Category', 'store-locator-for-wp') ?></h5>
                        <button type="button" class="close" data-dismiss="smodal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="smodal-body">
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label class="control-label"><?php echo __('Category ID', 'store-locator-for-wp') ?></label>
                                <input type="text" class="form-control" readonly="readonly"  name="data[category_id]" id="update_category_id_input">
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="txt_name"  class="control-label"><?php echo __('Name', 'store-locator-for-wp') ?></label>
                                <input type="text" class="form-control validate[required]" name="data[category_name]" id="update_category_name">
                            </div>
                            <div class="col-md-12 form-group mb-3" id="updatecategory_image">
                                <img  src="" id="update_category_icon" alt="" data-id="same" style="max-width: 80px;max-height: 80px" />
                                <button type="button" class="btn btn-default" id="change_image"><?php echo __('Change', 'store-locator-for-wp') ?></button>
                            </div>

                            <div class="col-md-12 form-group mb-3" style="display:none" id="updatecategory_editimage">                  
                                <div class="input-group" id="drop-zone">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo __('Image', 'store-locator-for-wp') ?></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="btn btn-default" style="width:98%;opacity:0;position:absolute;top:0;left:0"  name="files" id="file-img-1" />
                                        <label  class="custom-file-label" for="file-img-1"><?php echo __('File Path...', 'store-locator-for-wp') ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="progress hideelement" style="display:none" id="progress_bar_">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                            <span style="position:relative" class="sr-only">0% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <ul></ul>
                            </div>
                            <p id="message_update"></p>
                        </div>
                        <div class="smodal-footer">
                            <button class="btn btn-primary btn-start mrg-r-15" id="btn-asl-update-categories"   type="button" data-loading-text="<?php echo __('Submitting ...', 'store-locator-for-wp') ?>"><?php echo __('Update Category', 'store-locator-for-wp') ?></button>
                            <button type="button" class="btn btn-default" data-dismiss="smodal"><?php echo __('Cancel', 'store-locator-for-wp') ?></button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <!-- asl-cont end-->

    <div class="smodal fade" id="asl-add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="smodal-dialog" role="document">
            <div class="smodal-content">
                <form id="frm-addcategory" name="frm-addcategory">
                    <div class="smodal-header">
                        <h5 class="smodal-title"><?php echo __('Add New Category', 'store-locator-for-wp') ?></h5>
                        <button type="button" class="close" data-dismiss="smodal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="smodal-body">
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="txt_name" class="control-label"><?php echo __('Name', 'store-locator-for-wp') ?></label>
                                <input type="text" class="form-control" class="form-control validate[required]" name="data[category_name]">
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <div class="input-group" id="drop-zone-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo __('Icon', 'store-locator-for-wp') ?></span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="btn btn-default" style="width:98%;opacity:0;position:absolute;top:0;left:0"  name="files" id="file-img-2" />
                                        <label  class="custom-file-label" for="file-img-2"><?php echo __('File Path...', 'store-locator-for-wp') ?></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <div class="progress hideelement" style="display:none" id="progress_bar">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                        <span style="position:relative" class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                            <p id="message_upload" class="alert alert-warning hide"></p>
                        </div>
                        <div class="smodal-footer">
                            <button class="btn btn-primary btn-start mrg-r-15" id="btn-asl-add-categories" type="button" data-loading-text="<?php echo __('Submitting ...', 'store-locator-for-wp') ?>"><?php echo __('Add Category', 'store-locator-for-wp') ?></button>
                            <button type="button" class="btn btn-default" data-dismiss="smodal"><?php echo __('Cancel', 'store-locator-for-wp') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- SCRIPTS -->
<script type="text/javascript">
    var ASL_Instance = {
        url: '<?php echo EVDPL_URL_PATH ?>'
    };

    window.addEventListener("load", function () {

        asl_engine.pages.manage_categories();
    });
</script>