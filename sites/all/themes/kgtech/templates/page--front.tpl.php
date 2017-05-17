<header id="navbar" role="banner" class="<?php print $navbar_classes;?>">
  <div class="<?php print $container_class;?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page;?>" title="<?php print t('Gtech Innovation Focus Group');?>">
          <img src="<?php print $logo;?>" alt="<?php print t('Gtech Innovation Focus Group');?>" />
        </a>
      <?php endif;?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page;?>" title="<?php print t('Gtech Innovation Focus Group');?>"><?php print $site_name;?></a>
      <?php endif;?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation');?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif;?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">

     <?php
if (module_exists('hybridauth') && user_is_anonymous()) {
	$element['#type'] = 'hybridauth_widget';
	//print drupal_render($element);
}
?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav);?>
          <?php endif;?>

        </nav>
      </div>
    <?php endif;?>
  </div>
</header>

<header role="banner" id="page-header" class="banner-area">
  <?php if (!empty($site_slogan)): ?>
    <p class="lead"><?php print $site_slogan;?></p>
  <?php endif;?>

  <?php print render($page['header']);?>
</header> <!-- /#page-header -->

<div class="main-container container">

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']);?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif;?>

    <section<?php print $content_column_class;?>>


      <?php //print render($page['content']); ?>

 <h3>GTech</h3>
 <hr>
 <p>Group of Technology Companies (GTech) is the collaborative of Information Technology (IT) and Business Process Management (BPM) organisations in Kerala, India. GTech provides the platform for domain and technology companies from across the world for enterprise and strategic alliances with Member Organisations.</p>

<p>GTech comprises Innovative Start-ups, Small & Medium size companies, large Home Grown companies and International Majors. GTech works closely with Governments and other agencies in the country and elsewhere to promote exchange of trade in IT/BPM and help enhance competencies of technology companies across geographies.</p>

<h3>GTech Innovation Focus Group</h3>
<hr>
<p>​The Innovation Focus Group facilitates ideation and promotion of teams that address genuine pain points in various industries or society and help them scale​. To this end, we:</p>
<ul>
  <li>Create an Early Adopter Network from various industries</li>
  <li>Create a Seed Investor Network from various industries</li>
  <li>Partner with Trade Bodies across industries</li>
  <li>Tie up with Entrepreneurship Development agencies</li>
</ul>
<div class="alert alert-info" role="alert"><p>This portal will help you reach your ideas to a large pool of Industry Leaders, Technical Experts, Investor Prospects and other relevant stakeholders. As the first step, your ideas will undergo a rigorous validation process covering all aspects.</p></div>

<div class="row">
  <div class="mar-top20 col-md-6">
    <h3>Adopt A Young Idea (AAYI)</h3>
    <p>Early adoption has traditionally been a challenge facing most start-ups. Adopt A Young Idea (AAYI) is a program initiated by GTech Innovation Focus Group (GIF) in association with Kerala Startup Mission to create socially relevant projects that can be commercialised and has the potential to revolutionise industries and society.GIF will work with the Government of Kerala, Kerala State Council for Science, Technology & Environment (KSCSTE) and APJ Abdul Kalam Technological University to formulate Adopt A Young Idea (AAYI). The program will aim at the student community to take up socially/commercially relevant projects as part of their academic curriculum. Shortlisted projects will be provided support in their efforts to commercialise and scale up.</p>
  </div>
  <div class="col-md-6 text-center mar-top20">
    <div class="jumbotron">
          <div class="container">
            <div class="centtt">
              <?php
              if (module_exists('hybridauth') && user_is_anonymous()) {
                $element['#type'] = 'hybridauth_widget';
              	print drupal_render($element);
              }
              ?>
            </div>
          </div>
        </div>



  </div>
</div>


    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']);?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif;?>

  </div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer container">
           <?php print render($page['footer']);?>
  </footer>
<?php endif;?>
