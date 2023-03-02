<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
    Unit 7 Notes
<?php endblock() ?>

<?php startblock('title') ?>
    Introduction to Significance Testing
<?php endblock() ?>
    
<?php startblock('notes') ?>
        <li>Often times in statistics, it is necessary to determine the truthfulness of someone else's claim&nbsp;
            <ul>
                <li>This is called&nbsp;<strong>hypothesis testing</strong></li>
            </ul>
        </li>
        <li>The&nbsp;<strong>null hypothesis</strong> \(H_0\) (pronounced H-nought) is testing against an&nbsp;<strong>alternate hypothesis</strong>
            <ul>
                <li>The&nbsp;<strong>null hypothesis&nbsp;</strong>is what the claim is&nbsp;
                    <ul>
                        <li>For example, a possible claim would be "the average Subway footlong is 12 inches in length"&nbsp;</li>
                        <li>Therefore, the hypothesis is that \(H_0: \mu = 12\)&nbsp;</li>
                    </ul>
                </li>
                <li>Now suppose you want to consider an&nbsp;<strong>alternate hypothesis</strong> \(H_a\)
                    <ul>
                        <li>For example, you could say "the average Subway footlong is less than 12 inches in length"
                            <ul>
                                <li>Then, your hypothesis would be \(H_a: \mu &lt; 12\)&nbsp;</li>
                            </ul>
                        </li>
                        <li>An alternate hypothesis can take many forms
                            <ul>
                                <li>The above one is called a <strong>one sided hypothesis</strong>
                                    <ul>
                                        <li>This is one in you're only testing for if a value is less than or greater than the claim</li>
                                    </ul>
                                </li>
                                <li>A&nbsp;<strong>two-sided hypothesis&nbsp;</strong>is when you are testing for if a value is&nbsp;<strong>different</strong> than the claim, in either direction
                                    <ul>
                                        <li>In the subway example, you wouldn't really care if the real mean length was greater than 12, so you would use a one sided hypothesis</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Suppose you created a sampling distribution using your claimed mean<br />
            <ul>
                <li>Now, examine the probability of a sample more extreme than or as extreme as the one taken
                    <ul>
                        <li>To do this, you need to determine a <strong>test statistic</strong>, which you use on the sampling distribution to find area</li>
                        <li>Extremity is relative to the sampling distribution's mean</li>
                        <li>In rare cases, you don't do this
                            <ul>
                                <li>For example, if your alternate hypothesis is that the true mean is greater than the claim, but your sample mean is less than the claim, then you would find the area greater than that point
                                    <ul>
                                        <li>Only if you have a one-sided test and under the special circumstance</li>
                                    </ul>
                                </li>
                                <li>The image below displays how you determine your areas</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><img class = "image" src = "../imgs/hypothesis.png">
                    <ul>
                        <li>As seen demonstrated here, for one-sided and two-sided tests</li>
                    </ul>
                </li>
                <li>If the probability is very small, you can infer that the claim is probably wrong
                    <ul>
                        <li>This probability is called the&nbsp;<strong>p-value</strong></li>
                        <li>If the <strong>p-value&nbsp;</strong>is less than the&nbsp;<strong>significance level&nbsp;</strong>(represented by \(\alpha\)), then you can say with statisical significance that the claim is false
                            <ul>
                                <li>A common significance level is \(\alpha = 0.05\)</li>
                                <li>If your sample is rarer than this, then you have statistically significant evidence</li>
                            </ul>
                        </li>
                        <li>When you have a two-sided test, you must multiply your resulting p-value by two, as it represents both the tails, on either side</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>In the following pages, we will go over how to conduct a hypothesis test for proportions and means</li>
<?php endblock() ?>