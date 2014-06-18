<?php
/*
	Template Name: Contact page
*/
?>

<?php get_header(); ?>


<div class="row home_2 arrow">

	<div class="grid entry-content home-chunks home-text">


	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>

	    <div class="selectForm">

	         <h6>I am ...</h6>

			<div class="choice">
				<label for="visitor">a visitor</label>
				<input type="radio" name="cat" id="#visitor" tabindex="2" value="choice-1" />
			</div>

			<div class="choice">
				<label for="exhibitor">an exhibitor</label>
				<input type="radio" name="cat" id="#exhibitor" tabindex="3" value="choice-2" />
			</div>

			<div class="choice">
				<label for="press">press</label>
				<input type="radio" name="cat" id="#press" tabindex="3" value="choice-3" />
			</div>

	    </div>




		<div class="form_container">

			<div id="visitor" class="form_content allForms">

				<form action="http://ecodesignfair.us2.list-manage2.com/subscribe/post" method="post" name="visitor_form">

				<input type="hidden" name="u" value="36fbaef18b86b3ea020aa8950">

				<input type="hidden" name="id" value="2afe64268a">
				
				

				<div>
					<ul>
						<li class="formLabel"><strong>Email Address</strong> <span class="asterisk">*</span></li>

						<li class="formInput">
						<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25">
						<br><span class="error">*|HTML:EMAILERROR|*</span></li>

					</ul>
				</div>

				<div>
					<ul>
						<li class="formLabel">First Name</li>
						<li class="formInput">
						<input type="text" name="MERGE1" id="MERGE1" size="25" >
						<br><span class="error">*|HTML:FNAMEERROR|*</span></li>
					</ul>
				</div>

				<div>
					<ul>
						<li class="formLabel">Last Name</li>
						<li class="formInput">
						<input type="text" name="MERGE2" id="MERGE2" size="25" >
						<br><span class="error">*|HTML:LNAMEERROR|*</span></li>
					</ul>
				</div>


				<div>
					<ul>
						<li>&nbsp;</li>
						<li class="formInput">

						<input type="submit" value="Subscribe">
						</li>
					</ul>
				</div>

				</form>

			</div>



			<div id="exhibitor" class="form_content allForms">

				<form action="http://ecodesignfair.us2.list-manage.com/subscribe/post" method="post">

				<input type="hidden" name="u" value="36fbaef18b86b3ea020aa8950">

				<input type="hidden" name="id" value="56c23710d7">

				

				<div>
					<ul>
						<li class="formLabel"><strong>Email Address</strong> <span class="asterisk">*</span></li>
						<li class="formInput">
						<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" >
						<br><span class="error">*|HTML:EMAILERROR|*</span></li>
					</ul>
				</div>

				<div>
					<ul>
						<li class="formLabel">First Name</li>
						<li class="formInput">
						<input type="text" name="MERGE1" id="MERGE1" size="25" >
						<br><span class="error">*|HTML:FNAMEERROR|*</span></li>
					</ul>
				</div>

				<div>
					<ul>
						<li class="formLabel">Last Name</li>
						<li class="formInput">
						<input type="text" name="MERGE2" id="MERGE2" size="25" >
						<br><span class="error">*|HTML:LNAMEERROR|*</span></li>
					</ul>
				</div>



				<div>
				<ul>
				<li>&nbsp;</li>
				<li class="formInput">

				<input type="submit" value="Subscribe">
				</li>
				</ul>
				</div>
				
				</form>

			</div>



			<div id="press" class="form_content allForms">


				<form action="http://ecodesignfair.us2.list-manage.com/subscribe/post" method="post">

				<input type="hidden" name="u" value="36fbaef18b86b3ea020aa8950">

				<input type="hidden" name="id" value="e785fde940">

				

				<div>
					<ul>
						<li class="formLabel"><strong>Email Address</strong> <span class="asterisk">*</span></li>

						<li class="formInput">
						<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" >
						<br><span class="error">*|HTML:EMAILERROR|*</span></li>
					</ul>
				</div>

				<div>
					<ul>
						<li class="formLabel">First Name</li>

						<li class="formInput">
						<input type="text" name="MERGE1" id="MERGE1" size="25" >
						<br><span class="error">*|HTML:FNAMEERROR|*</span></li>
					</ul>
				</div>

				<div>
					<ul>
						<li class="formLabel">Last Name</li>

						<li class="formInput">
						<input type="text" name="MERGE2" id="MERGE2" size="25" >
						<br><span class="error">*|HTML:LNAMEERROR|*</span></li>
					</ul>
				</div>


				<div>
					<ul>
						<li class="formLabel">Publication</li>

						<li class="formInput">
						<input type="text" name="MERGE4" id="MERGE4" size="25">
						<br><span class="error">*|HTML:MMERGE4ERROR|*</span></li>
					</ul>
				</div>




					<div>
					<ul>
					<li>&nbsp;</li>
					<li class="formInput">

					<input type="submit" value="Subscribe">
					</li>
					</ul>
					</div>
					
					</form>		

				</div>

		</div><!-- close form_container -->


	</div> <!-- .home-chunks -->

</div><!-- .home_2 -->














<div class="row home_1 arrow">

	<div class="grid entry-content home-chunks home-text">


	<h2>Other enquiries</h2>

	<p>Complete the form below for all other enquiries and we'll contact you ASAP</p>

	<form id="form1" name="form1" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
	action="https://rigglus.wufoo.eu/forms/z7x4a9/#public">


	<div class="mainForm allForms">

		<div>
			<ul>
				<li class="formLabel">
					<label for="Field15">First Name</label>
				</li>

				<li class="formInput">
					<span>
						<input id="Field15" name="Field15" type="text" class="field text fn" value="" size="25" tabindex="1" required />
						
					</span>
				</li>
			</ul>
		</div>


		<div>
			<ul>
				<li class="formLabel">
					<label for="Field16">Last Name</label>
				</li>

				<li class="formInput">

					<span>
						<input id="Field16" name="Field16" type="text" class="field text ln" value="" size="25" tabindex="2" required />
						
					</span>
				</li>
			</ul>
		</div>




		<div>
			<ul>
				<li class="formLabel">

					<label class="desc" id="title120" for="Field120">
					If exhibitor, please describe your work
					</label>
				</li>

				<li class="formInput">			

					<div>
						<input id="Field120" name="Field120" type="text" class="field text medium" value="" maxlength="255" tabindex="6" onkeyup="" size="50" />
					</div>
				</li>
			</ul>
		</div>



		<div>
			<ul>
				<li class="formLabel">

					<label class="desc" id="title4" for="Field4">Your email<span id="req_4" class="req">*</span></label>
				</li>

				<li class="formInput">

					<div>
						<input id="Field4" name="Field4" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="7" size="25" required /> 
					</div>
				</li>

			</ul>
		</div>

		<div>
			<ul>
				<li class="formLabel">

					<label class="desc" id="title10" for="Field10">Your Web Site</label>

				</li>

				<li class="formInput">

					<div>
						<input type="text" id="Field10" name="Field10" type="url" class="field text medium" value="" maxlength="255" tabindex="8" size="25" /> 
					</div>

				</li>
			</ul>
		</div>



		<div>
			<ul>

				<li class="formLabel">
					<label class="desc" id="title5" for="Field5">Message</label>
				</li>

				<li class="formInput">

						<div>
						<textarea id="Field5" 
						name="Field5" 
						class="field textarea small" 
						spellcheck="true" 
						rows="10" cols="50" 
						tabindex="9" 
						onkeyup=""
						 ></textarea>

						</div>
					</li>
			</ul>

		</div>


		<div>
		    <input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" />
		</div>


		<div class="hide">
		<label for="comment">Do Not Fill This Out</label>
		<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
		<input type="hidden" id="idstamp" name="idstamp" value="yuemK2gHHHsIb3vayYGMM3M8ijWoRwvUFE3m9CQP5Hg=" />
	</div>



	</div><!-- close mainForm -->

</form> 

</div><!-- .home-chunks -->

						
</div>



<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>