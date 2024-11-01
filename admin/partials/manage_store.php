<!-- Container -->
<div class="asl-p-cont asl-new-bg">
<div class="hide">
  <svg xmlns="http://www.w3.org/2000/svg">
    <symbol id="i-clipboard" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <title>Duplicate</title>
      <path d="M12 2 L12 6 20 6 20 2 12 2 Z M11 4 L6 4 6 30 26 30 26 4 21 4" />
    </symbol>
    <symbol id="i-trash" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <title>Trash</title>
        <path d="M28 6 L6 6 8 30 24 30 26 6 4 6 M16 12 L16 24 M21 12 L20 24 M11 12 L12 24 M12 6 L13 2 19 2 20 6" />
    </symbol>
    <symbol id="i-edit" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <title>Edit</title>
        <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" />
    </symbol>
    <symbol id="i-info" viewBox="0 0 32 32" width="13" height="13" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
        <path d="M16 14 L16 23 M16 8 L16 10" />
        <circle cx="16" cy="16" r="14" />
    </symbol>
  </svg>
</div>
  <div class="container">
    <div class="row asl-inner-cont">
      <div class="col-md-12">
        <div class="card p-0 mb-4">
          <h3 class="card-title"><?php echo __('Manage Stores','store-locator-for-wp') ?></h3>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <select class="mr-2 custom-select" id="asl-ddl-status">
                  <option value="1"><?php echo __('Status Enable','store-locator-for-wp') ?></option>
                  <option value="0"><?php echo __('Status Disable','store-locator-for-wp') ?></option>
                </select>
                <button class="btn btn-info" id="btn-change-status" type="button"><?php echo __('Change','store-locator-for-wp') ?></button>
              </div>
              <div class="col-md-6">
                <button type="button" id="btn-asl-delete-all" class="btn btn-danger float-right"><i class="mr-1"><svg width="12" height="12"><use xlink:href="#i-trash"></use></svg></i><?php echo __('Delete Selected','store-locator-for-wp') ?></button>
              </div>
            </div>
            <div class="table-responsive">
              <table id="tbl_stores" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><input type="text" class="form-control sml" data-id="id"  disabled="disabled" style="opacity: 0" placeholder="<?php echo __('Search ID','store-locator-for-wp') ?>"  /></th>
                    <th style="position: relative;" class="asl-search-btn">
                      <input type="text" class="form-control" data-id="-id" disabled="disabled" style="opacity: 0" placeholder="<?php echo __('Search ID','store-locator-for-wp') ?>"  />
                    </th>
                    <th><input type="text" class="form-control" data-id="id"  placeholder="<?php echo __('Search ID','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="title"  placeholder="<?php echo __('Search Title','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="description"  placeholder="<?php echo __('Search Description','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="lat"  placeholder="<?php echo __('Search Lat','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="lng"  placeholder="<?php echo __('Search Lng','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="street"  placeholder="<?php echo __('Search Street','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="state"  placeholder="<?php echo __('Search State','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="city"  placeholder="<?php echo __('Search City','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="phone"  placeholder="<?php echo __('Search Phone','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="email"  placeholder="<?php echo __('Search Email','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="website"  placeholder="<?php echo __('Search URL','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="postal_code"  placeholder="<?php echo __('Search Zip','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="is_disabled"  placeholder="<?php echo __('Disabled','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="category" disabled="disabled" style="opacity:0"  placeholder="<?php echo __('Categories','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="marker_id"  placeholder="<?php echo __('Marker ID','store-locator-for-wp') ?>"  /></th>
                    <th><input type="text" class="form-control" data-id="logo_id"  placeholder="<?php echo __('Logo ID','store-locator-for-wp') ?>" /></th>
                    <th><input type="text" class="form-control" data-id="created_on"  placeholder="<?php echo __('Created On','store-locator-for-wp') ?>"  /></th>
                  </tr>
                  <tr>
                    <th><a class="select-all"><?php echo __('Select All','store-locator-for-wp') ?></a></th>
                    <th><?php echo __('Action','store-locator-for-wp') ?>&nbsp;</th>
                    <th><?php echo __('Store ID','store-locator-for-wp') ?></th>
                    <th><?php echo __('Title','store-locator-for-wp') ?></th>
                    <th><?php echo __('Description','store-locator-for-wp') ?></th>
                    <th><?php echo __('Lat','store-locator-for-wp') ?></th>
                    <th><?php echo __('Lng','store-locator-for-wp') ?></th>
                    <th><?php echo __('Street','store-locator-for-wp') ?></th>
                    <th><?php echo __('State','store-locator-for-wp') ?></th>
                    <th><?php echo __('City','store-locator-for-wp') ?></th>
                    <th><?php echo __('Phone','store-locator-for-wp') ?></th>
                    <th><?php echo __('Email','store-locator-for-wp') ?></th>
                    <th><?php echo __('URL','store-locator-for-wp') ?></th>
                    <th><?php echo __('Postal Code','store-locator-for-wp') ?></th>
                    <th><?php echo __('Disabled','store-locator-for-wp') ?></th>
                    <th><?php echo __('Categories','store-locator-for-wp') ?></th>
                    <th><?php echo __('Marker ID','store-locator-for-wp') ?></th>
                    <th><?php echo __('Logo ID','store-locator-for-wp') ?></th>
                    <th><?php echo __('Created On','store-locator-for-wp') ?></th>
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
</div>


<!-- SCRIPTS -->
<script type="text/javascript">
var ASL_Instance = {
	url: '<?php echo EVDPL_URL_PATH ?>'
};

window.addEventListener("load", function() {
     
asl_engine.pages.manage_stores();
});
</script>
