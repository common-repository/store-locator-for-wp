<?php
$class = '';

if ($all_configs['display_list'] == '0')
    $class = ' map-full';


if ($all_configs['full_width'])
    $class .= ' full-width';

//add Full height
$class .= ' ' . $all_configs['full_height'];

$geo_btn_class = ($all_configs['geo_button'] == '1') ? 'asl-geo icon-direction-outline' : 'icon-search';
$search_type_class = ($all_configs['search_type'] == '1') ? 'asl-search-name' : 'asl-search-address';
$panel_order = (isset($all_configs['map_top'])) ? esc_attr($all_configs['map_top']) : '2';
?>
<style type="text/css">
    #asl-storelocator.container.storelocator-main.asl-p-cont .asl-loc-sec .asl-panel {order: <?php echo esc_attr($panel_order) ?>;}
</style>
<div id="asl-storelocator" class="container storelocator-main no-asl-filters asl-p-cont asl-template-0 asl-layout-0 asl-bg-0 <?php echo esc_attr($class); ?> asl-text-1">
<?php if (esc_attr($all_configs['gdpr']) == '1'): ?>
        <div class="sl-gdpr-cont">
            <div class="gdpr-ol"></div>
            <div class="gdpr-ol-bg"></div>
            <div class="gdpr-box">
                <p><?php echo __('Due to the GDPR, we need your consent to load data from Google, more information in our privacy policy.', 'store-locator-for-wp') ?></p>
                <a class="btn btn-asl" id="sl-btn-gdpr"><?php echo __('Accept', 'store-locator-for-wp') ?></a>
            </div>
        </div>
<?php endif; ?>
    <div class="row asl-loc-sec">
        <div class="col-sm-8 col-xs-12 asl-map">
            <div class="store-locator">
                <div id="asl-map-canv"></div>
                <!-- esl-modal -->
                <div id="esl-modal-direction" class="esl-modal fade">
                    <div class="esl-modal-backdrop-in"></div>
                    <div class="esl-modal-dialog in">
                        <div class="esl-modal-content">
                            <div class="esl-modal-header">
                                <button type="button" class="close-directions close" data-dismiss="esl-modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4><?php echo __('Get Your Directions', 'store-locator-for-wp') ?></h4>
                            </div>
                            <div class="form-group">
                                <label for="frm-lbl"><?php echo __('From', 'store-locator-for-wp') ?>:</label>
                                <input type="text" class="form-control frm-place" id="frm-lbl" placeholder="<?php echo __('Enter a Location', 'store-locator-for-wp') ?>">
                            </div>
                            <div class="form-group">
                                <label for="frm-lbl"><?php echo __('To', 'store-locator-for-wp') ?>:</label>
                                <input readonly="true" type="text"  class="directions-to form-control" id="to-lbl" placeholder="<?php echo __('Prepopulated Destination Address', 'store-locator-for-wp') ?>">
                            </div>
                            <div class="form-group">
                                <span for="frm-lbl"><?php echo __('Show Distance In', 'store-locator-for-wp') ?></span>
                                <label class="checkbox-inline">
                                    <input type="radio" name="dist-type"  id="rbtn-km" value="0"> <?php echo __('KM', 'store-locator-for-wp') ?>
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="dist-type" checked id="rbtn-mile" value="1"> <?php echo __('Mile', 'store-locator-for-wp') ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-submit"><?php echo __('GET DIRECTIONS', 'store-locator-for-wp') ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="asl-geolocation-esl-modal" class="esl-modal fade">
                    <div class="esl-modal-backdrop-in"></div>
                    <div class="esl-modal-dialog in">
                        <div class="esl-modal-content">
                            <button type="button" class="close-directions close" data-dismiss="esl-modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<?php if (esc_attr($all_configs['prompt_location']) == '2'): ?>
                                <div class="form-group">
                                    <h4><?php echo __('LOCATE YOUR GEOPOSITION', 'store-locator-for-wp') ?></h4>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <div class="col-md-9 asl-p-0">
                                            <input type="text" class="form-control" id="asl-current-loc" placeholder="<?php echo __('Your Address', 'store-locator-for-wp') ?>">
                                        </div>
                                        <div class="col-md-3 asl-p-0">
                                            <button type="button" id="asl-btn-locate" class="btn btn-block btn-default"><?php echo __('LOCATE', 'store-locator-for-wp') ?></button>
                                        </div>
                                    </div>
                                </div>
<?php else: ?>
                                <div class="form-group">
                                    <h4><?php echo __('Use my location to find the closest Service Provider near me', 'store-locator-for-wp') ?></h4>
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" id="asl-btn-geolocation" class="btn btn-block btn-default"><?php echo __('USE LOCATION', 'store-locator-for-wp') ?></button>
                                </div>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- esl-modal end -->
            </div>
        </div>
        <div class="col-sm-4 col-xs-12 asl-panel">
            <div class="col-xs-12 inside search_filter">
                <p><?php echo __('Search Location', 'store-locator-for-wp') ?></p>
                <div class="asl-store-search">
                    <input type="text" value="" id="auto-complete-search" class="<?php echo esc_attr($search_type_class) ?> form-control" placeholder="<?php echo __('Enter a Location', 'store-locator-for-wp') ?>">
                    <span><i class="glyphicon <?php echo esc_attr($geo_btn_class) ?>" title="<?php echo esc_attr($all_configs['geo_button'] == '1') ? __('Current Location', 'store-locator-for-wp') : __('Search Location', 'store-locator-for-wp') ?>"></i></span>
                </div>
                <div class="Num_of_store">
                    <span><?php echo esc_attr($all_configs['head_title']) ?>: <span class="count-result">0</span></span>
                </div>    
            </div>
            <!--  Panel Listing -->
            <div id="asl-list" class="storelocator-panel">
                <div class="asl-overlay" id="map-loading">
                    <div class="white"></div>
                    <div class="loading"><img style="margin-right: 10px;" class="loader" src="<?php echo EVDPL_URL_PATH ?>public/Logo/loading.gif"><?php echo __('Loading...', 'store-locator-for-wp') ?></div>
                </div>
                <div class="panel-cont">
                    <div class="panel-inner">
                        <div class="col-md-12 asl-p-0">
                            <ul id="p-statelist"  role="tablist" aria-multiselectable="true">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="directions-cont hide">
                    <div class="esl-modal-header">
                        <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                        <h4><?php echo __('Directions', 'store-locator-for-wp') ?></h4>
                    </div>
                    <div class="rendered-directions"></div>
                </div>
            </div>
        </div> 
    </div>
</div>
<script id="tmpl_list_item" type="text/x-jsrender">
    <div class="sl-item" data-id="{{:id}}">
    <div class="addr-sec">
    <p class="p-title">{{:title}}</p>
    </div>
    <div class="row">
    <div class="col-xs-12 addr-sec">
    <p class="p-area"><span class="glyphicon icon-location"></span><span>{{:address}}</span></p>
    {{if phone}}
    <p class="p-area"><span class="glyphicon icon-phone-outline"></span><a href="tel:{{:phone}}">{{:phone}}</a></p>
    {{/if}}
    {{if email}}
    <p class="p-area"><span class="glyphicon icon-at"></span><a href="mailto:{{:email}}" style="text-transform: lowercase">{{:email}}</a></p>
    {{/if}}
    {{if fax}}
    <p class="p-area"><span class="glyphicon icon-fax"></span> <?php echo __('Fax', 'store-locator-for-wp') ?>:{{:fax}}</p>
    {{/if}}
    {{if c_names}}
    <p class="p-area"><span class="glyphicon icon-tag"></span> {{:c_names}}</p>
    {{/if}}
    {{if open_hours}}
    <p class="p-area"><span class="glyphicon icon-clock-1"></span> {{:open_hours}}</p>
    {{/if}}
    {{if days_str}}
    <p class="p-area"><span class="glyphicon icon-calendar"></span> {{:days_str}}</p>
    {{/if}}
    </div>
    </div>
    <div class="row">
    <div class="mt-10 distance">
    <div class="col-xs-6">
    <p class="p-direction"><button type="button" class="btn btn-asl s-direction"><?php echo __('Direction', 'store-locator-for-wp') ?></button></p>
    </div>
    {{if dist_str}}
    <div class="col-xs-6">
    <a class="s-distance">{{:dist_str}}</a>
    </div>
    {{/if}}
    </div>
    </div>
    </div>
</script>
<script id="asl_too_tip" type="text/x-jsrender">
    <h3>{{:title}}</h3>
    <div class="infowindowContent">
    <div class="info-addr">
    <div class="address"><span class="glyphicon icon-location"></span><span>{{:address}}</span></div>
    {{if phone}}
    <div class="phone"><span class="glyphicon icon-phone-outline"></span><a href="tel:{{:phone}}">{{:phone}}</a></div>
    {{/if}}
    {{if open_hours}}
    <div class="p-time"><span class="glyphicon icon-clock-1"></span> {{:open_hours}}</div>
    {{/if}}
    {{if days_str}}
    <div class="p-time"><span class="glyphicon icon-calendar-outlilne"></span> {{:days_str}}</div>
    {{/if}}
    {{if email}}
    <div class="p-time"><span class="glyphicon icon-at"></span><a href="mailto:{{:email}}" style="text-transform: lowercase">{{:email}}</a></div>
    {{/if}}
    {{if c_names}}
    <div class="categories"><span class="glyphicon icon-tag"></span>{{:c_names}}</div>
    {{/if}}
    {{if dist_str}}
    <div class="distance"><?php echo __('Distance', 'store-locator-for-wp') ?>: {{:dist_str}}</div>
    {{/if}}
    </div>
    <div class="asl-buttons"></div>
    </div><div class="arrow-down"></div>
</script>