<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 3 Notes
<?php endblock() ?>
<?php startblock('title') ?>
Designing an Experiment
<?php endblock() ?>

<?php startblock('notes') ?>
        <li>An&nbsp;<strong>observational study</strong> observes individuals and measures variables of interest&nbsp;<strong>without influence</strong>
            <ul>
                <li>It is important to note that these&nbsp;<strong>CANNOT SHOW CAUSATION - ONLY ASSOCIATIONS</strong></li>
                <li>Includes survey, census, etc</li>
                <li>This is due to&nbsp;<strong>confounding</strong>
                    <ul>
                        <li>This is when two or more variables are associated in a way that makes their effect on a response variable indistinguishable&nbsp;</li>
                        <li>For example, if you intend to measure if one variable affects another, it is important to remember that there may be a third variable affecting them both</li>
                        <li>The variable that does the confounding is called a <strong>confounding</strong> <strong>variable&nbsp;</strong>
                            <ul>
                                <li>Generally one not considered in the experiment</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>An&nbsp;<strong>experiment</strong> is a study which imposes some treatment(s) on certain individuals
            <ul>
                <li>When making one, be careful to avoid any confounding possible
                    <ul>
                        <li>For example, if you are making a study about typing speed on new keyboards, make sure to take into account that some people with little experience typing may have different results than people with experience typing</li>
                    </ul>
                </li>
                <li>A&nbsp;<strong>treatment&nbsp;</strong>is a specific condition applied to the experimental units/subjects
                    <ul>
                        <li>Each treatment is a combination of the&nbsp;<strong>factors</strong> - explanatory variables being tested</li>
                    </ul>
                </li>
                <li><strong>Experimental units&nbsp;</strong>are the smallest collection of individuals in an experiment
                    <ul>
                        <li>Called&nbsp;<strong>subjects&nbsp;</strong>if they are people</li>
                        <li>Can be anything - plants, water samples, pens</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Good experimental design follows four essential principles
            <ul>
                <li><strong>Comparison:</strong> 2 or more treatments are being compared with one another</li>
                <li><strong>Random Assignment:&nbsp;</strong>Assigns the treatments to experimental units&nbsp;<strong>randomly</strong><strong></strong>
                    <ul>
                        <li>This helps minimize the effect of confounding variables since randomly selected groups will ideally represent the population as a whole</li>
                    </ul>
                </li>
                <li><strong>Control:&nbsp;</strong>Keep all other variables the same; only vary the one being tested</li>
                <li><strong>Replication:&nbsp;</strong>Have enough people for each treatment
                    <ul>
                        <li>Making your treatment groups large enough makes sure any result is not due to simple chance</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Experiments can be blinded:
            <ul>
                <li>In&nbsp;<strong>double-blind</strong> experiments, neither the data collector nor subjects are aware of the treatment being administered to them
                    <ul>
                        <li>For example, if you were testing the effectiveness of 2 versus 4 therapy sessions, it helps to:
                            <ul>
                                <li>Make the subject unaware of the number of their sessions, so that they don't behave differently</li>
                                <li>Make the therapist unaware, so that they don't attempt to "speed up" the process</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>In&nbsp;<strong>single-blind</strong> experiments, the subjects are unaware of the treatment
                    <ul>
                        <li>Very useful in studies involving placebo, so that the subjects do not know that certain pills don't do anything</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>There is also a technique called&nbsp;<strong>experimental blocking</strong>
            <ul>
                <li>Below is an diagram of blocking by grade level</li>
                <li><img class = "image" src = "../imgs/blocking.png"></li>
                <li>The participants in the experiment are split into groups based on a certain variables
                    <ul>
                        <li>In the previous example about typing, there could be one block with experienced typers and another with less experienced typers</li>
                    </ul>
                </li>
                <li>This tactic helps to decrease variation in the data and effectively minimize the effects of confounding variables</li>
                <li>When analyzing results, you first analyze data within each block, and then compare those analyses' results among each other</li>
            </ul>
        </li>
        <li>Finally, experiments can have a&nbsp;<strong>matched pairs&nbsp;</strong>design
            <ul>
                <li>Generally used when comparing two treatments</li>
                <li>One subject is given both treatments in random order, so the difference between treatments can be more effectively compared
                    <ul>
                        <li>You are eliminating confounding by looking at the individuals themselves</li>
                    </ul>
                </li>
                <li>Another way to conduct this is choosing two very similar units/subjects and randomly choosing who gets what treatment</li>
            </ul>
        </li>
<?php endblock() ?>