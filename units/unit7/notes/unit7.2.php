<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
    Unit 7 Notes
<?php endblock() ?>

<?php startblock('title') ?>
    Significance Testing For Proportions
<?php endblock() ?>
    
<?php startblock('notes') ?>
        <li>The conditions for performing a significance test for proportions are as follows:
            <ul>
                <li><strong>Random Sample:</strong> The sample must be truly randomly chosen</li>
                <li><strong>Large Counts:</strong> Both \(np_0\) and \(n(1-p_0)\) must be greater than or equal to ten
                    <ul>
                        <li>Note the use of \(p_0\); this is the claimed probability</li>
                    </ul>
                </li>
                <li><strong>10% Condition:</strong> The population size \(N\) must be greater than or equal to ten times the sample size \(n\)</li>
            </ul>
        </li>
        <li>The test that is run is called a <strong>one-sample z-test&nbsp;</strong></li>
        <li>Essentially, you examine a sampling distribution for proportions&nbsp;<strong>based on the claim</strong>, and calculate a z-score for your sample
            <ul>
                <li>Therefore, your z-score is: $$ z = \frac{\hat{p} - \mu_\hat{p}}{\sqrt{\frac{p_0(1-p_0)}{n}}} $$
                    <ul>
                        <li>This is the formula for normally finding a z-score, with plugged in values
                            <ul>
                                <li>\(z = \frac{\hat{p} - \mu_\hat{p}}{\sigma_\hat{p}}\)</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Now, using your z-score, you can calculate area under the <strong>standard normal curve</strong>, given your chosen direction
                    <ul>
                        <li>Be careful to know which direction your alternate hypothesis points in
                            <ul>
                                <li>If your alternative hypothesis is a "greater than the claim" one, shade in the area above the score</li>
                                <li>If it is "less than the claim," shade in the area below the score</li>
                                <li>If it is two-sided, shade in the area far away from the score on both sides of the center</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>After finding area, you will be left with your&nbsp;<strong>p-value</strong>
                    <ul>
                        <li>By comparing this with your significance level, you are able to make good, statistically sound conclusions</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Confidence intervals are related to hypothesis tests
            <ul>
                <li>The confidence level for a normal confidence interval is equal to 1-\(a\) for a two-sided hypothesis test&nbsp;</li>
                <li>The interval also gives more information - it returns a set of plausible values with which you can make several statisical inferences</li>
            </ul>
        </li>

        <?php endblock() ?>