<div class="asl-p-cont asl-new-bg">
    <div class="hide">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="i-trash" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
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
                    <h3 class="card-title"><?php echo __('Manage Additional Fields', 'store-locator-for-wp') ?></h3>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <p><?php echo __('Additional fields for the store can be created through this section, new fields will appear in the store form and via CSV import.', 'store-locator-for-wp') ?> <?php echo __('To show the additional fields on the template, please add the fields in the template as in this <a target="_blank" href="https://www.youtube.com/watch?v=WpPUMxlNX4M">Video Guide</a>.', 'store-locator-for-wp') ?></p>
                                <p class="alert alert-info" role="alert"><?php echo __(' <b>Control Name</b> must be small-case and without spacing, please use underscore sign (_) as the space separator, example: <b>facebook_url</b></p>', 'store-locator-for-wp') ?> </p>
                                <form id="frm-asl-custom-fields">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-stripped asl-attr-manage">
                                            <thead>
                                                <tr>
                                                    <th><?php echo __('Label', 'store-locator-for-wp') ?></th>
                                                    <th><?php echo __('Control Name', 'store-locator-for-wp') ?></th>
                                                    <th><?php echo __('Action', 'store-locator-for-wp') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($fields as $field):

                                                    $field_name = esc_attr($field['name']);
                                                    $field_label = esc_attr($field['label']);
                                                    ?>
                                                    <tr>
                                                        <td colspan="1"><div class="form-group"><input value="<?php echo esc_attr($field_label); ?>" type="text" class="asl-attr-label form-control validate[required,funcCall[ASLValidateLabel]]"></div></td>
                                                        <td colspan="1"><div class="form-group"><input value="<?php echo esc_attr($field_name); ?>" type="text" class="asl-attr-name form-control validate[required,funcCall[ASLValidateName]]"></div></td>
                                                        <td colspan="1">
                                                            <span class="add-k-delete glyp-trash">
                                                                <svg width="16" height="16"><use xlink:href="#i-trash"></use></svg>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-dark mrg-r-10 mt-3 float-left" id="btn-asl-add-field"><i><svg width="13" height="13"><use xlink:href="#i-plus"></use></svg></i><?php echo __('New Field', 'store-locator-for-wp') ?></button>
                                <button type="button" class="btn btn-primary mt-3 float-right" data-loading-text="<?php echo __('Saving...', 'store-locator-for-wp') ?>" data-completed-text="Fields Updated" id="btn-asl-save-schema"><?php echo __('Save Fields', 'store-locator-for-wp') ?></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card p-0 mb-4">
                    <h3 class="card-title"><?php echo __('Store Locator Settings', 'store-locator-for-wp') ?></h3>
                    <div class="card-body">
                        <form id="frm-usersetting">
                            <div class="row mt-2">
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Google API KEY', 'store-locator-for-wp') ?></label>
                                    <input  type="text" class="form-control" name="data[api_key]" id="asl-api_key" placeholder="<?php echo __('API KEY', 'store-locator-for-wp') ?>">
                                        <p class="help-p text-muted">(<?php echo __('Generate API Key using Google Console', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="map_type"><?php echo __('Default Map', 'store-locator-for-wp') ?></label>
                                    <select   id="asl-map_type" name="data[map_type]" class="custom-select">
                                        <option value="hybrid"><?php echo __('HYBRID', 'store-locator-for-wp') ?></option>
                                        <option value="roadmap"><?php echo __('ROADMAP', 'store-locator-for-wp') ?></option>
                                        <option value="satellite"><?php echo __('SATELLITE', 'store-locator-for-wp') ?></option>
                                        <option value="terrain"><?php echo __('TERRAIN', 'store-locator-for-wp') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Default Latitude', 'store-locator-for-wp') ?></label>
                                    <input  type="text" class="form-control validate[required]" name="data[default_lat]" id="asl-default_lat" placeholder="<?php echo __('Numberic Value (Example: 39.9217698526)', 'store-locator-for-wp') ?>">
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Default Longitude', 'store-locator-for-wp') ?></label>
                                    <input  type="text" class="form-control validate[required]" name="data[default_lng]"  id="asl-default_lng" placeholder="<?php echo __('Numberic Value (Example: -75.5718432)', 'store-locator-for-wp') ?>">
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Header Title', 'store-locator-for-wp') ?></label>
                                    <input  type="text" class="form-control validate[required]" name="data[head_title]" id="asl-head_title" placeholder="<?php echo __('Head title', 'store-locator-for-wp') ?>">
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Category Title', 'store-locator-for-wp') ?></label>
                                    <input  type="text" class="form-control validate[required]" name="data[category_title]" id="asl-category_title" placeholder="<?php echo __('Category title', 'store-locator-for-wp') ?>">
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('No Item Text', 'store-locator-for-wp') ?></label>
                                    <input  type="text" class="form-control validate[required]" name="data[no_item_text]" id="asl-no_item_text" placeholder="<?php echo __('No Item Text', 'store-locator-for-wp') ?>">
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="txt_Cluster"><?php echo __('Cluster', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-cluster" name="data[cluster]" class="custom-select">
                                        <option value="0"><?php echo __('OFF', 'store-locator-for-wp') ?></option>
                                        <option value="1"><?php echo __('ON', 'store-locator-for-wp') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="txt_time_format"><?php echo __('Time Format', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-time_format" name="data[time_format]" class="custom-select">
                                        <option value="0"><?php echo __('12 Hours', 'store-locator-for-wp') ?></option>
                                        <option value="1"><?php echo __('24 Hours', 'store-locator-for-wp') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="distance_unit"><?php echo __('Distance Unit', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-distance_unit" name="data[distance_unit]" class="custom-select">
                                        <option value="KM"><?php echo __('KM', 'store-locator-for-wp') ?></option>
                                        <option value="Miles"><?php echo __('Miles', 'store-locator-for-wp') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="asl-zoom"><?php echo __('Default Zoom', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-zoom" name="data[zoom]" class="custom-select">
                                        <?php for ($index = 2; $index <= 20; $index++): ?>
                                            <option value="<?php echo esc_attr($index) ?>"><?php echo esc_attr($index) ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Map Language', 'store-locator-for-wp') ?></label>
                                    <input type="text" class="form-control validate[minSize[2]]" maxlength="2" name="data[map_language]" id="asl-map_language" placeholder="Example: US">							    
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="Template"><?php echo __('Map Region', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-map_region" name="data[map_region]" class="custom-select">
                                        <option value=""><?php echo __('None', 'store-locator-for-wp') ?></option>
                                        <?php foreach ($countries as $country): ?>
                                            <option value="<?php echo esc_attr($country->code) ?>"><?php echo esc_attr($country->country) ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="sort_by"><?php echo __('Sort List', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-sort_by" name="data[sort_by]" class="custom-select">
                                        <option value=""><?php echo __('Default (Distance)', 'store-locator-for-wp') ?></option>
                                        <option value="id"><?php echo __('Store ID', 'store-locator-for-wp') ?></option>
                                        <option value="title"><?php echo __('Title', 'store-locator-for-wp') ?></option>
                                    </select>
                                    <p class="help-p text-muted">(<?php echo __('Sort your listing based on fields, distance is default.', 'store-locator-for-wp') ?>)</p>
                                </div>

                                <div class="col-md-4 form-group mb-4">
                                    <label for="display_list"><?php echo __('Display List', 'store-locator-for-wp') ?></label>
                                    <select id="asl-display_list" name="data[display_list]" class="custom-select">
                                        <option value="1"><?php echo __('Yes', 'store-locator-for-wp') ?></option>
                                        <option value="0"><?php echo __('No', 'store-locator-for-wp') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="prompt_location"><?php echo __('Geolocation', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-prompt_location" name="data[prompt_location]" class="custom-select">
                                        <option value="0"><?php echo __('NONE', 'store-locator-for-wp') ?></option>
                                        <option value="1"><?php echo __('GEOLOCATION DIALOG', 'store-locator-for-wp') ?></option>
                                        <option value="2"><?php echo __('TYPE YOUR LOCATION Dialog', 'store-locator-for-wp') ?></option>
                                        <option value="3"><?php echo __('GEOLOCATION WITHOUT DIALOG', 'store-locator-for-wp') ?></option>
                                    </select>
                                    <p class="help-p text-muted">(<?php echo __('GEOLOCATION ONLY WORKS WITH HTTPS CONNECTION', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="search_destin"><?php echo __('Search Result', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-search_destin" name="data[search_destin]" class="custom-select">
                                        <option value="0"><?php echo __('Default', 'store-locator-for-wp') ?></option>
                                        <option value="1"><?php echo __('Show My Nearest Location From Search', 'store-locator-for-wp') ?></option>
                                    </select>
                                    <p class="help-p text-muted">(<?php echo __('In search address point to my nearest markers', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="geo_button"><?php echo __('Field Button Type', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-geo_button" name="data[geo_button]" class="custom-select">
                                        <option value="1"><?php echo __('Geo-Location', 'store-locator-for-wp') ?></option>
                                        <option value="0"><?php echo __('Search Location', 'store-locator-for-wp') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="week_hours"><?php echo __('Display Hours', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-week_hours" name="data[week_hours]" class="custom-select">
                                        <option value="0"><?php echo __('Today', 'store-locator-for-wp') ?></option>
                                        <option value="1"><?php echo __('7 Days', 'store-locator-for-wp') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="asl-zoom_li"><?php echo __('Clicked Zoom', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-zoom_li" name="data[zoom_li]" class="custom-select">
                                        <?php for ($index = 2; $index <= 20; $index++): ?>
                                            <option value="<?php echo esc_attr($index) ?>"><?php echo esc_attr($index) ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <p class="help-p text-muted">(<?php echo __('Zoom Value when List Item is Clicked, use zoom_li="10" in ShortCode', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="asl-search_zoom"><?php echo __('Search Zoom', 'store-locator-for-wp') ?></label>
                                    <select  id="asl-search_zoom" name="data[search_zoom]" class="custom-select">
                                        <?php for ($index = 2; $index <= 20; $index++): ?>
                                            <option value="<?php echo esc_attr($index) ?>"><?php echo esc_attr($index) ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <p class="help-p text-muted">(<?php echo __('Zoom value when Search is performed', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label for="search_type"><?php echo __('Search Type', 'store-locator-for-wp') ?></label>
                                    <select  name="data[search_type]" id="asl-search_type" class="custom-select">
                                        <option value="0"><?php echo __('Search By Address (Google)', 'store-locator-for-wp') ?></option>
                                        <option disabled="disabled" value="1"><?php echo __('Search By Store Name (Database)', 'store-locator-for-wp') ?></option>
                                        <option disabled="disabled" value="2"><?php echo __('Search By Stores Cities, States (Database)', 'store-locator-for-wp') ?></option>
                                        <option value="3"><?php echo __('Geocoding on Enter key (Google Geocoding API)', 'store-locator-for-wp') ?></option>
                                    </select>
                                    <p class="help-p text-muted">(<?php echo __('Search by Either Address or Store Name, use search_type="1" in ShortCode', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Full Height', 'store-locator-for-wp') ?></label>
                                    <select  name="data[full_height]" id="asl-full_height" class="custom-select">
                                        <option value=""><?php echo __('None', 'store-locator-for-wp') ?></option>
                                        <option value="full-height"><?php echo __('Full Height (Not Fixed)', 'store-locator-for-wp') ?></option>
                                        <option value="full-height asl-fixed"><?php echo __('Full Height (Fixed)', 'store-locator-for-wp') ?></option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Restrict Search', 'store-locator-for-wp') ?></label>
                                    <input  type="text" class="form-control validate[minSize[2]]" maxlength="2" name="data[country_restrict]" id="asl-country_restrict" placeholder="Example: US">
                                        <p class="help-p">(<?php echo __('Enter 2 alphabet country', 'store-locator-for-wp') ?> <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank" rel="nofollow">Code</a>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Map/List Order (Mobile Only)', 'store-locator-for-wp') ?></label>
                                    <select  name="data[map_top]" id="asl-map_top" class="custom-select">
                                        <option value="0"><?php echo __('List Top, Map Bottom', 'store-locator-for-wp') ?></option>
                                        <option value="2"><?php echo __('Map Top, List Bottom', 'store-locator-for-wp') ?></option>
                                    </select>
                                    <p class="help-p text-muted">(<?php echo __('Stop list loading before search.', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <label><?php echo __('Store Direction', 'store-locator-for-wp') ?></label>
                                    <select  name="data[direction_redirect]" id="asl-direction_redirect" class="custom-select">
                                        <option value="0"><?php echo __('Show in Direction Panel', 'store-locator-for-wp') ?></option>
                                        <option value="1"><?php echo __('Open in Google Maps (mobile)', 'store-locator-for-wp') ?></option>
                                        <option value="2"><?php echo __('Open in Google Maps (mobile & desktop)', 'store-locator-for-wp') ?></option>
                                    </select>
                                    <p class="help-p text-muted">(<?php echo __('Stop list loading before search.', 'store-locator-for-wp') ?>)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="1" class="custom-control-input" name="data[full_width]" id="asl-full_width">
                                            <label class="custom-control-label" for="asl-full_width"><?php echo __('Full Width', 'store-locator-for-wp') ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="1" class="custom-control-input" name="data[scroll_wheel]" id="asl-scroll_wheel">
                                            <label class="custom-control-label" for="asl-scroll_wheel'),"><?php echo __('Mouse Scroll', 'store-locator-for-wp') ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="1" class="custom-control-input" name="data[target_blank]" id="asl-target_blank">
                                            <label class="custom-control-label" for="asl-target_blank"><?php echo __('Open Link New Tab', 'store-locator-for-wp') ?></label>
                                    </div>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="1" class="custom-control-input" name="data[sort_random]" id="asl-sort_random">
                                            <label class="custom-control-label" for="asl-sort_random"><?php echo __('Sort Random', 'store-locator-for-wp') ?></label>
                                    </div>
                                    <p class="help-p text-muted">(<?php echo __('Sort list random on the load of the Store Locator', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="1" class="custom-control-input" name="data[geo_marker]" id="asl-geo_marker">
                                            <label class="custom-control-label" for="asl-geo_marker"><?php echo __('Location Marker', 'store-locator-for-wp') ?></label>
                                    </div>
                                    <p class="help-p text-muted">(<?php echo __('To remove the pin location marker', 'store-locator-for-wp') ?>)</p>
                                </div>
                                <div class="col-md-4 form-group mb-4">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="1" class="custom-control-input" name="data[gdpr]" id="asl-gdpr">
                                            <label class="custom-control-label" for="asl-gdpr"><?php echo __('GDPR', 'store-locator-for-wp') ?></label>
                                    </div>
                                    <p class="help-p text-muted">(<?php echo __('Display a GDPR consent message to accept the law', 'store-locator-for-wp') ?>)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-primary float-right" data-loading-text="<?php echo __('Saving...', 'store-locator-for-wp') ?>" data-completed-text="Settings Updated" id="btn-asl-user_setting"><?php echo __('Save Settings', 'store-locator-for-wp') ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script type="text/javascript">
    var ASL_Instance = {
        url: '<?php echo EVDPL_URL_PATH ?>'
    },
            asl_configs = <?php echo json_encode($all_configs); ?>;
    window.addEventListener("load", function () {
        asl_engine.pages.user_setting(asl_configs);
    });

</script>