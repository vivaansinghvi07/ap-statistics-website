<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 5 Notes
<?php endblock() ?>

<?php startblock('title') ?>
      Introduction to Sampling Distributions
<?php endblock() ?>

<?php startblock('notes') ?>
        <li>A&nbsp;<strong>parameter&nbsp;</strong>is a characteristic of a population, while a&nbsp;<strong>statistic</strong> is a characteristic of a sample
            <ul>
                <li>Often, statistics are used to estimate parameters</li>
                <li>A parameter would be \(\mu\), while the statistic would be \(\overline{x}\)
                    <ul>
                        <li>For a proportion, the parameter would be \(p\), while the statistic would be \(\hat{p}\)</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>&nbsp;When you have a dataset, you often need to take a sample of it</li>
        <li>If you take many repeated samples of the same size, and determine \(\overline{x}\) or \(\hat{p}\) from each one, and plot each value, you should end up with a <strong>sampling distribution</strong>
            <ul>
                <li>The concept of&nbsp;<strong>sampling variability&nbsp;</strong>states that one sample will probably differ from the next</li>
                <li>A&nbsp;<strong>statistic's variability</strong> is essentially the spread of the sampling distribution
                    <ul>
                        <li>Dependent on the sample size \(n\)</li>
                        <li>A larger sample size leads to a lower variability because the statistic is more likely to gravitate to the actual parameter</li>
                        <li><img class = "image" src = "../imgs/samplingdist.png"></li>
                    </ul>
                </li>
                <li>A sampling distribution is represented by a curve, with either \(\overline{x}\) or \(\hat{p}\) on the x-axis, with the frequency/probability of the value on the y-axis
                    <ul>
                        <li>Ideally, with a large sample size, should look like a normal distribution</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Sampling distributions can be described through their accuracy
            <ul>
                <li>We say a statistic is an&nbsp;<strong>unbiased estimator</strong> of a parameter if the statistic's sampling distribution's mean is equal to the parameter
                    <ul>
                        <li>Generally, the sample mean or proportion will be an unbiased estimator is the sample if taken properly</li>
                        <li>Things like the standard deviation, variance, or range will be <strong>biased estimators</strong>, which will tend to under or overestimate values
                            <ul>
                                <li>Therefore, to relate the standard deviation of a population to that of the sampling distribution, you will need to perform some operations which will be covered later on</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Larger sample sizes make the statistic more&nbsp;<strong>precise</strong>, regardless of&nbsp;<strong>accuracy</strong>
                    <ul>
                        <li><img class = "image" src = "../imgs/accvspres.png"></li>
                        <li><strong>Bias&nbsp;</strong>indicates constantly missing,&nbsp;<strong>accuracy&nbsp;</strong>means hitting near the target,&nbsp;<strong>precise&nbsp;</strong>means how close together the guesses are</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>A sampling distribution is not to be confused with the&nbsp;<strong>distribution of sampling data</strong>
            <ul>
                <li>This is just the distribution of data within one sample, while the sampling distribution is the distribution of the sample means / sample proportions</li>
            </ul>
        </li>
        <li>The following notes for this unit will discuss dealing with sampling distributions that have known population parameters.</li>
<?php endblock() ?>