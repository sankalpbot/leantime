<?php
  $currentSprint = $this->get('sprint');
?>

<div class="center padding-lg">

    <div class="row">
        <div class="col-md-12">
            <span class="bigIcon primaryColor"><i class="far fa-lightbulb"></i></span>
            <h3 class="primaryColor">Welcome to the Idea Board!</h3><br />
            <p>This is the place to collect all of your ideas. Discuss new ones with your team and attach Milestones to see progress towards your ideas.<br /></p>
            <br /><br />
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <p>
             </p>
            <a href="javascript:void(0);"  onclick="jQuery.nmTop().close()"><i class="fa fa-close"></i> Close</a><br />
            <a href="javascript:void(0);" onclick="leantime.helperController.hideAndKeepHidden('ideaBoard')">Close and don't show this screen again</a>
        </div>
    </div>


</div>
