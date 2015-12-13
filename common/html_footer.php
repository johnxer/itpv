<div id="copyright-section" class="copyright-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<ul class="footer-links">
					<li>
						<a data-toggle="modal" href="#contactForm">Contact</a>
					</li>
					<li>
						<a data-toggle="modal" href="#hiringForm">Hiring</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 text-right">
				<div class="copyright">
					&copy; 2015 ITP Ventures
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal  enterpriseForm -->
<div class="modal fade" id="enterpriseForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Apply as Enterprise</h4>
			</div>
			<div class="form_enterprise_step_1">
				<form id="form_enterprise" action="form_enterprise.php" method="post">
					<div class="modal-body">
						
						<div class="form-horizontal">
							<div class="form-group">
								<label for="enterprise_name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_enterprise_validation" name="enterprise_name" id="enterprise_name" placeholder="Please enter your name">
								</div>
							</div>
							<div class="form-group">
								<label for="enterprise_title" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_enterprise_validation" name="enterprise_title" id="enterprise_title" placeholder="Please enter your title">
								</div>
							</div>
							<div class="form-group">
								<label for="enterprise_cname" class="col-sm-3 control-label">Company Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_enterprise_validation" name="enterprise_cname" id="enterprise_cname" placeholder="Please enter your company name">
								</div>
							</div>
							<div class="form-group">
								<label for="enterprise_email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control form_enterprise_validation" name="enterprise_email" id="enterprise_email" placeholder="Please enter your email">
								</div>
							</div>
							<div class="form-group">
								<label for="enterprise_phone" class="col-sm-3 control-label">Tel</label>
								<div class="col-sm-9">
									<input type="phone" class="form-control form_enterprise_validation" name="enterprise_phone" id="enterprise_phone" placeholder="Please enter your phone">
								</div>
							</div>
							
							<div class="form-group">
								<label style="text-align: left;" for="enterprise_question" class="col-sm-offset-3 col-sm-9 control-label">What you are looking for in a Corporate Intrapreneur Accelerator?</label>
								<div class=" col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control form_enterprise_validation" name="enterprise_question" id="enterprise_question"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
						<button type="submit" class="form_enterprise_submit disabled btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
					</div>
				</form>
			</div>
			<div class="form_enterprise_step_2" style="display: none;">
				<div class="modal-body">
					Message sent!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-sm-12" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal  EntrepreneurForm -->
<div class="modal fade" id="entrepreneurForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Apply as Entrepreneur</h4>
			</div>
			<div class="form_entrepreneur_step_1">
				<form id="form_entrepreneur" action="form_entrepreneur.php" method="post">
					<div class="modal-body">
						
						<div class="form-horizontal">
							<div class="form-group">
								<label for="entrepreneur_name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_entrepreneur_validation" name="entrepreneur_name" id="entrepreneur_name" placeholder="Please enter your name">
								</div>
							</div>
							<div class="form-group">
								<label for="entrepreneur_title" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_entrepreneur_validation" name="entrepreneur_title" id="entrepreneur_title" placeholder="Please enter your title">
								</div>
							</div>
							<div class="form-group">
								<label for="entrepreneur_cname" class="col-sm-3 control-label">Company Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_entrepreneur_validation" name="entrepreneur_cname" id="entrepreneur_cname" placeholder="Please enter your company name">
								</div>
							</div>
							<div class="form-group">
								<label for="entrepreneur_email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control form_entrepreneur_validation" name="entrepreneur_email" id="entrepreneur_email" placeholder="Please enter your email">
								</div>
							</div>
							<div class="form-group">
								<label for="entrepreneur_phone" class="col-sm-3 control-label">Tel</label>
								<div class="col-sm-9">
									<input type="phone" class="form-control form_entrepreneur_validation" name="entrepreneur_phone" id="entrepreneur_phone" placeholder="Please enter your phone">
								</div>
							</div>
							
							<div class="form-group">
								<label for="entrepreneur_list" style="text-align: left" class=" col-sm-offset-3 col-sm-9 control-label">List of startups you have led or co-led</label>
								<div class=" col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control form_entrepreneur_validation" name="entrepreneur_list" id="entrepreneur_list"></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="entrepreneur_mentor" class="" name="entrepreneur_mentor" value="1" type="checkbox"> Are you interested in participating as a Mentor of ITP Ventures?
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="entrepreneur_demo" class="" name="entrepreneur_demo" value="1" type="checkbox"> Are you interested in attending an ITP Ventures Demo Day?
										</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="entrepreneur_comments" style="text-align: left" class="col-sm-offset-3 col-sm-9 control-label">Comments</label>
								<div class="col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control form_entrepreneur_validation" name="entrepreneur_comments" id="entrepreneur_comments"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
						<button type="submit" class="btn form_entrepreneur_submit disabled col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
					</div>
				</form>
			</div>
			<div class="form_entrepreneur_step_2" style="display: none;">
				<div class="modal-body">
					Message sent!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-sm-12" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal  angelForm -->
<div class="modal fade" id="angelForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Apply as Angel</h4>
			</div>
			<div class="form_angel_step_1">
				<form id="form_angel" action="form_angel.php" method="post">
					<div class="modal-body">
						
						<div class="form-horizontal">
							<div class="form-group">
								<label for="angel_name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_angel_validation" name="angel_name" id="angel_name" placeholder="Please enter your name">
								</div>
							</div>
							<div class="form-group">
								<label for="angel_title" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_angel_validation" name="angel_title" id="angel_title" placeholder="Please enter your title">
								</div>
							</div>
							<div class="form-group">
								<label for="angel_cname" class="col-sm-3 control-label">Company Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_angel_validation" name="angel_cname" id="angel_cname" placeholder="Please enter your company name">
								</div>
							</div>
							<div class="form-group">
								<label for="angel_email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control form_angel_validation" name="angel_email" id="angel_email" placeholder="Please enter your email">
								</div>
							</div>
							<div class="form-group">
								<label for="angel_phone" class="col-sm-3 control-label">Tel</label>
								<div class="col-sm-9">
									<input type="phone" class="form-control form_angel_validation" name="angel_phone" id="angel_phone" placeholder="Please enter your phone">
								</div>
							</div>
							
							<div class="form-group">
								<label style="text-align: left" for="angel_list" class="control-label col-sm-offset-3 col-sm-9">List of startups you have invested in at an early stage</label>
								<div class="col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control form_angel_validation" name="angel_list" id="angel_list"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="entrepreneur_mentor" name="entrepreneur_mentor" value="1" type="checkbox"> Are you interested in participating as a Mentor of ITP Ventures?
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="entrepreneur_demo" name="entrepreneur_demo" value="1" type="checkbox"> Are you interested in attending an ITP Ventures Demo Day?
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label style="text-align: left" for="entrepreneur_comments" class="control-label col-sm-offset-3 col-sm-9">Comments</label>
								<div class="col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control" name="entrepreneur_comments" id="entrepreneur_comments"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
						<button type="submit" class="form_angel_submit disabled btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
					</div>
				</form>
			</div>
			<div class="form_angel_step_2" style="display: none;">
				<div class="modal-body">
					Message sent!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-sm-12" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal  vcForm -->
<div class="modal fade" id="vcForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Apply as VC</h4>
			</div>
			<div class="form_vc_step_1">
				<form id="form_vc" action="form_vc.php" method="post">
					<div class="modal-body">
						
						<div class="form-horizontal">
							<div class="form-group">
								<label for="vc_name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_vc_validation" name="vc_name" id="vc_name" placeholder="Please enter your name">
								</div>
							</div>
							<div class="form-group">
								<label for="vc_title" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_vc_validation" name="vc_title" id="vc_title" placeholder="Please enter your title">
								</div>
							</div>
							<div class="form-group">
								<label for="vc_cname" class="col-sm-3 control-label">Company Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_vc_validation" name="vc_cname" id="vc_cname" placeholder="Please enter your company name">
								</div>
							</div>
							<div class="form-group">
								<label for="vc_email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control form_vc_validation" name="vc_email" id="vc_email" placeholder="Please enter your email">
								</div>
							</div>
							<div class="form-group">
								<label for="vc_phone" class="col-sm-3 control-label">Tel</label>
								<div class="col-sm-9">
									<input type="phone" class="form-control form_vc_validation" name="vc_phone" id="vc_phone" placeholder="Please enter your phone">
								</div>
							</div>
							<div class="form-group">
								<label style="text-align: left" for="vc_ifocus" class="control-label col-sm-offset-3 col-sm-9">Investment focus of your latest fund</label>
								<div class="col-sm-offset-3 col-sm-9">
									<select class="form-control form_vc_validation" id="vc_ifocus" name="vc_ifocus">
										<option disabled selected>
											Select option
										</option>
										<option value="seed">
											Seed
										</option>
										<option value="early_stae">
											Early Stage
										</option>
										<option value="growth">
											Growth
										</option>
										<option value="late_stage">
											Late Stage
										</option>
										<option value="all_stages">
											All Stages
										</option>
									</select>
									
								</div>
							</div>
							
							<div class="form-group">
								<label style="text-align: left" for="vc_list" class="control-label col-sm-offset-3 col-sm-9">List of startups you have invested in at an early stage</label>
								<div class="col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control"  name="vc_list" id="vc_list"></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="vc_mentor" name="vc_mentor" value="1" type="checkbox"> Are you interested in participating as a Mentor of ITP Ventures?
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="vc_demo" name="vc_demo" value="1" type="checkbox"> Are you interested in attending an ITP Ventures Demo Day?
										</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label style="text-align: left" for="vc_comments" class="col-sm-offset-3 col-sm-9 control-label">Comments</label>
								<div class="col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control" name="vc_comments" id="vc_comments"></textarea>
								</div>
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
						<button type="submit" class="btn form_vc_submit disabled col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
					</div>
				</form>
			</div>
			<div class="form_vc_step_2" style="display: none;">
				<div class="modal-body">
					Message sent!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-sm-12" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal  contact -->
<div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Contact us</h4>
			</div>
			<div class="form_contact_step_1">
				<form id="form_contact" action="form_contact.php" method="post">
					<div class="modal-body">
						<div class="form-horizontal">
							<div class="form-group">
								<label for="contact_name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_contact_validation" name="contact_name" id="contact_name" placeholder="Please enter your name">
								</div>
							</div>
							<div class="form-group">
								<label for="contact_email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control form_contact_validation" name="contact_email" id="contact_email" placeholder="Please enter your email">
								</div>
							</div>
							<div class="form-group">
								<label for="contact_phone" class="col-sm-3 control-label">Tel</label>
								<div class="col-sm-9">
									<input type="phone" class="form-control form_contact_validation" name="contact_phone" id="contact_phone" placeholder="Please enter your phone">
								</div>
							</div>
							
							<div class="form-group">
								<label for="contact_comments" class="control-label col-sm-3">Comments</label>
								<div class="col-sm-9">
									<textarea placeholder="" class="form-control" name="contact_comments" id="contact_comments"></textarea>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
							<button type="submit" class="form_contact_submit disabled btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
						</div>
						
					</div>
				</form>
			</div>
			<div class="form_contact_step_2" style="display: none;">
				<div class="modal-body">
					Message sent!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-sm-12" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal  Hiring -->
<div class="modal fade" id="hiringForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">We are hiring!</h4>
			</div>
			<div class="form_hiring_step_1">
				<form id="form_hiring" action="form_hiring.php" method="post">
					<div class="modal-body">
						<div class="form-horizontal">
							<div class="form-group">
								<label for="hiring_name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_hiring_validation" name="hiring_name" id="hiring_name" placeholder="Please enter your name">
								</div>
							</div>
							<div class="form-group">
								<label for="hiring_email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control form_hiring_validation" name="hiring_email" id="hiring_email" placeholder="Please enter your email">
								</div>
							</div>
							<div class="form-group">
								<label for="hiring_phone" class="col-sm-3 control-label">Tel</label>
								<div class="col-sm-9">
									<input type="phone" class="form-control form_hiring_validation" name="hiring_phone" id="hiring_phone" placeholder="Please enter your phone">
								</div>
							</div>
							<div class="form-group">
								<label for="hiring_cv" class="col-sm-3 control-label">Upload CV</label>
								<div class="col-sm-9">
									<input type="file" class="form-control form_hiring_validation" name="hiring_cv" id="hiring_cv" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="hiring_comments" class="control-label col-sm-3">Comments</label>
								<div class="col-sm-9">
									<textarea placeholder="" class="form-control" name="hiring_comments" id="hiring_comments"></textarea>
								</div>
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
						<button type="submit" class="form_hiring_submit disabled btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
					</div>
				</form>
			</div>
			<div class="form_hiring_step_2" style="display: none;">
				<div class="modal-body">
					Message sent!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-sm-12" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal  MentorForm -->
<div class="modal fade" id="mentorForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Apply to become a Mentor</h4>
			</div>
			<div class="form_mentor_step_1">
				<form id="form_mentor" action="form_mentor.php" method="post">
					<div class="modal-body">
						
						<div class="form-horizontal">
							<div class="form-group">
								<label for="mentor_name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_mentor_validation" name="mentor_name" id="mentor_name" placeholder="Please enter your name">
								</div>
							</div>
							<div class="form-group">
								<label for="mentor_title" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_mentor_validation" name="mentor_title" id="mentor_title" placeholder="Please enter your title">
								</div>
							</div>
							<div class="form-group">
								<label for="mentor_cname" class="col-sm-3 control-label">Company Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_mentor_validation" name="mentor_cname" id="mentor_cname" placeholder="Please enter your company name">
								</div>
							</div>
							<div class="form-group">
								<label for="mentor_email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control form_mentor_validation" name="mentor_email" id="mentor_email" placeholder="Please enter your email">
								</div>
							</div>
							<div class="form-group">
								<label for="mentor_phone" class="col-sm-3 control-label">Tel</label>
								<div class="col-sm-9">
									<input type="phone" class="form-control form_mentor_validation" name="mentor_phone" id="mentor_phone" placeholder="Please enter your phone">
								</div>
							</div>
							
							<div class="form-group">
								<label for="mentor_list" style="text-align: left" class=" col-sm-offset-3 col-sm-9 control-label">List of early stage startups you have founded, co-founded or invested in</label>
								<div class=" col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control form_mentor_validation" name="mentor_list" id="mentor_list"></textarea>
								</div>
							</div>
<!--							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="mentor_mentor" class="" name="mentor_mentor" value="1" type="checkbox"> Are you interested in participating as a Mentor of ITP Ventures?
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="mentor_demo" class="" name="mentor_demo" value="1" type="checkbox"> Are you interested in attending an ITP Ventures Demo Day?
										</label>
									</div>
								</div>
							</div>
-->
							<div class="form-group">
								<label for="mentor_comments" style="text-align: left" class="col-sm-offset-3 col-sm-9 control-label">Comments</label>
								<div class="col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control form_mentor_validation" name="mentor_comments" id="mentor_comments"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
						<button type="submit" class="btn form_mentor_submit disabled col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
					</div>
				</form>
			</div>
			<div class="form_mentor_step_2" style="display: none;">
				<div class="modal-body">
					Message sent!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-sm-12" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal  MentorForm -->
<div class="modal fade" id="demoForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Apply to Attend a Demo Day</h4>
			</div>
			<div class="form_demo_step_1">
				<form id="form_demo" action="form_demo.php" method="post">
					<div class="modal-body">
						
						<div class="form-horizontal">
							<div class="form-group">
								<label for="demo_name" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_demo_validation" name="demo_name" id="demo_name" placeholder="Please enter your name">
								</div>
							</div>
							<div class="form-group">
								<label for="demo_title" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_demo_validation" name="demo_title" id="demo_title" placeholder="Please enter your title">
								</div>
							</div>
							<div class="form-group">
								<label for="demo_cname" class="col-sm-3 control-label">Company Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control form_demo_validation" name="demo_cname" id="demo_cname" placeholder="Please enter your company name">
								</div>
							</div>
							<div class="form-group">
								<label for="demo_email" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control form_demo_validation" name="demo_email" id="demo_email" placeholder="Please enter your email">
								</div>
							</div>
							<div class="form-group">
								<label for="demo_phone" class="col-sm-3 control-label">Tel</label>
								<div class="col-sm-9">
									<input type="phone" class="form-control form_demo_validation" name="demo_phone" id="demo_phone" placeholder="Please enter your phone">
								</div>
							</div>
							
							<div class="form-group">
								<label for="demo_list" style="text-align: left" class=" col-sm-offset-3 col-sm-9 control-label">List of locations you might be interested in attending a Demo Day in</label>
								<div class=" col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control form_demo_validation" name="demo_list" id="demo_list"></textarea>
								</div>
							</div>
<!--							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="demo_demo" class="" name="demo_mentor" value="1" type="checkbox"> Are you interested in participating as a Mentor of ITP Ventures?
										</label>
									</div>
								</div>
							</div>
-->							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
									<div class="checkbox">
										<label>
											<input id="demo_demo" class="" name="demo_demo" value="1" type="checkbox"> Would you be interested in attending a "Virtual Demo Day" via remote hookup? Yes No
										</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="demo_comments" style="text-align: left" class="col-sm-offset-3 col-sm-9 control-label">Comments</label>
								<div class="col-sm-offset-3 col-sm-9">
									<textarea placeholder="" class="form-control form_demo_validation" name="demo_comments" id="demo_comments"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
						<button type="submit" class="btn form_demo_submit disabled col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
					</div>
				</form>
			</div>
			<div class="form_demo_step_2" style="display: none;">
				<div class="modal-body">
					Message sent!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default col-sm-12" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>
</div>









<script src="asset/js/jquery-2.1.3.min.js"></script>
<script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>-->
<script src="asset/bootstrap/js/bootstrap.min.js"></script>
<script src="asset/js/owl.carousel.min.js"></script>
<script src="asset/js/lightbox.min.js"></script>
<script src="asset/js/count-to.js"></script>
<script src="asset/js/styleswitcher.js"></script>
<script src="asset/js/jquery.nicescroll.min.js"></script>
<script src="asset/js/map.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!--<script src="asset/js/script.js"></script>-->
<script>
$(document).ready(function(){
	$("body.home").css('min-height', $(window).height());
});


function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

 function validate_enterpriseForm()
  {
    //console.log('xxx');
    $('.form_enterprise_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_enterprise_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#enterprise_email").val())) {
      $('.form_enterprise_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }


 function validate_entrepreneurForm()
  {
    //console.log('xxx');
    $('.form_entrepreneur_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_entrepreneur_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#entrepreneur_email").val())) {
      $('.form_entrepreneur_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }



 function validate_angelForm()
  {
    //console.log('xxx');
    $('.form_angel_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_angel_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#angel_email").val())) {
      $('.form_angel_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }



 function validate_vcForm()
  {
    //console.log('xxx');
    $('.form_vc_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_vc_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#vc_email").val())) {
      $('.form_vc_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }

 function validate_contactForm()
  {
    //console.log('xxx');
    $('.form_contact_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_contact_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#contact_email").val())) {
      $('.form_contact_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }

 function validate_hiringForm()
  {
    //console.log('xxx');
    $('.form_hiring_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_hiring_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#hiring_email").val()) && readURL(document.getElementById('hiring_cv')) {
      $('.form_hiring_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }

function readURL(input) 
{
	if (input.files && input.files[0]) 
    {
        // var reader = new FileReader();
         

        // reader.readAsDataURL(input.files[0]);  
          if (input.files[0].name.split('.')[input.files[0].name.split('.').length - 1]!='pdf' && input.files[0].name.split('.')[input.files[0].name.split('.').length - 1]!='doc' && input.files[0].name.split('.')[input.files[0].name.split('.').length - 1]!='docx')
          {
              return false;
          }

          return true;
    }
       
} 
         

 
  
 function validate_resourcesForm()
  {
    //console.log('xxx');
    $('.form_resources_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_resources_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#resources_email").val())) {
      $('.form_resources_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }

 function validate_mentorForm()
  {
    //console.log('xxx');
    $('.form_mentor_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_mentor_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#mentor_email").val())) {
      $('.form_mentor_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }

function validate_demoForm()
  {
    //console.log('xxx');
    $('.form_demo_submit').addClass('disabled');
    //$('.important_lm').show();
    var all_good=true;
    
    $.each($('.form_demo_validation'), function()
    {
        if ($(this).val()=='')
        {
          all_good=false;
          return false;
        }
    })

    if (all_good && isValidEmailAddress($("#demo_email").val())) {
      $('.form_demo_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }


$(document).ready(function(){
 
$(function() {
  $('a.anchor').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});



// ENTERPRISE FORM 

      $('#form_enterprise').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_enterprise button[type="submit"]').html();
            $('#form_enterprise .form_enterprise_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_enterprise.php',
             data: $('#form_enterprise').serialize()})
                .done(function() {
                      $('#form_enterprise').get(0).reset();
                      $('.form_enterprise_step_1').hide();
                      $('.form_enterprise_step_2').show();
                });

      });

      $('#form_enterprise').on('hidden.bs.modal', function (e) {
            $('.form_enterprise_step_2').hide();
            $('.form_enterprise_step_1').show();
      });



  $('.form_enterprise_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_enterpriseForm();
  });

 

  $('.form_enterprise_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_enterprise').submit();

  });


// END OF ENTERPRISE FORM



// ENTERPRENEUR FORM

      $('#form_entrepreneur').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_entrepreneur button[type="submit"]').html();
            $('#form_entrepreneur .form_entrepreneur_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_entrepreneur.php',
             data: $('#form_entrepreneur').serialize()})
                .done(function() {
                      $('#form_entrepreneur').get(0).reset();
                      $('.form_entrepreneur_step_1').hide();
                      $('.form_entrepreneur_step_2').show();
                });

      });

      $('#form_entrepreneur').on('hidden.bs.modal', function (e) {
            $('.form_entrepreneur_step_2').hide();
            $('.form_entrepreneur_step_1').show();
      });



  $('.form_entrepreneur_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_entrepreneurForm();
  });

 

  $('.form_entrepreneur_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_entrepreneur').submit();

  });

// END ENTERPRENEUR FORM



// ANGGEL FORM

      $('#form_angel').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_angel button[type="submit"]').html();
            $('#form_angel .form_angel_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_angel.php',
             data: $('#form_angel').serialize()})
                .done(function() {
                      $('#form_angel').get(0).reset();
                      $('.form_angel_step_1').hide();
                      $('.form_angel_step_2').show();
                });

      });

      $('#form_angel').on('hidden.bs.modal', function (e) {
            $('.form_angel_step_2').hide();
            $('.form_angel_step_1').show();
      });



  $('.form_angel_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_angelForm();
  });

 

  $('.form_angel_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_angel').submit();

  });

// END ANGGEL FORM

// VC FORM

      $('#form_vc').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_vc button[type="submit"]').html();
            $('#form_vc .form_vc_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_vc.php',
             data: $('#form_vc').serialize()})
                .done(function() {
                      $('#form_vc').get(0).reset();
                      $('.form_vc_step_1').hide();
                      $('.form_vc_step_2').show();
                });

      });

      $('#form_vc').on('hidden.bs.modal', function (e) {
            $('.form_vc_step_2').hide();
            $('.form_vc_step_1').show();
      });



  $('.form_vc_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_vcForm();
  });

 

  $('.form_vc_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_vc').submit();

  });

// END VC FORM


// CONTACT FORM

      $('#form_contact').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_contact button[type="submit"]').html();
            $('#form_contact .form_contact_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_contact.php',
             data: $('#form_contact').serialize()})
                .done(function() {
                      $('#form_contact').get(0).reset();
                      $('.form_contact_step_1').hide();
                      $('.form_contact_step_2').show();
                });

      });

      $('#form_contact').on('hidden.bs.modal', function (e) {
            $('.form_contact_step_2').hide();
            $('.form_contact_step_1').show();
      });



  $('.form_contact_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_contactForm();
  });

 

  $('.form_contact_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_contact').submit();

  });

// END CONTACT FORM


// HIRING FORM

      $('#form_hiring').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_hiring button[type="submit"]').html();
            $('#form_hiring .form_hiring_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_hiring.php',
             data: $('#form_hiring').serialize()})
                .done(function() {
                      $('#form_hiring').get(0).reset();
                      $('.form_hiring_step_1').hide();
                      $('.form_hiring_step_2').show();
                });

      });

      $('#form_hiring').on('hidden.bs.modal', function (e) {
            $('.form_hiring_step_2').hide();
            $('.form_hiring_step_1').show();
      });



  $('.form_hiring_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_hiringForm();
  });

 

  $('.form_hiring_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_hiring').submit();

  });

// END HIRING FORM





// RESOURCES FORM

      $('#form_resources').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_resources button[type="submit"]').html();
            $('#form_resources .form_resources_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_resources.php',
             data: $('#form_resources').serialize()})
                .done(function() {
                      $('#form_resources').get(0).reset();
                      $('.form_resources_step_1').hide();
                      $('.form_resources_step_2').show();
                });

      });

      $('#form_resources').on('hidden.bs.modal', function (e) {
            $('.form_resources_step_2').hide();
            $('.form_resources_step_1').show();
      });



  $('.form_resources_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_resourcesForm();
  });

 

  $('.form_resources_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_resources').submit();

  });

// END RESOURCES FORM



// MENTOR FORM

      $('#form_mentor').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_mentor button[type="submit"]').html();
            $('#form_mentor .form_mentor_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_mentor.php',
             data: $('#form_mentor').serialize()})
                .done(function() {
                      $('#form_mentor').get(0).reset();
                      $('.form_mentor_step_1').hide();
                      $('.form_mentor_step_2').show();
                });

      });

      $('#form_mentor').on('hidden.bs.modal', function (e) {
            $('.form_mentor_step_2').hide();
            $('.form_mentor_step_1').show();
      });



  $('.form_mentor_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_mentorForm();
  });

 

  $('.form_mentor_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_mentor').submit();

  });

// END MENTOR FORM



// demo FORM

      $('#form_demo').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form_demo button[type="submit"]').html();
            $('#form_demo .form_demo_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: 'form_demo.php',
             data: $('#form_demo').serialize()})
                .done(function() {
                      $('#form_demo').get(0).reset();
                      $('.form_demo_step_1').hide();
                      $('.form_demo_step_2').show();
                });

      });

      $('#form_demo').on('hidden.bs.modal', function (e) {
            $('.form_demo_step_2').hide();
            $('.form_demo_step_1').show();
      });



  $('.form_demo_validation').on('change keyup', function()
  {
    //console.log('dsdassda');
    validate_demoForm();
  });

 

  $('.form_demo_submit').on('click', function()
  {
    if ($(this).hasClass('disabled')) return;
    $('#form_demo').submit();

  });

// END demo FORM

});

</script>