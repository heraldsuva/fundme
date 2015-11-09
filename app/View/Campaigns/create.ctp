<div class="contentt">    
	<div class="content">
		<?= $this->Form->create('Campaign', array('novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'inputp search-query span12')))?>
		<h1 class="decoration text-center proj"><span class="nobacgr">Create Your Campaign</span></h1>
		<div class="create_projects" style="max-width: 660px">
	    	<div class="row-fluid">	        	
			    <!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="span3 active">
				    	<a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">
				    		<h4 class="text-center">Step 1: <span class="green">Details</span></h4>
				    	</a></li>
				    <li role="presentation" class="span3 bleft">
				    	<a href="#step2" aria-controls="step2" role="tab" data-toggle="tab">
				    		<h4 class="text-center">Step 2: <span class="green">Funding</span></h4>
				    	</a></li>
				    <li role="presentation" class="span3 bleft">
				    	<a href="#step3" aria-controls="step3" role="tab" data-toggle="tab">
				    		<h4 class="text-center">Step 3: <span class="green">Story</span></h4>
				    	</a></li>
				    <li role="presentation" class="span3 bleft">
				    	<a href="#step4" aria-controls="step4" role="tab" data-toggle="tab">
				    		<h4 class="text-center">Step 4: <span class="green">Perks</span></h4>
				    	</a></li>
				</ul>
	    	</div>
	    	<!-- Tab panes -->		 
		    <div class="row-fluid border_proj duration tab-content">
		        <div class="tab-pane fade in active" role="tabpanel" id="step1">
		            <div class="column_project">
		                <h4 class="text-center">Basic Information</h4>	                    
	                    <?= $this->Form->input('title', array('placeholder' => 'Title')) ?>
	                    <?= $this->Form->textarea('summary', array('placeholder' => 'Short Description', 'class' => 'inputp search-query span12')) ?>
	                    <?= $this->Form->input('category_id', array('class' => 'inputp search-query span12')) ?>	                    
		            </div>
		        </div>
		        <div class="tab-pane fade" role="tabpanel" id="step2">
		            <div class="column_project">
		                <h4 class="text-center">Campaign Funding</h4>
		                <?= $this->Form->input('goal', array('placeholder' => 'Goal', 'class' => 'span6 inputp search-query')) ?>
		                <?= $this->Form->input('duration', array('placeholder' => 'Duration', 'type' => 'text', 'class' => 'span6 inputp search-query')) ?>
	                    <?= $this->Form->input('paypal_account', array('placeholder' => 'Payment Gateway (Paypal Account)')) ?>
		            </div>
		        </div>
		        <div class="tab-pane fade" role="tabpanel" id="step3">
		            <div class="column_project">
		                <h4 class="text-center">The Story</h4>
		                <form class="form-search">		                    
		                    <?= $this->Form->input('video_url', array('placeholder' => 'Video URL', 'type' => 'text')) ?>
		                    <div class="upload_pic1 inline">		                        
		                        <?= $this->Form->input('slide_photo1', array('type' => 'file', 'class' => false)) ?>
		                    </div>
		                    <div class="upload_pic2 inline">		                        
		                        <?= $this->Form->input('slide_photo2', array('type' => 'file', 'class' => false)) ?>
		                    </div>
		                    <div class="upload_pic3 inline">		                        
		                        <?= $this->Form->input('slide_photo3', array('type' => 'file', 'class' => false)) ?>
		                    </div>
		                    <?= $this->Form->textarea('story', array('placeholder' => 'Story of your project', 'class' => 'inputp search-query span12', 'rows' => 5)) ?>
		                    <!-- 
		                    <input type="text" class="inputp search-query span12 face" style="padding-left: 30px;" placeholder="Account Name">
		                    <input type="text" class="inputp search-query span12 tweet" style="padding-left: 30px;" placeholder="Account Name">  
		                    <textarea id="redex3" class="inputp search-query span12"  rows="5" placeholder="Project description"></textarea>		                    
		                    <div class="upload_html inline">
		                        <input type="file" name="upload"/>
		                    </div> -->
		                </form>
		            </div>
		        </div>
		        <div class="tab-pane fade" role="tabpanel" id="step4">
		            <div class="column_project" >
		                <h4 class="text-center ">Project Duration:</h4>
		                <ul>
		                    <li>
		                        <!-- <input id="rfirst" type="radio" name="radio" checked hidden /> -->
		                        <label for="rfirst">30 Days ($15)</label>
		                    </li>
		                    <li>
		                        <!-- <input id="rsecond" type="radio" name="radio" hidden /> -->
		                        <label for="rsecond">45 Days ($20)</label>
		                    </li>
		                    <li>
		                        <!-- <input id="re" type="radio" name="radio" hidden /> -->
		                        <label for="re">60 Days ($25)</label>
		                    </li>
		                </ul>
		            </div>
		        </div>
		    </div>
		    <div class="decoration text-center create_butt">
		    	<span class="nobacgr_whit">
		    		<button class="btn search-query" type="submit"> 
		    			<span class="butt_small"><strong>SAVE</strong></span>
		    		</button>
		    		<button class="btn search-query"> 
		    			<span class="butt_small"><strong>PREV</strong></span>
		    		</button>
		    		<button class="btn search-query"> 
		    			<span class="butt_small"><strong>NEXT</strong></span>
		    		</button>
		    	</span>
		    	<!-- <a name="id_cont"></a> -->
		    </div>
		</div>
		<?= $this->Form->end() ?>
	</div>
</div>