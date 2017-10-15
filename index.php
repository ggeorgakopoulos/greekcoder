<?php include_once 'assets/includes/header.base.php'; ?>

<section class="section" id="section-aboutme">
    <div class="page-content-wrap">
        <div class="aboutme-top">
            <div class="profile-img" title="Yeah, that's me!"></div>
            <h1 class="aboutme-name">George Georgakopoulos</h1>
            <span>Web Developer and Aspiring Entrepreneur</span>
            <p>I fell in love with technology at an early age. In 2014 I coded my first website,
                since then, i got involved with many small projects (and some big ones) that helped me gain experience in web development.
                Today, I am an experienced web developer and an aspiring Entrepreneur who is planning on making the world a better place,
                by developing web applications that help people get their work done easier, connect with each other or have fun!
                <br>
                My ambition is to change the way people use and interact with technology!
            </p>
<!--            <div class="call-to-action">-->
<!--                <button class="btn btn-default btn-shadow ripple-effect" id="work-with-me"">Work with me</button>-->
<!--            </div>-->
        </div>

        <h1 class="section-title" style="margin: 0;"><i class="fa fa-cogs"></i> Skills</h1>

        <div class="aboutme-skills">
            <p><i class="fa fa-exclamation-circle"></i> The following chart is subjective, you are the one that can judge my skills based on my work!</p>
            <div class="skills-bar">
                <h1 class="skills-bar-title">Development Skills &nbsp; <i class="fa fa-laptop"></i></h1>
                <span class="skillname">HTML & CSS</span>
                <div class="progress">
                    <div class="current-progress" style="width: 75%;"></div>
                </div>

                <span class="skillname">Javascript</span>
                <div class="progress">
                    <div class="current-progress" style="width: 65%;"></div>

                </div>

                <span class="skillname">PHP</span>
                <div class="progress">
                    <div class="current-progress" style="width: 80%;"></div>
                </div>

                <span class="skillname">MySQL</span>
                <div class="progress">
                    <div class="current-progress" style="width: 60%;"></div>
                </div>
            </div>
            <div class="skills-bar">
                <h1 class="skills-bar-title">Other Skills &nbsp; <i class="fa fa-info-circle"></i></h1>

                <span class="skillname">Work Ethic</span>
                <div class="progress">
                    <div class="current-progress" style="width: 95%;"></div>
                </div>

                <span class="skillname">Creativity</span>
                <div class="progress">
                    <div class="current-progress" style="width: 100%;"></div>
                </div>
                <span class="skillname">Team work</span>
                <div class="progress">
                    <div class="current-progress" style="width: 75%;"></div>
                </div>

                <span class="skillname">Problem Solving</span>
                <div class="progress">
                    <div class="current-progress" style="width: 95%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
</section>

<section class="section" id="section-projects">
    <h1 class="section-title"><i class="fa fa-bullseye"></i> Projects</h1>
    <div class="page-content-wrap">
        <div class="projects-wrap">
            <a>
                <div class="project ripple-effect" tabindex="0" style="color: #fff; background-image: url(assets/img/design.svg); background-size: cover; background-color: #4285f4;">
                    <div class="project-head-wrapper">
                        <div class="project-title">My personal website <i class="fa fa-fort-awesome"></i></div>
                        <div class="project-desc">You are looking at it right now!</div>
                    </div>
                    <div class="project-date">20-06-2016</div>
                </div>
            </a>
            <a target="_blank" href="http://lepantorun.lepantorunners.gr">
                <div class="project ripple-effect" tabindex="0" style="color: #fff; background-image: url(assets/img/lepantorun.png); background-size: cover; background-color: #4285f4;">
                    <div class="project-head-wrapper">
                        <div class="project-title">Lepanto Run <i class="fa fa-clock-o"></i></div>
                        <div class="project-desc">Race Managment Service for a running event in Greece</div>
                    </div>
                    <div class="project-date">24-02-2017</div>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="section" id="section-contact">
    <h1 class="section-title"><i class="fa fa-envelope"></i> Contact</h1>
    <div class="page-content-wrap">
        <div class="contact-section">
            <form action="index.php" method="post">

                <div class="fields">
                    <div class="group">
                        <input type="text" name="name" id="name" required>
                        <span class="bar"></span>
                        <label>Full name (latin characters)</label>
                    </div>

                    <div class="group">
                        <input type="email" name="email" id="email" required>
                        <span class="bar"></span>
                        <label>Email Address</label>
                    </div>

                    <div class="group">
                        <input type="text" name="subject" id="subject" required>
                        <span class="bar"></span>
                        <label>Subject</label>
                    </div>

                    <div class="group">
                        <textarea name="content" id="content" cols="50" rows="2" placeholder="Content" required></textarea>
                        <span class="bar"></span>
                    </div>
                </div>

                <div class="fields-submit">
                    <div class="g-recaptcha" id="recapt" data-sitekey="6LeVliATAAAAAPaU3IF8it6qBBrZq44-y5PndcHk"></div>
                    <p style="color: rgba(0, 0, 0, 0.7)">I'll get in touch with you as soon as possible!</p>
                    <div class="group-submit">
                        <input type="button" onclick="send_email();" id="submit" value="send email" class="btn btn-default">
                    </div>
                    <div id="contact-msg"></div>
                </div>

            </form>
        </div>
    </div>

    <script src="<?php echo ABSPATH ?>assets/js/send_email.js" type="text/javascript"></script>
</section>
<?php include_once 'assets/includes/footer.base.php' ?>





