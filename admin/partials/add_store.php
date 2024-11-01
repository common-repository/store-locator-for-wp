<!-- <script type="text/javascript" charset="utf-8" src="//maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script> -->
<div class="asl-p-cont asl-new-bg">
    <div class="hide">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="i-trash" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <title><?php echo __('Trash', 'store-locator-for-wp') ?></title>
                <path d="M28 6 L6 6 8 30 24 30 26 6 4 6 M16 12 L16 24 M21 12 L20 24 M11 12 L12 24 M12 6 L13 2 19 2 20 6" />
            </symbol>
            <symbol id="i-clock" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <circle cx="16" cy="16" r="14" />
                <path d="M16 8 L16 16 20 20" />
            </symbol>
            <symbol id="i-plus" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <title><?php echo __('Add', 'store-locator-for-wp') ?></title>
                <path d="M16 2 L16 30 M2 16 L30 16" />
            </symbol>
            <symbol id="i-chevron-top" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M30 20 L16 8 2 20" />
            </symbol>
            <symbol id="i-chevron-bottom" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M30 12 L16 24 2 12" />
            </symbol>
        </svg>
    </div>
    <div class="container">
        <div class="row asl-inner-cont">
            <div class="col-md-12">
                <div class="card p-0 mb-4">
                    <h3 class="card-title"><?php echo __('Add New Store', 'store-locator-for-wp') ?></h3>
                    <div class="card-body">
                        <form id="frm-addstore">
                            <div class="card-title mb-3"><?php echo __('Store Details', 'store-locator-for-wp') ?></div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_title"><?php echo __('Title', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="txt_title" name="data[title]" class="form-control validate[required]">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_website"><?php echo __('Website', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="txt_website" name="data[website]" placeholder="http://example.com" class="form-control">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_description"><?php echo __('Description', 'store-locator-for-wp') ?></label>
                                    <textarea id="txt_description" name="data[description]" rows="3"  placeholder="Enter Description" maxlength="500" class="input-medium form-control"></textarea>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_description_2"><?php echo __('Additional Description', 'store-locator-for-wp') ?></label>
                                    <textarea id="txt_description_2" name="data[description_2]" rows="3"  placeholder="Additional Description" maxlength="500" class="input-medium form-control"></textarea>
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_phone"><?php echo __('Phone', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="txt_phone" name="data[phone]" class="form-control">

                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_fax"><?php echo __('Fax', 'store-locator-for-wp') ?></label>
                                    <input type="text"  id="txt_fax" name="data[fax]" class="form-control">
                                </div>
                            </div>

                            <div class="card-title mb-3 mt-3"><?php echo __('Store Address', 'store-locator-for-wp') ?></div>
                            <div class="row">

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_email"><?php echo __('Email', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="txt_email" name="data[email]" class="form-control validate[custom[email]]">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_street"><?php echo __('Street', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="txt_street" name="data[street]" class="form-control">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_city"><?php echo __('City', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="txt_city" name="data[city]" class="form-control validate[required]">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_state"><?php echo __('State', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="txt_state" name="data[state]" class="form-control">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_postal_code"><?php echo __('Postal Code', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="txt_postal_code" name="data[postal_code]" class="form-control">
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt_country"><?php echo __('Country', 'store-locator-for-wp') ?></label>
                                    <select id="txt_country" style="width:100%" name="data[country]" class="custom-select validate[required]">
                                        <option value=""><?php echo __('Select Country', 'store-locator-for-wp') ?></option>  
                                        <?php foreach ($countries as $country): ?>
                                            <option value="<?php echo esc_attr($country->id) ?>"><?php echo esc_attr($country->country) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group mt-3 col-12">
                                    <div id="map_canvas" class="map_canvas"></div>
                                </div>	
                                <div class="col-md-6 form-group mb-3">
                                    <label for="asl_txt_lng"><?php echo __('Longitude', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="asl_txt_lng" name="data[lng]" value="0.0" readonly="true" class="form-control">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label for="asl_txt_lat"><?php echo __('Latitude', 'store-locator-for-wp') ?></label>
                                    <input type="text" id="asl_txt_lat" name="data[lat]" value="0.0" readonly="true" class="form-control">
                                </div>
                                <div class="col-12">
                                    <a id="lnk-edit-coord" class="btn float-right btn-warning"><?php echo __('Change Coordinates', 'store-locator-for-wp') ?></a>
                                </div>
                                <div class="col-12">
                                    <div class="dump-message"></div>
                                </div>
                            </div>

                            <div class="card-title mt-3 mb-3"><?php echo __('Other Details', 'store-locator-for-wp') ?></div>
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="txt-ordering"><?php echo __('Priority Order', 'store-locator-for-wp') ?></label>
                                    <input type="number" id="txt-ordering" name="data[ordr]" value="0" placeholder="0" class="form-control validate[integer]">
                                        <small class="form-text text-muted"><?php echo __('Descending Order for the list, higher number on top.', 'store-locator-for-wp') ?></small>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="data[is_disabled]" id="chk_disabled">
                                            <label class="custom-control-label" for="chk_disabled"><?php echo __('Disabled', 'store-locator-for-wp') ?></label>
                                    </div>
                                </div>
                                <?php
                                foreach ($fields as $field):

                                    $field_name = $field['name'];
                                    $field_label = $field['label'];
                                    ?>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="custom-f-<?php echo esc_attr($field_name); ?>"><?php echo esc_attr($field_label); ?></label>
                                        <input type="text" id="custom-f-<?php echo esc_attr($field_name); ?>" name="asl-custom[<?php echo esc_attr($field_name); ?>]"  class="form-control">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="card-title mt-3 mb-3"><?php echo __('Store Timing', 'store-locator-for-wp') ?></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-stripped asl-time-details">
                                            <tbody>
                                                <tr>
                                                    <td colspan="1"><span class="lbl-day"><?php echo __('Monday', 'store-locator-for-wp') ?></span></td>
                                                    <td colspan="3">
                                                        <div class="asl-all-day-times" data-day="mon">

                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="9:30 AM" class="form-control asltimepicker validate[required,funcCall[ASLmatchTime]]" placeholder="<?php echo __('Start Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="6:30 PM" class="form-control asltimepicker validate[required]" placeholder="<?php echo __('End Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <span class="add-k-delete glyp-trash">
                                                                    <svg width="16" height="16"><use xlink:href="#i-trash"></use></svg>
                                                                </span>
                                                            </div>
                                                            <div class="asl-closed-lbl">
                                                                <div class="a-swith">
                                                                    <input id="cmn-toggle-0" class="cmn-toggle cmn-toggle-round" type="checkbox" checked="checked">
                                                                        <label for="cmn-toggle-0"></label>
                                                                        <span><?php echo __('Closed', 'store-locator-for-wp') ?></span>
                                                                        <span><?php echo __('Open 24 Hour', 'store-locator-for-wp') ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="add-k-add glyp-add">
                                                            <svg width="16" height="16"><use xlink:href="#i-plus"></use></svg>
                                                        </span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="1"><span class="lbl-day"><?php echo __('Tuesday', 'store-locator-for-wp') ?></span></td>
                                                    <td colspan="3">
                                                        <div class="asl-all-day-times" data-day="tue">
                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="9:30 AM" class="form-control asltimepicker validate[required,funcCall[ASLmatchTime]]" placeholder="<?php echo __('Start Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="6:30 PM" class="form-control asltimepicker validate[required]" placeholder="<?php echo __('End Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <span class="add-k-delete glyp-trash">
                                                                    <svg width="16" height="16"><use xlink:href="#i-trash"></use></svg>
                                                                </span>
                                                            </div>
                                                            <div class="asl-closed-lbl">
                                                                <div class="a-swith">
                                                                    <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox" checked="checked">
                                                                        <label for="cmn-toggle-1"></label>
                                                                        <span><?php echo __('Closed', 'store-locator-for-wp') ?></span>
                                                                        <span><?php echo __('Open 24 Hour', 'store-locator-for-wp') ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="add-k-add glyp-add">
                                                            <svg width="16" height="16"><use xlink:href="#i-plus"></use></svg>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"><span class="lbl-day"><?php echo __('Wednesday', 'store-locator-for-wp') ?></span></td>
                                                    <td colspan="3">
                                                        <div class="asl-all-day-times" data-day="wed">
                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="9:30 AM" class="form-control asltimepicker validate[required,funcCall[ASLmatchTime]]" placeholder="<?php echo __('Start Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="6:30 PM" class="form-control asltimepicker validate[required]" placeholder="<?php echo __('End Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <span class="add-k-delete glyp-trash">
                                                                    <svg width="16" height="16"><use xlink:href="#i-trash"></use></svg>
                                                                </span>
                                                            </div>
                                                            <div class="asl-closed-lbl">
                                                                <div class="a-swith">
                                                                    <input id="cmn-toggle-2" class="cmn-toggle cmn-toggle-round" type="checkbox" checked="checked">
                                                                        <label for="cmn-toggle-2"></label>
                                                                        <span><?php echo __('Closed', 'store-locator-for-wp') ?></span>
                                                                        <span><?php echo __('Open 24 Hour', 'store-locator-for-wp') ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="add-k-add glyp-add">
                                                            <svg width="16" height="16"><use xlink:href="#i-plus"></use></svg>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"><span class="lbl-day"><?php echo __('Thursday', 'store-locator-for-wp') ?></span></td>
                                                    <td colspan="3">
                                                        <div class="asl-all-day-times" data-day="thu">
                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="9:30 AM" class="form-control asltimepicker validate[required,funcCall[ASLmatchTime]]" placeholder="<?php echo __('Start Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="6:30 PM" class="form-control asltimepicker validate[required]" placeholder="<?php echo __('End Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <span class="add-k-delete glyp-trash">
                                                                    <svg width="16" height="16"><use xlink:href="#i-trash"></use></svg>
                                                                </span>
                                                            </div>
                                                            <div class="asl-closed-lbl">
                                                                <div class="a-swith">
                                                                    <input id="cmn-toggle-3" class="cmn-toggle cmn-toggle-round" type="checkbox" checked="checked">
                                                                        <label for="cmn-toggle-3"></label>
                                                                        <span><?php echo __('Closed', 'store-locator-for-wp') ?></span>
                                                                        <span><?php echo __('Open 24 Hour', 'store-locator-for-wp') ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="add-k-add glyp-add">
                                                            <svg width="16" height="16"><use xlink:href="#i-plus"></use></svg>
                                                        </span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="1"><span class="lbl-day"><?php echo __('Friday', 'store-locator-for-wp') ?></span></td>
                                                    <td colspan="3">
                                                        <div class="asl-all-day-times" data-day="fri">
                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="9:30 AM" class="form-control asltimepicker validate[required,funcCall[ASLmatchTime]]" placeholder="<?php echo __('Start Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="6:30 PM" class="form-control asltimepicker validate[required]" placeholder="<?php echo __('End Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <span class="add-k-delete glyp-trash">
                                                                    <svg width="16" height="16"><use xlink:href="#i-trash"></use></svg>
                                                                </span>
                                                            </div>
                                                            <div class="asl-closed-lbl">
                                                                <div class="a-swith">
                                                                    <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round" type="checkbox" checked="checked">
                                                                        <label for="cmn-toggle-4"></label>
                                                                        <span><?php echo __('Closed', 'store-locator-for-wp') ?></span>
                                                                        <span><?php echo __('Open 24 Hour', 'store-locator-for-wp') ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="add-k-add glyp-add">
                                                            <svg width="16" height="16"><use xlink:href="#i-plus"></use></svg>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"><span class="lbl-day"><?php echo __('Saturday', 'store-locator-for-wp') ?></span></td>
                                                    <td colspan="3">
                                                        <div class="asl-all-day-times" data-day="sat">
                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="9:30 AM" class="form-control asltimepicker validate[required,funcCall[ASLmatchTime]]" placeholder="<?php echo __('Start Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="6:30 PM" class="form-control asltimepicker validate[required]" placeholder="<?php echo __('End Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <span class="add-k-delete glyp-trash">
                                                                    <svg width="16" height="16"><use xlink:href="#i-trash"></use></svg>
                                                                </span>
                                                            </div>
                                                            <div class="asl-closed-lbl">
                                                                <div class="a-swith">
                                                                    <input id="cmn-toggle-5" class="cmn-toggle cmn-toggle-round" type="checkbox" checked="checked">
                                                                        <label for="cmn-toggle-5"></label>
                                                                        <span><?php echo __('Closed', 'store-locator-for-wp') ?></span>
                                                                        <span><?php echo __('Open 24 Hour', 'store-locator-for-wp') ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="add-k-add glyp-add">
                                                            <svg width="16" height="16"><use xlink:href="#i-plus"></use></svg>
                                                        </span>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="1"><span class="lbl-day"><?php echo __('Sunday', 'store-locator-for-wp') ?></span></td>
                                                    <td colspan="3">
                                                        <div class="asl-all-day-times" data-day="sun">
                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="9:30 AM" class="form-control asltimepicker validate[required,funcCall[ASLmatchTime]]" placeholder="<?php echo __('Start Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <div class="input-group bootstrap-asltimepicker">
                                                                    <input type="text" value="6:30 PM" class="form-control asltimepicker validate[required]" placeholder="<?php echo __('End Time', 'store-locator-for-wp') ?>">
                                                                        <span class="input-group-append add-on"><span class="input-group-text"><svg width="16" height="16"><use xlink:href="#i-clock"></use></svg></span></span>
                                                                </div>
                                                                <span class="add-k-delete glyp-trash">
                                                                    <svg width="16" height="16"><use xlink:href="#i-trash"></use></svg>
                                                                </span>
                                                            </div>
                                                            <div class="asl-closed-lbl">
                                                                <div class="a-swith">
                                                                    <input id="cmn-toggle-6" class="cmn-toggle cmn-toggle-round" type="checkbox" checked="checked">
                                                                        <label for="cmn-toggle-6"></label>
                                                                        <span><?php echo __('Closed', 'store-locator-for-wp') ?></span>
                                                                        <span><?php echo __('Open 24 Hour', 'store-locator-for-wp') ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="add-k-add glyp-add">
                                                            <svg width="16" height="16"><use xlink:href="#i-plus"></use></svg>
                                                        </span>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <button type="button" class="float-right btn btn-primary mrg-r-10" data-loading-text="<?php echo __('Saving Store...', 'store-locator-for-wp') ?>" data-completed-text="<?php echo __('Store Saved', 'store-locator-for-wp') ?>" id="btn-asl-add"><?php echo __('Add Store', 'store-locator-for-wp') ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modals	-->
    <div class="smodal fade" tabindex="-1" id="addimagemodel" role="dialog">
        <div class="smodal-dialog" role="document">
            <div class="smodal-content">
                <form id="frm-upload-logo" name="frm-upload-logo">
                    <div class="smodal-header">
                        <h5 class="smodal-title"><?php echo __('Upload Logo', 'store-locator-for-wp') ?></h5>
                        <button type="button" class="close" data-dismiss="smodal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="smodal-body">
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="txt_logo-name"><?php echo __('Name', 'store-locator-for-wp') ?></label>
                                <input type="text" id="txt_logo-name" name="data[logo_name]" placeholder="<?php echo __('Logo Name', 'store-locator-for-wp') ?>" class="form-control">
                            </div>
                            <div class="col-md-12 form-group mb-3" id="drop-zone">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo __('Logo', 'store-locator-for-wp') ?></span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="files" type="file" class="custom-file-input" accept=".jpg,.png,.jpeg,.gif,.JPG" id="file-logo">
                                            <label  class="custom-file-label" for="file-logo"><?php echo __('File Path...', 'store-locator-for-wp') ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="progress hideelement progress_bar_" style="display:none">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                        <span style="position:relative" class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                            <div class="col-12"><p id="message_upload" class="alert alert-warning hide"></p></div>
                        </div>
                    </div>

                    <div class="smodal-footer">
                        <button type="button" data-loading-text="<?php echo __('Submitting ...', 'store-locator-for-wp') ?>" class="btn btn-start btn-primary"><?php echo __('Upload', 'store-locator-for-wp') ?></button>
                        <button type="button" class="btn btn-secondary" data-dismiss="smodal"><?php echo __('Close', 'store-locator-for-wp') ?></button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <!-- Add Marker -->
    <div class="smodal fade" tabindex="-1" id="addmarkermodel" role="dialog">
        <div class="smodal-dialog" role="document">
            <div class="smodal-content">
                <form id="frm-upload-marker" name="frm-upload-marker">
                    <div class="smodal-header">
                        <h5 class="smodal-title"><?php echo __('Upload Marker', 'store-locator-for-wp') ?></h5>
                        <button type="button" class="close" data-dismiss="smodal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="smodal-body">
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="txt_marker-name"><?php echo __('Marker Name', 'store-locator-for-wp') ?></label>
                                <input type="text" id="txt_marker-name" name="data[marker_name]" class="form-control">
                            </div>
                            <div class="col-md-12 form-group mb-3" id="drop-zone-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><?php echo __('Icon', 'store-locator-for-wp') ?></span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="files" type="file" class="custom-file-input" accept=".jpg,.png,.jpeg,.gif,.JPG" id="file-logo-2">
                                            <label  class="custom-file-label" for="file-logo-2"><?php echo __('File Path...', 'store-locator-for-wp') ?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="progress hideelement progress_bar_" style="display:none">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                                        <span style="position:relative" class="sr-only">0% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <ul></ul>
                            <div class="col-12">
                                <p id="message_upload_1" class="alert alert-warning hide"></p>
                            </div>
                        </div>
                    </div>
                    <div class="smodal-footer">
                        <button type="button" data-loading-text="<?php echo __('Submitting ...', 'store-locator-for-wp') ?>" class="btn btn-start btn-primary"><?php echo __('Upload', 'store-locator-for-wp') ?></button>
                        <button type="button" class="btn btn-default" data-dismiss="smodal"><?php echo __('Close', 'store-locator-for-wp') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script type="text/javascript">

    var asl_configs = <?php echo json_encode($all_configs); ?>;
    var ASL_Instance = {
        url: '<?php echo EVDPL_URL_PATH ?>'

    };
    window.addEventListener("load", function () {
        asl_engine.pages.add_store();
    });
</script>