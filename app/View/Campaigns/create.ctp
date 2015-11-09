<div class="contentt">    
	<div class="content">
		<?= $this->Form->create('Campaign', array('novalidate' => true))?>
		<h1 class="decoration text-center proj"><span class="nobacgr">Create Your Campaign</span></h1>
		<div class="create_projects">
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
		                <!-- <h4 class="text-center">Personal Info:</h4> -->		                
	                    <input type="text" class="inputp search-query span12" placeholder="Name">
	                    <input type="text" class="inputp search-query span12" placeholder="Surname">
	                    <input type="text" class="inputp search-query span12" placeholder="Email">
	                    <input type="text" class="inputp search-query span12" placeholder="Username">
	                    <input type="text" class="inputp search-query span12" placeholder="Password">
	                    <input type="text" class="inputp search-query span12" placeholder="Repeat Password">
	                    <select class="">
	                        <option>Location</option>
	                        <option>Belarus</option>
	                        <option>Armenia</option>
	                        <option>England</option>
	                        <option>China</option>
	                    </select>
	                    <input type="text" class="inputp search-query span12 face" style="padding-left: 30px;" placeholder="Account Name">
	                    <input type="text" class="inputp search-query span12 tweet" style="padding-left: 30px;" placeholder="Account Name">
	                    <input type="text" class="inputp search-query span12" placeholder="Payment Gateway">
		            </div>
		        </div>
		        <div class="tab-pane fade" role="tabpanel" id="step2">
		            <div class="bleft column_project">
		                <h4 class="text-center">Project Description:</h4>
		                <form class="form-search">
		                    <input type="text" class="inputp search-query span12" placeholder="Project Name">
		                    <select class="">
		                        <option>Category</option>
		                        <option>Armenia</option>
		                        <option>England</option>
		                        <option>China</option>
		                    </select>
		                    <select class="">
		                        <option>Location</option>
		                        <option>Armenia</option>
		                        <option>England</option>
		                        <option>China</option>
		                    </select>
		                    <div class="upload_img inline">
		                        <input type="file" name="upload"/>
		                    </div>
		                    <textarea id="redex2" class="inputp search-query span12" rows="9" placeholder="Short description"></textarea>
		                    <input type="text" class="inputp search-query span12" placeholder="Payment Gateway">
		                </form>
		            </div>
		        </div>
		        <div class="tab-pane fade" role="tabpanel" id="step3">
		            <div class="bleft column_project">
		                <h4 class="text-center">Project Details:</h4>
		                <form class="form-search">
		                    <input type="text" class="inputp search-query span12" placeholder="Video URL">
		                    <div class="upload_pic1 inline">
		                        <input type="file" name="upload"/>
		                    </div>
		                    <div class="upload_pic2 inline">
		                        <input type="file" name="upload"/>
		                    </div>
		                    <div class="upload_pic3 inline">
		                        <input type="file" name="upload"/>
		                    </div>
		                    <input type="text" class="inputp search-query span12 face" style="padding-left: 30px;" placeholder="Account Name">
		                    <input type="text" class="inputp search-query span12 tweet" style="padding-left: 30px;" placeholder="Account Name"> <textarea id="redex3" class="inputp search-query span12"  rows="5" placeholder="Project description"></textarea>
		                    <div class="upload_html inline">
		                        <input type="file" name="upload"/>
		                    </div>
		                </form>
		            </div>
		        </div>
		        <div class="tab-pane fade" role="tabpanel" id="step4">
		            <div class="bleft column_project" >
		                <h4 class="text-center ">Project Duration:</h4>
		                <ul>
		                    <li>
		                        <input id="rfirst" type="radio" name="radio" checked hidden />
		                        <label for="rfirst">30 Days ($15)</label>
		                    </li>
		                    <li>
		                        <input id="rsecond" type="radio" name="radio" hidden />
		                        <label for="rsecond">45 Days ($20)</label>
		                    </li>
		                    <li>
		                        <input id="re" type="radio" name="radio" hidden />
		                        <label for="re">60 Days ($25)</label>
		                    </li>
		                </ul>
		            </div>
		        </div>
		    </div>
		    <div class="decoration text-center create_butt">
		    	<span class="nobacgr_whit">
		    		<a class="btn btn-large search-query"> 
		    			<span class="butt_small"><strong>PREV</strong></span>
		    		</a>
		    		<a class="btn btn-large search-query"> 
		    			<span class="butt_small"><strong>NEXT</strong></span>
		    		</a>
		    	</span>
		    	<!-- <a name="id_cont"></a> -->
		    </div>
		</div>
		<?= $this->Form->end() ?>
	</div>
</div>