<?php include 'common/html_head.php'; ?>
<head>
    <title>ITP Ventures :: Resources</title>
    <meta name="description" content="ITP Ventures">
    <meta name="tags" content="ITP Ventures">
    <?php include 'common/meta_head.php'; ?>
</head>
<body>
    <?php include 'common/main_menu.php'; ?>
    
    
    <!-- Start Header Section -->
    <div class="page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Resources</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about-section" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p>Are you interested in becoming an entrepreneur? Do you have special skills in programming and software development, or online marketing, or social media, or product management, or big data, or back office systems, or other areas where you think you could be an effective contributor and co-founder of an exciting startup?</p>
                    <p>Many of our Intrapreneur startups are looking for key skill sets to complement their team. Some of them are also looking for external resources such as SW development, legal, accounting etc. Let us know if you would like to be considered by one our exciting Intrapreneur startups!</p>
                </div>
                <div class="col-md-5">
            <div class="form_resources_step_1">
                <form id="form_resources" action="form_resources.php" method="post">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="resources_name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control form_resources_validation" name="resources_name" id="resources_name" placeholder="Please enter your name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resources_email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control form_resources_validation" name="resources_email" id="resources_email" placeholder="Please enter your email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resources_phone" class="col-sm-3 control-label">Tel</label>
                            <div class="col-sm-9">
                                <input type="phone" class="form-control form_resources_validation" name="resources_phone" id="resources_phone" placeholder="Please enter your phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resources_ifocus" class="col-sm-3 control-label">Interest</label>
                            <div class="col-sm-9">
                                <select class="form-control form_resources_validation" id="resources_ifocus" name="resources_ifocus">
                                    <option disabled selected>
                                        Select option
                                    </option>
                                    <option value="join_startup">
                                        I am interested in joining a startup
                                    </option>
                                    <option value="supply_startup">
                                        I am interested in supplying services to Intrapreneur Startups
                                    </option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="resources_comments" class="col-sm-3 control-label">Comments</label>
                            <div class="col-sm-9">
                                <textarea placeholder="" class="form-control" name="resources_ifocus resources_comments" id="resources_comments"></textarea>
                            </div>
                        </div>                  
                        <div class="form-group">      
                        <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="form_resources_submit disabled btn-block btn btn-primary">Submit</button>
                                </div>
                                </div>
                    </div>
                </form>
                </div>
            <div class="form_resources_step_2" style="display: none;">
                <div class="modal-body">
                    Message sent!
                </div>
            </div>

                </div>
            </div>
        </div>
    </section>

    
    
    
    
    <?php include 'common/html_footer.php'; ?>
    
</body>
</html>