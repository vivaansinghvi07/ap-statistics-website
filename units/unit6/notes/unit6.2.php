<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
    Unit 6 Notes
<?php endblock()?>

<?php startblock('title') ?>
      Confidence Intervals for Proportions
<?php endblock()?>

<?php startblock('notes') ?>
        <li>When constructing a confidence interval for a proportion, you must check the <strong>conditions for inference</strong>
            <ul >
                <li>These are the same conditions as earlier:
                    <ol  style="list-style-type: decimal;">
                        <li>The sample must be randomly selected</li>
                        <li>The population must be more than 10 times the sample size (\(N \ge 10n)\)
                            <ul style="list-style-type: disc;">
                                <li>If this condition is violated, the calculated standard deviation will be higher than what it really is, creating confidence intervals that are wider than what they need to be</li>
                            </ul>
                        </li>
                        <li>The&nbsp;<strong>Large Counts Condition </strong>must be met:
                            <ul style="list-style-type: disc;">
                                <li>\(n\hat{p} \ge 10\)</li>
                                <li>\(n(1 - \hat{p}) \ge 10\)</li>
                                <li>This is essentially saying that the number of successes and the number of failures must be greater than or equal to 10</li>
                            </ul>
                        </li>
                    </ol>
                </li>
                <li>&nbsp;If these are met, your calculations are essentially statistically valid</li>
            </ul>
        </li>
        <li>The point estimate of the population proportion \(p\) is simply the sample proportion, \(\hat{p}\)
            <ul >
                <li>The standard deviation of the sampling distribution will be \(\sqrt{\frac{p(1 - p)}{n}}\)
                    <ul >
                        <li>However, since this will be unknown when making a confidence interval, we need to use a different value</li>
                        <li>We use the&nbsp;<strong>standard error of the statistic</strong>, which is \(SE_\hat{p} = \sqrt{\frac{\hat{p} (1 - \hat{p})}{n}}\)
                            <ul >
                                <li>Same thing as standard deviation, just use \(\hat{p}\) instead of \(p\)</li>
                                <li>We call it standard error when the value comes from the statistic</li>
                                <li>Additionally, the standard error of the statistic refers to the approximate standard deviation of the sampling distribution</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>To find the critical value, you can use a normal curve
            <ul >
                <li>When you visualize a confidence interval, the parts that are not filled in, the <strong>tails,&nbsp;</strong>will be outside of the area designated by the confidence level
                    <ul >
                        <li>Therefore, when the confidence level is 95%, one of the tails will have an area of 2.5%, as both tails and the body combined make 100%</li>
                    </ul>
                </li>
                <li><img class = "image" src = "../imgs/tail.png"></li>
                <li>Since the confidence interval will encompass all values within \(z\) standard deviations of the mean, you can simply find the value of \(z^*\) that allows you to be that many standard deviations away
                    <ul >
                        <li>Since the&nbsp;<strong>empirical rule</strong> states that about 95% of the data on a normal curve are within about 2 standard deviations from the mean, your critical value would be 2.</li>
                        <li>To find it with a calculator, you can use the function <strong>invNorm</strong><strong>(area: \(a\), \(\mu\): 0, \(\sigma\): 1)</strong>, where \(a\) is the area under one tail
                            <ul >
                                <li>Since \(a\) represents the area under one tail, it is equal to \(\frac{1 - c}{2}\), where \(c\) is the confidence level, given as a number between 0 and 1</li>
                                <li>This will return the negative version of your critical value; since you are doing a plus or minus operation, it doesn't really matter if you use the negative or positive</li>
                                <li>0 is \(\mu\): the mean of the <strong>standard normal distribution</strong>
                                    <ul >
                                        <li>1 is its standard deviation</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Therefore, the confidence interval to estimate a population proportion can be written as: $$ \text{interval} = \hat{p} \pm z^* \cdot \sqrt{\frac{\hat{p}(1 - \hat{p})}{n}} $$
            <ul >
                <li>\(n\) represents the sample size, \(\hat{p}\) represents the sample proportion, and \(z^*\) represents the critical value</li>
                <li>The process used to find this is called the <strong>one-sample z-interval</strong></li>
            </ul>
        </li>
        <li>There are also situations in which you need to find what confidence level or sample size will give you a certain margin of error
            <ul>
                <li>In this case, you can simply set up an equation: $$ \text{margin of error} = z^* \cdot \sqrt{\frac{\hat{p} ( 1 - \hat{p})}{n}} $$</li>
                <li>Then, just plug in your known values and solve
                    <ul>
                        <li>If solving for the confidence level, solve for the critical value you need, and plug its negative into a <strong>normcdf</strong> function with mean 0 and standard deviation 1
                            <ul>
                                <li>
                                  \(a\) = normcdf(value: \(z^*\), \(\mu\): 0, \(\sigma\): 1); \(a\) is the area of one tail
                                </li>
                            </ul>
                        </li>
                        <li>It will output the area of the normal curve that is less than the critical value, which represents one tail
                            <ul>
                                <li>To find the confidence level with just one value of the tail, multiply the area of the tail by two and subtract it from 1</li>
                                <li>If the tail's area is \(a\), you can do \(1 - 2a = c\), where \(c\) is the confidence level as a number between 0 and 1</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
<?php endblock()?>