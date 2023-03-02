<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 5 Notes
<?php endblock() ?>

<?php startblock('title') ?>
      Sample Distributions For Proportions
<?php endblock() ?>

<?php startblock('notes') ?>
        <li>A&nbsp;<strong>sample proportion</strong>, represented by \(\hat{p}\), represents a proportion (between 0 and 1) of the sample that meet a certain criteria
            <ul>
                <li>The percent of those who would choose blue over red in a sample of 50 people is an example of one</li>
            </ul>
        </li>
        <li>When you take many samples, and determine that sample proportion for each one, and then plot it on a graph (such as a histogram), you should get your&nbsp;<strong>sample distribution</strong>
            <ul>
                <li>For sake of discussion, lets define the sample size to be \(n\) and the counts of success in one sample \(X\)
                    <ul>
                        <li>\(\frac{X}{n}\) will yield the sample proportion - the proportion of successes in a sample</li>
                    </ul>
                </li>
                <li>Let's also call the population proportion  \(p\)</li>
                <li>For proportions, these sample distributions have several aspects which can be determined using given information
                    <ul>
                        <li><strong>Center:</strong> the center of a sample distribution for a proportion is simply equal to the parameter itself<br />
                            <ul>
                                <li>\(\mu_{\hat{p}} = p\)</li>
                                <li>This is only if the samples are random - \(\hat{p}\) must be an&nbsp;<strong>unbiased estimator</strong> of \(p\)</li>
                            </ul>
                        </li>
                        <li><strong>Spread:&nbsp;</strong>the <strong>standard deviation</strong>&nbsp;of a sample distribution is equal to \(\sqrt{\frac{p(1-p)}{n}}\)
                            <ul>
                                <li>This is only true given the&nbsp;<strong>10% Condition</strong>: the sample size must be less than one-tenth of the population size
                                    <ul>
                                        <li>If this is not given to you, you can make assumptions</li>
                                        <li>A sample size of 1000 for all American adults is obviously less than one-tenth of the population of American adults (we know there are more than 10000 American adults)</li>
                                    </ul>
                                </li>
                                <li>This value is represented by \(\sigma_{\hat{p}}\)</li>
                                <li>Recall that this is similar to that of the binomial distribution - all that is happening here is the division by \(n\), which, when inside the square root, becomes division by \(n^2\)</li>
                            </ul>
                        </li>
                        <li><strong>Shape:&nbsp;</strong>under certain conditions, the sampling distribution can be approximated to a normal curve. This is essential to statistics as you can perform many statistical tests and analyses on normal curves
                            <ul>
                                <li>This is only if the <strong>Large Counts Condition&nbsp;</strong>is met
                                    <ul>
                                        <li>\(n(p) \ge 10\) &nbsp; and &nbsp; \(n(1-p) \ge 10\)</li>
                                        <li>Essentially insures the sample size is large enough to avoid the sampling distribution becoming not normal</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>The key is that when you know that the distribution is normal, and you know the center and spread, you are able to make many forms of calculations. For example, you can find the probability that a sample mean is measured to be 1 standard deviation above the mean using&nbsp;<strong>normcdf()</strong> or similar calculations</li>
            </ul>
        </li>
<?php endblock() ?>