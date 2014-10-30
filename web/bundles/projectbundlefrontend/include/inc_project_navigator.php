<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo $view['router']->generate('projectbundle_front_end_homepage'); ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo $view['router']->generate('teacher'); ?>">Teacher</a>
                    </li>
                    <li>
                        <a href="<?php echo $view['router']->generate('parent'); ?>">Parent</a>
                    </li>
                    <li>
                        <a href="<?php echo $view['router']->generate('student_'); ?>">Student</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="<?php echo $view['router']->generate('sitemap'); ?>">Sitemap</a>
                            </li>
                            <li>
                                <a href="<?php echo $view['router']->generate('linkStatus'); ?>">Feedback</a>
                            </li>
                            <li>
                                <a href="<?php echo $view['router']->generate('contact'); ?>">Contact Us</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>