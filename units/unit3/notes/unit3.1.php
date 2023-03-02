<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 3 Notes
<?php endblock() ?>
<?php startblock('title') ?>
      Sampling Methods
<?php endblock() ?>
<?php startblock('notes') ?>
        <li>A&nbsp;<strong>population&nbsp;</strong>refers to the entire group of individuals you are regarding in a study<br />
            <ul>
                <li>A&nbsp;<strong>census&nbsp;</strong>collects data from the whole population</li>
            </ul>
        </li>
        <li>A&nbsp;<strong>sample&nbsp;</strong>is a mere subset of the population
            <ul>
                <li>A&nbsp;<strong>sample survey&nbsp;</strong>aims to describe a population using a sample of it
                    <ul>
                        <li>Can be an experiment, survey, observational study, etc</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><strong>Bias&nbsp;</strong>is when a study consistently under or overestimates a value in question</li>
        <li>There are many sampling types:&nbsp;
            <ul>
                <li>A&nbsp;<strong>convenience&nbsp;</strong>sample chooses individuals that are relatively easy to reach
                    <ul>
                        <li>May not fully represent the population</li>
                        <li>Example: A study on homework habits interviews the first 100 students that enter the school
                            <ul>
                                <li>Introduces bias: The early students may be the more studious ones</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>A&nbsp;<strong>voluntary response&nbsp;</strong>sample is another type with a large amount of bias: it involves having the study made available to the public, with anyone being able to respond and take part
                    <ul>
                        <li>Sort of like an invitation</li>
                        <li>Example: A survey hosted on an online website that anyone can access</li>
                    </ul>
                </li>
                <li>Taking a&nbsp;<strong>random&nbsp;</strong>sample helps avoid some of this bias
                    <ul>
                        <li>In a&nbsp;<strong>simple random sample (SRS),&nbsp;</strong>every group of size \(n\) has an equal chance of being chosen
                            <ul>
                                <li>Essentially, each individual is assigned a numerical label, and a random number generator is used to pick random people (generally without replacement)&nbsp;</li>
                            </ul>
                        </li>
                        <li>In a&nbsp;<strong>stratified random sample</strong>, the population is divided into groups,&nbsp;<strong>strata</strong>,&nbsp;that are similar
                            <ul>
                                <li><img class = "image" src = "../imgs/stratified.png"></li>
                                <li>Groups are different between each other, but similar within</li>
                                <li>An SRS is taken of each group to obtain the final sample</li>
                                <li>Example: If you need a sample of 80 students, you can stratify by grade and get 20 students from each grade
                                    <ul>
                                        <li>This helps guarantee the equal representation of grades</li>
                                        <li>Also, if there is a disproportionality in the amounts of students in each grade, you can adjust the number of people you get from each grade</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>In a&nbsp;<strong>cluster sample</strong>, a population is divided into&nbsp;<strong>clusters</strong>, that are supposed to be somewhat like a "mini-population"
                            <ul>
                                <li><img class = "image" src = "../imgs/cluster.png"></li>
                                <li>They are similar between each other, but different within</li>
                                <li>Example: If you need a sample of students, you can choose PE class, as they have students from all grade levels and academic levels</li>
                            </ul>
                        </li>
                        <li>The key difference between strata and clusters are that strata are based on information, while clusters are based on location
                            <ul>
                                <li>Strata are split by the sharing of a common trait among individuals
                                    <ul>
                                        <li>Also, you need to always take SRS's within the strata</li>
                                    </ul>
                                </li>
                                <li>Clusters are split by the opposite; the variation among the individuals' traits somewhat model the population</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                  Finally, a <strong>systematic random sample</strong> involves sampling one or more groups repetitively across constant intervals
                  <ul>
                    <li>At a concert, this would be sampling every fifth seat</li>
                  </ul>
                </li>
            </ul>
        </li>
    </ul>
<?php endblock() ?>