<!-- Application Root Element -->
<div class="wrap">
    <div id="ninja-forms-dashboard"></div>
</div>

<!-- Dashboard -->
<script id="tmpl-nf-dashboard" type="text/template">
    <header class="topbar">
        <div class="app-title">
            <strong><?php _e( 'Ninja Forms Dashboard', 'ninja-forms' ); ?></strong>
        </div>
    </header>
    <div class="notices"></div>
    <div class="promotions"></div>
    <nav class="sections">
        <ul>
            {{{ data.renderNav() }}}
        </ul>
    </nav>
    <main class="content"></main>
</script>

<!-- OAuth -->
<script id="tmpl-nf-notices-oauth" type="text/template">
  <# if( null !== data.connected ) { #>
    <# if( ! data.connected ){ #>
    <!-- <a href="{{{ data.connect_url }}}" class="nf-oauth--connect">
      Connect to My.NinjaForms.com
    </a> -->
    <# } else { #>
    <div class="nf-oauth--connected">
      Connected to My.NinjaForms.com &nbsp; <span style="cursor:pointer;" onclick="Backbone.Radio.channel( 'dashboard' ).request( 'oauth:learn-more' );">Learn More</span>
      <span class="js--disconnect" style="float:right;cursor:pointer;">
        <span class="dashicons dashicons-no"></span>
      </span>
    </div>
    <# } #>
  <# } else { #>
    <div class="nf-oauth--checking">
      Checking connection...
    </div>
  <# } #>
</script>

<!-- Promotion -->
<script id="tmpl-nf-promotion" type="text/template">
    <div
      class="promotion--wrapper"
      <# if( data.script ){ #>
      onclick="{{{data.script}}}"
      <# } #>
      >
      <div class="promotion--{{{ data.id }}}">
        {{{ data.content }}}
      </div>
    </div>
</script>

<!-- Section: Widgets -->
<script id="tmpl-nf-widgets" type="text/template">
    <div class="widget widget-forms"></div>
</script>

<!-- Section: Services -->
<script id="tmpl-nf-services" type="text/template">
  <div class="services"></div>
</script>
<script id="tmpl-nf-service" type="text/template">
  <div class="nf-box-inside" style="padding:10px 20px;">
    <h2>{{{ data.name }}}</h2>
    <div class="nf-extend-content">
      <p>{{{ data.description }}}</p>
      <div class="nf-extend-buttons">
        <# if( data.is_connected ){ #>
          <# if( null !== data.enabled){ #>
          <div style="float: left;">
            <input id="nfServiceTransactionalEmail" class="nf-toggle setting" {{{ ( data.enabled ) ? 'checked="checked"' : '' }}} {{{ ( data.isUpdating ) ? 'disabled="disabled"' : '' }}} type="checkbox">
            <label for="nfServiceTransactionalEmail"></label>
          </div>
          <# } #>
          <# if( data.serviceLink ){ #>
            <a
              href="{{{ data.serviceLink.href }}}"
              class="{{{data.serviceLink.classes}}}"
              <# if( data.serviceLink.target ) { #>target="{{{ data.serviceLink.target }}}"<# } #>
              style="float:right;">{{{data.serviceLink.text}}}</a>
          <# } #>
        <# } #>
        <# if( data.learnMore ) { #>
        <button class="nf-button secondary js--learn-more" style="float:left;">Learn More</button>
        <# } #>
        <# if( ( ! data.is_connected ) || ( data.slug && data.installPath ) ){ #>
          <# if( ! data.is_installing ){ #>
            <a href="#services" class="nf-button primary js--install" style="float:right;">
              <# if( data.setupButtonText ){ #>
                {{{ data.setupButtonText }}}
              <# } else { #>
                <?php echo __( 'Setup', 'ninja-forms' ); ?>
              <# } #>
            </a>
          <# } else { #>
            <a href="#services" class="nf-button primary" style="float:right;" disabled>
              <span class="dashicons dashicons-update dashicons-update-spin"></span>
            </a>
          <# } #>
        <# } #>
      </div>
    </div>
  </div>
</script>


<!-- Section: apps and Integrations -->
<script id="tmpl-nf-apps" type="text/template">
    <?php
        $saved = get_option( 'ninja_forms_memberships_feed', false );
        if ( ! $saved ) {
    ?>
    <!-- WIDGET CONTAINER -->
    <div class="widget widget-memberships">
        <div class="pricing-container">

            <!-- Personal Membership Section -->
            <div class="pricing-block widget">
                <div class="pricing-header">
                    <div class="pricing-title"><?php _e( 'PERSONAL', 'ninja-forms' ); ?></div>
                    <div class="pricing-price">$99 / <?php _e( 'year', 'ninja-forms' ); ?></div>
                    <div class="pricing-savings"><?php _e( 'SAVE OVER $280!', 'ninja-forms' ); ?></div>
                    <div class="pricing-cta"><a target="_blank" href="https://ninjaforms.com/checkout/?edd_action=add_to_cart&download_id=471356&utm_source=Ninja+Forms+Plugin&utm_medium=Apps+and+Integrations&utm_campaign=Dashboard+Memberships&utm_content=Personal+Buy+Now" class="nf-button primary"><?php _e( 'Buy Now', 'ninja-forms' ); ?></a></div>
                </div>
                <div class="pricing-body">
                    <div>
                        <hr> 
                        <span class="pricing-body-title"><?php _e( 'ALL THE ESSENTIALS, PLUS:', 'ninja-forms' ); ?></span>
                        <hr>
                    </div>
                    <div>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'SINGLE SITE', 'ninja-forms' ); ?></span>
                    </div>
                    <div>
                    <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'PRIORITY SUPPORT', 'ninja-forms' ); ?></span>
                    </div>
                    <div>
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'FORM BUILDING ESSENTIALS', 'ninja-forms' ); ?></span>
                        <ul>
                            <li><?php _e( 'Layout & Styles', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Conditional Logic', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'File Uploads', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Multi-Part Forms', 'ninja-forms' ); ?></li>
                        </ul>
                    </div>
                    <div>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'EMAIL MARKETING', 'ninja-forms' ); ?></span>
                        <ul>
                            <li><?php _e( 'MailChimp', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Constant Contact', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Campaign Monitor', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Emma', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'ConvertKit', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'EmailOctopus', 'ninja-forms' ); ?></li>
                        </ul>
                    </div>
                    <div>
                        <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'ACCEPT PAYMENTS', 'ninja-forms' ); ?></span>
                        <ul>
                            <li><?php _e( 'PayPal Express', 'ninja-forms' ); ?></li>
                        </ul>
                    </div>
                    <div>
                        <i class="fa fa-percent" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'Plus ', 'ninja-forms' ); ?> 20% <?php _e( 'off Additional Add-Ons', 'ninja-forms' ); ?></span>
                    </div>
                </div>
            </div>

            <!-- Professional -->
            <div class="pricing-block widget highlight">
                <div class="pricing-header">
                    <div class="pricing-title"><?php _e( 'PROFESSIONAL', 'ninja-forms' ); ?></div>
                    <div class="pricing-price">$199 / <?php _e( 'year', 'ninja-forms' ); ?></div>
                    <div class="pricing-savings"><?php _e( 'SAVE OVER', 'ninja-forms' ); ?> $1500!</div>
                    <div class="pricing-cta"><a target="_blank" href="https://ninjaforms.com/checkout/?edd_action=add_to_cart&download_id=471355&?utm_source=Ninja+Forms+Plugin&utm_medium=Apps+and+Integrations&utm_campaign=Dashboard+Memberships&utm_content=Professional+Buy+Now" class="nf-button primary"><?php _e( 'Buy Now', 'ninja-forms' ); ?></a></div>
                </div>
                <div class="pricing-body">
                    <div>
                        <hr> 
                        <span class="pricing-body-title"><?php _e( 'EVERYTHING IN PERSONAL, PLUS:', 'ninja-forms' ); ?></span>
                        <hr>
                    </div>
                    <div>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( '20 SITES', 'ninja-forms' ); ?></span>
                    </div>
                    <div>
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'EMPOWER CLIENTS & USERS', 'ninja-forms' ); ?></span>
                        <ul>
                            <li><?php _e( 'Login & Registration Forms', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Update Profile Forms', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Post Creation Forms', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Save Form Progress', 'ninja-forms' ); ?></li>
                        </ul>
                    </div>
                    <div>
                        <i class="fa fa-bolt" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'INTEGRATE ANYWHERE', 'ninja-forms' ); ?></span>
                        <ul>
                            <li><?php _e( 'Zapier', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Webhooks', 'ninja-forms' ); ?></li>
                        </ul>
                    </div>
                    <div>
                        <i class="fa fa-cc-stripe" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'ACCEPT PAYMENTS', 'ninja-forms' ); ?></span>
                        <ul>
                            <li><?php _e( 'Stripe', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Recurly', 'ninja-forms' ); ?></li>
                        </ul>
                    </div>

                    <div>
                        <i class="fa fa-percent" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'Plus ', 'ninja-forms' ); ?><strong>40% </strong> <?php _e( 'off Additional Add-Ons', 'ninja-forms' ); ?></span>
                    </div>
                </div>
            </div>

            <!-- AGENCY -->
            <div class="pricing-block widget">
                <div class="pricing-header">
                    <div class="pricing-title"><?php _e( 'AGENCY', 'ninja-forms' ); ?></div>
                    <div class="pricing-price">$499 / year</div>
                    <div class="pricing-savings"><?php _e( 'SAVE OVER', 'ninja-forms' ); ?> $3100!</div>
                    <div class="pricing-cta"><a target="_blank" href="https://ninjaforms.com/checkout/?edd_action=add_to_cart&download_id=203757&utm_source=Ninja+Forms+Plugin&utm_medium=Apps+and+Integrations&utm_campaign=Dashboard+Memberships&utm_content=Agency+Buy+Now" class="nf-button primary"><?php _e( 'Buy Now', 'ninja-forms' ); ?></a></div>
                </div>
                <div class="pricing-body">
                    <div>
                        <hr> 
                        <span class="pricing-body-title"><?php _e( 'EVERYTHING IN PROFESSIONAL, PLUS:', 'ninja-forms' ); ?></span>
                        <hr>
                    </div>
                    <div>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'UNLIMITED SITES', 'ninja-forms' ); ?></span>
                    </div>
                    <div>
                    <i class="fa fa-globe" aria-hidden="true"></i>
                        <span class="pricing-body-title"><?php _e( 'All Ninja Forms add-ons', 'ninja-forms' ); ?></span>
                        <ul>
                            <li><?php _e( 'CRM integrations', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'SMS and Slack notifications', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'Advanced Analytics', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'More email marketing', 'ninja-forms' ); ?></li>
                            <li><?php _e( 'So much more!', 'ninja-forms' ); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="widget widget-plan-notice">
        <p class="widget-title"><?php _e( 'What else comes with Ninja Forms?', 'ninja-forms' ); ?></p>
        <a href="https://ninjaforms.com/extensions/?utm_source=Ninja+Forms+Plugin&utm_medium=Apps+and+Integrations&utm_campaign=Dashboard+Features+Link" target="_blank" class="nf-button primary feature-list-link"><?php _e( 'Checkout our full list of features!', 'ninja-forms' ); ?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
    </div>


    <?php
    } else {
        echo( $saved );
    }

    Ninja_Forms()->menus[ 'add-ons']->display();
    
    ?>
</script>

<!-- Section: Required Updates -->
<script id="tmpl-nf-requiredUpdates" type="text/template">
    <div>
        <h1><?php _e( 'Required Updates', 'ninja-forms' ); ?></h1>
        <div>
            <p>
                <?php _e( "Ninja Forms needs to run some updates on your installation before you can continue. You'll be able to create and edit forms after the updates listed below have completed.", 'ninja-forms' ); ?>
            </p>
            <p>
                <?php _e( "Normally, users will still be able to view and submit forms while these updates take place. If an update needs to modify database information, we'll put the affected form in maintenance mode until we get done with that update.", 'ninja-forms' ); ?>
            </p>
            <p>
                <?php _e( "It's always a good idea to have an up to date backup of your WordPress site on hand. That's especially true when you run plugin and theme updates. Luckily, there are plenty of good backup plugins available.", 'ninja-forms' ); ?>
            </p>
            <p>
                <?php _e( "When you're ready, just click the \"Do Required Updates\" button below to get started. You'll be able to create and edit forms in no time.", 'ninja-forms' ); ?>
            </p>
        </div>
        <div id="nfUpgradeApp">
            <table id="nf-upgrades-table">
                <thead>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div>
            <input class="nf-required-update nf-update-button" type='button' id='nf-required-updates-btn' name='nf-required-updates-btn' value="<?php _e( 'Do Required Updates' ); ?>" />
        </div>
        <div class="nf-update-progress jBox-content" id="nf-required-updates-progress"></div>
    </div>
</script>

<!-- Widget: Forms -->
<script id="tmpl-nf-widget-forms" type="text/template">
    <header>
        <div class="action">
            <button class="add nf-button primary"><?php _e( 'Add New', 'ninja-forms' ); ?></button>
            <button class="cancel nf-button secondary"><?php _e( 'Cancel', 'ninja-forms' ); ?></button>
        </div>
        <div class="filter nf-search"></div>
    </header>
    <main class="content"></main>
</script>

<!-- Widget: Forms - Filter -->
<script id="tmpl-nf-widget-forms-filter" type="text/template">
    <input class="nf-filter" type="search" placeholder="<?php _e( 'Search Forms', 'ninja-forms' ); ?>">
</script>

<!-- Widget: Forms - Table -->
<script id="tmpl-nf-widget-forms-table" type="text/template">
    <thead>
        <th class="sortable th-title" data-sort="title"><?php _e( 'Title', 'ninja-forms' ); ?></th>
        <th class="th-shortcode"><?php _e( 'Shortcode', 'ninja-forms' ); ?></th>
        <th class="sortable th-created" data-sort="created_at"><?php _e( 'Date Created', 'ninja-forms' ); ?></th>
        <th></th>
    </thead>
    <tbody class="content">
        <?php _e( 'Loading Forms...', 'ninja-forms' ); ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4" class="action2">
                <button class="more"><?php _e( 'More', 'ninja-forms' ); ?></button>
                <button class="less"><?php _e( 'Less', 'ninja-forms' ); ?></button>
            </td>
        </tr>
    </tfoot>
</script>
<script id="tmpl-nf-widget-forms-table-row" type="text/template">
    <td class="">
        <span class="title">
            <a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}">{{{ data.title }}}</a>
        </span>
        <ul class="form-row-actions">
            <li><a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}"><?php _e( 'Edit', 'ninja-forms' ); ?></a></li>
            <li><a class="duplicate"><?php _e( 'Duplicate', 'ninja-forms' ); ?></a></li>
            <li><a href="<?php print( get_home_url() ); ?>/?nf_preview_form={{{ data.id }}}" target="_blank"><?php _e( 'Preview Form', 'ninja-forms' ); ?></a></li>
            <# if(data.public_link_key) { #>
            <li><a href="<?php
                global $wp_rewrite;
                if($wp_rewrite->permalink_structure) {
                    echo site_url() . '/ninja-forms/{{{ data.public_link_key }}}';
                } else {
                    echo site_url('?nf_public_link={{{ data.public_link_key }}}');
                }
                ?>"><?php _e( 'Public Link', 'ninja-forms' ); ?></a></li>
            <# } #>
            <li><a href="edit.php?post_status=all&post_type=nf_sub&form_id={{{ data.id }}}" target="_blank"><?php _e( 'View Submissions', 'ninja-forms' ); ?></a></li>
            <li><a class="delete"><?php _e( 'Delete', 'ninja-forms' ); ?></a></li>
        </ul>
    </td>
    <td>
        {{{ data.shortcode }}}
    </td>
    <td>
        {{{ data.created_at }}}
    </td>
    <td><div class="nf-item-controls">
    <div class="nf-item-edit nf-item-control"><a title="Edit"><i class="nf-edit-settings fa fa-cog" aria-hidden="true"></i></div></div>
</div></div></td>
</script>
<script id="tmpl-nf-widget-forms-table-empty" type="text/template">
    <td colspan="4"><?php _e( 'No Forms', 'ninja-forms' ); ?></td>
</script>
<script id="tmpl-nf-widget-forms-table-loading" type="text/template">
    <td colspan="4"><?php _e( 'Loading Forms', 'ninja-forms' ); ?></td>
</script>

<!-- Widget: Forms - New Forms Templates -->
<script id="tmpl-nf-widget-forms-template" type="text/template">
    <div class="template {{{ data.type }}}">
        <a href="admin.php?page=ninja-forms&form_id={{{ data.id }}}">
            <strong class="title">{{{ data.title }}}</strong>
            <div class="desc">{{{ data.desc }}}</div>
        </a>
    </div>
</script>

<!-- Content Template -->
<script id="tmpl-nf-content" type="text/template">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid cupiditate ducimus fugit illo itaque maxime nihil perferendis praesentium voluptates. Aperiam culpa delectus distinctio illo ipsum officia, officiis pariatur quasi.</p>
</script>
