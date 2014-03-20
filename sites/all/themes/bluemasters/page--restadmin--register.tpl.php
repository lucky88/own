<style>
    div.form-item div.desscription{display: none !important;}
</style>

<div id="page">


    <div id="wrapper">

   
        
        <div class="">
            <div class="grid_12">
                <div id="main-area" class="clearfix">
                
                    <div id="main-area-inside" class="clearfix">
                        
                        <?php if ($page['sidebar_first']) { ?>
                        <div class="grid_8 alpha omega">
                        <?php } else { ?>
                        <div class="grid_12 alpha omega">    
                        <?php } ?>

                            <div id="main"  class="inside clearfix">
                                
                                <?php if ($page['highlighted']): ?><div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                           
                    			<?php if ($messages): ?>
                                <div class="clearfix">
                    			<?php print $messages; ?>
                                </div>
                                <?php endif; ?>
                         
                                <?php if ($page['help']): ?>
                                <div id="help">
                                <?php print render($page['help']); ?>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($action_links): ?>
                                <ul class="action-links">
                    			<?php print render($action_links); ?>
                                </ul>
                    			<?php endif; ?>
                                
                                <?php print render($title_prefix); ?>
                                <?php if ($title): ?>
                                <h1 class="title"><?php print $title ?></h1>
                                <?php endif; ?>
                                <?php print render($title_suffix); ?>
                                
                                
                                
                                <?php print render($page['content']); ?>
                                
                                <?php if ($feed_icons): ?><?php print $feed_icons; ?><?php endif; ?>
                                
                            </div>
                            <!--main-->
                        </div>
                    
                		<?php if($page['sidebar_first']): ?>
                        <div class="grid_4 alpha omega">
                            <div id="right" class="clearfix">
                                
                                <div id="network" class="block">
                                    <h2>Network Connect</h2>  
                                    <div class="network">
                                        <a href="http://twitter.com/morethanthemes" class="twitter">Twitter</a>
                                        <a href="http://www.facebook.com/pages/More-than-just-themes/194842423863081" class="facebook">Facebook</a>
                                        <a href="http://www.flickr.com/photos/56103643@N07/" class="flickr">Flickr</a>
                                        <a href="#" class="in">In</a>
                                        <a href="#" class="tumblr">Tumblr</a>
                                        <a href="http://www.youtube.com/morethanthemes" class="youtube">Youtube</a>
                                    </div>
                                </div>
                                    
                                <?php print render($page['sidebar_first']); ?>
                            
                            </div>
                            <!--right-->
                        </div>
                        <?php endif; ?>
                        
                    </div>
                
                </div>
                <!--main-area-->
            </div>
        </div>
        
    </div><!-- /#wrapper-->

</div><!--EOF:page-->