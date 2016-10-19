<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Gtech Innovation Focus Group'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Gtech Innovation Focus Group'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Gtech Innovation Focus Group'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">

     <?php
        if (module_exists('hybridauth') && user_is_anonymous()) {
          $element['#type'] = 'hybridauth_widget';
          print drupal_render($element);
        }
      ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>

        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<header role="banner" id="page-header" class="banner-area">
  <?php if (!empty($site_slogan)): ?>
    <p class="lead"><?php print $site_slogan; ?></p>
  <?php endif; ?>

  <?php print render($page['header']); ?>
</header> <!-- /#page-header -->

<div class="main-container container">

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php //print render($page['content']); ?>

 <p>
 Rapidiously benchmark e-business technologies and go forward bandwidth. Interactively repurpose distributed applications for fully tested ideas. Appropriately engineer intermandated opportunities with reliable e-markets. Holisticly pontificate low-risk high-yield quality vectors before cross-platform solutions. Assertively harness exceptional strategic theme areas before wireless convergence.

Rapidiously mesh market positioning human capital after fully researched synergy. Rapidiously empower 2.0 portals before sustainable metrics. Appropriately foster user friendly vortals via premier channels. Phosfluorescently deploy standards compliant quality vectors without customer directed information. Seamlessly redefine installed base deliverables after plug-and-play materials.

Continually underwhelm resource sucking architectures rather than viral technology. Seamlessly aggregate top-line systems and.
</p>

<p>Interactively evolve fully tested relationships whereas market-driven interfaces. Compellingly redefine sticky imperatives without impactful web services. Conveniently streamline compelling supply chains rather than future-proof growth strategies. Intrinsicly deploy multifunctional results without prospective resources. Collaboratively enable integrated methodologies before innovative metrics.

Interactively benchmark parallel web services through team driven technology. Rapidiously enable market positioning customer service before process-centric solutions. Dynamically utilize resource sucking channels for maintainable products. Enthusiastically facilitate excellent communities through covalent action items. Enthusiastically conceptualize quality process improvements and web-enabled synergy.

Monotonectally drive pandemic methodologies vis-a-vis cutting-edge "outside the box" thinking. Conveniently harness sticky platforms after sustainable.</p>

<div class="row">
  <div class="mar-top20 col-md-6 text-center">
    <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
    <h3>Technology</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, natus, accusantium. Nulla similique ea velit ad sed aperiam saepe, ratione quisquam corporis excepturi minima omnis odit praesentium, maiores dolore porro!</p>
  </div>
  <div class="col-md-6 text-center mar-top20">
    <i class="fa fa-user-secret fa-5x" aria-hidden="true"></i>
    <h3>Mentorship</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, natus, accusantium. Nulla similique ea velit ad sed aperiam saepe, ratione quisquam corporis excepturi minima omnis odit praesentium, maiores dolore porro!</p>
  </div>
</div>

<div class="row">
  <div class="mar-top20 col-md-6 text-center">
    <i class="fa fa-code-fork fa-5x" aria-hidden="true"></i>
    <h3>Code</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, natus, accusantium. Nulla similique ea velit ad sed aperiam saepe, ratione quisquam corporis excepturi minima omnis odit praesentium, maiores dolore porro!</p>
  </div>
  <div class="col-md-6 text-center mar-top20">
    <i class="fa fa-diamond fa-5x" aria-hidden="true"></i>
    <h3>Lift</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, natus, accusantium. Nulla similique ea velit ad sed aperiam saepe, ratione quisquam corporis excepturi minima omnis odit praesentium, maiores dolore porro!</p>
  </div>
</div>


    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer container">
           <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
