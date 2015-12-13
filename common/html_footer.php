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
					</div>
					<div class="form-group">
						<label for="enterprise_question" class="control-label">What you are looking for in a Corporate Intrapreneur Accelerator?</label>
						<div class="">
							<textarea placeholder="" class="form-control form_enterprise_validation" name="enterprise_question" id="enterprise_question"></textarea>
						</div>
					</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
				<button type="button" class="form_enterprise_submit disabled btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
			</div>
			</form>
			</div>
			<div class="form_enterprise_step_2" style="display: none;">
				<div class="modal-body">
						sadasdsad
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
			<div class="modal-body">
				<form >
					<div class="form-horizontal">
						<div class="form-group">
							<label for="entrepreneur_name" class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="entrepreneur_name" placeholder="Please enter your name">
							</div>
						</div>
						<div class="form-group">
							<label for="entrepreneur_title" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="entrepreneur_title" placeholder="Please enter your title">
							</div>
						</div>
						<div class="form-group">
							<label for="entrepreneur_cname" class="col-sm-3 control-label">Company Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="entrepreneur_cname" placeholder="Please enter your company name">
							</div>
						</div>
						<div class="form-group">
							<label for="entrepreneur_email" class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="entrepreneur_email" placeholder="Please enter your email">
							</div>
						</div>
						<div class="form-group">
							<label for="entrepreneur_phone" class="col-sm-3 control-label">Tel</label>
							<div class="col-sm-9">
								<input type="phone" class="form-control" id="entrepreneur_phone" placeholder="Please enter your phone">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="entrepreneur_list" class="control-label">List of startups you have led or co-led</label>
						<div class="">
							<textarea placeholder="" class="form-control"  id="entrepreneur_list"></textarea>
						</div>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input id="entrepreneur_mentor" name="entrepreneur_mentor" value="1" type="checkbox"> Are you interested in participating as a Mentor of ITP Ventures?
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input id="entrepreneur_demo" name="entrepreneur_demo" value="1" type="checkbox"> Are you interested in attending an ITP Ventures Demo Day?
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="entrepreneur_comments" class="control-label">Comments</label>
						<div class="">
							<textarea placeholder="" class="form-control"  id="entrepreneur_comments"></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
				<button type="button" class="btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
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
			<div class="modal-body">
				<form >
					<div class="form-horizontal">
						<div class="form-group">
							<label for="angel_name" class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="angel_name" placeholder="Please enter your name">
							</div>
						</div>
						<div class="form-group">
							<label for="angel_title" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="angel_title" placeholder="Please enter your title">
							</div>
						</div>
						<div class="form-group">
							<label for="angel_cname" class="col-sm-3 control-label">Company Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="angel_cname" placeholder="Please enter your company name">
							</div>
						</div>
						<div class="form-group">
							<label for="angel_email" class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="angel_email" placeholder="Please enter your email">
							</div>
						</div>
						<div class="form-group">
							<label for="angel_phone" class="col-sm-3 control-label">Tel</label>
							<div class="col-sm-9">
								<input type="phone" class="form-control" id="angel_phone" placeholder="Please enter your phone">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="angel_list" class="control-label">List of startups you have invested in at an early stage</label>
						<div class="">
							<textarea placeholder="" class="form-control"  id="angel_list"></textarea>
						</div>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input id="entrepreneur_mentor" name="entrepreneur_mentor" value="1" type="checkbox"> Are you interested in participating as a Mentor of ITP Ventures?
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input id="entrepreneur_demo" name="entrepreneur_demo" value="1" type="checkbox"> Are you interested in attending an ITP Ventures Demo Day?
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="entrepreneur_comments" class="control-label">Comments</label>
						<div class="">
							<textarea placeholder="" class="form-control"  id="entrepreneur_comments"></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
				<button type="button" class="btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
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
			<div class="modal-body">
				<form >
					<div class="form-horizontal">
						<div class="form-group">
							<label for="vc_name" class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="vc_name" placeholder="Please enter your name">
							</div>
						</div>
						<div class="form-group">
							<label for="vc_title" class="col-sm-3 control-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="vc_title" placeholder="Please enter your title">
							</div>
						</div>
						<div class="form-group">
							<label for="vc_cname" class="col-sm-3 control-label">Company Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="vc_cname" placeholder="Please enter your company name">
							</div>
						</div>
						<div class="form-group">
							<label for="vc_email" class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="vc_email" placeholder="Please enter your email">
							</div>
						</div>
						<div class="form-group">
							<label for="vc_phone" class="col-sm-3 control-label">Tel</label>
							<div class="col-sm-9">
								<input type="phone" class="form-control" id="vc_phone" placeholder="Please enter your phone">
							</div>
						</div>
						<div class="form-group">
							<label for="vc_ifocus" class="col-sm-3 control-label">Investment focus of your latest fund</label>
							<div class="col-sm-9">
								<select class="" id="vc_ifocus">
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
					</div>
					<div class="form-group">
						<label for="vc_list" class="control-label">List of startups you have invested in at an early stage</label>
						<div class="">
							<textarea placeholder="" class="form-control"  id="vc_list"></textarea>
						</div>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input id="vc_mentor" name="vc_mentor" value="1" type="checkbox"> Are you interested in participating as a Mentor of ITP Ventures?
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input id="vc_demo" name="vc_demo" value="1" type="checkbox"> Are you interested in attending an ITP Ventures Demo Day?
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="vc_comments" class="control-label">Comments</label>
						<div class="">
							<textarea placeholder="" class="form-control"  id="vc_comments"></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
				<button type="button" class="btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
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
			<div class="modal-body">
				<form >
					<div class="form-horizontal">
						<div class="form-group">
							<label for="contact_name" class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="contact_name" placeholder="Please enter your name">
							</div>
						</div>
						<div class="form-group">
							<label for="contact_email" class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="contact_email" placeholder="Please enter your email">
							</div>
						</div>
						<div class="form-group">
							<label for="contact_phone" class="col-sm-3 control-label">Tel</label>
							<div class="col-sm-9">
								<input type="phone" class="form-control" id="contact_phone" placeholder="Please enter your phone">
							</div>
						</div>
						
						<div class="form-group">
							<label for="contact_comments" class="control-label col-sm-3">Comments</label>
							<div class="col-sm-9">
								<textarea placeholder="" class="form-control"  id="contact_comments"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
				<button type="button" class="btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
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
				<h4 class="modal-title" id="myModalLabel">Contact us</h4>
			</div>
			<div class="modal-body">
				<form >
					<div class="form-horizontal">
						<div class="form-group">
							<label for="hiring_name" class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="hiring_name" placeholder="Please enter your name">
							</div>
						</div>
						<div class="form-group">
							<label for="hiring_email" class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="hiring_email" placeholder="Please enter your email">
							</div>
						</div>
						<div class="form-group">
							<label for="hiring_phone" class="col-sm-3 control-label">Tel</label>
							<div class="col-sm-9">
								<input type="phone" class="form-control" id="hiring_phone" placeholder="Please enter your phone">
							</div>
						</div>
						<div class="form-group">
							<label for="hiring_cv" class="col-sm-3 control-label">Upload CV</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" id="hiring_cv" placeholder="">
							</div>
						</div>						
						<div class="form-group">
							<label for="hiring_comments" class="control-label col-sm-3">Comments</label>
							<div class="col-sm-9">
								<textarea placeholder="" class="form-control"  id="hiring_comments"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default col-sm-3" data-dismiss="modal">Close</button>
				<button type="button" class="btn col-sm-6 col-sm-offset-3 pull-right btn-primary">Submit Form</button>
			</div>
		</div>
	</div>
</div>

<script src="asset/js/jquery-2.1.3.min.js"></script>
<script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
<script src="asset/bootstrap/js/bootstrap.min.js"></script>
<script src="asset/js/owl.carousel.min.js"></script>
<script src="asset/js/jquery.appear.js"></script>
<script src="asset/js/jquery.fitvids.js"></script>
<script src="asset/js/jquery.nicescroll.min.js"></script>
<script src="asset/js/lightbox.min.js"></script>
<script src="asset/js/count-to.js"></script>
<script src="asset/js/styleswitcher.js"></script>
<script src="asset/js/map.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="asset/js/script.js"></script>
<script>
$(document).ready(function(){
	$("body.home").css('min-height', $(window).height());
});


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

    if (all_good ) {
      $('.form_enterprise_submit').removeClass('disabled');
      //$('.important_lm').hide();
    }
  }

  
$(document).ready(function(){
 

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
});

</script>