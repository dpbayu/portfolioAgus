<section id='about' class='section about-section border-d'>
    <div class='section-block about-block'>
        <div class='container-fluid'>
            <div class='section-header'>
                <h2>
                    I'm a <strong class='color'><?= $user['job'] ?></strong>
                </h2>
            </div>
            <div class='row'>
                <div class='col-md-4'>
                    <ul class='info-list'>
                        <li>
                            <strong>Name:</strong>
                            <span><?= $user['fullname']  ?></span>
                        </li>
                        <li>
                            <strong>Job:</strong>
                            <span><?= $user['type_job'] ?></span>
                        </li>
                        <li>
                            <?php
                                $birth_date = new DateTime($user['birth_date']);
                                $selisih = date_diff($birth_date, new DateTime());
                                $year = $selisih->y;
                            ?>
                            <strong>Age:</strong>
                            <span><?= $year. " Years " ?></span>
                        </li>
                        <li>
                            <strong>Residence:</strong>
                            <span><?= $user['residence'] ?></span>
                        </li>
                    </ul>
                </div>
                <div class='col-md-8'>
                    <div class='about-text'>
                        <p><?= $user['about_desc'] ?></p>
                    </div>
                    <div class='about-btns'>
                        <a href='admin/assets/file/<?= $user['pdf_cv'] ?>' target="_blank" class='btn-custom btn-color'>
                            Download Resume
                        </a>
                        <a href='#contact' class='btn-custom btn-color section-toggle' data-section='contact'>
                            Hire Me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class='section-block services-block'>
        <div class='container-fluid'>
            <div class='section-header'>
                <h2>My <strong class='color'>Services</strong></h2>
            </div>
            <div class='row d-flex justify-content-center'>
                <?php 
                $query_service = "SELECT * FROM tbl_service";
                $run_service = mysqli_query($db,$query_service);
                while ($service = mysqli_fetch_array($run_service)) {
                ?>
                <div class='col-md-4 mb-3 d-flex justify-content-center'>
                    <div class='service w-100'>
                        <div class='icon'>
                            <img src="admin/assets/img/<?= $service['img_service'] ?>" width="50%" alt="icon">
                        </div>
                        <div class='content'>
                            <h4><?= $service['title_service'] ?></h4>
                            <p><?= $service['desc_service'] ?></p>
                        </div>
                    </div>
                </div>
                <?php 
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Servince End -->
    <!-- Skill Start -->
    <div class='section-block skills-block'>
        <div class='container-fluid'>
            <div class='section-header'>
                <h2>
                    My <strong class='color'>Skills</strong>
                </h2>
            </div>
            <div class='row'>
                <?php 
                $query_skill = "SELECT * FROM tbl_skill";
                $run_skill = mysqli_query($db,$query_skill);
                while ($skill = mysqli_fetch_array($run_skill)){
                ?>
                <div class='col-md-6 mb-3'>
                    <div class='skill'>
                        <h4><?= $skill['skill_name'] ?></h4>
                        <div class='bar'>
                            <div class='percent' style='width:<?= $skill['skill_bar'] ?>%;'></div>
                        </div>
                    </div>
                </div>
                <?php 
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Skill End -->
</section>