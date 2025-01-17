<!-- Container -->
<div class="asl-p-cont asl-new-bg">
  <div class="hide">
    <svg xmlns="http://www.w3.org/2000/svg">
      <symbol id="i-cart" viewBox="0 0 32 32" width="40" height="40" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M6 6 L30 6 27 19 9 19 M27 23 L10 23 5 2 2 2" />
          <circle cx="25" cy="27" r="2" />
          <circle cx="12" cy="27" r="2" />
      </symbol>
      <symbol id="i-tag" viewBox="0 0 32 32" width="40" height="40" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <circle cx="24" cy="8" r="2" />
        <path d="M2 18 L18 2 30 2 30 14 14 30 Z" />
      </symbol>
      <symbol id="i-location" viewBox="0 0 32 32" width="40" height="40" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <circle cx="16" cy="11" r="4" />
          <path d="M24 15 C21 22 16 30 16 30 16 30 11 22 8 15 5 8 10 2 16 2 22 2 27 8 24 15 Z" />
      </symbol>
      <symbol id="i-search" viewBox="0 0 32 32" width="40" height="40" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <circle cx="14" cy="14" r="12" />
          <path d="M23 23 L30 30"  />
      </symbol>
    </svg>
  </div>
  <div class="container">
    <div class="row asl-inner-cont">
      <div class="col-md-12">
        <div class="card p-0 mb-4">
          <h3 class="card-title"><?php echo __('Store Locator Dashboard','store-locator-for-wp') ?></h3>
          <div class="card-body">
            <div class="alert alert-info" role="alert">
              <?php echo __('To add the store locator on your page, please add the shortcode','store-locator-for-wp') ?> <b>[EVDPL_STORELOCATOR]</b>
            </div>
            <?php if(!$all_configs['api_key']): ?>
                <h3  class="alert alert-danger" style="font-size: 14px"><?php echo __('Alert! Google API KEY is missing, the Map Search and Direction will not work without it, Please add Google API KEY.','store-locator-for-wp') ?></h3>
            <?php endif; ?>
            <div class="dashboard-area">
              <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4 stats-store">
                        <div class="stats">
                            <div class="stats-a"><svg width="40" height="40"><use xlink:href="#i-cart"></use></svg></div>
                            <div class="stats-b" title="<?php echo __('Stores','store-locator-for-wp') ?>"><?php echo esc_attr($all_stats['stores']) ?></div>
                        </div>
                      </div>
                      <div class="col-md-4 stats-category">
                        <div class="stats">
                            <div class="stats-a"><svg width="40" height="40"><use xlink:href="#i-tag"></use></svg></div>
                            <div class="stats-b" title="<?php echo __('Categories','store-locator-for-wp') ?>"><?php echo esc_attr($all_stats['categories']) ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row"></div>
              <ul class="nav nav-tabs" style="margin-top:30px;display:none;">
                <li role="presentation" class="nav-item active"><a class="nav-link" href="#asl-analytics">Analytics</a></li>
                <!-- <li role="presentation" class="nav-item"><a class="nav-link" href="#asl-views"><?php echo __('Top Views','store-locator-for-wp') ?></a></li> -->
              </ul>
              <div class="tab-content" id="asl-tabs" style="display:none;">
                
                <div class="tab-pane active" role="tabpanel" id="asl-analytics" aria-labelledby="asl-analytics">
                  <div class="row">
                    <div class="col-md-4 form-group mb-3">
                      <div class="form-group">
                        <label class="mr-2" for="asl-search-month"><?php echo __('Period','store-locator-for-wp') ?></label>
                        <select id="asl-search-month" class="custom-select" style="width:70%">
                          <?php 
                          for ($i=0; $i<=12; $i++) { 
                            echo '<option value="'.date('m-Y', strtotime("-$i month")).'">'.date('m/Y', strtotime("-$i month")).'</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="canvas-holder" style="width:100%">
                          <img src="<?php echo EVDPL_URL_PATH.'admin/images/analytics.png' ?>" style="max-width:100%;margin-top: 0px">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" role="tabpanel" id="asl-views" aria-labelledby="asl-views">
                  <div class="col-md-12"> 
                    <ul class="list-group">
                      <li class="list-group-item active"><span class="store-id">
                        <div class="row">
                          <div class="col-2"><?php echo __('Store ID','store-locator-for-wp') ?></div>
                          <div class="col-8"><?php echo __('Most Views Stores List','store-locator-for-wp') ?></div>
                          <div class="col-2"><?php echo __('Views','store-locator-for-wp') ?></div>
                        </div>
                      </li>
                      
                      <li class="list-group-item">
                        <div class="row">
                          <div class="col-6">Analytics in Pro Version</div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <br clear="both">
                  <div class="col-md-12"> 
                    <ul class="list-group">
                      <li class="list-group-item active">
                        <div class="row">
                          <div class="col-8"><?php echo __('Most Search Locations','store-locator-for-wp') ?></div>
                          <div class="col-4"><?php echo __('Views','store-locator-for-wp') ?></div>
                        </div>
                      </li>
                      <li class="list-group-item">
                        <div class="row">
                          <div class="col-6">Analytics in Pro Version</div>
                        </div>
                    </ul>
                  </div>
                </div>

              </div>  
            </div>
            <div class="dump-message asl-dumper"></div>
          </div>
        </div>
      </div>  
    </div>
  </div>


</div>
<!-- asl-cont end-->


<!-- SCRIPTS -->
<script type="text/javascript">
var ASL_Instance = {
	url: '<?php echo EVDPL_URL_PATH ?>'
};

window.addEventListener("load", function() {
     
asl_engine.pages.dashboard();
});
</script>